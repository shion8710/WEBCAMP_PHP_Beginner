<?php
echo "0";

$a = 1;
$i = 0;

while(1){
    $s =($a + $i);
    
    echo "{$s} \n";
    
    if($s>=10000)
    break;
    
    $a = $i;
    $i = $s;
    
}