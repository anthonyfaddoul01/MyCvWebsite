<?php

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
  $fullname = $_POST['fullname'];
  $password = $_POST['password'];
  $sex = $_POST['sex'];
  $birthdate = $_POST['birthdate'];

  if (userExists($username)) {
    $message = "User already exists. Please choose a different username.";
    //echo "User already exists. Please choose a different username.";
  } else {
      saveToCSV($username, $fullname, $password, $sex, $birthdate);
      $message = "Sign-up successful!";
      //header("Location: login.html");
      //exit();
      
  }
  echo $message;
}

function userExists($username) {
  $csvFile = 'users.csv';

  if (($handle = fopen($csvFile, 'r')) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ',')) !== FALSE) {
      if ($data[0] === $username) {
        fclose($handle);
        return true;
      }
    }
    fclose($handle);
  }
  return false;
}

function saveToCSV($username, $fullname, $password, $sex, $birthdate) {
  $data = [$username, $fullname, $password, $sex, $birthdate];
  $csvFile = 'users.csv';
  $file = fopen($csvFile, 'a');
  fputcsv($file, $data);
  fclose($file);
}
?>
