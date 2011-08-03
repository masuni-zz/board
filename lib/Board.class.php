<?php

class Board {
	public $dbh;
	private $salt;

	public $parent_id;

	public function __construct($dbh) {
		$this->dbh = $dbh;
		$this->salt = 'alan_test';

		$this->parent_id = 0;
	}

	public function insert($param) {
		$passwd = $this->getHash($param['user_password']);
		if (is_null($param['parent_id']) === true) $param['parent_id'] = 0;

		try {
			$sth = $this->dbh->prepare('insert into board(name, body, password, parent_id, update_dt, insert_dt) values(?, ?, ?, ?, ?, ?)');
			return $sth->execute(array(
				$param['user_name'],
				$param['body'],
				$passwd,
				$param['parent_id'],
				date("Y/m/d H:i:s"),
				date("Y/m/d H:i:s")
			));
		} catch (PDOException $e) {
			var_dump($e->getMessage());
		}
	}

	public function update($param) {
		try {
			$sth = $this->dbh->prepare('update board set name = ?, body = ?, update_dt =? where id = ?');
			return $sth->execute(array(
				$param['user_name'],
				$param['body'],
				date("Y/m/d H:i:s"),
				$param['id']
			));
		} catch (PDOException $e) {
			var_dump($e->getMessage());
		}
	}

	public function delete($id) {
		try {
			$sth = $this->dbh->prepare('delete from board where id = ?');
			return $sth->execute(array($id));
		} catch (PDOException $e) {
			var_dump($e->getMessage());
		}
	}

	public function setParentId($parent_id) {
		$this->parent_id = $parent_id;
		return true;
	}

	public function makeQuery() {
		$where = ' where';
		$query = $where.' parent_id = ?';
		$bind = array($this->parent_id);

		return array('query' => $query, 'bind' => $bind);
	}

	public function select() {
		$arr = $this->makeQuery();

		try {
			$sth = $this->dbh->prepare('select * from board'.$arr['query']);
			$sth->execute($arr['bind']);
			$result;
			while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
				$result[] = $row;
			}
			return $result;
		} catch (PDOException $e) {
			var_dump($e->getMessage());
		}
	}

	public function selectById($id) {
		try {
			$sth = $this->dbh->prepare('select * from board where id = ?');
			$sth->execute(array($id));
			$row = $sth->fetch(PDO::FETCH_ASSOC);
			return $row;
		} catch (PDOException $e) {
			var_dump($e->getMessage());
		}
	}

	public function passCheck($id, $str) {
		$passwd = $this->getHash($str);
		$res = $this->selectById($id);

		return ($passwd === $res['password']) ? true : false; 
	}

	public function getHash($str) {
		return hash('sha256', $str.$this->salt);
	}
}
