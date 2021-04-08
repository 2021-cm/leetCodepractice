<?php
$strs = ["dog","racecar","car"];
$strsNum = count($strs);//统计有几个值  为后面判断用
if($strsNum == 0){
    return  "";
}
$oneValue = $strs[0];
if($oneValue == '')
{
    return  "";
}
$oneValueLength = strlen($oneValue);
$strList = [];
for($i=1;$i<=$oneValueLength;$i++)
{
    $res = checkPrefix($strs,$strsNum,$oneValue,$i);
    $strList[$i] = $res; 
}
function checkPrefix($strs,$strsNum,$oneValue,$i = 1)
{
    $countList = []; 
    $str = substr($oneValue,0,$i);
    foreach($strs as $k =>$v)
    {
        if($str == substr($v,0,$i)){ 
            $countList[] = 1; 
        }
    }
    //还不是最长  有公共前缀
    if($strsNum == array_sum($countList))
    {
        return $str;
    }
    else
    {
        return false;
    }
}
foreach($strList as $_k=>$_v)
{   
    if($_v == ''){
        unset($strList[$_k]);
    }
}
if(empty($strList)){
    echo "";
}else{
    echo (string)max($strList);exit;
}









?>