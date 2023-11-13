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
        <h2>Activities</h2>
    </div>
    <div class="container2" style="margin-right: 240px;">
        <img src="../images/football.jpeg">
        <h2>Football</h2>
    </div>
    <div class="container2">
        <img src="../images/gym.webp">
        <h2>GYM<br>Weight Lifting</h2>
    </div>
    
    

</body>
</html>