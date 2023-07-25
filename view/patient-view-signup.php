<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient View Signup</title>
</head>
<body>
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
</body>
</html>