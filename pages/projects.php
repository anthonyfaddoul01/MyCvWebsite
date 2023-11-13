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
        <h2>My Projects</h2>
    </div>
    <div class="container2">
        <img src="../images/metroom.png">
        <p class="parag"><span style="color: #0993aa;">1- Meeting Room Management System:<br><br></span>
            I developed a meeting room management system from the ground up. Using my frontend skills in HTML, 
            CSS, and JavaScript, I created an intuitive and visually appealing user interface. For the backend, 
            I've used .NET, C#, and SQL to create a strong and secure API, ensuring seamless data flow between the frontend and the database.</p>
    </div>
    <div class="container2">
        <img src="../images/HOTEL1.png">
        <p class="parag"><span style="color: #0993aa;">2- Hotel Reservation Management System:<br><br></span>
            A software engineering project with a team where we developed a hotel management system. We applied software engineering techniques 
            to create a portion of a website dedicated to hotel management. Each member was assigned a part. I used HTML, CSS, JavaScript, PHP, and SQL. 
            This dynamic combination allowed me to design an interactive and user-friendly website that empowers hotels to efficiently manage 
            their operations and reservations. Our collaborative effort has contributed to a successful software</p>
    </div>
    <div class="container2">
        <img src="../images/chattingapp.png">
        <p class="parag"><span style="color: #0993aa;">3- Chatting App:<br><br></span>
            I developed a chatting app designed to operate over a network. 
            Using the knowledge and skills I gained in computer networking course and my knowledge in Python along with key networking 
            protocols such as TCP, UDP, and IP, i created a reliable chatting application. 
            What truly made my work stand out was my testing on unreliable connections,
             ensuring that my app remained functional even in less-than-ideal network conditions.</p>
    </div>
    <div class="container2">
        <img src="../images/supermarket.png">
        <p class="parag"><span style="color: #0993aa;">4- Supermarket Database:<br><br></span>
                In a database course at university,
                we were assigned to create the database of a supermarket with my group. We designed and executed a comprehensive database system. 
                By applying SQL and fundamental database principles, we developed a database to the supermarket's needs. 
                Our work focused mostly on inventory management, optimized sales tracking, and enhanced overall operations, 
                showcasing our commitment to efficient database management in the retail sector.</p>
    </div>
    

</body>
</html>