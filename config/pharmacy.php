<?php

include_once '../database/database.php';

// Create an instance of the Database class
$database = new Database();


// Dispense the drug based on the drug id posted here
if(isset($_POST['dispense'])){
    $ID = $_POST['ID'];
    $drugID = $_POST['drugID'];
    $drugName = $_POST['drugName'];
    $drugQuantity = $_POST['drugQuantity'];
    $patientID = $_POST['patientID'];
    $doctorID = $_POST['doctorID'];
    
    if($database->dispense($ID, $drugID, $drugName, $drugQuantity, $patientID, $doctorID)){
        echo "<script>alert('Drug dispensed Successfully')</script>";

        // Then redirect back to the form to dispense another drug
        echo "<script>window.location.href='../view/pharmacy.php'</script>";
    } else{
        echo "<script>alert('Problem somewhere')</script>";
    }
}


?>