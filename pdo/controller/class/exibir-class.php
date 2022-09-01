<?php
 class Exibir {

	private $pdo;

	public function __construct( ) {

		//conexão banco de dados

      try{

		$this -> pdo = new PDO("mysql:dbname=controle-estoque;host=localhost","fabio","F@bio102030",
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")	
		);
   }catch(PDOException $e){
         throw new PDOException($e);
      }
   
   }




   public function getCod() {

	$sql = "SELECT * from produtos";
	$sql = $this->pdo->query($sql);

	if ($sql->rowCount() > 0) {

		//retorna todos os clientes
		return $sql ->fetchAll();

	}else {
		return array();
	}

   }

}
