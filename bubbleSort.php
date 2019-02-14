<?php

$ar = array(3,1,5,11,12,3,9);
$flag = 1;
$i = 0;
$tmp = [];
while($flag){
    $flag = 0;
    for($j = count($ar)-1; $j > $i; $j--){
        if($ar[$j] < $ar[$j-1]){
            $tmp = $ar[$j];
            $ar[$j] = $ar[$j-1];
            $ar[$j-1] = $tmp;
            $flag = 1;
        }
    }
    $i++;
}
var_dump($ar);
