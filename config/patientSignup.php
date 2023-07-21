<?php
require_once("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    //patient signup
    function patientSignup($patientFirstName, $patientLastName, $patientEmail, $patientPassword, $patientPhoneNumber, $patientAddress, $patientGender, $patientDOB){
        try {
            $stmt = $this->connection->prepare("INSERT INTO patients (patientFirstName, patientLastName, patientEmail, patientPassword, patientPhoneNumber, patientAddress, patientGender, patientDOB) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->execute([$patientFirstName, $patientLastName, $patientEmail, $patientPassword, $patientPhoneNumber, $patientAddress, $patientGender, $patientDOB]);
            return true; // Return true if the signup was successful
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }        
    }
}
?>

