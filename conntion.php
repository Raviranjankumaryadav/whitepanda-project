<?php
$servername="localhost";
$username="root";
$password="";
$dbname="car";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn){
	echo" ";}
else{
	echo"database faild!";
}

?>