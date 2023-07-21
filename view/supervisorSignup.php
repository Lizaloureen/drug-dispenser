<?php
require_once("connection.php");

// Supervisor signup
function supervisorSignup($supervisorFirstName, $supervisorLastName, $supervisorEmail, $supervisorPassword, $supervisorPhoneNumber, $supervisorAddress, $supervisorGender, $supervisorDOB) {
    global $connection; // Make the $connection variable accessible inside the function
    try {
        $stmt = $connection->prepare("INSERT INTO supervisors (supervisorFirstName, supervisorLastName, supervisorEmail, supervisorPassword, supervisorPhoneNumber, supervisorAddress, supervisorGender, supervisorDOB) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([$supervisorFirstName, $supervisorLastName, $supervisorEmail, $supervisorPassword, $supervisorPhoneNumber, $supervisorAddress, $supervisorGender, $supervisorDOB]);
        return true; // Return true if the signup was successful
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        return false;
    }        
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle form submission and call supervisorSignup() function here with appropriate arguments
    // For example:
    $firstName = $_POST['supervisorFirstName'];
    $lastName = $_POST['supervisorLastName'];
    $email = $_POST['supervisorEmail'];
    $password = $_POST['supervisorPassword'];
    $phoneNumber = $_POST['supervisorPhoneNumber'];
    $address = $_POST['supervisorAddress'];
    $gender = $_POST['supervisorGender'];
    $dob = $_POST['supervisorDOB'];
    
    // Call the supervisorSignup() function
    if (supervisorSignup($firstName, $lastName, $email, $password, $phoneNumber, $address, $gender, $dob)) {
        echo "Supervisor signup successful!";
    } else {
        echo "Supervisor signup failed!";
    }
}
?>
