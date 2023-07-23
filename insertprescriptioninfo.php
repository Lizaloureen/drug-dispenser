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
    <h2>Prescription's Form</h2>
    <form class="" action="insert.php" method="post" autocomplete="off">
        <label for="">PrescriptionNo</label>
        <input type="number" name="prescriptionNo" required value="">
        <label for="">PrescriptionDate</label>
        <input type="Date" name="prescriptionDate" required value="">
        <label for="">Quantity</label>
        <input type="number" name="quantity" required value="">
        <label for="">patientssn</label>
        <input type="number" name="patientssn" required value="">
        <label for="">docssn</label>
        <input type="number" name="docssn" required value="">
        <br>
        <button type="submit" name="submit">Submit</button>
        </br>
    </form>
</body>
</html>