<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: loginpage.php");
    exit();
}

$username = $_SESSION['username'];

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anthony Faddoul - CV</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/icons.css">
</head>
<body>
    <header id="homeheader">
        <div class="dropdown">
            <button class="dropbtn"><i class="ico burger-ico"></i>Menu</button>
            <div class="dropdown-content">
                <a href="Home.php"><i class="ico ico-l home-ico"></i>Home</a>
                <a href="Gallery.php"><i class="ico ico-l gallery-ico"></i>Gallery</a>
                <a href="contact.php"><i class="ico ico-l phone-ico"></i>Contact Us</a>
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="about.php">About Me</a></li>
                <li><a href="experiences.php">Experiences</a></li>
                <li><a href="projects.php">Projects</a></li>
                <li><a href="activities.php">Activities</a></li>
            </ul>
        </nav>
        <a href="logout.php" style="text-decoration: none; width:10%; float:right; margin-top:5px; margin-left:14px" class="button-like">Log Out</a>
        <div style="width:10%; float:right; margin-top:14px">Welcome, <?php echo $username; ?>!</div>
    </header>
    <div class="container2">
        <h2>Experiences And Certifications</h2>
    </div>
    <div class="container2">
        <img src="../images/ids.png">
        <p class="parag"><span style="color: #0993aa;">1- Software Development Internship  <span style="color: white;font-size: 18px;">(experience)</span>
            <br><span style="color: #0ffff7; font-size: 18px;margin-left: 50px;">
                        Inegrated Digital Systems (IDS)</span><span style="color: #0ffff7; font-size: 18px;margin-left: 50px">
                            June 2023 - August 2023</span><br><br></span>
                            During my internship at IDS, I played a pivotal role in the development of a Meeting Room Management System, 
                            learning frontend technologies like HTML, CSS, and JavaScript as well as backend 
                            like .NET, C#, and SQL to create a secure API and a robust database, ensuring seamless data flow. 
                            Being my first experience in the industry, this internship allowed me to gain hands-on experience, collaborate effectively with a team, 
                            and deliver a user-friendly, fully functional solution.</p>
    </div>
    <div class="container2">
        <img src="../images/teens.png">
        <p class="parag"><span style="color: #0993aa;">2- Teens Who Code BootCamp  <span style="color: white;font-size: 18px;">(certification)</span>
            <br><span style="color: #0ffff7; font-size: 18px;margin-left: 50px">
            Beirut Digital District (BDD)</span><span style="color: #0ffff7; font-size: 18px;margin-left: 50px">
            June 2019</span><br><br></span>
            This has been one of the most educational experience I have ever had. I have participated in 4 computer courses:
            Introduction to computer science, Introduction to Python, Application development on android, Film making and production.</p>
    </div>
    
    

</body>
</html>