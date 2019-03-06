<?php
session_start();
header('location:login.php');
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'userregistration');

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];

$s = "select * from users where email = '$email'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num == 1){
  echo"That email address is already associated with an account";
}else{
  $reg = "insert into users(first_name,last_name, email, password) values ('$firstname', '$lastname', '$email', '$password')";
  mysqli_query($con, $reg);
  echo" Registration Successful";
}
?>
