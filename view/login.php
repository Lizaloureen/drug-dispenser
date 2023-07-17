<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <link rel="stylesheet" href="../Static/login.css">
  <link rel="stylesheet" href="../Static/form.scss">
  <title>Login</title>
  <!-- <style>
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
  </style> -->
</head>
<body>
  <div class="card">
    <form class="card-form" method="POST" action="../config/login.php">
			<div class="input">
				<input type="text" class="input-field" name="ID"  required/>
				<label class="input-label">Username</label>
			</div>
            <div class="input">
                <input type="password" class="input-field" name="password" required/>
                <label class="input-label">Password</label>
            </div>
            <div class="input">
                <select name="entity" id="entity" class="input-field" value="">
                    <option value="" class="input" disabled selected>Select Entity</option>
                    <option value="doctors" class="input">Doctor</option>
                    <option value="patients" class="input">Patient</option>
                    <option value="supervisors" class="input">Supervisor</option>
                    <option value="companies" class="input">Pharmaceutical</option>
                    <option value="pharmacies" class="input">Pharmacy</option>
                    <option value="admins" class="input">Admin</option>
                </select>
				<label class="input-label">Entity</label>
			</div>
            <div class="action">
                <input type="submit" class="action-button" value="Login" />
            </div>
      </form>
  </div>
</body>
</html>
