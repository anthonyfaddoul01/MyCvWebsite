<?php
session_start();
?>

<html>
<head>
<title>Log In</title>
<link rel="stylesheet" href="../css/style.css">
</head>  
<body>

<h1 style="color: white; padding-left: 8px;">Log In</h1>

<div class="scontainer">
  <form method="post" action="login.php" onsubmit="return validateForm()">
    <label class="labels" for="username">Username</label><br>
    <input type="text" id="username" name="username" required><br>

    <label class="labels" for="password">Password</label><br>
    <input type="password" id="password" name="password" required><br><br>

    <button onclick="window.location.href='../index.html'" class="sbutton">Sign Up</button>
    <button style="margin-left: 10%;" class="sbutton" type="submit">Log In</button>
  </form>
</div>

</body>

<script>
  function validateForm() {

    var username = <?php echo json_encode($_SESSION['username']); ?>;
  
    console.log(username);
var xhr = new XMLHttpRequest();
xhr.open("POST", "login.php", true);
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
xhr.onreadystatechange = function() {
  if (xhr.readyState == 4) {
    if (xhr.status == 200) {
      var response = xhr.responseText;
      alert(response);
      if (response === "Welcome, "+username+"!") {
        window.location.href = "Home.php";
      }
    }
  }
};
xhr.send(urlEncodedData);

return false;

  }
  </script>
</html>