<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "systemcondo";

// Create connection
$connect = new mysqli($servername, $username, $password, $database);

// Check connection
if($connect->connect_error){
  echo "$connect->connect_error";
  die("Connection Failed : ". $connect->connect_error);
      error_reporting(E_ALL);
  }
echo "Connected successfully";
?>