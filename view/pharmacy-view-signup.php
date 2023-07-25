<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy View Signup</title>
</head>
<body>
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
</body>
</html>