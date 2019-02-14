<?php
// &は参照渡し
function mergesort(&$array)
{
  _mergesort($array, 0, count($array));
}
function _mergesort(&$array, $left, $right)
{
  if ($right - $left <= 1) return;
  // 中間値を徐々に減らしていく
  $mid = intval(($left + $right) / 2);
  // 再帰処理でサイズ1の配列に分割
  _mergesort($array, $left, $mid);
  _mergesort($array, $mid, $right);
  // 分割後マージ処理
  merge($array, $left, $mid, $right);
}
function merge(&$array, $left, $mid, $right)
{
  $l_index = $left;
  $r_index = $mid;
  $result = array();
  while ($l_index < $mid && $r_index < $right) {
      if ($array[$l_index] <= $array[$r_index]) {
          $result[] = $array[$l_index];
          $l_index++;
      } else {
          $result[] = $array[$r_index];
          $r_index++;
      }
  }
  while ($l_index < $mid) {
      $result[] = $array[$l_index];
      $l_index++;
  }
  while ($r_index < $right) {
      $result[] = $array[$r_index];
      $r_index++;
  }
  arrayCopy($result, $array, $left, $right);
}
function arrayCopy($resource, &$array, $start, $end)
{
  $res_index = 0;
  for ($i = $start; $i < $end; $i++) {
      $array[$i] = $resource[$res_index];
      $res_index++;
  }
}
$ar = array(3,1,5,11,12,3,9);
mergesort($ar);
var_dump($ar);
