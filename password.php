<?php 

include "functions.php";

$passLength=$_GET["length"];

echo generatePassword($passLength);



?>