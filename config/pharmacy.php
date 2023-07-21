<?php

include_once '../database/database.php';

// Create an instance of the Database class
$database = new Database();


// Dispense the drug based on the drug id posted here

    $ID = $_POST['ID'];
    change $ID = $_POST['ID']  to $ID = $_POST['drugID']
    if($database->dispense($ID)){
        echo "<script>alert('Drug dispensed Successfully')</script>";

        // Then redirect back to the form to dispense another drug
        echo "<script>window.location.href='../view/pharmacy.php'</script>";
    } 
   
    



?>