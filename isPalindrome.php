<?php
$x = 0;
$x_list = str_split($x);
$right_str = '';
krsort($x_list);
foreach($x_list as $v){
    $right_str .= $v;
}
if($x == $right_str){
    echo 1;
}else{
    echo 0;
}






?>