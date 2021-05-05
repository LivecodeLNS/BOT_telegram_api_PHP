<?php

require_once("./conexion.php");
require_once("./methods/private.php");

$api    =   new Conex();
$url    =   $api->url();

$input  =   file_get_contents('php://input');
$info   =   json_decode($input,TRUE);

$user_id    =   $info['message']['from']['id'];
$user_name  =   $info['message']['from']['fist_name'];
$chat_id    =   $info['message']['chat']['id'];
$chat_name  =   $info['message']['chat']['fist_name'];
$chat_type  =   $info['message']['text'];



?>