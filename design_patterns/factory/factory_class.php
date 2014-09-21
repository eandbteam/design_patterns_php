<?php
class DBFactory
{
  public static function load($sgbdr,$host,$user,$password,$database) //$sgbdr
  {
  	
    $classe = 'singleton_' . $sgbdr;
    echo $classe. '_class.php';
    
    if (file_exists($chemin = '../singleton/'.$classe . '_class.php'))
    {
    	if ($sgbdr == 'MySQL'){
      include $chemin;
      return singleton_MySQL::getInstance($host,$user,$password,$database);
    	}
    	else{
      require $chemin;
      return new $classe;
    	}
      
      
    }
    else
    {
      throw new RuntimeException('La classe <strong>' . $classe . '</strong> n\'a pu être trouvée !');
    }
  }
}
?>