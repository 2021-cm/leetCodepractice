<?php
$x = 1534236469;
if($x<0){
    $x = '-'.abs(strrev($x));
}else{
    $x = (int)strrev($x);
}  
if($x >= pow(-2,31) && $x<= pow(2,31)-1){
   echo $x;
}else{
    echo 0;
}





?>