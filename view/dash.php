<?php 
    session_start();

    include '../database/database.php';

    $database = new Database();


    if(isset($_GET['action'])){
        $action = $_GET['action'];
        $_SESSION['action'] = $action;

        switch($action){
            case 'viewPatients':
                $data = $database->getEntity("patients");
                break;
            case 'viewDoctors':
                $data = $database->getEntity("doctors");
                break;
            case 'viewCompanies':
                $data = $database->getEntity("companies");
                break;
            case 'viewPharmacies':
                $data = $database->getEntity("pharmacies");
                break;
            case 'viewPrescriptions':
                $data = $database->getEntity("prescriptions");
                break;
            case 'viewDrugs':
                $data = $database->getEntity("drugs");
                break;
            case 'registerPatients':
                $data = $database->getEntity("patients");
                break;
            case 'registerDoctors':
                $data = $database->getEntity("doctors");
                break;
            case 'registerSupervisors':
                $data = $database->getEntity("supervisors");
                break;
            case 'registerPharmacists':
                $data = $database->getEntity("pharmacies");
                break;
            case 'registerAdmins':
                $data = $database->getEntity("admins");
                break;
            case 'updateDrugs':
                $data = $database->getEntity("drugs");
                break;
            case 'updatePatients':
                $data = $database->getEntity("patients");
                break;
            case 'updateDoctors':
                $data = $database->getEntity("doctors");
                break;
            case 'deleteDrugs':
                $data = $database->getEntity("drugs");
                break;
            case 'deletePatients':
                $data = $database->getEntity("patients");
                break;
            case 'deleteDoctors':                    
                $data = $database->getEntity("doctors");
                break;
            default:
                echo "<script>alert('Error 101');</script>";
                break;
        }
    } else{
        $action = array();
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="../Static/dash.scss">
    <link rel="stylesheet" href="../Static/form.scss">
    <link rel="icon" href="../images/logo.jpg">

    <title>Admin Portal</title>
</head>
<body>


    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bxs-smile'></i>
            <span class="text">My Medicine</span>
        </a>
        <ul class="side-menu top">
            <li class="active">
                <a href="#">
                    <i class='bx bxs-dashboard' ></i>
                    <span class="text">Admin Dashboard</span>
                </a>
            </li>
            <li>
                <a href="dash.php?action=viewPatients">
                    <i class='bx bxs-group' ></i>
                    <span class="text">View Patients</span>
                </a>
            </li>
            <li>
                <a href="dash.php?action=viewDoctors">
                    <i class='bx bxs-group' ></i>
                    <span class="text">View Doctors</span>
                </a>
            </li>
            <li>
                <a href="dash.php?action=viewCompanies">
                    <i class='bx bxs-group' ></i>
                    <span class="text">View Pharmaceuticals</span>
                </a>
            </li>
            <li>
                <a href="dash.php?action=viewPharmacies">
                    <i class='bx bxs-group' ></i>
                    <span class="text">View Pharmacies</span>
                </a>
            </li>
            <li>
                <a href="dash.php?action=viewPrescriptions">
                    <i class='bx bxs-group' ></i>
                    <span class="text">View Prescriptions</span>
                </a>
            </li>
            <li>
                <a href="dash.php?action=viewDrugs">
                    <i class='bx bxs-group' ></i>
                    <span class="text">View Drugs</span>
                </a>
            </li>
            <li>
                <a href="dash.php?action=registerPatients">
                    <i class='bx bxs-group' ></i>
                    <span class="text">Register Patients</span>
                </a>
            </li>
            <li>
                <a href="dash.php?action=registerDoctors">
                    <i class='bx bxs-group' ></i>
                    <span class="text">Register Doctors</span>
                </a>
            </li>
            <li>
                <a href="dash.php?action=registerSupervisors">
                    <i class='bx bxs-group' ></i>
                    <span class="text">Register Supervisors</span>
                </a>
            </li>
            <li>
                <a href="dash.php?action=registerPharmacists">
                    <i class='bx bxs-group' ></i>
                    <span class="text">Register Pharmacists</span>
                </a>
            </li>
            <li>
                <a href="dash.php?action=registerAdmins">
                    <i class='bx bxs-group' ></i>
                    <span class="text">Register Admins</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="#">
                    <i class='bx bxs-cog' ></i>
                    <span class="text">Add Drugs</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-cog' ></i>
                    <span class="text">Settings</span>
                </a>
            </li>
            <li>
                <a href="../view/homepage.php" class="logout">
                    <i class='bx bxs-log-out-circle' ></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->


    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu' ></i>
            <a href="#" class="nav-link">Categories</a>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
                </div>
            </form>
            <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label>
            <a href="#" class="notification">
                <i class='bx bxs-bell' ></i>
                <span class="num">11</span>
            </a>

        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Dashboard</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li><i class='bx bx-chevron-right' ></i></li>
                        <li>
                            <a class="active" href="#">Home</a>
                        </li>
                    </ul>
                </div>

            </div>

            <!--REGISTER PATIENTS-->
                        
            <?php if($action == 'registerPatients'): ?>
    <div class="card">
        <form class="card-form" method="post" action="../view/patientSignup.php">
            <div class="input">
                <input type="text" class="input-field" name="patientFirstName" value="<?php echo isset($data['patientFirstName']) ? $data['patientFirstName'] : ''; ?>" required/>
                <label class="input-label">Patient's First Name</label>
            </div>
            <div class="input">
                <input type="text" class="input-field" name="patientLastName" value="<?php echo isset($data['patientLastName']) ? $data['patientLastName'] : ''; ?>" required/>
                <label class="input-label">Patient's Last Name</label>
            </div>
            <div class="input">
                <input type="email" class="input-field" name="patientEmail" value="<?php echo isset($data['patientEmail']) ? $data['patientEmail'] : ''; ?>" required/>
                <label class="input-label">Patient's Email</label>
            </div>
            <div class="input">
                <input type="password" class="input-field" name="patientPassword" value="<?php echo isset($data['patientPassword']) ? $data['patientPassword'] : ''; ?>" required/>
                <label class="input-label">Patient's Password</label>
            </div>
            <div class="input">
                <input type="number" class="input-field" name="patientPhoneNumber" value="<?php echo isset($data['patientPhoneNumber']) ? $data['patientPhoneNumber'] : ''; ?>" required/>
                <label class="input-label">Patient's Phone Number</label>
            </div>
            <div class="input">
                <input type="text" class="input-field" name="patientAddress" value="<?php echo isset($data['patientAddress']) ? $data['patientAddress'] : ''; ?>" required/>
                <label class="input-label">Patient's Address</label>
            </div>
            <div class="input">
                <input type="text" class="input-field" name="patientGender" value="<?php echo isset($data['patientGender']) ? $data['patientGender'] : ''; ?>" required/>
                <label class="input-label">Patient's Gender</label>
            </div>
            <div class="input">
                <input type="date" class="input-field" name="patientDOB" value="<?php echo isset($data['patientDOB']) ? $data['patientDOB'] : ''; ?>" required/>
                <label class="input-label">Patient's DOB</label>
            </div>
            <div class="action">
                <input type="hidden" name="type" value="patientSignup">
                <input type="submit" class="action-button" name="patientSignup" value="Patient Signup">
            </div> 
        </form>
    </div>
<?php endif ?>

                        
            <!--REGISTER DOCTORS-->

            <?php if ($action == 'registerDoctors'): ?>
    <div class="card">
        <form class="card-form" method="post" action="../view/doctorSignup.php">
            <div class="input">
                <input type="text" class="input-field" name="doctorFirstName" value="<?php echo isset($data['doctorFirstName']) ? $data['doctorFirstName'] : ''; ?>" required/>
                <label class="input-label">Doctor's First Name</label>
            </div>
            <div class="input">
                <input type="text" class="input-field" name="doctorLastName" value="<?php echo isset($data['doctorLastName']) ? $data['doctorLastName'] : ''; ?>" required/>
                <label class="input-label">Doctor's Last Name</label>
            </div>
            <div class="input">
                <input type="email" class="input-field" name="doctorEmail" value="<?php echo isset($data['doctorEmail']) ? $data['doctorEmail'] : ''; ?>" required/>                                        
                <label class="input-label">Doctor's Email</label>
            </div>
            <div class="input">
                <input type="password" class="input-field" name="doctorPassword" value="<?php echo isset($data['doctorPassword']) ? $data['doctorPassword'] : ''; ?>" required/>
                <label class="input-label">Doctor's Password</label>
            </div>
            <div class="input">
                <input type="number" class="input-field" name="doctorPhoneNumber" value="<?php echo isset($data['doctorPhoneNumber']) ? $data['doctorPhoneNumber'] : ''; ?>" required/>
                <label class="input-label">Doctor's Phone Number</label>
            </div>
            <div class="input">
                <input type="text" class="input-field" name="doctorAddress" value="<?php echo isset($data['doctorAddress']) ? $data['doctorAddress'] : ''; ?>" required/>
                <label class="input-label">Doctor's Address</label>
            </div>
            <div class="input">
                <input type="text" class="input-field" name="doctorGender" value="<?php echo isset($data['doctorGender']) ? $data['doctorGender'] : ''; ?>" required/>
                <label class="input-label">Doctor's Gender</label>
            </div>
            <div class="input">
                <input type="date" class="input-field" name="doctorDOB" value="<?php echo isset($data['doctorDOB']) ? $data['doctorDOB'] : ''; ?>" required/>
                <label class="input-label">Doctor's DOB</label>
            </div>
            <div class="action">
                <input type="hidden" name="type" value="doctorSignup">
                <input type="submit" class="action-button" name="doctorSignup" value="Doctor Signup">
            </div>
        </form>
    </div>
<?php endif ?>


                <!--REGISTER SUPERVISORS-->

                <?php if ($action == 'registerSupervisors'): ?>
    <div class="card">
        <form class="card-form" method="post" action="../view/supervisorSignup.php">
            <div class="input">
                <input type="text" class="input-field" name="supervisorFirstName" value="<?php echo isset($data['supervisorFirstName']) ? $data['supervisorFirstName'] : ''; ?>" required/>
                <label class="input-label">Supervisor's First Name</label>
            </div>
            <div class="input">
                <input type="text" class="input-field" name="supervisorLastName" value="<?php echo isset($data['supervisorLastName']) ? $data['supervisorLastName'] : ''; ?>" required/>
                <label class="input-label">Supervisor's Last Name</label>
            </div>
            <div class="input">
                <input type="email" class="input-field" name="supervisorEmail" value="<?php echo isset($data['supervisorEmail']) ? $data['supervisorEmail'] : ''; ?>" required/>                                        
                <label class="input-label">Supervisor's Email</label>
            </div>
            <div class="input">
                <input type="password" class="input-field" name="supervisorPassword" value="<?php echo isset($data['supervisorPassword']) ? $data['supervisorPassword'] : ''; ?>" required/>
                <label class="input-label">Supervisor's Password</label>
            </div>
            <div class="input">
                <input type="number" class="input-field" name="supervisorPhoneNumber" value="<?php echo isset($data['supervisorPhoneNumber']) ? $data['supervisorPhoneNumber'] : ''; ?>" required/>
                <label class="input-label">Supervisor's Phone Number</label>
            </div>
            <div class="input">
                <input type="text" class="input-field" name="supervisorAddress" value="<?php echo isset($data['supervisorAddress']) ? $data['supervisorAddress'] : ''; ?>" required/>
                <label class="input-label">Supervisor's Address</label>
            </div>
            <div class="input">
                <input type="text" class="input-field" name="supervisorGender" value="<?php echo isset($data['supervisorGender']) ? $data['supervisorGender'] : ''; ?>" required/>
                <label class="input-label">Supervisor's Gender</label>
            </div>
            <div class="input">
                <input type="date" class="input-field" name="supervisorDOB" value="<?php echo isset($data['supervisorDOB']) ? $data['supervisorDOB'] : ''; ?>" required/>
                <label class="input-label">Supervisor's DOB</label>
            </div>
            <div class="action">
                <input type="hidden" name="type" value="supervisorSignup">
                <input type="submit" class="action-button" name="supervisorSignup" value="Supervisor Signup">
            </div>
        </form> 
    </div>
<?php endif ?>


                <!--REGISTER PHARMACISTS-->

                <?php if ($action == 'registerPharmacists'): ?>
    <div class="card">
        <form class="card-form" method="post" action="../view/pharmacySignup.php">
            <div class="input">
                <input type="text" class="input-field" name="pharmacyName" value="<?php echo isset($data['pharmacyName']) ? $data['pharmacyName'] : ''; ?>" required/>
                <label class="input-label">Pharmacy's Name</label>
            </div>
            <div class="input">
                <input type="email" class="input-field" name="pharmacyEmail" value="<?php echo isset($data['pharmacyEmail']) ? $data['pharmacyEmail'] : ''; ?>" required/>                                        
                <label class="input-label">Pharmacy's Email</label>
            </div>
            <div class="input">
                <input type="password" class="input-field" name="pharmacyPassword" value="<?php echo isset($data['pharmacyPassword']) ? $data['pharmacyPassword'] : ''; ?>" required/>
                <label class="input-label">Pharmacy's Password</label>
            </div>
            <div class="input">
                <input type="number" class="input-field" name="pharmacyPhoneNumber" value="<?php echo isset($data['pharmacyPhoneNumber']) ? $data['pharmacyPhoneNumber'] : ''; ?>" required/>
                <label class="input-label">Pharmacy's Phone Number</label>
            </div>
            <div class="input">
                <input type="text" class="input-field" name="pharmacyAddress" value="<?php echo isset($data['pharmacyAddress']) ? $data['pharmacyAddress'] : ''; ?>" required/>
                <label class="input-label">Pharmacy's Address</label>
            </div>
            <div class="action">
                <input type="hidden" name="type" value="pharmacySignup">
                <input type="submit" class="action-button" name="pharmacySignup" value="Pharmacy Signup">
            </div>     
        </form>                              
    </div>
<?php endif ?>


                    <!--REGISTER ADMINS-->

                    <?php if ($action == 'registerAdmins'): ?>
    <div class="card">
        <form class="card-form" method="post" action="../view/adminSignup.php">
            <div class="input">
                <input type="text" class="input-field" name="adminFirstName" value="<?php echo isset($data['adminFirstName']) ? $data['adminFirstName'] : ''; ?>" required/>
                <label class="input-label">Admin's First Name</label>
            </div>
            <div class="input">
                <input type="text" class="input-field" name="adminLastName" value="<?php echo isset($data['adminLastName']) ? $data['adminLastName'] : ''; ?>" required/>
                <label class="input-label">Admin's Last Name</label>
            </div>
            <div class="input">
                <input type="email" class="input-field" name="adminEmail" value="<?php echo isset($data['adminEmail']) ? $data['adminEmail'] : ''; ?>" required/>                                        
                <label class="input-label">Admin's Email</label>
            </div>
            <div class="input">
                <input type="password" class="input-field" name="adminPassword" value="<?php echo isset($data['adminPassword']) ? $data['adminPassword'] : ''; ?>" required/>
                <label class="input-label">Admin's Password</label>
            </div>
            <div class="input">
                <input type="number" class="input-field" name="adminPhoneNumber" value="<?php echo isset($data['adminPhoneNumber']) ? $data['adminPhoneNumber'] : ''; ?>" required/>
                <label class="input-label">Admin's Phone Number</label>
            </div>
            <div class="input">
                <input type="text" class="input-field" name="adminAddress" value="<?php echo isset($data['adminAddress']) ? $data['adminAddress'] : ''; ?>" required/>
                <label class="input-label">Admin's Address</label>
            </div>
            <div class="input">
                <input type="text" class="input-field" name="adminGender" value="<?php echo isset($data['adminGender']) ? $data['adminGender'] : ''; ?>" required/>
                <label class="input-label">Admin's Gender</label>
            </div>
            <div class="input">
                <input type="date" class="input-field" name="adminDOB" value="<?php echo isset($data['adminDOB']) ? $data['adminDOB'] : ''; ?>" required/>
                <label class="input-label">Admin's DOB</label>
            </div>
            <div class="action">
                <input type="hidden" name="type" value="adminSignup">
                <input type="submit" class="action-button" name="adminSignup" value="Admin Signup">
            </div>
        </form>                                
    </div>
<?php endif ?>


            <div class="table-data">
                <div class="order">
                    <table>

                        <!-- VIEW PATIENTS -->

                        <?php if($action == 'viewPatients'): ?>
                            <div class="head">
                                <h3><?php //echo "$action"; ?> Patients</h3>
                                <i class='bx bx-search'></i>
                                <i class='bx bx-filter'></i>
                            </div>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Patient Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Phone Number</th>
                                    <th>Address</th>
                                    <th>Gender</th>
                                    <th>DOB</th>
                                    <th>Actions</th> <!-- New column for actions -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $row): ?>
                                    <tr>
                                        <td>
                                            <p><?php echo $row['ID']; ?></p>
                                        </td>
                                        <td><?php echo $row['patientFirstName']." ".$row['patientLastName']; ?></td>
                                        <td><?php echo $row['patientEmail']; ?></td>
                                        <td><?php echo $row['patientPassword']; ?></td>
                                        <td><?php echo $row['patientPhoneNumber']; ?></td>
                                        <td><?php echo $row['patientAddress']; ?></td>
                                        <td><?php echo $row['patientGender']; ?></td>
                                        <td><?php echo $row['patientDOB']; ?></td>
                                        <td>
                                            <a href="delete_user.php?id=<?php echo $row['ID']; ?>&type=patient" class="action-icon" onclick="return confirm('Are you sure you want to delete this user?')"><i class='bx bx-trash'></i></a>
                                            <a href="update_user.php?id=<?php echo $row['ID']; ?>&type=patient" class="action-icon"><i class='bx bx-edit'></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        <?php endif ?>

                        <!-- VIEW DOCTORS -->

                        <?php if($action == 'viewDoctors'): ?>
                            <div class="head">
                                <h3><?php //echo "$action"; ?> Doctors</h3>
                                <i class='bx bx-search'></i>
                                <i class='bx bx-filter'></i>
                            </div>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Doctor Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Phone Number</th>
                                    <th>Address</th>
                                    <th>Gender</th>
                                    <th>DOB</th>
                                    <th>Actions</th> <!-- New column for actions -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $row): ?>
                                    <tr>
                                        <td>
                                            <p><?php echo $row['ID']; ?></p>
                                        </td>
                                        <td><?php echo $row['doctorFirstName']." ".$row['doctorLastName']; ?></td>
                                        <td><?php echo $row['doctorEmail']; ?></td>
                                        <td><?php echo $row['doctorPassword']; ?></td>
                                        <td><?php echo $row['doctorPhoneNumber']; ?></td>
                                        <td><?php echo $row['doctorAddress']; ?></td>
                                        <td><?php echo $row['doctorGender']; ?></td>
                                        <td><?php echo $row['doctorDOB']; ?></td>
                                        <td>
                                            <a href="delete_user.php?id=<?php echo $row['ID']; ?>&type=doctor" class="action-icon" onclick="return confirm('Are you sure you want to delete this user?')"><i class='bx bx-trash'></i></a>
                                            <a href="update_user.php?id=<?php echo $row['ID']; ?>&type=doctor" class="action-icon"><i class='bx bx-edit'></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        <?php endif ?>

                        <!-- VIEW PHARMACEUTICAL COMPANIES --> 

                        <?php if($action == 'viewCompanies'): ?>
                            <div class="head">
                                <h3><?php //echo "$action"; ?> Pharmaceutical Companies</h3>
                                <i class='bx bx-search'></i>
                                <i class='bx bx-filter'></i>
                            </div>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Phone Number</th>
                                    <th>Address</th>
                                    <th>Actions</th> <!-- New column for actions -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $row): ?>
                                    <tr>
                                        <td>
                                            <p><?php echo $row['ID']; ?></p>
                                        </td>
                                        <td><?php echo $row['companyName']; ?></td>
                                        <td><?php echo $row['companyEmail']; ?></td>
                                        <td><?php echo $row['companyPassword']; ?></td>
                                        <td><?php echo $row['companyPhoneNumber']; ?></td>
                                        <td><?php echo $row['companyAddress']; ?></td>
                                        <td>
                                            <a href="delete_user.php?id=<?php echo $row['ID']; ?>&type=company" class="action-icon" onclick="return confirm('Are you sure you want to delete this user?')"><i class='bx bx-trash'></i></a>
                                            <a href="update_user.php?id=<?php echo $row['ID']; ?>&type=company" class="action-icon"><i class='bx bx-edit'></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        <?php endif ?>

                        <!-- VIEW PHARMACIES -->

                        <?php if($action == 'viewPharmacies'): ?>
                            <div class="head">
                                <h3><?php //echo "$action"; ?> Pharmacies</h3>
                                <i class='bx bx-search'></i>
                                <i class='bx bx-filter'></i>
                            </div>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Pharmacy Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Phone Number
                                    <th>Address</th>
                                    <th>Actions</th> <!-- New column for actions -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $row): ?>
                                    <tr>
                                        <td>
                                            <p><?php echo $row['ID']; ?></p>
                                        </td>
                                        <td><?php echo $row['pharmacyName']; ?></td>
                                        <td><?php echo $row['pharmacyEmail']; ?></td>
                                        <td><?php echo $row['pharmacyPassword']; ?></td>
                                        <td><?php echo $row['pharmacyPhoneNumber']; ?></td>
                                        <td><?php echo $row['pharmacyAddress']; ?></td>
                                        <td>
                                            <a href="delete_user.php?id=<?php echo $row['ID']; ?>&type=pharmacy" class="action-icon" onclick="return confirm('Are you sure you want to delete this user?')"><i class='bx bx-trash'></i></a>
                                            <a href="update_user.php?id=<?php echo $row['ID']; ?>&type=pharmacy" class="action-icon"><i class='bx bx-edit'></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        <?php endif ?>

                        <!-- VIEW DRUGS -->

                        <?php if($action == 'viewDrugs'): ?>
                            <div class="head">
                                <h3><?php //echo "$action"; ?> Drugs</h3>
                                <i class='bx bx-search'></i>
                                <i class='bx bx-filter'></i>
                            </div>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Expiry Date</th>
                                    <th>Manufacturing Date</th>
                                    <th>Drug Company</th>
                                    <th>Actions</th> <!-- New column for actions -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $row): ?>
                                    <tr>
                                        <td>
                                            <p><?php echo $row['ID']; ?></p>
                                        </td>
                                        <td><?php echo $row['drugName']; ?></td>
                                        <td><?php echo $row['drugDescription']; ?></td>
                                        <td><?php echo $row['drugPrice']; ?></td>
                                        <td><?php echo $row['drugQuantity']; ?></td>
                                        <td><?php echo $row['drugExpirationDate']; ?></td>
                                        <td><?php echo $row['drugManufacturingDate']; ?></td>
                                        <td><?php echo $row['drugCompany']; ?></td>
                                        <!-- <td>
                                            <a href="delete_user.php?id=<?php //echo $row['ID']; ?>&type=drug" class="action-icon" onclick="return confirm('Are you sure you want to delete this user?')"><i class='bx bx-trash'></i></a>
                                            <a href="update_user.php?id=<?php //echo $row['ID']; ?>&type=drug" class="action-icon"><i class='bx bx-edit'></i></a>
                                        </td> -->
                                        <td>
                                            <form method="POST" action="../view/dash.php?action=deleteDrugs">
                                                <input type="hidden" name="id" value="<?php echo $row['ID']; ?>">
                                                <input type="hidden" name="type" value="drug">
                                                <a href="#" onclick="if(confirm('Are you sure you want to delete this user?')) { this.parentNode.submit(); }" class="action-icon">
                                                    <i class='bx bx-trash'></i>
                                                </a>
                                            </form>
                                            <form method="POST" action="../view/dash.php?action=updateDrugs">
                                                <input type="hidden" name="id" value="<?php echo $row['ID']; ?>">
                                                <input type="hidden" name="type" value="drug">
                                                <input type="hidden" name="action" value="updateDrugs">
                                                <a href="#" onclick="this.parentNode.submit();" class="action-icon">
                                                    <i class='bx bx-edit'></i>
                                                </a>
                                            </form>
                                        </td>




                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        <?php endif ?>


                        <!-- VIEW PRESCRIPTIONS -->

                        <?php if($action == 'viewPrescriptions'): ?>
                            <div class="head">
                                <h3><?php //echo "$action"; ?> Prescriptions</h3>
                                <i class='bx bx-search'></i>
                                <i class='bx bx-filter'></i>
                            </div>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Patient ID</th>
                                    <th>Doctor ID</th>
                                    <th>Prescription Date</th>
                                    <th>Prescription Notes</th>
                                    <th>Drug ID</th>
                                    <th>Actions</th> <!-- New column for actions -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $row): ?>
                                    <tr>
                                        <td>
                                            <p><?php echo $row['ID']; ?></p>
                                        </td>
                                        <td><?php echo $row['patientID']; ?></td>
                                        <td><?php echo $row['doctorID']; ?></td>
                                        <td><?php echo $row['prescriptionDate']; ?></td>
                                        <td><?php echo $row['prescriptionNotes']; ?></td>
                                        <td><?php echo $row['drugID']; ?></td>
                                        <td>
                                            <a href="delete_user.php?id=<?php echo $row['ID']; ?>&type=prescription" class="action-icon" onclick="return confirm('Are you sure you want to delete this user?')"><i class='bx bx-trash'></i></a>
                                            <a href="update_user.php?id=<?php echo $row['ID']; ?>&type=prescription" class="action-icon"><i class='bx bx-edit'></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        <?php endif ?>

                        <!-- UPDATE DRUGS -->

                        <?php 
                        if($action == 'updateDrugs'): 
                            $id = $_POST['id'];
                            $data = $database->getDrug($id);
                        ?>
                            <div class="card">
                                <form class="card-form" method="post" action="../config/updateDrugs.php">
                                    <div class="input">
                                        <input type="text" class="input-field" name="drugName" value="<?php echo $data['drugName']; ?>" required/>
                                        <label class="input-label">Drug Name</label>
                                    </div>
                                    <div class="input">
                                        <input type="text" class="input-field" name="drugDescription" value="<?php echo $data['drugDescription']; ?>" required/>
                                        <label class="input-label">Drug Description</label>
                                    </div>
                                    <div class="input">
                                        <input type="number" step="0.01" min="0" class="input-field" name="drugPrice" value="<?php echo $data['drugPrice']; ?>" required/>
                                        <label class="input-label">Drug Price</label>
                                    </div>
                                    <div class="input">
                                        <input type="number" class="input-field" name="drugQuantity" value="<?php echo $data['drugQuantity']; ?>" required/>
                                        <label class="input-label">Drug Quantity</label>
                                    </div>
                                    <div class="input">
                                        <input type="date" class="input-field" name="drugExpirationDate" value="<?php echo $data['drugExpirationDate']; ?>" required/>
                                        <label class="input-label">Drug Expiration Date</label>
                                    </div>
                                    <div class="input">
                                        <input type="date" class="input-field" name="drugManufacturingDate" value="<?php echo $data['drugManufacturingDate']; ?>" required/>
                                        <label class="input-label">Drug Manufacturing Date</label>
                                    </div>
                                    <div class="input">
                                        <input type="text" class="input-field" name="drugCompany" value="<?php echo $data['drugCompany']; ?>" required/>
                                        <label class="input-label">Drug Company</label>
                                    </div>
                                    <div class="action">
                                        <input type="hidden" name="ID" value="<?php echo $data['ID']; ?>">
                                        <input type="hidden" name="type" value="updateDrug">
                                        <input type="submit" class="action-button" name="updateDrug" value="Update Drug">
                                    </div>
                                </form>
                            </div>
                        <?php endif ?>


                        <!-- DELETE DRUGS -->
                        <?php if ($action == 'deleteDrugs'): 
                         $id = $_POST['id'];
                         if($database->deleteDrug($id)){
                            echo "<script>alert('Drug deleted successfully')</script>";
                            echo "<script>window.location.href = '../view/dash.php?action=viewDrugs'</script>";
                         }else{
                            echo "<script>alert('Drug not deleted')</script>";
                            echo "<script>window.location.href = '../view/dash.php?action=viewDrugs'</script>";
                         }
                        ?>
                        <?php endif ?>
                        <?php ?>


                    </table>
                </div>
            </div>

        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->

    <script src="../Scripts/dash.js"></script>
</body>
</html>
