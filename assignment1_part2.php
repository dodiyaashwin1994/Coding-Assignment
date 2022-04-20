<?php
$sentense='King, are you glad you are king';
//break into word array
$arr=explode(' ',preg_replace('/[^ \w]+/', '', $sentense));
//count will return length of array
$length=count($arr);

//empty array to store palindrome size
$palindrome=[];

// Pick starting point
    for ($i = 0; $i < $length; $i++){
        // Pick ending point
        for ($j = $i; $j < $length; $j++){
             
            //create all sub sentence of sentence
            for ($k = $i; $k <= $j; $k++){
               $newArray[] =  $arr[$k];
            }
            //we need atleast 3 words to check if a sentense is palindrome or not
            if(count($newArray)>=3){
                if((count($newArray)%2)== 0){
                    $n = count($newArray)/2;
                    $arr_part_1 = strtolower(implode(' ',array_slice($newArray,0,$n)));
                    $arr_part_2 = strtolower(implode(' ',array_reverse(array_slice($newArray,$n,count($newArray)-1))));
                }else{
                    $n = count($newArray)/2;
                    $arr_part_1 = strtolower(implode(' ',array_slice($newArray,0,$n+1)));
                    $arr_part_2 = strtolower(implode(' ',array_reverse(array_slice($newArray,$n,count($newArray)-1))));
                }
                if($arr_part_1==$arr_part_2){
                    $palindrome[] = count($newArray);
                }
            }
            unset($newArray);
        }
    }
    //sort $palindrome array in ascending manner
    sort($palindrome);
    //length of $palindrome array
    $p_length = count($palindrome);
    $max_length = $palindrome[$p_length-1];
    $second_max_length = $palindrome[$p_length-2];
    echo $maximum_possible_score = $max_length*$second_max_length;

?>
