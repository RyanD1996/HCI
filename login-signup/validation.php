<?php
session_start();

$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'userregistration');

$email = $_POST['email'];
$password = $_POST['password'];

$s = "SELECT * FROM users WHERE email = '$email' && password = '$password'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num == 1){
  $sql = "SELECT first_name FROM users WHERE email = '$email' && password = '$password'";
  $result = mysqli_query($con, $s);
  $row = mysqli_fetch_row($result);
  $first_name = $row[0];
  $_SESSION['firstname'] = $first_name;
  header('location:../home.php');
}else{
  header('location:login.php');
}
?>
