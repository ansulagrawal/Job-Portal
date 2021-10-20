<?php
$server ='localhost';
$username = 'root';
$password='';
$database = 'jobs';

$conn = mysqli_connect($server, $username, $password,$database);

if($conn -> connect_error){
   die("Connection failed:" .$conn -> connect_error);
} else{
   echo"";
}

session_start();

//Register Function
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

//Login Function
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

// Job Creation Fun Admin Side
if(isset($_POST['jobCreate'])){
   $cName = $_POST['cName'];
   $pos = $_POST['pos'];
   $jDec = $_POST['jDesc'];
   $ctc = $_POST['ctc'];
   $skills = $_POST['skills'];
   $sql = "INSERT INTO `jobs`(`cname`, `position`, `jdesc`, `skills`, `ctc`) VALUES ('$cName','$pos','$jDec', '$skills', '$ctc')";
   if(mysqli_query($conn, $sql)){
      echo "";
   } else {
      echo "ERROR: Failed to post the query $sql. ". mysqli_error($conn);
   }
}

//Apply for Job Candidate side:
if(isset($_POST['appliedJob'])){
   $canName = $_POST['canname'];
   $compName = $_POST['compname'];
   $qual = $_POST['qual'];
   $yearPass = $_POST['yearPass'];
   $resume = $_POST['resume'];
   $sql = "INSERT INTO `canditate`(`Name`, `Applying For`, `Qualification`, `Year Passout`, `Resume Link`) VALUES ('$canName','$compName', '$qual', '$yearPass', '$resume')";
   if(mysqli_query($conn,$sql)){
      echo "";
   } else{
      echo "ERROR: Failed to apply for the job $sql. ". mysqli_error($conn);
   }
}

// mysqli_close($conn);
?>