<?php
$input = "if man was meant to stay on the ground god would have given us roots";
$input= strtolower(preg_replace('/[^\w]/','',$input));
$length = strlen($input);
sqrt($length);
$col = ceil(sqrt($length));
$row = floor(sqrt($length));
// we need to match condition [sqrt($length)]<=$row<=$col<=[sqrt($length)], where[x] is floor function and [x] is ceil function
if( (floor(sqrt($length)) <= $row) && ($row<=$col) && ($col <= ceil(sqrt($length))) ){
    for ($i = 0; $i < $col; $i++) { 
        for ($j = $i; $j < $length; $j += $col) {
            //append the character in string $cyperText
            $cypherText .= $input[$j];
        }
        $cypherText .= "\n";
    }
}

//encoded message 
echo $cypherText;
?>
