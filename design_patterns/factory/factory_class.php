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
  public static function load($path,$sgbdr,$user_lite) //$user_lite  $host,$user,$password,$database
  {
  	
  	
  	if ($sgbdr == 'singleton'){
    $classe = $sgbdr;
   
  	}
  	else{
      $classe = $sgbdr;
  	}
    echo $path. '_class.php'.'<br>';
    
    echo '../design_patterns/'.$path.'/'.$path. '_class.php'.'<br>';
    if (file_exists($chemin = '../../design_patterns/'.$path.'/'.$path. '_class.php'))
    {
    	if ($sgbdr == 'MySQL'){ /////filtre connect DB 
    		
    		if ($user_lite == 'admin'){
    			$host='localhost';
    			$user='root';
    			$password='';
    			$database='test';
    		}
    		elseif($user_lite == 'test'){
    			$host='192.168.1.35';
    			$user='test';
    			$password='test';
    			$database='test';
    		}
    		elseif($user_lite == 'polo'){
    			$host='192.168.1.35';
    			$user='polo';
    			$password='fus';
    			$database='test';
    		}	
    		
    
    		
      include $chemin;
      return $sgbdr::getInstance($host,$user,$password,$database);
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