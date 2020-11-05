<?php
printf("Inputdata (price %%discount): ");
fscanf(STDIN, "%f %f", $price,$discount);
$dist_cost = $price * $discount/100;
$netprice = $price - $dist_cost;
// using %f to format 2 decimal-point
printf("price %.2f discount %.2f netprice %.2f\n", $price, $dist_cost, $netprice);
?>