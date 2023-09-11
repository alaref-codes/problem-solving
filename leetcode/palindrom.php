<?php
    $x = 131;
    $result = true;
    $cop = (string)$x;
    $arrayx = str_split($x); 
    $array = str_split($cop); 
    for ($i = 0, $j = count($array) - 1; $i < count($array); $i++, $j--) {
        echo $array[$i];
        echo $arrayx[$j];
        echo "____";
        if ($array[$i] != $array[$j]){
            $result = false;
        }
    }
    echo $result;
?>