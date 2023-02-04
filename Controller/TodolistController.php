<?php
namespace Controller{

  require_once(__DIR__ . "/../Connection.php");
  require_once(__DIR__ . "/../Repository/TodolistRepository.php");

    use Repository\TodolistRepositoryImpl;

  $connection = getConnection();

  $todolist = new TodolistRepositoryImpl($connection);

  $connection = null;
}

?>