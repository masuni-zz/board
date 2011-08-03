<?php

class DB {
	public $host;
	public $database;
	public $dbuser;
	public $dbpass;

	public function __construct() {
		$this->host = "localhost";
		$this->database = "testdb";
		$this->dbuser = "mysql";
		$this->dbpass = "";
	}

	public function connect() {
		try {
			// MySQLサーバへ接続
			$dbh = new PDO("mysql:host=".$this->host."; dbname=".$this->database, $this->dbuser, $this->dbpass);
			$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e){
			var_dump($e->getMessage());
		}
		return $dbh;
	}

	public function disconnect($dbh) {
		// 切断
		$dbh = null;
	}
}
