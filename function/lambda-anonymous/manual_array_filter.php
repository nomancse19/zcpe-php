<?php

$a=range(1,100);

function manual_array_filter(array $ar_data,callable $callback_function){
    $final_array=[];
    foreach($ar_data as $value){
        if($callback_function($value)){
            $final_array[]=$value;
        }

    }
    return $final_array;
}

$check= manual_array_filter($a,function($number){
    return $number%2==1;
});
echo "<pre>";
print_r($check);

?>