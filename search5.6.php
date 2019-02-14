<?php
$lineOne = [9, 3];
$lineTwo = [8, 1, 7, 3, 9, 4, 20, 38, 4];
$maxW = 0;
for($i = 0; $i < $lineOne[0]; $i++){
    $maxW += $lineTwo[$i];
}
$result = ceil($maxW / $lineOne[1]);
var_dump(intval($result));
?>
