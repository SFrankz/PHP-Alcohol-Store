<?php
function OpenCon()//חיבור
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "ester12sharon34";
 $db = "phpProject";
 $conn = new mysqli_connect($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 OpenCon();
 include 'try1.php';
 
function CloseCon($conn)
 {
 $conn -> close();
 }
 
   
?>