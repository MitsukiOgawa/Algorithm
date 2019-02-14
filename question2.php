<?php

/*
問題2
交互に要素を取ることで、2つのリストを結合する関数を記述せよ。
例えば [a, b, c]と[1, 2, 3]という2つのリストを与えると、関数は [a, 1, b, 2, c, 3]を返す。
 */
function getAlternationArrayMerge($list1, $list2) {
	$answer = array();
	while(true) {
		if (empty($list1) && empty($list2)) {
			break;
		}
		if($list1) {
			$answer[] = array_shift($list1);
		}
		if ($list2) {
			$answer[] = array_shift($list2);
		}

	}
	return $answer;
}

 ?>
