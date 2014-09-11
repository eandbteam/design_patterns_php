<?php
class Fibonacci 
{
	function __construct()
	{
		print("Fibonnaci\n");
	}
	
	public function calcul($n)
	{
		return $n+1;
	}
	
	public function calculateFibonacci($n)
	{
		if ( $n <= 1 )
		{
			return $n;
		}
		return calculateFibonacci($n-1) + calculateFibonacci($n-2);
	} 	
}
?>