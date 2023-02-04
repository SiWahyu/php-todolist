<?php

namespace View;
require_once(__DIR__ . '/../Controller/TodolistController.php');
require_once(__DIR__ . "/../Model/TodolistModel.php");

use Model\Todolist;

if($_SERVER['REQUEST_METHOD'] == "POST"){

  $modelTodolist = new Todolist();

  $kegiatan = $_POST['kegiatan'];
  $deskripsi_kegiatan = $_POST['deskripsi_kegiatan'];

  $modelTodolist->setKegiatan($kegiatan);
  $modelTodolist->setDeskripsiKegiatan($deskripsi_kegiatan);

  $todolist->insertTodolist($modelTodolist);

  if(isset($_POST['submit'])){
    echo "
  <script>
  alert('Selesai menambah kegiatan masbro');
  setInterval( () => {
    window.location.href = 'IndexTodo.php';
  }, 100);
  </script>
  ";
  }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
  <div class="container p-4">

    <!-- START FORM -->
    <h2 class="text-center">Form Tambah Kegiatan</h2>
    <div class="p-4">
      <a class="btn btn-secondary" href="IndexTodo.php">Kembali</a>
    </div>
    <form action='' method='post'>
      <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
          <label class="col-sm-2 col-form-label">Kegiatan</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name='kegiatan' id="kegiatan" required>
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-2 col-form-label">Deskripsi Kegiatan</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name='deskripsi_kegiatan' id="deskripsi_kegiatan" required>
          </div>
        </div>
              <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
              </div>
            </form>
          </div>
          <!-- AKHIR FORM -->

        </div>
        </body>
        </html>