<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <style>
    .container {
      width: 300px;
      padding: 16px;
      background-color: #f1f1f1;
    }
    
    input[type=text], input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }
    
    button {
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
    }
    
    button:hover {
      opacity: 0.8;
    }
    
    .container {
      padding: 16px;
    }
  </style>
</head>
<body>
  <form action="../config/login.php" method="POST">
    <div class="container">
      <label for="ID"><b>Username(ID)</b></label>
      <input type="number" placeholder="Enter ID" name="ID" required>
      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter password" name="password" required>
      <button type="submit">Login</button>


      <select name="entity" id="entity">
        <option value="Select entity" disabled>Select Entity</option>
        <option value="patient">Patient</option>
        <option value="doctor">Doctor</option>
        <option value="admin">Admin</option>
        <option value="pharmacy">Pharmacy</option>
        <option value="pharmaceuticalCompany">Pharmaceutical Company</option>
      </select>

    </div>
  </form>
</body>
</html>
