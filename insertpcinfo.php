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
    <h2>Pharmaceutical Company's Form</h2>
    <form class="" action="insert.php" method="post" autocomplete="off">
        <label for="">pcSSN</label>
        <input type="number" name="pcSSN" required value="">
        <label for="">pcName</label>
        <input type="text" name="pcName" required value="">
        <label for="">Address</label>
        <input type="text" name="address" required value="">
        <label for="">PhoneNumber</label>
        <input type="number" name="PhoneNumber" required value="">
        <br>
        <button type="submit" name="submit">Submit All</button>
        </br>
    </form>
</body>
</html>