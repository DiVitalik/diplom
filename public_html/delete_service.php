<?php
  require('connect_db.php');
  $sql = 'DELETE FROM service WHERE id = '.$_GET['id'];
  $query = $pdo->query($sql);
  header('Location: main.php');
?>