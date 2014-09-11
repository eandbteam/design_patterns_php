<?php
function fibo($n)
{
	return(($n < 2) ? 1 : fibo($n - 1) + fibo($n - 2));
}

class Fibonacci 
{
	function fib($n)
	{
		return(($n < 2) ? 1 : fib($n - 1) + fib($n - 2));
	} 	
}
?>