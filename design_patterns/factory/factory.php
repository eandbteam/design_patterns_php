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
$instance = MySQL::getInstance($host='localhost',$user='root',$password='',$database='test');
$query = $instance->sendQuery("select * from polo");

while($row = $instance->fetchArray($query)) {
	echo $row["nom"] . "<br>";

}

var_dump($instance);

$instance->Close();

$instance2 = MySQL::getInstance($host='192.168.1.35',$user='test',$password='test',$database='test');

var_dump($instance2);

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


try
{
	$prototype = DBFactory::load($config_prototype);
}
catch (RuntimeException $e)
{
	echo $e->getMessage();
}










?>