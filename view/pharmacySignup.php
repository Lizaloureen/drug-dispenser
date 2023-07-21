<?php
require_once("connection.php");

// Pharmacy signup
function pharmacySignup($pharmacyName, $pharmacyEmail, $pharmacyPassword, $pharmacyPhoneNumber, $pharmacyAddress) {
    global $connection; // Make the $connection variable accessible inside the function
    try {
        $stmt = $connection->prepare("INSERT INTO pharmacy (pharmacyName, pharmacyEmail, pharmacyPassword, pharmacyPhoneNumber, pharmacyAddress) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$pharmacyName, $pharmacyEmail, $pharmacyPassword, $pharmacyPhoneNumber, $pharmacyAddress]);
        return true; // Return true if the signup was successful
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        return false;
    }        
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle form submission and call pharmacySignup() function here with appropriate arguments
    // For example:
    $pharmacyName = $_POST['pharmacyName'];
    $pharmacyEmail = $_POST['pharmacyEmail'];
    $pharmacyPassword = $_POST['pharmacyPassword'];
    $pharmacyPhoneNumber = $_POST['pharmacyPhoneNumber'];
    $pharmacyAddress = $_POST['pharmacyAddress'];
    
    // Call the pharmacySignup() function
    if (pharmacySignup($pharmacyName, $pharmacyEmail, $pharmacyPassword, $pharmacyPhoneNumber, $pharmacyAddress)) {
        echo "Pharmacy signup successful!";
    } else {
        echo "Pharmacy signup failed!";
    }
}
?>
