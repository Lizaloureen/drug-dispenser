<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Homepage</title>
  <link rel="icon" href=".\drug-dispenser\logo.jpg">
  <link rel="stylesheet" href="../Static/homepage.css">
</head>

<body style="margin: 0;">
  <!--The Navigation Bar-->
  <div>
    <nav class="navbar">
      <!-- LOGO image-->
      <div class="logo" style="color: black; font-size:50px;">My medicine</div>
        <!-- NAVIGATION MENUS -->
        <div class="menu">
          <!-- NAVIGATION MENU -->
            <ul class="nav-links">
            <li><a href="./login.php">Login</a></li>
            <li><a href="./signup.php">Sign Up</a></li>
            </ul>
        </div>
    </nav>
  </div>

  <!--The main content-->
  <div class="container" style="margin-top: -500px;">
    <div class="row">
      <div class="col">
        <div class="text-right">
            <div class="text-wrap">
            <h2>Haven for doctors</h2>
            <img src="../doctor.jpeg" alt="Photo 1" class="photo-left">
            <p>Bringing a whole new view to drug dispensation.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <div class="text-left">
          <h2>Trusted by Patients worldwide</h2>
          <img src="../patient.jpeg" alt="Photo 2" class="photo-right">
          <p>Get a secure platform to view your prescriptions</p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <div class="text-right">
          <h2>Ensurance</h2>
          <img src="../image3.jpeg" alt="Photo 3" class="photo-left">
          <p>Doctors also get a platform to track their patients prescriptions</p>
        </div>
      </div>
    </div>
  </div>

  <br>
  <br>
  <br>

  <!--The footer-->
  <footer class="footer">
    <div class="footer-container">
      <div class="row">
        <div class="footer-col">
          <h3>About Us</h3>
          <p>Excellence</p>
        </div>
        <div class="footer-col">
          <h3>Contact Us</h3>
          <ul>
            <li>Address: 123 Main St, Anytown </li>
            <li>Phone: 555-123-4567</li>
            <li>Email: info@example.com</li>
          </ul>
        </div>
        <div class="footer-col">
          <h3>Follow Us</h3>
          <ul>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Instagram</a></li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="footer-col">
          <p>&copy; 2023 My-Medicine. All rights reserved.</p>
        </div>
      </div>
    </div>
  </footer>

</body>

</html>