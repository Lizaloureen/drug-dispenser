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
    <h2>Pharmacy's Form</h2>
    <form class="" action="insert.php" method="post" autocomplete="off">
        <label for="">Name</label>
        <input type="text" name="Name" required value="">
        <label for="">phSSN</label>
        <input type="number" name="phSSN" required value="">
        <label for="">PhoneNo</label>
        <input type="number" name="PhoneNo" required value="">
        <label for="">ProfitPercentage</label>
        <input type="number" name="profitPercentage" required value="">
        <label for="">drugTradeName</label>
        <input type="text" name="DrugTradeName" required value="">
        <label for="">Address</label>
        <input type="text" name="address" required value="">
        <br>
        <button type="submit" name="submit">Submit All</button>
        </br>
    </form>
</body>
</html>