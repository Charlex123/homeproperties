<?php

function randStrGen($len) {
$result = "";
$chars = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$charArray = str_split($chars);
for($i = 0; $i <$len; $i++) {
    $randItem = array_rand($charArray);
    $result .= "".$charArray[$randItem];
}
return $result;
}


$rand = randStrGen(25);

