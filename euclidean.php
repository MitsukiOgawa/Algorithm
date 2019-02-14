<?php

euclidean(1071, 1029);

function euclidean($a, $b){
  if($a % $b === 0){
    return $b;
  }
  euclidean($b, $a % $b);
}

?>
