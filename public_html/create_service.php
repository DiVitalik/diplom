<?php
  require('connect_db.php');
  $user_id = $_COOKIE['userid'];

  $sql = 'INSERT INTO `service`(`date`, `time`, `odometr`, `type`, `price`, `user_id`) VALUES
  ("'.$_POST['date_service'].'", "'.$_POST['time_service'].'", '.$_POST['odom_service'].', "'.$_POST['type_service'].'", '.$_POST['price_service'].',  '.$user_id.')';

  $query = $pdo->query($sql);
  header('Location: main.php');

?>