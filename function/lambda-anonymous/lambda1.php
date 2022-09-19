<?php
//Basic Example Of Lambda Or Anonymous Function 

$result=function($a,$b){
    return $a*$b;
};

echo $result(5,18)."<pre>"; //Result Is 90
echo $result(154,18)."<br>"; //Result Is 2772
echo $result(40,18)."<br>"; //Result Is 720


//One Function Call Inside Another Function 

 function calculate_sum($function){
    echo 'Sum Of'.$function;
 }

 $add_function=function($a,$b){
    return $a+$b;
 };

 calculate_sum($add_function(15,45));


?>