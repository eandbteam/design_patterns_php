<?php

include 'factory_class.php';

/////definir utilisateur////////////

/*
 * faire tableau de parametre
 * $parametre = array($path_to_class,$classe,$user,$close)
 * 
 * 
 * 
 */
$config_mysql = array('path_to_class' =>'singleton','classe'=>'MySQL');


$config_prototype = array('path_to_class' =>'prototype','classe'=>'PHPBookPrototype');

try
{
  $mysql = DBFactory::load($config_mysql);
  //$mysql = DBFactory::load($config_mysql_open);
}
catch (RuntimeException $e)
{
  echo $e->getMessage();
}

/////////////////////////////MySQL////////////////////////////////////////////////////////////
$instance = MySQL::getInstance($host='localhost',$user='root',$password='',$database='test');
$query = $instance->sendQuery("select * from polo");

while($row = $instance->fetchArray($query)) {
	echo $row["nom"] . "<br>";

}

var_dump($instance);

$instance->Close();

$instance2 = MySQL::getInstance($host='192.168.1.35',$user='test',$password='test',$database='test');

var_dump($instance2);
////////////////////////////////////////////////////////////////////////////////////////////////////////
/*
try
{
	$mysql = DBFactory::load($config_mysql_open2);
	//$mysql = DBFactory::load($config_mysql_open);
}
catch (RuntimeException $e)
{
	echo $e->getMessage();
}
*/

/////////////////////////////////PHPBookPrototype//////////////////////////////////////////////////////
try
{
	$prototype = DBFactory::load($config_prototype);
}
catch (RuntimeException $e)
{
	echo $e->getMessage();
}


writeln('BEGIN TESTING PROTOTYPE PATTERN');
writeln('');

$phpProto = new PHPBookPrototype();
$sqlProto = new SQLBookPrototype();

$book1 = clone $sqlProto;
$book1->setTitle('SQL For Cats');
writeln('Book 1 topic: '.$book1->getTopic());
writeln('Book 1 title: '.$book1->getTitle());
writeln('');

$book2 = clone $phpProto;
$book2->setTitle('OReilly Learning PHP 5');
writeln('Book 2 topic: '.$book2->getTopic());
writeln('Book 2 title: '.$book2->getTitle());
writeln('');

$book3 = clone $sqlProto;
$book3->setTitle('OReilly Learning SQL');
writeln('Book 3 topic: '.$book3->getTopic());
writeln('Book 3 title: '.$book3->getTitle());
writeln('');

writeln('END TESTING PROTOTYPE PATTERN');

function writeln($line_in) {
	echo $line_in."<br/>";
}
/////////////////////////////////////////////////////////////////////////////////////////////





?>