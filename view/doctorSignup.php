<?php
include '../database/database.php';

$database = new Database(); // Create a new instance of the Database class

// Doctor signup
function doctorSignup($doctorFirstName, $doctorLastName, $doctorEmail, $doctorPassword, $doctorPhoneNumber, $doctorAddress, $doctorGender, $doctorDOB) {
    global $database; // Make the $database variable accessible inside the function
    try {
        $stmt = $database->getConnection()->prepare("INSERT INTO doctors (doctorFirstName, doctorLastName, doctorEmail, doctorPassword, doctorPhoneNumber, doctorAddress, doctorGender, doctorDOB) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([$doctorFirstName, $doctorLastName, $doctorEmail, $doctorPassword, $doctorPhoneNumber, $doctorAddress, $doctorGender, $doctorDOB]);
        return true; // Return true if the signup was successful
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        return false;
    }        
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle form submission and call doctorSignup() function here with appropriate arguments
    // For example:
    $firstName = $_POST['doctorFirstName'];
    $lastName = $_POST['doctorLastName'];
    $email = $_POST['doctorEmail'];
    $password = $_POST['doctorPassword'];
    $phoneNumber = $_POST['doctorPhoneNumber'];
    $address = $_POST['doctorAddress'];
    $gender = $_POST['doctorGender'];
    $dob = $_POST['doctorDOB'];
    
    // Call the doctorSignup() function
    if (doctorSignup($firstName, $lastName, $email, $password, $phoneNumber, $address, $gender, $dob)) {
        echo "Doctor signup successful!";
    } else {
        echo "Doctor signup failed!";
    }
}
?>
