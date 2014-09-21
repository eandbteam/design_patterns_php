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
$config_mysql_open = array('path_to_class' =>'singleton','classe'=>'MySQL','user'=>'admin','close'=>false);
$config_mysql_close = array('path_to_class' =>'singleton','classe'=>'MySQL','user'=>'admin','close'=>true);
$config_prototype = array('path_to_class' =>'prototype','classe'=>'PHPBookPrototype','user'=>null,'close'=>false);

try
{
  $mysql = DBFactory::load($config_mysql_open);
  //$mysql = DBFactory::load($config_mysql_open);
}
catch (RuntimeException $e)
{
  echo $e->getMessage();
}

var_dump($mysql);

$query = $mysql->sendQuery("select * from polo");

while($row = $mysql->fetchArray($query)) {
	echo $row["nom"] . "<br>";

}


try
{
	$mysql = DBFactory::load($config_prototype);
}
catch (RuntimeException $e)
{
	echo $e->getMessage();
}










?>