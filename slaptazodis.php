<?php
$password = 'my_password';
$salt= 'gk6rctr4i65xckru';
$string = 'labas as krabas';

echo crypt($password, $salt) . '<br>' ;

$array = explode(' ',$string) ;
print_r($array);
echo  implode('' , $array);
