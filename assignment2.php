<?php
printf("Input number (number1 number2): ");
fscanf(STDIN, "%f %f", $x,$y);
if($x>$y){
    printf("%f\n greater than %f\n", $x, $y);
}elseif($x<$y){
    printf("%f\n less than %f\n", $x, $y);
}else 
printf("%f\n equal to %f\n", $x, $y);
?>