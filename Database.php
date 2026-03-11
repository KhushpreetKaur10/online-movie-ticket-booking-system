<?php
$servername='localhost';
$username='root';
$password="";
$dbname = "moviebook";
$port=3307;
$conn=mysqli_connect($servername,$username,$password,$dbname, $port);
if(!$conn){
   die('Could not Connect My Sql:' .mysqli_error());
}
?>