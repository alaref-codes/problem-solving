<?php
class Solution {

    /**
     * @param Integer $left
     * @param Integer $right
     * @return Integer[]
     */
    function selfDividingNumbers($left, $right) {
        
        $results = [];
        for ($i = $left; $i <= $right; $i++) {
            $stri = (string)$i;
            $digit_array = array_map('intval', str_split($stri));
            $accepted = false;
            foreach($digit_array as &$value) {

                if (fmod($i,$value) == 0) {
                    $accepted = true;
                } else {
                    $accepted = false;
                    break;
                }
            }
            if ($accepted) {
                array_push($results,$i);
            }
        }
        return $results;
    }
} 
?>