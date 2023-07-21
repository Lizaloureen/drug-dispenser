<?php
require_once("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Doctor signup
    function doctorSignup($doctorFirstName, $doctorLastName, $doctorEmail, $doctorPassword, $doctorPhoneNumber, $doctorAddress, $doctorGender, $doctorDOB){
        try {
            $stmt = $this->connection->prepare("INSERT INTO doctors (doctorFirstName, doctorLastName, doctorEmail, doctorPassword, doctorPhoneNumber, doctorAddress, doctorGender, doctorDOB) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->execute([$doctorFirstName, $doctorLastName, $doctorEmail, $doctorPassword, $doctorPhoneNumber, $doctorAddress, $doctorGender, $doctorDOB]);
            return true; // Return true if the signup was successful
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }        
    }
}
?>