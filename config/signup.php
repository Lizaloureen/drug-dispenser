<?php
require_once("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $staffno = $_POST["staffno"];
    $name = $_POST["name"];
    $prescriptionno = $_POST["prescriptionno"];
    $salary = $_POST["salary"]; 
    $bonus = $_POST["bonus"];
    
    try {
        $sql = "INSERT INTO staff (staffno, name, prescriptionno, salary, bonus)
                VALUES (?, ?, ?, ?, ?)";
        
        $stmt = $connection->prepare($sql);
        $stmt->execute([$staffno, $name, $prescriptionno, $salary, $bonus]);
        
        echo "Data inserted successfully.";
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

<html>
<head>
    <title>Register Drug</title>
</head>
<body>
    <h1>Drug Registration</h1>
    <form action="#" method="POST">
        <label for="staffno">Staff Number</label><br>
        <input type="text" name="staffno" required><br>                        
        <label for="name">Name</label><br>
        <input type="text" name="name" required><br>
        <label for="prescriptionno">Prescription Number</label><br>
        <input type="number" name="prescriptionno" required><br>
        <label for="salary">Salary</label><br>
        <input type="number" name="salary" required><br>
        <label for="bonus">Bonus</label><br>
        <input type="number" name="bonus" required><br>                        
        <input type="submit" name="addDrug" value="Submit">
    </form>
</body>
</html>