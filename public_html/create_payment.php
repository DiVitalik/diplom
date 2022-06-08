<?php
  require('connect_db.php');

$user_id = $_COOKIE['userid'];

    $sql='INSERT INTO `payment`(`date`, `time`, `odometr`, `type`, `price`, `type_expense`, `user_id`) VALUES  ("'.$_POST['date_payment'].'", "'.$_POST['time_payment'].'", '.$_POST['odom_payment'].', "'.$_POST['type_payments'].'", '.$_POST['price_payment'].', "'.$_POST['type_expenses'].'", '.$user_id.')';

    $query = $pdo->query($sql);


header('Location: main.php');

?>