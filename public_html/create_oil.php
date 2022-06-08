<?php
  require('connect_db.php');
//   session_start();
//   $user_id = $_SESSION['userid'];
$user_id = $_COOKIE['userid'];

  $sql = 'INSERT INTO `oil`(`date`, `time`, `odometr`, `oil_type`, `price`, `price_liter`, `value`, `user_id`) VALUES
  ("'.$_POST['date_oil'].'", "'.$_POST['time_oil'].'", '.$_POST['odom_oil'].', "'.$_POST['type_oil'].'", '.$_POST['price_oil']*$_POST['value_oil'].', '.$_POST['price_oil'].', '.$_POST['value_oil'].', '.$user_id.')';

    $query = $pdo->query($sql);


  header('Location: main.php');

?>