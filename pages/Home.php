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
    <link rel="stylesheet" href="../css/icons.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header id="homeheader">
        <div class="dropdown">
            <button class="dropbtn"><i class="ico burger-ico"></i>Menu</button>
            <div class="dropdown-content">
                <a href="about.php"><i class="ico ico-l user-ico"></i>CV</a>
                <a href="Gallery.php"><i class="ico ico-l gallery-ico"></i>Gallery</a>
                <a href="contact.php"><i class="ico ico-l phone-ico"></i>Contact Us</a>
            </div>
        </div>
        <a href="logout.php" style="text-decoration: none; width:10%; float:right; margin-top:5px; margin-left:14px" class="button-like">Log Out</a>
        <div style="width:10%; float:right; margin-top:14px">Welcome, <?php echo $username; ?>!</div>
    </header>

    <div class="container">
        <div><img src="../images/me.JPG" class="myimage"></div>
        
        <h1>Anthony<br>Faddoul</h1>
    </div>
    

</body>
</html>
