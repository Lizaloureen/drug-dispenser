<?php
require_once("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    //patient signup
    function patientSignup($patientID, $patientName, $patientPhoneNumber, $Ppassword, $patientAddress, $patientGender){
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
    function doctorSignup($docID, $doctorName, $doctorPhoneNumber, $Dpassword, $doctorAddress, $doctorGender){
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
    function PharmaceuticalCompanySignup($pcID, $pcName, $address, $PhoneNo, $pharmaceuticalPassword){
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
    function PharmacySignup($pharmacyName, $phID, $phoneNo, $profitPercentage, $drugTradeName, $address, $pharmacyPassword){
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
    function StaffSignup($staffno, $name, $prescriptionno, $salary, $bonus, $staffPassword){
        try {
            $stmt = $this->connection->prepare("INSERT INTO staff (staffno, name, prescriptionno, salary, bonus, Password) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->execute([$staffno, $name, $prescriptionno, $salary, $bonus, $staffPassword]);
            return true; // Return true if the signup was successful
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }        
    }
}
?>

