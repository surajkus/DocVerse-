<?php
$servername="Localhost";
$username="root";
$password="";
$dbname="pdfEditor";

$conn =mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    echo 'not connect the database';
}
?>