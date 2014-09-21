<?php

include 'factory_class.php';
try
{
  $mysql = DBFactory::load('MySQL',$host='localhost',$user='root',$password='',$database='test');
}
catch (RuntimeException $e)
{
  echo $e->getMessage();
}


var_dump($mysql);




?>