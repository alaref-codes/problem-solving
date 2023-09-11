class Solution {

/**
 * @param Integer[] $nums
 * @return Boolean
 */
function containsDuplicate($nums) {
    $result = false;
    
    for ($i = 0; $i < count($nums); $i++) {
        for ($j = $i+1; $j < count($nums); $j++) {
            if ($nums[$i] == $nums[$j] ) {
              $result = true;
              break;
            }
            if ($result === true){
                break;
            }
        }             
    } 

    return $result;
}
}