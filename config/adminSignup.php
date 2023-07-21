<?php
require_once("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Admin Signup
    function adminSignup($adminFirstName, $adminLastName, $adminEmail, $adminPassword, $adminPhoneNumber, $adminAddress, $adminGender, $adminDOB){
        try {
            $stmt = $this->connection->prepare("INSERT INTO admins (adminFirstName, adminLastName, adminEmail, adminPassword, adminPhoneNumber, adminAddress, adminGender, adminDOB) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->execute([$adminFirstName, $adminLastName, $adminEmail, $adminPassword, $adminPhoneNumber, $adminAddress, $adminGender, $adminDOB]);
            return true; // Return true if the signup was successful
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }        
    }
}
?>