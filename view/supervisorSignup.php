<?php
require_once("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Supervisor signup
    function supervisorSignup(supervisor){
        try {                
            $stmt = $this->connection->prepare("INSERT INTO supervisors(supervisorFirstName, supervisorLastName, supervisorEmail, supervisorPassword, supervisorPhoneNumber, supervisorAddress, supervisorGender, supervisorDOB) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->execute([$supervisorFirstName, $supervisorLastName, $supervisorEmail, $supervisorPassword, $supervisorPhoneNumber, $supervisorAddress, $supervisorGender, $supervisorDOB]);
            return true; // Return true if the signup was successful
        } catch(PDOException $e) {                
            echo "Error: " . $e->getMessage();
            return false;
        }        
        }
    }
?>