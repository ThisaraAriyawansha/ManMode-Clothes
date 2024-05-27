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
   echo "";

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $pno=$_POST['pno'];
    $email=$_POST['email'];
    $msg=$_POST['message'];

$sqll="INSERT INTO complain(name,phone,email,message) VALUES('$name','$pno','$email','$msg')";
$result=mysqli_query($conn,$sqll);

if($result==TRUE)
{
    echo "We wish to inform you that we have receive your message and we appriciate your interest.";
}
else{
    echo "Error".$sqll."<br>".$conn->error;
}
mysqli_close($conn);
}
?>