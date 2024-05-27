<?php
$servername="localhost";
$username="root";
$password="";
$dbname="demo";
//create connection

$conn=mysqli_connect($servername,$username,$password,$dbname);
//check connectiom
if(!$conn){
    die("Connection fail".mysqli_connect_error());
}
?>