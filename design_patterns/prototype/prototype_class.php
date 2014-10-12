<?php
abstract class prototype {
	protected $title;
	protected $topic;
	abstract function __clone();
	function getTitle() {
		return $this->title;
	}
	function setTitle($titleIn) {
		$this->title = $titleIn;
	}
	function getTopic() {
		return $this->topic;
	}
}

class PHPBookPrototype extends prototype {
	function __construct() {
		$this->topic = 'PHP';
	}
	function __clone() {
	}
}

class SQLBookPrototype extends prototype {
	function __construct() {
		$this->topic = 'SQL';
	}
	function __clone() {
	}
}


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////







?>