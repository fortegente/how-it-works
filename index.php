<?php
$array = array(234, 5, 7567, 1, 34, 7788, 3, "d6", "8d");
$arrayLength = count($array);

for($i = 0; $i < $arrayLength; $i++) {
    for($j = $i + 1; $j < $arrayLength; $j++) {
        if((int)$array[$i] > (int)$array[$j]) {
            $temporaryVar = $array[$j];
            $array[$j] = $array[$i];
            $array[$i] = $temporaryVar;
        }
    }
}

var_dump($array);
