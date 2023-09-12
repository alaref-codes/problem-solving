<?php
class Solution {

/**
 * @param String $s
 * @return Integer
 */
function romanToInt($s) {
    $result = 0;
    $chars = str_split($s);
    $roman = array(
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000
    );
    for ($i = 0; $i < count($chars); $i++) {
        if ($roman[$chars[$i]] >= $roman[$chars[$i+1]]) {
            $result += $roman[$chars[$i]];
        } else {
            $result -= $roman[$chars[$i]];
        }
    }

    return $result;
}
}
?>