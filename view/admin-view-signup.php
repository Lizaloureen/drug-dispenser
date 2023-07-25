<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin View Signup</title>
</head>
<body>
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
</body>
</html>