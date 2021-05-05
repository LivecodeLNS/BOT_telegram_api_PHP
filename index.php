<?php

require_once("./conexion.php");
require_once("./methods/private.php");


$input  =   file_get_contents('php://input');
$info   =   json_decode($input,TRUE);

$user_id    =   $info['message']['from']['id'];
$user_name  =   $info['message']['from']['fist_name'];
$chat_id    =   $info['message']['chat']['id'];
$chat_name  =   $info['message']['chat']['fist_name'];
$chat_type  =   $info['message']['chat']['type'];
$text       =   $info['message']['text'];

switch ($text) {
    case '/start':
        $api    =   new Conex();
        $priv   =   new Priv();
        $url    =   $api->url();
        $wlcm   =   $priv->welcome($user_name, $user_id);
        $req    =  "{$url}{$wlcm}";
        file_get_contents($req);
        break;
        
    default:
        $api    =   new Conex();
        $url    =   $api->url();
        $text   =   urlencode('Por Favor Envie Un Comando Válido...');
        $url    =   "{$url}/sendMessage?chat_id={$user_id}&text={$text}";
        break;
}
    
?>