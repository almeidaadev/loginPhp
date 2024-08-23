<?php
class connectDb {
	public $mysqli;

	public function __construct($HOST, $USER, $PASS, $DBSA) {
		$this->mysqli = new mysqli($HOST, $USER, $PASS, $DBSA);
		if ($this->mysqli->connect_error) {
			die("Connection failed: " . $this->mysqli->connect_error);
		}
	}

	public function checkError() {
		if ($this->mysqli->connect_error) {
			echo "Error: " . $this->mysqli->connect_error;
		}
	}

	public function close() {
		$this->mysqli->close();
	}
}

$Db = new connectDb("localhost", "root", "", "dbdeteste");