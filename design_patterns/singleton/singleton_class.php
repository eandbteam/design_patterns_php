<?php
/*
 *   Singleton classes
*/
/*$link = mysqli_connect("myhost","myuser","mypassw","mybd") or die("Error " . mysqli_error($link));
 * 
 * 
 * 
 * 
 * $query = "SELECT name FROM mytable" or die("Error in the consult.." . mysqli_error($link)); 
 * 
 *  Ownership of the single instance cannot be reasonably assigned
    Lazy initialization is desirable
    Global access is not otherwise provided for
 * 
 * 
 */

class MySQL {
	/**
	 * @var Singleton
	 * @access private
	 * @static
	 */
	private $host ;
	private $user ;
	private $password ;
	private $database ;
	private $link;
	
	private static $_instance = null;
	/**
	 * Constructeur de la classe
	 *
	 * @param void
	 * @return void
	 */
	private function __construct($host,$user,$password,$database) {
		$this->host = $host;
		$this->user = $user;
		$this->password = $password;
		$this->database = $database;
		
		
		
		$this->link = mysqli_connect($this->host,$this->user,$this->password,$this->database) or die("Error " . mysqli_error($this->link));
	}
	/**
	 * Méthode qui crée l'unique instance de la classe
	 * si elle n'existe pas encore puis la retourne.
	 *
	 * @param void
	 * @return Singleton
	 */
	public static function getInstance($host,$user,$password,$database) {
		if(is_null(self::$_instance)) {
			self::$_instance = new MySQL($host,$user,$password,$database);
		}
		return self::$_instance;
	}
	
	public function sendQuery($query){
		
		$this->result = mysqli_query($this->link, $query) or die("Error in the consult.." . mysqli_error($this->link));
		
		//display information:
		return $this->result;
		
		
	}
	
	public function fetchArray(){
		return mysqli_fetch_array($this->result);
		
	}
	 public function Close(){
	 	
	 	mysqli_close ( $this->link );
	 	self::$_instance = null;
	 		 	
	 	
	 	
	 }
		
	
		
}



/*
class BookSingleton {
	private $author = 'Gamma, Helm, Johnson, and Vlissides';
	private $title  = 'Design Patterns';
	private static $book = NULL;
	private static $isLoanedOut = FALSE;

	private function __construct() {
	}

	static function borrowBook() {
		if (FALSE == self::$isLoanedOut) {
			if (NULL == self::$book) {
				self::$book = new BookSingleton();
			}
			self::$isLoanedOut = TRUE;
			return self::$book;
		} else {
			return NULL;
		}
	}

	function returnBook(BookSingleton $bookReturned) {
		self::$isLoanedOut = FALSE;
	}

	function getAuthor() {return $this->author;}

	function getTitle() {return $this->title;}

	function getAuthorAndTitle() {
		return $this->getTitle() . ' by ' . $this->getAuthor();
	}
}

class BookBorrower {
	private $borrowedBook;
	private $haveBook = FALSE;

	function __construct() {
	}

	function getAuthorAndTitle() {
		if (TRUE == $this->haveBook) {
			return $this->borrowedBook->getAuthorAndTitle();
		} else {
			return "I don't have the book";
		}
	}

	function borrowBook() {
		$this->borrowedBook = BookSingleton::borrowBook();
		if ($this->borrowedBook == NULL) {
			$this->haveBook = FALSE;
		} else {
			$this->haveBook = TRUE;
		}
	}

	function returnBook() {
		$this->borrowedBook->returnBook($this->borrowedBook);
	}
}
*/
?>