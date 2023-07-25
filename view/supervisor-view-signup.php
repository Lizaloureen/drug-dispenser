<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supervisor View Signup</title>
</head>
<body>
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
</body>
</html>