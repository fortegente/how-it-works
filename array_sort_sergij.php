<?php
/**
 * Created by JetBrains PhpStorm.
 * User: s.zheleznitskij
 * Date: 10/17/13
 * Time: 10:28 AM
 * To change this template use File | Settings | File Templates.
 */


/**
function check($array, $curNumber = false, $nextNumber = false, $i= false )
{
for($i = 0; $i < count($array); $i++){
$curNumber=$array[$i];
$nextNumber=$array[$i+1];

if($curNumber > $nextNumber){
return check($curNumber, $array[$i+2], $i, $array);
}

elseif($curNumber < $nextNumber){
$newRecords[$i]=$curNumber;
}
}
}
$array =array(7,5,6,2,3);

var_dump(check($array));


$array =array(7,5,6,2,3);

function check($array)
{
$length = count($array);

$k = 0;
$part[0] = (int)($length/2);
while($part[$k]>1){
$k++;
$part[$k] = (int)($part[$k-1]/2);
}

for ($i = 0; $i <= $k; $i++) {
$step = $part[$i];
for ($j = $step; $j<$length; $j++) {
$temp = $array[$j];
$p = $j-$step;
while ($p >= 0 && $temp < $array[$p]) {
$array[$p+$step] = $array[$p];
$p = $p-$step;
}
$array[$p+$step] = $temp;
}
}
return $array;
}
var_dump(check($array));
 */



$array =array(7,5,6,2,3);

function sortArray($array)
{
    $length = count($array);
    for ($curElem = 0; $curElem < $length; $curElem++) {
        for ($nextElem = 0; $nextElem < $length; $nextElem++) {
            if ($array[$curElem] < $array[$nextElem]) {
                $tmp = $array[$curElem];
                $array[$curElem] = $array[$nextElem];
                $array[$nextElem] = $tmp;
            }
        }
    }
    return $array;
}

var_dump(sortArray($array));

function sortArrayDesc($array)
{
    $length = count($array);
    for ($curElem = 0; $curElem < $length; $curElem++) {
        for ($nextElem = 0; $nextElem < $length; $nextElem++) {
            if ($array[$nextElem] < $array[$curElem]) {
                $tmp = $array[$nextElem];
                $array[$nextElem] = $array[$curElem];
                $array[$curElem] = $tmp;
            }
        }
    }
    return $array;
}