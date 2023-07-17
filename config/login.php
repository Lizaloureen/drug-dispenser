<?php

echo "<script>alert('Checkpoint 1. Inside login backend file')</script>";

session_start();

require_once("../database/database.php");

$database = new Database();

if (isset($_POST['login'])) {
    echo "<script>alert('Checkpoint 2. Inside login button condition')</script>";
    $ID = $_POST['ID'];
    $password = $_POST['password'];
    $entity = $_POST['entity'];

    if ($entity === 'patient') {
        if ($database->patientLogin($ID, $password)) {
            echo "<script>alert('Checkpoint 3. Inside login patient condition')</script>";
            // Initialize session and session vars
            $_SESSION['username'] = $ID;
            $_SESSION['entity'] = 'patients';
            echo "<script>alert('Login Successful')</script>";
            // Redirect to patient page
            echo "<script>window.location.href='../view/patient.php'</script>";
            // exit();
        } else {
            echo "<script>alert('Patient doesn't exist or incorrect password')</script>";
            echo "<script>window.location.href='../view/login.php'</script>";
        }
    }

    if ($entity === 'doctor') {
        if ($database->doctorLogin($ID, $password)) {
            // Initialize session and session vars
            $_SESSION['username'] = $ID;
            $_SESSION['entity'] = 'doctors';
            echo "<script>alert('Login Successful')</script>";
            // Redirect to doctor page
            echo "<script>window.location.href='../view/doctor.php'</script>";
            // exit();
        } else {
            echo "<script>alert('Doctor doesn't exist or incorrect password')</script>";
            echo "<script>window.location.href='../view/login.php'</script>";
        }
    }

    if ($entity === 'pharmaceuticalcompany') {
        if ($database->pharmaceuticalcompanyLogin($ID, $password)) {
            // Initialize session and session vars
            $_SESSION['username'] = $ID;
            $_SESSION['entity'] = 'pharmaceuticalCompany';
            echo "<script>alert('Login Successful')</script>";
            // Redirect to patient page
            echo "<script>window.location.href='../view/pharmaceuticalCompany.php'</script>";
            // exit();
        } else {
            echo "<script>alert('Pharmaceutical Company doesn't exist or incorrect password')</script>";
            echo "<script>window.location.href='../view/login.php'</script>";
        }
    }

    if ($entity === 'pharmacy') {
        if ($database->pharmacyLogin($ID, $password)) {
            // Initialize session and session vars
            $_SESSION['username'] = $ID;
            $_SESSION['entity'] = 'pharmacies';
            echo "<script>alert('Login Successful')</script>";
            // Redirect to patient page
            echo "<script>window.location.href='../view/pharmacy.php'</script>";
            // exit();
        } else {
            echo "<script>alert('Pharmacy doesn't exist or incorrect password')</script>";
            echo "<script>window.location.href='../view/login.php'</script>";
        }
    }

    if ($entity === 'admin') {
        if ($database->adminLogin($ID, $password)) {
            // Initialize session and session vars
            $_SESSION['username'] = $ID;
            $_SESSION['entity'] = 'admins';
            echo "<script>alert('Login Successful')</script>";
            // Redirect to patient page
            echo "<script>window.location.href='../view/dash.php'</script>";
            // exit();
        } else {
            echo "<script>alert('Admin doesn't exist or incorrect password')</script>";
            echo "<script>window.location.href='../view/login.php'</script>";
        }
    }

    if ($entity === 'staff') {
        if ($database->staffLogin($ID, $password)) {
            // Redirect to patient page
            header('Location: staff.php');
            // exit();
        } else {
            $error = "Invalid ID or password.";
        }
    }
}

?>
