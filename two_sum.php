<?php
$nums = [2,5,5,11];
$target = 10;
$legth = count($nums);
if($legth == 2){
    return[0,1];
}else{
  for($i=0;$i<=$legth-2;$i++){
    for($j=1;$j<=$legth-1;$j++){
      if($nums[$i]+$nums[$j] == $target){
        if($i != $j && $i<$j){
          return [$i,$j];
        }
      }
    }
  }
}
?>