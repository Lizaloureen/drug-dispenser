<!DOCTYPE html>
<html>
<head>
    <title>User Signup</title>
</head>
<body>
    <h1>Select an Identity to Signup as</h1>
    <form>
        <select id="redirectDropdown" onchange="redirectToLink()">
            <option value="">Select an option</option>
            <option value="../../drug-dispenser/view/patient-view-signup.php">Patient</option>
            <option value="../../drug-dispenser/view/doctor-view-signup.php">Doctor</option>
            <option value="../../drug-dispenser/view/supervisor-view-signup.php">Supervisor</option>
            <option value="../../drug-dispenser/view/pharmacy-view-signup.php">Pharmacist</option>
            <option value="../../drug-dispenser/view/admin-view-signup.php">Admin</option>
        </select>
    </form>

    <script>
        function redirectToLink() {
            var selectedValue = document.getElementById("redirectDropdown").value;
            if (selectedValue !== "") {
                window.location.href = selectedValue;
            }
        }
    </script>
</body>
</html>
