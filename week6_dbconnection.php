<?php
$servername="localhost";
$username="root";
$password=" ";
$dname="data";
$conn=mysqli_connect($servername,$username,$password,$dname);
if(!$conn){
echo "Failure";
die("connection failed: ".mysqli_connect_error());
}
else{
echo "connected successfully";
}
?>
