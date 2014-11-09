<?php
//FIFO and LIFO in SplDoublyLinkedList

$list = new SplDoublyLinkedList();
$list->push('a');
$list->push('b');
$list->push('c');
$list->push('d');

echo "FIFO (First In First Out) :\n";
$list->setIteratorMode(SplDoublyLinkedList::IT_MODE_FIFO);
for ($list->rewind(); $list->valid(); $list->next()) {
	echo $list->current()."\n";
}

Result :

// FIFO (First In First Out):
// a
// b
// c
// d

echo "LIFO (Last In First Out) :\n";
$list->setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO);
for ($list->rewind(); $list->valid(); $list->next()) {
	echo $list->current()."\n";
}

//Result :

// LIFO (Last In First Out):
// d
// c
////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////
class Stack {

	private $splstack;

	function __construct(\SplStack $splstack)
	{
		$this->splstack = $splstack;
	}

	public function calculateSomme()
	{

		if ($this->splstack->count() > 1){
			$val1 = $this->splstack->pop();
			$val2 = $this->splstack->pop();
			$val = $val1 + $val2;
			$this->splstack->push($val);
			$this->calculateSomme();
		}
	}

	/**
	 *
	 * @return integer
	 */
	public function displaySomme()
	{
		$result = $this->splstack->pop();
		return $result;
	}

}

$splstack = new \SplStack();

$splstack->push(10);
$splstack->push(10);
$splstack->push(10);
$splstack->push(10);
$splstack->push(10);
$splstack->push(10);
$splstack->push(10);
$splstack->push(10);
$splstack->push(10);
$splstack->push(10);
$splstack->push(10);
$splstack->push(10);
$splstack->push(10);
$splstack->push(10);
$splstack->push(10);

$stack = new Stack($splstack);
$stack->calculateSomme();
die(var_dump($stack->displaySomme())); // 150

///////////////////////
////for debug code ==>Directive: continue
$tab=array(
	"France"=>"Paris",
	"Great Britain"=>"London",
	"Belgique"=>"Brüssel");

while(list($cle,$valeur) = each($tab) ) {  
	echo "clé <b>$cle</b>  / valeur <b>$valeur</b> <br>";
}


?>