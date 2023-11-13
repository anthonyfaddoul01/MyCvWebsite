<?php
session_start();
$message = '';

$loggedIn = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
  
    if (checkCredentials($username, $password)) {
    $_SESSION['username'] = $username;
    $loggedIn = true;
    } else {
        $loggedIn = false;
        
    }
    echo $message;
  }

function checkCredentials($username, $password) {
    $csvFile = 'users.csv';

    if (($handle = fopen($csvFile, 'r')) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ',')) !== FALSE) {
            if ($data[0] === $username && $data[2] === $password) {
                fclose($handle);
                return true;
            }
        }
        fclose($handle);
    }
    return false; 
}

if ($loggedIn) {
    $username = $_SESSION['username'];
    //echo "Welcome, $username!";
    header("location:Home.php");
} else {
    echo "Wrong username or password!";
    header("location:logingpage.php");
}

?>
