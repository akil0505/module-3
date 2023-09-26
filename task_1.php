<?php

$text = "The quick brown fox jumps over the lazy dog.";

function menupulateStr($str) {
$lowerText = strtolower($str);
$strReplace = str_replace('brown', 'red', $lowerText);
echo $strReplace;
}

menupulateStr($text);