<?php
require('connect_db.php');
$user_id = $_COOKIE['userid'];

$sql_oil = 'SELECT sum(price) from oil where user_id='.$user_id.';';


$query = $pdo->query($sql_oil);
$sum_oil = $query->fetch();


$result=$sum_oil[0]+$sum_service[0]+$sum_payment[0];



?>