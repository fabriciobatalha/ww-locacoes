<?php
	function getConn() {
		try {
			$username = "root";
			$password = "12345";

			$connection = new PDO('mysql:host=localhost;dbname=db_wwlocacoes', $username, $password);

			$connection->query("SET character_set_connection=utf8");
			$connection->query("SET character_set_client=utf8");
			$connection->query("SET character_set_results=utf8");
		} 
			catch (PDOException $e) {
				echo 'Error: '. $e->getMessage();
			}
			
		return $connection;
	}
?>