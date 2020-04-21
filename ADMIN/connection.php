<?php
$dbhost ='localhost:3307';
$dbuser = 'root';
$dbpass = '';
$db='pmas';
// $dbport=3307;

$conn= mysqli_connect($dbhost,$dbuser,$dbpass);
if($conn->connect_error){
    die("Connection failed : " . $conn->connect_error);
}
mysqli_select_db($conn, $db); 
               
?>S