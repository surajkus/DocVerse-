<?php
include_once("dbname.php");
$Email =$_POST["email"];
$password =md5($_POST["password"]);

$sql_checker ="SELECT * FROM `signup` WHERE `email`='$Email'";
$sql_result = mysqli_query($conn,$sql_checker);
$sql_count= mysqli_num_rows($sql_result);
if($sql_count==1){

$sql ="SELECT * FROM `signup` WHERE `email`='$Email' AND `password`='$password'";
$sql_run = mysqli_query($conn,$sql);
$count =mysqli_num_rows($sql_run);
if($count==1){
    header('Location: index.php');
}
}
else{
echo 'user not exist';
}
?>