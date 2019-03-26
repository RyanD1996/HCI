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
  $sql = "SELECT first_name, email, points, environmental_savings, distance_travelled, trips_taken FROM users WHERE email = '$email' && password = '$password'";
  $result = mysqli_query($con, $s);
  $row = mysqli_fetch_row($result);
  $first_name = $row[1];
  $email = $row[3];
  $points = $row[5];
  $environmental_savings = $row[6];
  $distance_travelled = $row[7];
  $trips_taken = $row[8];
  $_SESSION['firstname'] = $first_name;
  $_SESSION['points'] = $points;
  $_SESSION['environmental_savings'] = $environmental_savings;
  $_SESSION['distance_travelled'] = $distance_travelled;
  $_SESSION['trips_taken'] = $trips_taken;
  $_SESSION['email'] = $email;
  header('location:../home.php');
}else{
  header('location:login.php');
}
?>
