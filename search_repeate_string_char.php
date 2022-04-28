<?php

$string = "kkjnmnmnjjjnmn";

$array = array();
for($i = 0; $i<strlen($string); $i++) {
    $arr_str[$string[$i]] = $string[$i];
}

foreach($array as $characters) {
    echo $characters;
}

?>