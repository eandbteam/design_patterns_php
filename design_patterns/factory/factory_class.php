<?php
class DBFactory
{
	private $host;
	private $user;
	private $password;
	private $database;
	
	///////($host='localhost',$user='root',$password='',$database='test',false);
////////////connect2($host='192.168.1.35',$user='polo',$password='fus',$database='test',false);
//////////connect3($host='192.168.1.35',$user='test',$password='test',$database='test'
  //public static function load($path,$sgbdr,$user_lite,$close) //$user_lite  $host,$user,$password,$database
  public static function load($param)
    
    
   
  {
//var_dump($param);
  	$chemin = null;
  	$classe = null;
  	
  	foreach ($param as $key => $value){
  		if ($key == 'path_to_class'){
  			$path = $value;
  		}
  		if ($key == 'classe'){
  			$sgbdr = $value;
  		}
  		if ($key == 'user'){
  			$user_lite = $value;
  		}
  		if ($key == 'close'){
  			$close = $value;
  		}
  		
  	}
  	
  	
  	
  	if ($sgbdr == 'singleton'){
    $classe = $sgbdr;
   
  	}
  	else{
      $classe = $sgbdr;
  	}
  	
    echo $path. '_class.php line 45'.'<br>';
    echo $sgbdr.'<br>';
    
    echo '../design_patterns/'.$path.'/'.$path. '_class.php'.'<br>';
    if (file_exists($chemin = '../../design_patterns/'.$path.'/'.$path. '_class.php'))
    {
    	echo 'file_exist'.'<br>';
    	if ($sgbdr == 'MySQL'){ /////filtre connect DB 
    		
    			
    		echo 'includeeeeeeeeeeeeeeeeeeeeeeeeee'.'<br>';
    		include_once $chemin;
    			
      //return $sgbdr::getInstance($host,$user,$password,$database);
    	}
    	else{
    		
    		echo 'requireeeeeeeeeeeeeeeeeeeeeeeeee'.'<br>';
    		require_once $chemin;
    		
        return new $classe;
    		
    	}
      
      
    }
    else
    {
      throw new RuntimeException('La classe <strong>' . $classe . '</strong> n\'a pu être trouvée !');
    }
  }
  

  	
  
}
class MethodFactory{
	
}
?>