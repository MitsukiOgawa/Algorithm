<?php

// 結果が間違っている
$nums = range(1, 100);
$target = 13;
$left = 0;
$right = count($nums);
binarySearch($nums, $left, $right, $target);

function binarySearch($nums, $left, $right, $target) {
    if(count($nums) < 1){
        echo "Not Found";
        return;
    }
    $mid = intval(($left + $right) / 2);

    if ($nums[$mid] === $target) {
        echo $mid;
        return;
    }

    if ($nums[$mid] > $target) {
        binarySearch($num, $mid+1, $right, $target);
    }
    else {
        binarySearch($num, $left, $mid, $target);
    }
}
