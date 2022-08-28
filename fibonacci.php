<?php

$a = 1;
$i = 0;

echo "{$i} \n";

while($i < 10000){
    $s =($a + $i);
    
    echo "{$s} \n";
    
    if($s>=10000)
    break;
    
    $a = $i;
    $i = $s;
    
}