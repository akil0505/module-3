<?php

$numbers = [1,2,3,4,5,6,7,8,9,10];

function removeEven(&$numbers) {
    foreach($numbers as $key => $value) {
        if($value % 2 == 0) {
            unset($numbers[$key]);
        }
    }
    print_r($numbers);

}

removeEven($numbers);