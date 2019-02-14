<?php

$list = [8, 3, 1, 5, 2, 1, 6, 12, 4];
$listCount = count($list);

for($i = 1; $i < $listCount; $i++ ) {
    //挿入する値を保存
    $tmp = $list[$i];
    //ソート位置を探す
    //$jは減少していく数で1以上であることかつ挿入する値よりも値が大きい時for文の中身が実施される
    for($j= $i; $j >= 1 && $list[$j - 1] > $tmp; $j--) {
        //１個ずらして保存
        $list[$j] = $list[$j - 1];
    }
    //ソート位置が決まったら挿入
    $list[$j] = $tmp;
}
var_dump($list);
