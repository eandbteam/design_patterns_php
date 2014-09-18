<?php 
include 'singleton_class.php';


/*
writeln('BEGIN TESTING SINGLETON PATTERN');
writeln('');

$bookBorrower1 = new BookBorrower();
$bookBorrower2 = new BookBorrower();

$bookBorrower1->borrowBook();
writeln('BookBorrower1 asked to borrow the book');
writeln('BookBorrower1 Author and Title: ');
writeln($bookBorrower1->getAuthorAndTitle());
writeln('');

$bookBorrower2->borrowBook();
writeln('BookBorrower2 asked to borrow the book');
writeln('BookBorrower2 Author and Title: ');
writeln($bookBorrower2->getAuthorAndTitle());
writeln('');

$bookBorrower1->returnBook();
writeln('BookBorrower1 returned the book');
writeln('');

$bookBorrower2->borrowBook();
writeln('BookBorrower2 Author and Title: ');
writeln($bookBorrower1->getAuthorAndTitle());
writeln('');

writeln('END TESTING SINGLETON PATTERN');

function writeln($line_in) {
	echo $line_in.'<br/>';
}
*/

///$connect = new singleton();==> invalid context like design pattern singleton for testing

function connect($close){
$connect = singleton::getInstance($host='localhost',$user='root',$password='',$database='test');

$query = $connect->sendQuery("select * from polo");
if ($close == false){
echo 'connect'.'<br>';
var_dump($connect);
echo 'connect'.'<br>';
}
if ($close == true){
	$connect->Close();
}
}

function connect2($close){

$connect2 = singleton::getInstance($host='192.168.1.35',$user='polo',$password='fus',$database='test');
if ($close == false){
echo 'connect2'.'<br>';
var_dump($connect2);
echo 'connect2'.'<br>';
}
if ($close == true){
	$connect2->Close();
}
}
/*
while($row = $connect->fetchArray($query)) {
	echo $row["nom"] . "<br>";
	
}
*/

function connect3($close){
$connect3 = singleton::getInstance($host='192.168.1.35',$user='test',$password='test',$database='test');
if ($close == false){
echo 'connect3'.'<br>';
var_dump($connect3);
echo 'connect2'.'<br>';
}
if ($close == true){
	$connect3->Close();
}
}

connect(false);
connect2(false);
connect3(false);

connect(true);
connect2(false);
connect2(true);
connect3(false);



?>
