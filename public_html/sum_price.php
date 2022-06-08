<?php
require('connect_db.php');
// PRICE
$user_id = $_COOKIE['userid'];

$sql_oil = 'SELECT sum(price) from oil where user_id='.$user_id.';';
$sql_service = 'SELECT sum(price) from service where user_id='.$user_id.';';
$sql_payment = 'SELECT sum(price) from payment where user_id='.$user_id.';';

$query = $pdo->query($sql_oil);
$sum_oil = $query->fetch();
$sum_oil=empty($sum_oil)?0:$sum_oil[0];


$query = $pdo->query($sql_service);
$sum_service = $query->fetch();
$sum_service=empty($sum_service)?0:$sum_service[0];


$query = $pdo->query($sql_payment);
$sum_payment = $query->fetch();
$sum_payment=empty($sum_payment)?0:$sum_payment[0];

$result=$sum_oil +$sum_service +$sum_payment ;

if($result){
$percent_oil=round($sum_oil/$result*100,2);
$percent_service=round($sum_service/$result*100,2);
$percent_payment=round($sum_payment/$result*100,2);
}else{
    $percent_oil=0;
    $percent_service=0;
    $percent_payment=0;
}

$sql_oil_odom = 'SELECT sum(odometr) from oil where user_id='.$user_id.';';
$sql_service_odom = 'SELECT sum(odometr) from service where user_id='.$user_id.';';
$sql_payment_odom = 'SELECT sum(odometr) from payment where user_id='.$user_id.';';


$query = $pdo->query($sql_oil_odom);
$sql_oil_odom = $query->fetch();
$sql_oil_odom=empty($sql_oil_odom)?0:$sql_oil_odom[0];


$query = $pdo->query($sql_service_odom);
$sql_service_odom = $query->fetch();
$sql_service_odom=empty($sql_service_odom)?0:$sql_service_odom[0];


$query = $pdo->query($sql_payment_odom);
$sql_payment_odom = $query->fetch();
$sql_payment_odom=empty($sql_payment_odom)?0:$sql_payment_odom[0];


$result_odom=$sql_oil_odom +$sql_service_odom +$sql_payment_odom ;


$sql_oil_value = 'SELECT sum(value) from oil where user_id='.$user_id.';';
$query = $pdo->query($sql_oil_value);
$sql_oil_value = $query->fetch();
$sql_oil_value=empty($sql_oil_value)?0:$sql_oil_value[0];


$sql_sersice_price = 'SELECT sum(price) from service where user_id='.$user_id.';';
$query = $pdo->query($sql_sersice_price);
$sql_sersice_price = $query->fetch();
$sql_sersice_price=empty($sql_sersice_price)?0:$sql_sersice_price[0];



$sql_payment_price = 'SELECT sum(price) from payment where user_id='.$user_id.';';
$query = $pdo->query($sql_payment_price);
$sql_payment_price = $query->fetch();
$sql_payment_price=empty($sql_payment_price)?0:$sql_payment_price[0];


$common_price_per_km = $result_odom?round($result/$result_odom,2):0;


$oil_price_per_km = $result_odom?round($sum_oil/$result_odom,2):0;




?>