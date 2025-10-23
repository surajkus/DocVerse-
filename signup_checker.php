<?php
include_once("dbname.php");
$Name =$_POST["name"];
$Email =$_POST["email"];
$phone =$_POST["phone"];
$password =md5($_POST["password"]);

$sql_checker="SELECT * FROM `signup` WHERE `name`='$Name'";
$result_checker=mysqli_query($conn,$sql_checker);
$count= mysqli_num_rows($result_checker);
if($count==0){
 
  $sql="INSERT INTO `signup`(`Sno`, `name`, `email`, `phone`, `password`, `status`) 
VALUES (NULL,'$Name','$Email','$phone','$password','1')";
$result = mysqli_query($conn,$sql);
if($result==1){
  header('Location: Login.php');
}
}
else{
  echo 'Already register here';
}

?>