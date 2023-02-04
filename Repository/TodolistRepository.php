<?php

namespace Repository{

    use PDO;

  interface TodolistRepository{
    
    public function showTodolist(): array;
    
    
  }
  
  class TodolistRepositoryImpl implements TodolistRepository{
    

    public function __construct(private PDO $pdo){}

    public function showTodolist(): array{

      $todo = [];

      $sql = "SELECT * FROM tbl_todolist";
      $result = $this->pdo->query($sql);

      while($row = $result->fetch()){
        $todo[] = $row;
      }
      return $todo;
    }
  }
  
}
?>