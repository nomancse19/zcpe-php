<?php

$a=range(1,100);

function manual_array_filter(array $ar_data,$callback_function){
    return $callback_function($ar_data);
}

$check= manual_array_filter($a,function($number){
    return $number%2==0;
});
echo "<pre>";
print_r($check);

?>