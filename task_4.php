<?php

$studentGrades = [
    'student1' => ['Math' => 23, 'English' => 83, 'Science' => 44],
    'student2' => ['Math' => 43, 'English' => 73, 'Science' => 84],
    'student3' => ['Math' => 53, 'English' => 33, 'Science' => 74],
];

function findAverage($studentGrades) {
    foreach($studentGrades as $students => $grades) {
        $totalMark = array_sum($grades);

        $average = round($totalMark / 3);

        echo "$students $average \n";
    }
}

findAverage($studentGrades);