<?php

$list = range(0, 200 , 1);
shuffle($list);
$listCount = count($list);
$step = 1;
// 今回の間隔はh(n+1) = 3h(n) + 1 という条件で選び出した数列 1, 4, 13
// このhの中から配列のサイズ / 9の値以下にすると効率が良い。
for($step_tmp = 1; $step_tmp < $listCount / 9; $step_tmp = $step_tmp * 3 + 1 ){
    $step = $step_tmp;
}
// 最初は$step = 13が渡される
while($step > 0 ){
    //indexは後ろの数値
    for($index = $step; $index < $listCount; $index++ ){
        $tmp = $list[$index];
        //考え方は挿入ソートとほぼ同じ。離れた相手と比較するだけ
        for($j = $index - $step; $j >= 0 && $list[$j] > $tmp; $j = $j - $step ){
            $list[$j + $step ] = $list[$j];
        }
        $list[$j + $step] = $tmp;
    }
    // h(n+1) = 3h(n) + 1という条件なので/3をする
    $step = intval($step / 3);
}
var_dump($list);
