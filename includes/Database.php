<?php
/**
* DATABASE
*/
class DB
{
	private $_hostname;
	private $_user;
	private $_password;
	private $_database;
	public $connection;
	public function __construct()
	{
		return $this->dbconnect('localhost', 'root', '', 'nettuts_blog');
	}

	public function dbconnect($_hostname, $_user, $_password, $_database)
	{
		$this->_hostname = $_hostname;
		$this->_user = $_user;
		$this->_password = $_password;
		$this->_database = $_database;
		$this->connection = mysqli_connect($_hostname, $_user, $_password, $_database);
		if (mysqli_connect_errno()) {
			die("Failed to connect to MySQL: " . mysqli_connect_error());
		} else {
			return $this->connection;
		}
	}
	public function __destruct()
	{
		return mysqli_close(self::__construct($this->_hostname, $this->_user, $this->_password, $this->_database));
	}

}