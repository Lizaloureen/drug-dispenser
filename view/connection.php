<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "mymedicine";

try {
    $connection = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit(); // Exit the script if the connection fails
}

/*creating database
$sql = "CREATE DATABASE drugDispensaryDB";
if($conneection->query($sql)==TRUE){
    echo "database created successfully";
}else{
    echo "error creating database: ".$connection->error;
}*/

/*creating table doctor
$sql = "CREATE TABLE Doctor(
    docssn INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Name varchar(15),
    Specialty varchar(30),
    Years_of_experience int(2)
)";
if($connection->query($sql)==TRUE){
    echo "</br>";
    echo "Table Doctor created successfully";
}else{
    echo "Error creating table: ".$connection->error;
}*/

/*$sql = "CREATE TABLE Patient(
    patientssn INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fName varchar(15),
    address varchar(30),
    age int(2)
)";
if($connection->query($sql)==TRUE){
    echo "</br>";
    echo "Table Patient created successfully";
}else{
    echo "Error creating table: ".$connection->error;
}*/

/*$sql = "CREATE TABLE prescriptions(
    prescriptionNo INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    prescriptionDate date,
    quantity int(3),
    patientssn INT(6),
    docssn INT(6)
)";
if($connection->query($sql)==TRUE){
    echo "</br>";
    echo "Table prescriptions created successfully";
}else{
    echo "Error creating table: ".$connection->error;
}*/

/*$sql = "CREATE TABLE pharmacy(
    Name INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    address varchar(30),
    phoneNo int(10),
    profitPercentage FLOAT(6),
    drugTradeName varchar(30)
)";
if($connection->query($sql)==TRUE){
    echo "</br>";
    echo "Table pharmacy created successfully";
}else{
    echo "Error creating table: ".$connection->error;
}*/

/*$sql = "CREATE TABLE pharmaceuticalCompany(
    pcName INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    address varchar(30),
    phoneNo int(10)
)";
if($connection->query($sql)==TRUE){
    echo "</br>";
    echo "Table pharmaceuticalCompany created successfully";
}else{
    echo "Error creating table: ".$connection->error;
}*/

/*$sql = "CREATE TABLE staff(
    staffno INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name varchar(20),
    prescriptionno int(8),
    salary int(6),
    bonus int(6)
)";
if($connection->query($sql)==TRUE){
    echo "</br>";
    echo "Table staff created successfully";
}else{
    echo "Error creating table: ".$connection->error;
}*/

/*$sql = "CREATE TABLE drug(
    TradeName varchar(40) PRIMARY KEY,
    formula varchar(20),
    price int(6)
)";
if($connection->query($sql)==TRUE){
    echo "</br>";
    echo "Table drug created successfully";
}else{
    echo "Error creating table: ".$connection->error;
}*/

/*$sql = "CREATE TABLE contracts(
    textofcontract varchar(255),
    supervisor varchar(20),
    startdate date,
    enddate date
)";

if($connection->query($sql)==TRUE){
    echo "</br>";
    echo "Table contracts created successfully";
}else{
    echo "Error creating table: ".$connection->error;
}*/

//$connection->close();
?>