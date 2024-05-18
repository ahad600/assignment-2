<?php 

$strings = ["Hello", "World", "PHP", "Programming"];

function getResult($str) {

    $revstr='';
    $vowelCount = 0;
    $vowels=['a', 'e', 'i', 'o', 'u'];

    foreach ($vowels as $vowel) {
        if (strpos($str, $vowel)){
            $vowelCount +=1;
        }
    }

    $revstr = strrev($str);

    return "Original String: $str, Vowel Count: $vowelCount , Reversed String: $revstr";

}



foreach ($strings as $string) {
    echo getResult($string).PHP_EOL;
}



