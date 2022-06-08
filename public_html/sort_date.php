<?php
require('connect_db.php');

$user_id = $_COOKIE['userid'];

$sql_oil_sort = 'SELECT * FROM oil where user_id='.$user_id.' ORDER BY date DESC';
$sql_service_sort = 'SELECT * FROM service where user_id='.$user_id.' ORDER BY date DESC';
$sql_payment_sort= 'SELECT * FROM payment  where user_id='.$user_id.' ORDER BY date DESC';


$query1 = $pdo->query($sql_oil_sort);
$oil_sort = $query1->fetchAll(PDO::FETCH_OBJ);

$query2 = $pdo->query($sql_service_sort);
$service_sort = $query2->fetchAll(PDO::FETCH_OBJ);


$query3 = $pdo->query($sql_payment_sort);
$payment_sort = $query3->fetchAll(PDO::FETCH_OBJ);


$sort= array_merge($service_sort,$oil_sort,$payment_sort);

usort($sort, function($a, $b)
{
    return strcmp($a->date, $b->date);
});
$sort = array_reverse($sort);
?>