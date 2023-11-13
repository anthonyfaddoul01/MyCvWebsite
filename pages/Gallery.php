<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: loginpage.php");
    exit();
}

$username = $_SESSION['username'];

?>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            Gallery
        </title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/icons.css">
    </head>
    <body>
        <header id="homeheader">
            <div class="dropdown">
                <button class="dropbtn"><i class="ico burger-ico"></i>Menu</button>
                <div class="dropdown-content">
                    <a href="Home.php"><i class="ico ico-l home-ico"></i>Home</a>
                    <a href="about.php"><i class="ico ico-l user-ico"></i>CV</a>
                    <a href="contact.php"><i class="ico ico-l phone-ico"></i>Contact Us</a>
                </div>
            </div>
            <a href="logout.php" style="text-decoration: none; width:10%; float:right; margin-top:5px; margin-left:14px" class="button-like">Log Out</a>
            <div style="width:10%; float:right; margin-top:14px">Welcome, <?php echo $username; ?>!</div>
        </header>
          
    <div class="image-container">
    <?php
                $galleryFile = 'gallery.txt';
                $imageNames = file($galleryFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                foreach ($imageNames as $imageName) {
                    $imagePath = "../images/$imageName";
                    echo "<img src=\"$imagePath\" alt=\"$imageName\">";
                }
            ?>
    </div>
    </body>
</html>