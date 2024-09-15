<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $i=0;
        $forI = $nums;
        array_shift($nums);
        $forJ = $nums;
        foreach($forI as $numI){
            $j=1;
            foreach($forJ as $numJ){
                if($numI+$numJ == $target && $i!=$j){
                    return array($i, $j);
                }
                $j++;
            }
            $i++;
        }
    }
}
