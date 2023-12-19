<?php
function generatePassword($length, $lettere, $numeri, $simboli, $repeat)
{
    $lowerCase = "abcdefghijklmnopqrstuvwxyz";
    $upperCase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $numbers = "0123456789";
    $symbols = "@$*!%€#?=";
    $password = "";
    for ($i = 0; $i < $length; $i++) {

        $allSymbols = "";

        if ($lettere == true) {

            $allSymbols .= $lowerCase . $upperCase;
        }
        if ($numeri == true) {

            $allSymbols .= $numbers;
        }
        if ($simboli == true) {

            $allSymbols .= $symbols;
        }

        $newPass = $allSymbols[rand(0, strlen($allSymbols) - 1)];
        if ($repeat == "true") {
            $password .= $newPass;
        } else {
            if (!str_contains($password, $newPass)) {
                $password .= $newPass;
            } else {
                $i--;
            }
        }
    }
    return $password;
}
