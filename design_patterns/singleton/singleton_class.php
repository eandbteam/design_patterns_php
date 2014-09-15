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
 * 
 * 
 * 
 */

class Singleton {
	/**
	 * @var Singleton
	 * @access private
	 * @static
	 */
	private $host = "localhost";
	private $user ="root";
	private $password = "";
	private $database = "test";
	private $link;
	
	private static $_instance = null;
	/**
	 * Constructeur de la classe
	 *
	 * @param void
	 * @return void
	 */
	private function __construct() {
		
		$this->link = mysqli_connect($this->host,$this->user,$this->password,$this->database) or die("Error " . mysqli_error($this->link));
	}
	/**
	 * Méthode qui crée l'unique instance de la classe
	 * si elle n'existe pas encore puis la retourne.
	 *
	 * @param void
	 * @return Singleton
	 */
	public static function getInstance() {
		if(is_null(self::$_instance)) {
			self::$_instance = new Singleton();
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