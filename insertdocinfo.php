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
    <h2>Doctor's Form</h2>
    <form class="" action="insert.php" method="post" autocomplete="off">
    <label for="">docssn</label>
        <input type="number" name="docssn" required value="">
        <label for="">Name</label>
        <input type="text" name="Name" required value="">
        <label for="">PhoneNumber</label>
        <input type="number" name="PhoneNumber" required value="">
        <label for="">Password</label>
        <input type="password" name="password" required value="">
        <label for="">Address</label>
        <input type="text" name="address" required value="">
        <label for="">Gender</label>
        <input type="text" name="Gender" required value="">
        <br>
        <button type="submit" name="submit">Submit All</button>
        </br>
    </form>
</body>
</html>