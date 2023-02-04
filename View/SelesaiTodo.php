<?php

namespace View;

require_once(__DIR__ . "/../Controller/TodolistController.php");

$id = $_GET['id'];
$todolist->selesaiTodolist($id);

echo "
<script>
alert('Selesai menghapus kegiatan masbro');
setInterval( () => {
  window.location.href = 'IndexTodo.php';
}, 100);
</script>
"
?>