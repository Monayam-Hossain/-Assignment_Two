<?php
function program(array $strings){
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    $count = 0;
    foreach($strings as $word){
        for ($i = 0; $i < strlen($word); $i++) {
            if (in_array($word[$i], $vowels)) {
                $count++;
                }
        }
        $Reversed_String=strrev($word);
        echo "Original String: ",$word,", Vowel Count: ", $count,", Reversed String: ",$Reversed_String,"\n";
        $count = 0;
    }
    

}

$strings = ["Hello", "World", "PHP", "Programming"];

program($strings);