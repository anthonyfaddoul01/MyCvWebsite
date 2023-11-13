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
        <h2>About Me</h2>
    </div>
    <div class="container2">
        <img src="../images/me.JPG">
        <p class="parag">I'm currently a <span style="color: crimson;">third-year computer science student at LAU (Lebanese American University). </span>
            Throughout my journey in this field, I've had the opportunity to dive into a wide range of subjects, 
            from programming languages like <span style="color: crimson;">Python, Java, and C to data structures, algorithms, and the principles behind operating systems.</span> 
            I've also explored software engineering practices, including the <span style="color: crimson;">software development life cycle and effective teamwork, 
            as well as database management and computer networks.</span> As the field evolves, 
            I've also been introduced to exciting areas such as artificial intelligence, machine learning, and cybersecurity. 
            Moving forward, I'm considering specialization options within computer science, 
            and I'm excited to see where this dynamic and evolving field will take me in my professional journey.</p>
    </div>

    
    <div style="width: 50%; float:left; height:100%; margin:10px">
        <h1 style="margin-left: 10px; color: white;">Skills</h1>
        <p style="margin-left: 10px; color: white;">HTML/CSS</p>
        <div class="container3">
            <div class="skills html"></div>
        </div>

        <p style="margin-left: 10px; color: white;">JavaScript</p>
        <div class="container3">
            <div class="skills js"></div>
        </div>

        <p style="margin-left: 10px; color: white;">Python</p>
        <div class="container3">
            <div class="skills py"></div>
        </div>

        <p style="margin-left: 10px; color: white;">SQL</p>
        <div class="container3">
            <div class="skills sql"></div>
        </div>

        <p style="margin-left: 10px; color: white;">Java</p>
        <div class="container3">
            <div class="skills java"></div>
        </div>
    </div>
    <div style="width: 45%; float:left; height:100%; margin:10px">
        <h1 style="margin-left: 10px; color: white;">Languages</h1>
        <p style="margin-left: 10px; color: white;">English</p>
        <div class="container3">
            <div class="skills html"></div>
        </div>

        <p style="margin-left: 10px; color: white;">French</p>
        <div class="container3">
            <div class="skills html"></div>
        </div>

        <p style="margin-left: 10px; color: white;">Arabic</p>
        <div class="container3">
            <div class="skills js"></div>
        </div>
    </div>
</body>
</html>