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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header id="homeheader">
        <div class="dropdown">
            <button class="dropbtn"><i class="ico burger-ico"></i>Menu</button>
            <div class="dropdown-content">
                <a href="Home.php"><i class="ico ico-l home-ico"></i>Home</a>
                <a href="about.php"><i class="ico ico-l user-ico"></i>CV</a>
                <a href="Gallery.php"><i class="ico ico-l gallery-ico"></i>Gallery</a>
            </div>
        </div>
        <a href="logout.php" style="text-decoration: none; width:10%; float:right; margin-top:5px; margin-left:14px" class="button-like">Log Out</a>
        <div style="width:10%; float:right; margin-top:14px">Welcome, <?php echo $username; ?>!</div>
    </header>
    
    <div class="contact-container">
        <h1>Contact Information</h1>
        <ul class="contact-list">
            <li>
                <i class="fa fa-user"></i>
                Anthony Faddoul
            </li>
            <li>
                <i class="fa fa-envelope"></i>
                anthonyfn27@gmail.com
            </li>
            <li>
                <i class="fa fa-phone"></i>
                +961 70 680 415
            </li>
            <li>
                <i class="fa fa-map-marker"></i>
                Beirut, Lebanon
            </li>
        </ul>
    </div>

    
    
</body>
</html>