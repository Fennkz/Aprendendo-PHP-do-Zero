<?php
     function twoSum($nums, $target) {
        for($i = 0; $i < sizeof($nums); $i++) {
            for($j = $i + 1; $j < sizeof($nums); $j++) {
                if($nums[$i] + $nums[$j] == $target) {
                    return array($i, $j);
                }
            }
        }
     }

    print_r( twoSum([3,2,4], 6));