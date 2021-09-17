<?php
$server ='localhost';
$username = 'root';
$password='';
$database = 'jobs';

$conn = mysqli_connect($server, $username, $password,$database);

if($conn -> connect_error){
   die("Connection failed:" .$conn -> connect_error);
}
echo"";
session_start();
if(isset($_POST['submit'])){
   $name = $_POST['name'];
   $email = $_POST['email'];
   $number = $_POST['phone_no'];
   $password = $_POST['password'];

   $sql = "INSERT INTO `users`(`Name`, `email`, `phone_no`, `password`) VALUES ('$name','$email','$number','$password')";
   if(mysqli_query($conn, $sql)){
      echo "Records incerted sucessfully.";
      header("location:login.php");
   } else {
      echo "ERROR: Could not be able to execute $sql. ". mysqli_error($conn);
   }
}

// session_start();
if(isset($_POST['Login'])){
   $email = $_POST['email'];
   $password = $_POST['password'];

   $query= "SELECT * FROM users WHERE `email` ='$email' AND `password` = '$password'";
   $result = mysqli_query($conn,$query);
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

   if(mysqli_num_rows($result) == 1){
      header("location:index.php");
   } else {
      $error = "Incorrect email id or password.";
   }
}
mysqli_close($conn);
?>