<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Insert Data</title>
</head>
<style media="screen">
    label {
        display;
    }
</style>
<body>
    <h2>Patient's Form</h2>
    <form class="" action="insert.php" method="post" autocomplete="off">
        <label for="">patientssn</label>
        <input type="number" name="patientssn" required value="">
        <label for="">Name</label>
        <input type="text" name="Name" required value="">
        <label for="">PhoneNo</label>
        <input type="number" name="PhoneNo" required value="">
        <label for="">Password</label>
        <input type="password" name="Password" required value="">
        <label for="">Address</label>
        <input type="text" name="Address" required value="">
        <label for="">Gender</label>
        <input type="text" name="Gender" required value="">

        <br>
        <button type="submit" name="submit">Submit</button>
        </br>
    </form>
</body>
</html>