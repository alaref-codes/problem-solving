<?php
class Solution {

/**
 * @param Integer[] $nums
 * @return Integer
 */
function majorityElement($nums) {
    $result = 0;
    $unique = array_values(array_unique($nums)); 
    for ($i = 0; $i < count($unique); $i++) {   
        $counter = 0;
        foreach ($nums as &$value) {
            if ($unique[$i] === $value){
                $counter += 1;
            }
        }
        $check  = count($nums) / 2;
        if ($counter > $check) {
            $result = $unique[$i];
            break;
        }             
    }

    return $result;
}
}
?>