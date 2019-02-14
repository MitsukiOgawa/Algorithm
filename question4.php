<?php

/*
問題4
正の整数のリストを与えられたとき、数を並び替えて可能な最大数を返す関数を記述せよ。
例えば、[50, 2, 1, 9]が与えられた時、95021が答えとなる(解答例)。
 */

// 完成版
 $list = array(50, 2, 1, 9);
 $result = "";
 // usort：ユーザー定義関数でソート可能
 usort($list, 'comp');
 foreach($list as $value){
     $result = $result . strval($value);
 }
 echo $result;

 function comp($int1, $int2) {
 	$str1 = (string)$int1;
 	$str2 = (string)$int2;
 	if ($str1 === $str2) {
 		return 0;
 	}
 	return -1 * strcmp($str1 . $str2, $str2 . $str1);
 }

// 失敗作　配列が[50, 2, 1, 9, 89]などの時失敗
 $list = array(50, 2, 1, 9);
 strSortArray($list);
 function strSortArray($list){
   if(count($list) == 1){
     echo $list[0];
     return;
   }
   $a = strval($list[0]) . strval($list[1]);
   $b = strval($list[1]) . strval($list[0]);
   if($a >= $b){
     $list[1] = intval($a);
   }else{
     $list[1] = intval($b);
   }
   $list = array_slice($list, 1);
   strSortArray($list);
 }

?>
