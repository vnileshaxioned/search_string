<?php

$string = 'abbbcc88999&&!!!_"';

$array = array();
for ($i = 0; $i < strlen($string); $i++) {
    $array[$string[$i]] .= $string[$i];
}

echo "<pre>";
print_r($array);

?>