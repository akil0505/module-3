<?php

$grades = [85, 92, 78, 88, 95];

function sortArr($arr) {
     rsort($arr);
    print_r($arr);
}


sortArr($grades);