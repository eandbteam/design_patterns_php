<?php
/*
 * 
 * 
2. Reversing an Array by Recursion

Algorithm ReverseArray(A, i, j):
Input: An array A and nonnegative integer indices i and j
Output: The reversal of the elements in A starting at index i and ending at j
if i < j then
Swap A[i] and A[ j]
Rever
 * 
 * 
 * 
 * echo "Garbage Colletor enabled (défaut) : " . (gc_enabled() ? 'OUI' : 'NON') . "\n";
 * gc_enable();
 * gc_disable();
 * gc_collect_cycles();
 * 
 * 
 * memory_get_usage()
 * memory_get_peak_usage()
 * memory_get_usage()
 * 
 * gc_enable();
echo "Garbage Colletor enabled : " . (gc_enabled() ? 'OUI' : 'NON') . "\n";
test();
echo "Collect cycles : " . gc_collect_cycles() . "\n";
echo 'Mem après collect_cycles : ' . number_format(memory_get_usage(), 0, '.', ',') . " octets\n";
 * 
 * 
 */
$length = 12;
$A =array();
for ($i = 1 ;$i <=$length;$i++){
	$A[$i] = $i;
}

var_dump($A);


//$A=array(1=>1,2=>2,3=>3,4=>4,5=>5,6=>6,7=>7,8=>8,9=>9,10=>10);
$i=1;
$j=6;


echo "Garbage Colletor enabled : " . (gc_enabled() ? 'OUI' : 'NON') . "\n".'<br>';

echo "Collect cycles : " . gc_collect_cycles() . "\n".'<br>';
//echo 'Mem avant collect_cycles : ' . number_format(memory_get_usage(), 0, '.', ',') . " octets\n".'<br>';
echo 'memory peak usage avant   '.number_format(memory_get_peak_usage ()).'<br>';

$output = array_merge ( array_reverse(array_slice($A, $i-1, $j)) ,array_chunk ( $A ,  $j  )[1] );///FUNCTION PHP

echo "Collect cycles : " . gc_collect_cycles() . "\n".'<br>';
//echo 'Mem après collect_cycles : ' . number_format(memory_get_usage(), 0, '.', ',') . " octets\n".'<br>';

echo 'memory peak usage apres   '.number_format(memory_get_peak_usage ()).'<br>';
echo 'result function php '.'<br>';
var_dump($output);
echo 'result function php '.'<br>';




$polo=ReverseArray($A,$i,$j);
echo 'result recursive function'.'<br>';
var_dump($polo);
echo 'result recursive function'.'<br>';

function ReverseArray($A,$i,$j){
	
	if($i >= $j){
		return $A;
	}
if (($i < $j) ){
	$temp = $A[$i];
	$A[$i] = $A[$j];
	$A[$j] = $temp;
	
	echo "Collect cycles : " . gc_collect_cycles() . "\n".'<br>';
	echo 'memory peak usage apres   '.number_format(memory_get_peak_usage ()).'<br>';
	
	
	
	
	//var_dump($A);
	//return $A;
	
	 return ReverseArray($A,$i+1,$j-1);
}
	
	
	
	
	


}



?>