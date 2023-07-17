<?php
class Database {
    private $hostname;
    private $username;
    private $password;
    private $dbname;
    private $connection;

    public function __construct(){
        $this->hostname = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "mymedicine";

        try{
            $this->connection = new PDO("mysql:host=$this->hostname;dbname=$this->dbname", $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
    }

    // Patient signup
    public function patientSignup($patientID, $patientName, $patientPhoneNumber, $Ppassword, $patientAddress, $patientGender){
        try {
            $stmt = $this->connection->prepare("INSERT INTO patient (patientID, Name, phoneNumber, password, address, Gender) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->execute([$patientID, $patientName, $patientPhoneNumber, $Ppassword, $patientAddress, $patientGender]);
            return true; // Return true if the signup was successful
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }        
    }

    // Doctor signup
    public function doctorSignup($docID, $doctorName, $doctorPhoneNumber, $Dpassword, $doctorAddress, $doctorGender){
        try {
            $stmt = $this->connection->prepare("INSERT INTO doctor (docID, Name, phoneNumber, password, address, Gender) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->execute([$docID, $doctorName, $doctorPhoneNumber, $Dpassword, $doctorAddress, $doctorGender]);
            return true; // Return true if the signup was successful
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }        
    }

    // Pharmaceutical Company signup
    public function PharmaceuticalCompanySignup($pcID, $pcName, $address, $PhoneNo, $pharmaceuticalPassword){
        try {
            $stmt = $this->connection->prepare("INSERT INTO pharmaceuticalcompany(pcID, pcName, address, PhoneNo, Password) VALUES (?, ?, ?, ?, ?)");
            $stmt->execute([$pcID, $pcName, $address, $PhoneNo, $pharmaceuticalPassword]);
            return true; // Return true if the signup was successful
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }        
    }

    // Pharmacy signup
    public function PharmacySignup($pharmacyName, $phID, $phoneNo, $profitPercentage, $drugTradeName, $address, $pharmacyPassword){
        try {
            $stmt = $this->connection->prepare("INSERT INTO pharmacy (Name, phID, phoneNo, profitPercentage, drugTradeName, address, Password) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->execute([$pharmacyName, $phID, $phoneNo, $profitPercentage, $drugTradeName, $address, $pharmacyPassword]);
            return true; // Return true if the signup was successful
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }        
    }

    // Staff signup
    public function StaffSignup($staffno, $name, $prescriptionno, $salary, $bonus, $staffPassword){
        try {
            $stmt = $this->connection->prepare("INSERT INTO staff (staffno, name, prescriptionno, salary, bonus, Password) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->execute([$staffno, $name, $prescriptionno, $salary, $bonus, $staffPassword]);
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
        if($result['adminPassword'] === $adminPassword){
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
        if($result['doctorPassword'] === $doctorPassword){
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
        if($result['companyPassword'] === $companyPassword){
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
        if($result['pharmacyPassword'] === $pharmacyPassword){
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
        if($result['staffPassword'] === $staffPassword){
            return true;
        } else {
            return false;
        }        
    }




    /*
    *   These are the added functions for the project
    */

    // get total number of enities in a table
    function getTotalUsersByEntity($entity){
        try {
            $stmt = $this->connection->prepare("SELECT COUNT(*) FROM $entity");
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
    function dispense($ID){
        $stmt = $this->connection->prepare("UPDATE drugs SET drugQuantity = drugQuantity - 1 WHERE ID = :ID");
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

}
?>