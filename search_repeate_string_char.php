<?php

$string = "kkjnmnmnjjjnmn";

echo "inpu string is : ".$string."<hr>";

$array = array();
for($i = 0; $i<strlen($string); $i++) {
    for ($j = $i +1; $j < strlen($string); $j++) {
        if ($string[$i] == $string[$j]) {
            $position[$string[$i]] = $j;
        }
    }
    $array[$string[$i]] = $string[$i];
}

echo "The consecutive repeated characters are ";
foreach($array as $arr_key => $characters) {
    echo $characters." ";
}
echo "<hr>";

foreach ($position as $pos_key => $pos_num) {
    echo "The position of index value of a duplicate characters for ".$pos_key." is ".$pos_num."<br>";
}

?>