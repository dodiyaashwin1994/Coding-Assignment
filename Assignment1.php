<?php
$str='abcdefAnnaRacecarMom';
//break into word with capital start and store in array
$arr=preg_split('/(?=[A-Z]+)/',$str);
//count will return length of array
$length=count($arr);

$palindrome=[];
//loop for each array element
for($i=0; $i<$length;$i++){
    $word = strtolower($arr[$i]);
    //reverse the array element
    $reverse_word = strrev($word);
    //check if array element and reverse element is palindrome or not
    if($word == $reverse_word){
        //store length of palindrome in new array $palindrome
        $palindrome[$i] = strlen($word);                           
     }
}

//sort the $palindrome array in asc order
sort($palindrome);

//$palindrome array length
$p_length = count($palindrome);

$max_length = $palindrome[$p_length-1];
$second_max_length = $palindrome[$p_length-2];

echo $maximum_possible_score = $max_length*$second_max_length;

?>
