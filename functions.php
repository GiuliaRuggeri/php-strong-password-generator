<?php 
function generatePassword($length ){
$lowerCase="abcdefghijklmnopqrstuvwxyz";
$upperCase="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$numbers="1234567890";
$symbols="@$*!%€#?=";
$password="";
for($i=0; $i<$length; $i++){
$allSymbols=$lowerCase.$upperCase.$numbers.$symbols;
$password.= $allSymbols[rand(0, strlen($allSymbols)-1)];
}
return $password;
}

?>