<?php
/*
 * 
 * 1. Summing the Elements of an Array Recursively

Algorithm LinearSum(A, n):
Input: A integer array A and an integer n ≥ 1, such that A has at least n elements
Output: The sum of the first n integers in A
if n = 1 then
return A[0]
else
return LinearSum(A, n − 1) + A[n − 1]
 * 
 * function array_sum in php
 * 
 */
$A=array(1,2,3,4,5,6,7,8,9,10);
var_dump($A);

for ($n = 1 ;$n<=sizeof($A);$n++){
	$polo=LinearSum($A,$n);
	
}
var_dump($polo);

function LinearSum($A,$n){
if ($n == 1){
	
	return $A[0];
}
else{
	return LinearSum($A,$n-1) +$A[$n-1];
	
}

	
	
}



?>
