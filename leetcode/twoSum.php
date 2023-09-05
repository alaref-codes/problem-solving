<?php
    class Solution {

    function twoSum($nums, $target) {

        $result = [];

        for ($i = 0; $i < count($nums); $i++) {
            for ($j = $i+1; $j < count($nums); $j++) {
                if ($nums[$i] + $nums[$j] === $target) {
                    array_push($result, $i);
                    array_push($result, $j);  
                }
            }             
        } 

        return $result;
    }
    }

?>