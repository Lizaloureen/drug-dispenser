<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Medicine Drug Dispensary Website</title>
    <img src="C:\xampp1\htdocs\drug dispensing\drug-dispenser\logo.jpg">
    <script src="https://kit.fontawesome.com/0a8553134c.js"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="C:\xampp1\htdocs\drug dispensing\drug-dispenser\Static\homepage.scss">
</head>
<body>
    <!--WELCOME PAGE-->
    <nav class="navigation">
        <a href="#">Home</a>
        <br>
        <a href="#">About Us</a>
        <br>
        <a href="#">Departments</a>
        <br>
        <a href="#">Contact Us</a>
    </nav>
    <section id="welcome-section">
        <h2 class="welcome-text">Welcome To</h2>
        <h1 class="name">My Medicine </h1>
        <p class="welcome-speech">We are a drug dispensing site which connects doctors, patients, pharmacies and companies 
        to ease the transfer of medicines with reduced physical contact.</p>
        <a href="#" class="welcome-button">Learn More</a>
    </section>
    <!--ROLES PAGE-->
    <section id="role-section">
        <div class="big-box">
            <h1>WHO ARE YOU ?</h1>
            <div class="small-box">
            <img src="C:\xampp1\htdocs\drug dispensing\drug-dispenser\admin.png" alt="Admin">
            <a href="dash.php" class="button">Admin</a>
            </div>
            <div class="small-box">
            <img src="C:\xampp1\htdocs\drug dispensing\drug-dispenser\patient.jpeg" alt="Patient">
            <a href="patient.php" class="button">Patient</a>
            </div>
            <div class="small-box">
            <img src="C:\xampp1\htdocs\drug dispensing\drug-dispenser\doctor.jpeg" alt="Doctor">
            <a href="doctor.php" class="button">Doctor</a>
            </div>
            <div class="small-box">
            <img src="C:\xampp1\htdocs\drug dispensing\drug-dispenser\pharmaceutical.jpeg" alt="Pharmaceutical Company">
            <a href="pharmaceuticalCompany.php" class="button">Pharmaceutical Company</a>
            </div>
            <div class="small-box">
            <img src="C:\xampp1\htdocs\drug dispensing\drug-dispenser\pharmacy.png" alt="Pharmacy">
            <a href="pharmacy.php" class="button">Pharmacy</a>
            </div>
        </div>
    </section>
    <!--ABOUT PAGE-->
    <section id="about-section">
        <h1 class="about-title">ABOUT US</h1>
        <div class="about-bbox">
            <div class="about-sbox">
                <video src="../images/about1.mp4" controls class="about-video"></video>
            </div>
            <div class="about-sbox">
                <h2>Delivering Health Care Remotely.</h2>
                <p>Remote healthcare delivery is transforming patient access, enabling virtual consultations and 
                    monitoring for efficient, convenient, and cost-effective medical services.</p>
                <ul>
                    <li>Consultations</li>
                    <li>Dispensing Prescriptions</li>
                    <li>Writing Prescriptions</li>
                    <li>Making Medicines</li>
                </ul>
            </div>
        </div>
    </section>
    <!--TESTIMONIAL PAGE-->
    <section class="testimonial-section">
        <div class="testimonial-container">
        <h1>Reviews</h1>
            <div class="testimonial">
            <img src="C:\xampp1\htdocs\drug dispensing\drug-dispenser\image.png" alt="Person 1">
            <h2>John Doe</h2>
            <p class="position">CEO, Company XYZ</p>
            <p class="location">New York, USA</p>
            <p class="testimonial-content">This drug dispensing website is a game-changer! I can easily find and order my medications online, 
                and the fast delivery and responsive customer service make it a top-notch experience.</p>
            </div>
            <div class="testimonial">
            <img src="C:\xampp1\htdocs\drug dispensing\drug-dispenser\image.png" alt="Person 2">
            <h2>Jane Smith</h2>
            <p class="position">Marketing Manager</p>
            <p class="location">London, UK</p>
            <p class="testimonial-content">I highly recommend this drug dispensing website. It's secure, convenient, and offers competitive prices on medications, 
                ensuring I always receive the best care for my health needs.</p>
            </div>
            <div class="testimonial">
            <img src="C:\xampp1\htdocs\drug dispensing\drug-dispenser\image.png" alt="Person 3">
            <h2>Mark Johnson</h2>
            <p class="position">Designer, ABC Company</p>
            <p class="location">San Francisco, USA</p>
            <p class="testimonial-content">Using this drug dispensing website has simplified my life. Now, I can manage my prescriptions effortlessly and have them 
                delivered right to my doorstep, saving me valuable time and effort.</p>
            </div>
        </div>
    </section>
    <!--MAPS-->
    <section class="map">
        <h1>DIRECTIONS</h1>
        <br>
        <p><iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15954.197060612434!2d36
        .9977538!3d1.4451497!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb3b7130e807d95aa!2sDBFC%20mav
        oko!5e0!3m2!1sen!2ske!4v1669312865613!5m2!1sen!2ske" width="950" height="450"
        style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrerwhen-downgrade"></iframe></p>
    </section>
    <!--CONTACT PAGE-->
    <section class="contact">
        <h1>OUR SOCIAL MEDIA PLATFORMS</h1>
        <a href="https://www.youtube.com/" target="_blank" title="This takes you to our 
        Youtube channel">
            <i class="fa-brands fa-youtube"></i>
        </a>
        <br>
        <br>
        <a href="https://www.facebook.com/" target="_blank" title="This takes you to 
        our facebook account">
            <i class="fa-brands fa-facebook"target="_blank"></i>
        </a>
        <br>
        <br>
        <a href="https://www.instagram.com/" target="_blank" title="This takes you to 
        our instagram account">
        <i class="fa-brands fa-instagram"target="_blank"></i>
        </a>
        <br>
        <br>
        <i class="fa-brands fa-whatsapp"></i>
        <br>
        <br>
        <i class="fa-solid fa-phone"></i>
        <br>
        <h3>THE FRONTEND NO :</h3><p>+254740539597</p>
        <h3>THE BACKEND NO :</h3><p>+254740539597</p>
        <br>
    </section>
        <section class="footer">
        <p>Created by the<h3>AL Creators</h3>
        
        <h5>+254740539597</h5>
        <h5>ayushi.savla@strathmore.edu
            <br>
            lizaloureen.mawia@strathmore.edu
        </h5>
    </section>
</body>
</html>