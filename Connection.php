<?php 

function getConnection(): PDO{

  $username = "root";
  $password = "";
  $host = "localhost";
  $port = 3306;
  $database = "todolist";

  return new PDO("mysql:host=$host:$port;dbname=$database",$username,$password);
}

?>