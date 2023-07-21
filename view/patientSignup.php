<?php

include '../database/database.php';

$database = new Database(); // Create a new instance of the Database class


//patient signup
function patientSignup($patientFirstName, $patientLastName, $patientEmail, $patientPassword, $patientPhoneNumber, $patientAddress, $patientGender, $patientDOB) {
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle form submission and call patientSignup() function here with appropriate arguments
    // For example:
    $firstName = $_POST['patientFirstName'];
    $lastName = $_POST['patientLastName'];
    $email = $_POST['patientEmail'];
    $password = $_POST['patientPassword'];
    $phoneNumber = $_POST['patientPhoneNumber'];
    $address = $_POST['patientAddress'];
    $gender = $_POST['patientGender'];
    $dob = $_POST['patientDOB'];
    
    // Call the patientSignup() function
    if (patientSignup($firstName, $lastName, $email, $password, $phoneNumber, $address, $gender, $dob)) {
        echo "Signup successful!";
    } else {
        echo "Signup failed!";
    }
}
?>
