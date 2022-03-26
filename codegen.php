<?php

function randCodeGen($len) {
$result = "";
$chars = '1234567890abcdefghijklmnopqrstuvwxyz';
$charArray = str_split($chars);
for($i = 0; $i <$len; $i++) {
    $randItem = array_rand($charArray);
    $result .= "".$charArray[$randItem];
}
return $result;
}

function randCodeGene($lena) {
$resulta = "";
$charsa = 'abcdefghijklmnopqrstuvwxyz1234567890';
$charArraya = str_split($charsa);
for($i = 0; $i <$lena; $i++) {
    $randItema = array_rand($charArraya);
    $resulta .= "".$charArraya[$randItema];
}
return $resulta;
}

echo '<br>';echo '<br>';echo '<br>';echo '<br>';echo '<br>';echo '<br>';echo '<br>';echo '<br>';echo '<br>';echo '<br>';echo '<br>';echo '<br>';echo '<br>';
echo $rand = randCodeGen(12);
echo '<br>';echo '<br>';echo '<br>';echo '<br>';echo '<br>';echo '<br>';echo '<br>';echo '<br>';echo '<br>';echo '<br>';echo '<br>';echo '<br>';echo '<br>';
echo $randa = randCodeGene(12);
?>

