<?php 

class Connection{

	private $host = "";
	private $database = "";
	private $user = "";
	private $password = "";
	private $con = null;

	function _construct($hostcon, $databasecon, $usercon, $passwordcon){
		$this->host = $hostcon;
		$this->database = $databasecon;
		$this->user = $usercon;
		$this->password = $passwordcon;
	}

	function getOpenConnection(){
		$con = mysql_connect($this->host, $this->user, $this->password) or die ('Falha na conexao com banco!');
		mysql_select_db($this->database);
		$this->con = $con;
		return $con;
	}

	function getCloseConnection(){
		mysql_close($this->con);
	}
	
}

 ?>