<?php
$servername ="db";
$username ="capp 2";
$password ="group17";
$dbname ="capp 2";
// creating connection
$conn = new mysqli ($servername,$username,$password,$dbname);


// check the connection

if ($conn->connect_error){
die("connection failed:" . $conn->connect_error);

}

?>