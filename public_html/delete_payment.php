<?php
  require('connect_db.php');
  $sql = 'DELETE FROM payment WHERE id = '.$_GET['id'];
  $query = $pdo->query($sql);

  header('Location: main.php');
?>