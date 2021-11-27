<?php
# connection code below:
session_start();
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'ebank';

# function to establish database connection:
$connect = mysqli_connect($host,$username,$password,$dbname) or die(mysqli_error($connect));

//var_dump($connect);
?>