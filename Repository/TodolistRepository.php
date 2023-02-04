<?php

namespace Repository{

    use Model\Todolist;
    use PDO;

  interface TodolistRepository{
    
    public function showTodolist(): array;

    public function insertTodolist(Todolist $todolist): void;
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

    public function insertTodolist(Todolist $todolist): void{

      $sql = "INSERT INTO tbl_todolist(kegiatan,deskripsi_kegiatan) VALUES (?,?)";
      $result = $this->pdo->prepare($sql);

      $result->execute([$todolist->getKegiatan(), $todolist->getDeskripsiKegiatan()]);
    }
  }
  
}
?>