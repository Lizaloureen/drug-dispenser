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
            <option value="./drug-dispenser/view/patientSignup.php">Patient</option>
            <option value="./drug-dispenser/view/doctorSignup.php">Doctor</option>
            <option value="./drug-dispenser/view/supervisorSignup.php">Supervisor</option>
            <option value="./drug-dispenser/view/pharmacySignup.php">Pharmacist</option>
            <option value="./drug-dispenser/view/adminSignup.php">Admin</option>
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
