<?php
namespace View;

  require_once(__DIR__ . '/../Controller/TodolistController.php');
  $no = 1;
  $showTodolist = $todolist->showTodolist();
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
  <div class="container">
    <h2 class="text-center">Daftar Kegiatan</h2>
    <div class="p-3">
    <a class="btn btn-primary p-3" href="TambahTodo.php">Tambah Kegiatan</a>
    </div>
    <div class="table-responsive">
      <!--Table-->

      <table class="table table-striped border border-secondary-subtle">
        <!--Table head-->
        <thead>
      <tr>
        <th>Nomor</th>
        <th>Kegiatan</th>
        <th>Deskripsi Kegiatan</th>
        <th>Status Kegiatan</th>
      </tr>
    </thead>
    <!--Table head-->
    
    <!--Table body-->
    <tbody>
      <?php foreach($showTodolist as $todolist): ?>
      <tr>
        <th scope="row"><?= $no++ ?></th>
        <td><?= $todolist['kegiatan'] ?></td>
        <td><?= $todolist['deskripsi_kegiatan'] ?></td>
        <td><a class="btn btn-success" href="SelesaiTodo.php?id=<?=$todolist['id']?>">selesai</a></td>
      </tr>

      <?php endforeach ?>
    </tbody>
    <!--Table body-->
  </table>
  <!--Table-->
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>