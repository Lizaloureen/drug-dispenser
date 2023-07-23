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
    <h2>Contract's Form</h2>
    <form class="" action="insert.php" method="post" autocomplete="off">
        <label for="">textofcontract</label>
        <input type="text" name="textofcontract" required value="">
        <label for="">supervisor</label>
        <input type="text" name="supervisor" required value="">
        <label for="">startdate</label>
        <input type="date" name="startdate" required value="">
        <label for="">enddate</label>
        <input type="date" name="enddate" required value="">
        <br>
        <button type="submit" name="submit">Submit All</button>
        </br>
    </form>
</body>
</html>