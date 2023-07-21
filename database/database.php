<?php
class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "mymedicine";
    private $connection;

    public function __construct() {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->dbname);
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public function getConnection() {
        return $this->connection;
    }
}

    // Patient signup
    public function patientSignup($patientFirstName, $patientLastName, $patientEmail, $patientPassword, $patientPhoneNumber, $patientAddress, $patientGender, $patientDOB) {
        global $database; // Make the $database variable accessible inside the function
        try {
            $stmt = $database->getConnection()->prepare("INSERT INTO patients (patientFirstName, patientLastName, patientEmail, patientPassword, patientPhoneNumber, patientAddress, patientGender, patientDOB) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->execute([$patientFirstName, $patientLastName, $patientEmail, $patientPassword, $patientPhoneNumber, $patientAddress, $patientGender, $patientDOB]);
            return true; // Return true if the signup was successful
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }        
    }

    // Doctor signup
    public function doctorSignup($doctorFirstName, $doctorLastName, $doctorEmail, $doctorPassword, $doctorPhoneNumber, $doctorAddress, $doctorGender, $doctorDOB){
        try {
            $stmt = $this->connection->prepare("INSERT INTO doctors (doctorFirstName, doctorLastName, doctorEmail, doctorPassword, doctorPhoneNumber, doctorAddress, doctorGender, doctorDOB) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->execute([$doctorFirstName, $doctorLastName, $doctorEmail, $doctorPassword, $doctorPhoneNumber, $doctorAddress, $doctorGender, $doctorDOB]);
            return true; // Return true if the signup was successful
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }        
    }

    // Pharmacy signup
    public function pharmacySignup($pharmacyName, $pharmacyEmail, $pharmacyPassword, $pharmacyPhoneNumber, $pharmacyAddress){
        try {
            $stmt = $this->connection->prepare("INSERT INTO pharmacy (pharmacyName, pharmacyEmail, pharmacyPassword, pharmacyPhoneNumber, pharmacyAddress) VALUES (?, ?, ?, ?, ?)");
            $stmt->execute([$pharmacyName, $pharmacyEmail, $pharmacyPassword, $pharmacyPhoneNumber, $pharmacyAddress]);
            return true; // Return true if the signup was successful
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }        
    }

    //Login using ID and password for patients
    // Checking whether a patient exists and confirming their password
    function patientLogin($ID, $patientPassword){
        //Prepare statement
        $stmt = $this->connection->prepare("SELECT patientPassword FROM patients WHERE ID = :ID");
        $stmt->bindParam(':ID', $ID);

        //Execute statement
        $stmt->execute();

        //Fetch the result
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        //Check if the password matches
        if($result['patientPassword'] === $patientPassword){
            return true;
        } else {
            return false;
        }
    }

    //Login using ID and password for patients
    public function adminLogin($ID, $password)
    {
        //Prepare statement
        $stmt = $this->connection->prepare("SELECT adminPassword FROM admins WHERE ID = :ID");
        $stmt->bindParam(':ID', $ID);

        //Execute statement
        $stmt->execute();

        //Fetch the result
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        //Check if the password matches
        if($result['adminPassword'] === $password){
            return true;
        } else {
            return false;
        } 
    }

    // Login using ID and password for doctors
    public function doctorLogin($ID, $password)
    {
        //Prepare statement
        $stmt = $this->connection->prepare("SELECT doctorPassword FROM doctors WHERE ID = :ID");
        $stmt->bindParam(':ID', $ID);

        //Execute statement
        $stmt->execute();

        //Fetch the result
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        //Check if the password matches
        if($result['doctorPassword'] === $password){
            return true;
        } else {
            return false;
        }       
    }

    //Login using ID and password for pharmaceutical companies
    public function pharmaceuticalcompanyLogin($ID, $password)
    {
        //Prepare statement
        $stmt = $this->connection->prepare("SELECT companyPassword FROM companies WHERE ID = :ID");
        $stmt->bindParam(':ID', $ID);

        //Execute statement
        $stmt->execute();

        //Fetch the result
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        //Check if the password matches
        if($result['companyPassword'] === $password){
            return true;
        } else {
            return false;
        }    
    }

    //Login using ID and password for pharmacies
    public function pharmacyLogin($ID, $password)
    {
        //Prepare statement
        $stmt = $this->connection->prepare("SELECT pharmacyPassword FROM pharmacies WHERE ID = :ID");
        $stmt->bindParam(':ID', $ID);

        //Execute statement
        $stmt->execute();

        //Fetch the result
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        //Check if the password matches
        if($result['pharmacyPassword'] === $password){
            return true;
        } else {
            return false;
        }         
    }

    //Login using ID and password for staff
    public function staffLogin($staffno, $password)
    {
        //Prepare statement
        $stmt = $this->connection->prepare("SELECT staffPassword FROM staff WHERE ID = :ID");
        $stmt->bindParam(':ID', $ID);

        //Execute statement
        $stmt->execute();

        //Fetch the result
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        //Check if the password matches
        if($result['staffPassword'] === $password){
            return true;
        } else {
            return false;
        }        
    }




    // These are the added functions for the project

    // get total number of enities in a table
    function getTotalUsersByEntity($entity){
        try {
            $stmt = $this->connection->prepare("SELECT COUNT(*) FROM $entity ");
            $stmt->execute();
            $result = $stmt->fetch();
            return $result[0];
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }        
    }

    // get all drugs
    function getAllDrugs($start_index, $results_per_page){
        try {
            $stmt = $this->connection->prepare("SELECT * FROM drugs LIMIT $start_index, $results_per_page");
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }        
    }

    // Dispense drug
    function dispense($drugID){
        // Prepare statement
        $stmt = $this->connection->prepare("UPDATE drugs SET drugQuantity = drugQuantity - 1 WHERE ID = :ID");
        $stmt->bindParam(':ID', $drugID);
    
        // Execute statement
        $stmt->execute();
    
        // Check if the quantity was reduced successfully
        if ($stmt->rowCount() == 0) {
            // The drug quantity was not reduced, so return false
            return false;
        }
    
        // Fetch the patientID and doctorID from prescriptions table
        $stmt = $this->connection->prepare("SELECT patientID, doctorID FROM prescriptions WHERE drugID = :drugID");
        $stmt->bindParam(':drugID', $drugID);
    
        // Execute statement
        $stmt->execute();
    
        // Fetch the result
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
        // Insert into dispensed table
        $stmt = $this->connection->prepare("INSERT INTO dispensed (patientID, doctorID, drugID) VALUES (:patientID, :doctorID, :drugID)");
        $stmt->bindParam(':patientID', $result['patientID'], PDO::PARAM_INT);
        $stmt->bindParam(':doctorID', $result['doctorID'], PDO::PARAM_INT);
        $stmt->bindParam(':drugID', $drugID);
    
        // Execute statement
        $stmt->execute();
    
        // Return true
        return true;
    }

    function getPatientByID($ID){
        $stmt = $this->connection->prepare("SELECT * FROM patients WHERE ID = :ID");
        $stmt->bindParam(':ID', $ID);
    
        // Execute statement
        $stmt->execute();
    
        // Fetch data
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    function addPrescription($patientID, $doctorID, $prescriptionDate, $prescriptionDuration, $prescriptionNotes){
        //Prepare statement
        $stmt = $this->connection->prepare("INSERT INTO prescriptions (patientID, doctorID, prescriptionDate, prescriptionDuration, prescriptionNotes) VALUES (:patientID, :doctorID, :prescriptionDate, :prescriptionDuration, :prescriptionNotes)");
        $stmt->bindParam(':patientID', $patientID);
        $stmt->bindParam(':doctorID', $doctorID);
        $stmt->bindParam(':prescriptionDate', $prescriptionDate);
        $stmt->bindParam(':prescriptionDuration', $prescriptionDuration);
        $stmt->bindParam(':prescriptionNotes', $prescriptionNotes);

        //Execute statement
        $stmt->execute();

        // If it works return true
        if($stmt){
            return true;
        } else {
            return false;
        }
    }

    function getUsersByEntityAndIDForDoctor($entity, $doctorID, $start_index, $results_per_page){
        // Prepare statement
        $stmt = $this->connection->prepare("SELECT * FROM prescriptions WHERE doctorID = :doctorID LIMIT :start_index, :results_per_page");
        $stmt->bindParam(':doctorID', $doctorID);
        $stmt->bindParam(':start_index', $start_index, PDO::PARAM_INT);
        $stmt->bindParam(':results_per_page', $results_per_page, PDO::PARAM_INT);
    
        // Execute statement
        $stmt->execute();
    
        // Fetch data
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function getUsersByEntityAndIDForPatient($entity, $ID, $start_index, $results_per_page){
        // Prepare statement
        $stmt = $this->connection->prepare("SELECT * FROM prescriptions WHERE patientID = :ID LIMIT :start_index, :results_per_page");
        $stmt->bindParam(':ID', $ID);
        $stmt->bindParam(':start_index', $start_index, PDO::PARAM_INT);
        $stmt->bindParam(':results_per_page', $results_per_page, PDO::PARAM_INT);
    
        // Execute statement
        $stmt->execute();
    
        // Fetch data
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    // delete drugs from the database
    function deleteDrug($ID){
        // Prepare statement
        $stmt = $this->connection->prepare("DELETE FROM drugs WHERE ID = :ID");
        $stmt->bindParam(':ID', $ID);
    
        // Execute statement
        $stmt->execute();
    
        // If it works return true
        if($stmt){
            return true;
        } else {
            return false;
        }
    }

    // update drugs in the database
    function updateDrug($ID, $drugName, $drugDescription, $drugPrice, $drugQuantity, $drugExpirationDate, $drugManufacturingDate, $drugCompany){
        // Prepare statement
        $stmt = $this->connection->prepare("UPDATE drugs SET drugName = :drugName, drugDescription = :drugDescription, drugPrice = :drugPrice, drugQuantity = :drugQuantity, drugExpirationDate = :drugExpirationDate, drugManufacturingDate = :drugManufacturingDate, drugCompany = :drugCompany WHERE ID = :ID");
        $stmt->bindParam(':ID', $ID);
        $stmt->bindParam(':drugName', $drugName);
        $stmt->bindParam(':drugDescription', $drugDescription);
        $stmt->bindParam(':drugPrice', $drugPrice);
        $stmt->bindParam(':drugQuantity', $drugQuantity);
        $stmt->bindParam(':drugExpirationDate', $drugExpirationDate);
        $stmt->bindParam(':drugManufacturingDate', $drugManufacturingDate);
        $stmt->bindParam(':drugCompany', $drugCompany);
    
        // Execute statement
        $stmt->execute();
    
        // If it works return true
        if($stmt){
            return true;
        } else {
            return false;
        }
    }

    // Select everything from entity
    function getEntity($entity){
        // Prepare statement
        $stmt = $this->connection->prepare("SELECT * FROM $entity");
    
        // Execute statement
        $stmt->execute();
    
        // Fetch data
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    // get drugs row based in the ID
    function getDrug($ID){
        // Prepare statement
        $stmt = $this->connection->prepare("SELECT * FROM drugs WHERE ID = :ID");
        $stmt->bindParam(':ID', $ID);
    
        // Execute statement
        $stmt->execute();
    
        // Fetch data
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }


    //Adding meds to the database (Pharmaceuticals)
    function addMeds($drugName, $drugDescription, $drugPrice, $drugQuantity, $drugExpirationDate, $drugManufacturingDate, $drugCompany){
        //Prepare statement
        $stmt = $this->connection->prepare("INSERT INTO drugs (drugName, drugDescription, drugPrice, drugQuantity, drugExpirationDate, drugManufacturingDate, drugCompany) VALUES (:drugName, :drugDescription, :drugPrice, :drugQuantity, :drugExpirationDate, :drugManufacturingDate, :drugCompany)");
        $stmt->bindParam(':drugName', $drugName);
        $stmt->bindParam(':drugDescription', $drugDescription);
        $stmt->bindParam(':drugPrice', $drugPrice);
        $stmt->bindParam(':drugQuantity', $drugQuantity);
        $stmt->bindParam(':drugExpirationDate', $drugExpirationDate);
        $stmt->bindParam(':drugManufacturingDate', $drugManufacturingDate);
        $stmt->bindParam(':drugCompany', $drugCompany);

        //Execute statement
        $stmt->execute();
    }

    // get drugs
    function getDrugs(){
        // Prepare statement
        $stmt = $this->connection->prepare("SELECT * FROM drugs");
    
        // Execute statement
        $stmt->execute();
    
        // Fetch data
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    // delete patient from the database
    function deletePatient($ID){
        // Prepare statement
        $stmt = $this->connection->prepare("DELETE FROM patients WHERE ID = :ID");
        $stmt->bindParam(':ID', $ID);
    
        // Execute statement
        $stmt->execute();
    
        // If it works return true
        if($stmt){
            return true;
        } else {
            return false;
        }
    }

    // update patients in the database
    function updatePatient($ID, $patientFirstName, $patientLastName, $patientEmail, $patientPassword, $patientPhoneNumber, $patientAddress, $patientGender, $patientDOB){
        // Prepare statement
        $stmt = $this->connection->prepare("UPDATE patients SET patientFirstName = :patientFirstName, patientLastName = :patientLastName, patientEmail = :patientEmail, patientPassword = :patientPassword, patientPhoneNumber = :patientPhoneNumber, patientAddress = :patientAddress, patientGender = :patientGender, patientDOB = :patientDOB WHERE ID = :ID");
        $stmt->bindParam(':ID', $ID);
        $stmt->bindParam(':patientFirstName', $patientLastName);
        $stmt->bindParam(':patientLastName', $patientLastName);
        $stmt->bindParam(':patientEmail', $patientEmail);
        $stmt->bindParam(':patientPassword', $patientPassword);
        $stmt->bindParam(':patientPhoneNumber', $patientPhoneNumber);
        $stmt->bindParam(':patientAddress', $patientAddress);
        $stmt->bindParam(':patientGender', $patientGender);
        $stmt->bindParam(':patientDOB', $patientDOB);
    
        // Execute statement
        $stmt->execute();
    
        // If it works return true
        if($stmt){
            return true;
        } else {
            return false;
        }
    }

    // delete doctor from the database
    function deleteDoctor($ID){
        // Prepare statement
        $stmt = $this->connection->prepare("DELETE FROM doctors WHERE ID = :ID");
        $stmt->bindParam(':ID', $ID);
    
        // Execute statement
        $stmt->execute();
    
        // If it works return true
        if($stmt){
            return true;
        } else {
            return false;
        }
    }

    // update doctor in the database
    function updateDoctor($ID, $doctorFirstName, $doctorLastName, $doctorEmail, $doctorPassword, $doctorPhoneNumber, $doctorAddress, $doctorGender, $doctorDOB){
        // Prepare statement
        $stmt = $this->connection->prepare("UPDATE doctors SET doctorFirstName = :doctorFirstName, doctorLastName = :doctorLastName, doctorEmail = :doctorEmail, doctorPassword = :doctorPassword, doctorPhoneNumber = :doctorPhoneNumber, doctorAddress = :doctorAddress, doctorGender = :doctorGender, doctorDOB = :doctorDOB WHERE ID = :ID");
        $stmt->bindParam(':ID', $ID);
        $stmt->bindParam(':doctorFirstName', $doctorLastName);
        $stmt->bindParam(':doctorLastName', $doctorLastName);
        $stmt->bindParam(':doctorEmail', $doctorEmail);
        $stmt->bindParam(':doctorPassword', $doctorPassword);
        $stmt->bindParam(':doctorPhoneNumber', $doctorPhoneNumber);
        $stmt->bindParam(':doctorAddress', $doctorAddress);
        $stmt->bindParam(':doctorGender', $doctorGender);
        $stmt->bindParam(':doctorDOB', $doctorDOB);
    
        // Execute statement
        $stmt->execute();
    
        // If it works return true
        if($stmt){
            return true;
        } else {
            return false;
        }
    }
// Checking whether a patient exists and confirming their password
function patientExists($patientID, $patientPassword){
    //Prepare statement
    $stmt = $this->connection->prepare("SELECT patientPassword FROM patients WHERE ID = :patientID");
    $stmt->bindParam(':patientID', $patientID);

    //Execute statement
    $stmt->execute();

    //Fetch the result
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    //Check if the password matches
    if($result['patientPassword'] === $patientPassword){
        return true;
    } else {
        return false;
    }
}
 // Checking whether a doctor exists and confirming their password
    function doctorExists($doctorID, $doctorPassword){
        //Prepare statement
        $stmt = $this->connection->prepare("SELECT doctorPassword FROM doctors WHERE ID = :ID");
        $stmt->bindParam(':ID', $doctorID);

        //Execute statement
        $stmt->execute();

        //Fetch the result
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        //Check if the password matches
        if($result['doctorPassword'] === $doctorPassword){
            return true;
        } else {
            return false;
        }
    }
 // checking whether an admin exists and confirming their password
    function adminExists($adminID, $adminPassword){
        //Prepare statement
        $stmt = $this->connection->prepare("SELECT adminPassword FROM admins WHERE ID = :ID");
        $stmt->bindParam(':ID', $adminID);

        //Execute statement
        $stmt->execute();

        //Fetch the result
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        //Check if the password matches
        if($result['adminPassword'] === $adminPassword){
            return true;
        } else {
            return false;
        }
         // Confirming whether a pharmacy exists and confirming their password
    function pharmacyExists($ID, $pharmacyPassword){
        //Prepare statement
        $stmt = $this->connection->prepare("SELECT pharmacyPassword FROM pharmacies WHERE ID = :ID");
        $stmt->bindParam(':ID', $ID);

        //Execute statement
        $stmt->execute();

        //Fetch the result
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        //Check if the password matches
        if($result['pharmacyPassword'] === $pharmacyPassword){
            return true;
        } else {
            return false;
        }
    }
 // check if username and password of company match
    function companyExists($ID, $companyPassword){
        //Prepare statement
        $stmt = $this->connection->prepare("SELECT * FROM companies WHERE ID = :ID AND companyPassword = :companyPassword");
        $stmt->bindParam(':ID', $ID);
        $stmt->bindParam(':companyPassword', $companyPassword);

        //Execute statement
        $stmt->execute();

        //Fetch the result
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if($result){
            //Return the result
            return true;
        } else {
            return false;
        }
    }
}
<<<<<<< HEAD
?>
=======
// Confirming whether a pharmacy exists and confirming their password
function pharmacyExists($ID, $pharmacyPassword){
    //Prepare statement
    $stmt = $this->connection->prepare("SELECT pharmacyPassword FROM pharmacies WHERE ID = :ID");
    $stmt->bindParam(':ID', $ID);

    //Execute statement
    $stmt->execute();

    //Fetch the result
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    //Check if the password matches
    if($result['pharmacyPassword'] === $pharmacyPassword){
        return true;
    } else {
        return false;
    }
}
} ?>
>>>>>>> 76938fce2d032c699cc44b022308f8a1ca7feb51
