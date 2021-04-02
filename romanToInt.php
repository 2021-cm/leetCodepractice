<?php
$s = "MCMXCIV";
$list = array(
    'I'=>1,    
    'V'=>5,    
    'X'=>10,
    'L'=>50,
    'C'=>100,  
    'D'=>500,
    'M'=>1000,
);
$special = array(
    'IV'=>4,
    'IX'=>9,
    'XL'=>40,
    'XC'=>90,
    'CD'=>400,
    'CM'=>900,
);
//罗马数字中小的数字在大的数字的右边
$length = strlen($s);
if($length == 1){
    echo $list[$s];
}
if($length == 2){
   if($special[$s]){
        echo $special[$s];
   }else{
       $str_list = str_split($s);
       if($list[$str_list[0]] >= $list[$str_list[1]]){
            echo $list[$str_list[0]]+$list[$str_list[1]];
       }else{
        echo $list[$str_list[1]]-$list[$str_list[0]];
       }    
       print_r($str_list);
   }
}
if($length > 2){
    $res = 0;
    foreach($special as $k=>$v){
        if(strpos($s,$k) !== false){ 
           $res += $v;
           $s = substr_replace($s,'',strpos($s,$k),2);                 
        }
    }
    // echo $res;exit;
    if($res){
        $length1 = strlen($s);
        
        if($length1 == 1){
            $res += $list[$s];
        }
        if($length1 == 2){
           if($special[$s]){
                $res += $special[$s];
           }else{
               $str_list = str_split($s);
               if($list[$str_list[0]] >= $list[$str_list[1]]){
                    $res += $list[$str_list[0]]+$list[$str_list[1]];
               }else{
                    $res += $list[$str_list[1]]-$list[$str_list[0]];
               }    
           }
        }
        if($length1 > 2){
            $str_list = str_split($s);
            foreach($list as $_k=>$_v){
                foreach($str_list as $l){
                    if($l == $_k){
                        $res += $_v;
                    }   
                }
            }
        }
    }else{
        $res = 0;
        $str_list = str_split($s);
        foreach($list as $_k=>$_v){
            foreach($str_list as $l){
                if($l == $_k){
                    $res += $_v;
                }   
            }
        }
    }
    echo $res;
}










?>