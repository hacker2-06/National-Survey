<?php 
header('Location: /survey.php');
$handle = fopen('click.csv' , 'a');


if (!empty($_SERVER['HTTP_CLIENT_IP']))
    {
      $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    }
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
      $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
else
    {
      $ipaddress = $_SERVER['REMOTE_ADDR'];
    };
date_default_timezone_set("Asia/Calcutta");

fwrite($handle , date('Y/m/d H:i:s') . "," . $ipaddress . ",OK" . "\n")

?>