<?php

include 'factory_class.php';

/////definir utilisateur////////////

try
{
  $mysql = DBFactory::load('singleton','MySQL','admin');
}
catch (RuntimeException $e)
{
  echo $e->getMessage();
}

var_dump($mysql);
try
{
	$mysql = DBFactory::load('prototype','prototype',$user_lite = null);
}
catch (RuntimeException $e)
{
	echo $e->getMessage();
}










?>