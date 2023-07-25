<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor View Signup</title>
</head>
<body>
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
</body>
</html>