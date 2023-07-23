<?php
require_once("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $patientssn = $_POST['patientssn'];
    $Name = $_POST['Name'];
    $PhoneNumber = $_POST['PhoneNumber'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $Gender = $_POST['Gender'];

    $query1 = "INSERT INTO patient (patientssn, Name, PhoneNumber, password, address, Gender) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt1 = mysqli_prepare($conn, $query1);
    mysqli_stmt_bind_param($stmt1, "isisss", $patientssn, $Name, $PhoneNumber, $password, $address, $Gender);
    $success1 = mysqli_stmt_execute($stmt1);

    $docssn = $_POST['docssn'];
    $Name = $_POST['Name'];
    $PhoneNumber = $_POST['PhoneNumber'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $Gender = $_POST['Gender'];
    
    $query2 = "INSERT INTO doctor (docssn, Name, PhoneNumber, password, address, Gender) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt2 = mysqli_prepare($conn, $query2);
    mysqli_stmt_bind_param($stmt2, "isisss", $docssn, $Name, $PhoneNumber, $password, $address, $Gender);
    $success2 = mysqli_stmt_execute($stmt2);

    $TradeName = $_POST['TradeName'];
    $formula = $_POST['formula'];
    $price = $_POST['price'];

    $query3 = "INSERT INTO drug (TradeName, formula, price) VALUES (?, ?, ?)";
    $stmt3 = mysqli_prepare($conn, $query3);
    mysqli_stmt_bind_param($stmt3, "ssi", $TradeName, $formula, $price);
    $success3 = mysqli_stmt_execute($stmt3);

    $textofcontract = $_POST['textofcontract'];
    $supervisor = $_POST['supervisor'];
    $startdate = $_POST['startdate'];
    $enddate = $_POST['enddate'];

    $query4 = "INSERT INTO contracts (textofcontract, supervisor, startdate, enddate) VALUES (?, ?, ?, ?)";
    $stmt4 = mysqli_prepare($conn, $query4);
    mysqli_stmt_bind_param($stmt4, "ssss", $textofcontract, $supervisor, $startdate, $enddate);
    $success4 = mysqli_stmt_execute($stmt4);

    $pcSSN = $_POST['pcSSN'];
    $pcName = $_POST['pcName'];
    $address = $_POST['address'];
    $PhoneNo = $_POST['PhoneNo'];

    $query5 = "INSERT INTO pharmaceuticalcompany (pcSSN, pcName, address, PhoneNo) VALUES (?, ?, ?, ?)";
    $stmt5 = mysqli_prepare($conn, $query5);
    mysqli_stmt_bind_param($stmt5, "issi", $pcSSN, $pcName, $address, $PhoneNo);
    $success5 = mysqli_stmt_execute($stmt5);

    $Name = $_POST['Name'];
    $phSSN = $_POST['phSSN'];
    $phoneNo = isset($_POST['phoneNo']) ? $_POST['phoneNo'] : '';
    $profitPercentage = $_POST['profitPercentage'];
    $drugTradeName = isset($_POST['drugTradeName']) ? $_POST['drugTradeName'] : '';
    $address = $_POST['address'];

    $query6 = "INSERT INTO pharmacy (Name, phSSN, phoneNo, profitPercentage, drugTradeName, address) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt6 = mysqli_prepare($conn, $query6);
    mysqli_stmt_bind_param($stmt6, "siisss", $Name, $phSSN, $phoneNo, $profitPercentage, $drugTradeName, $address);
    $success6 = mysqli_stmt_execute($stmt6);

    $prescriptionNo = $_POST['prescriptionNo'];
    $prescriptionDate = $_POST['prescriptionDate'];
    $quantity = $_POST['quantity'];
    $patientssn = $_POST['patientssn'];
    $docssn = $_POST['docssn'];

    $query7 = "INSERT INTO prescriptions (prescriptionNo, prescriptionDate, quantity, patientssn, docssn) VALUES (?, ?, ?, ?, ?)";
    $stmt7 = mysqli_prepare($conn, $query7);
    mysqli_stmt_bind_param($stmt7, "idiii", $prescriptionNo, $prescriptionDate, $quantity, $patientssn, $docssn);
    $success7 = mysqli_stmt_execute($stmt7);

    $staffno = isset($_POST['staffno']) ? $_POST['staffno'] : '';
    $name = $_POST['name'];
    $prescriptionno = isset($_POST['prescriptionno']) ? $_POST['prescriptionno'] : '';
    $salary = $_POST['salary'];
    $bonus = $_POST['bonus'];

    $query8 = "INSERT INTO staff (staffno, name, prescriptionno, salary, bonus) VALUES(?, ?, ?, ?, ?)";
    $stmt8 = mysqli_prepare($conn, $query8);
    mysqli_stmt_bind_param($stmt8, "isiii", $staffno, $name, $prescriptionno, $salary, $bonus);
    $success8 = mysqli_stmt_execute($stmt8);

    if ($success1 && $success2 && $success3 && $success4 && $success5 && $success6 && $success7 && $success8) {
        echo "Data inserted successfully";
    } else {
        echo "Error inserting data: " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt1);
    mysqli_stmt_close($stmt2);
    mysqli_stmt_close($stmt3);
    mysqli_stmt_close($stmt4);
    mysqli_stmt_close($stmt5);
    mysqli_stmt_close($stmt6);
    mysqli_stmt_close($stmt7);
    mysqli_stmt_close($stmt8);
}

mysqli_close($conn);
?>