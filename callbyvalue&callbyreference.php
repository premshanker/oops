<?php
function add($num){
    $num+=10;
    return $num;
}
$a = 10;
echo "Value of a is ".$a."<br />";
echo "value of a after adding 10 : ".add($a)."<br />";
echo "Value of a after calling add function: ".$a."<br />";

function add2(&$num){
    $num+=10;
    return $num;
}
$b = 10;
echo "Value of b is" .$b."<br />";
echo "value of b after adding 10 :".add2($b)."<br />";
echo "Value of b after calling add function:".$b."<br />";
?>