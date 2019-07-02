<?php
	function getConn() 
	{
		try
		{
			$username = "root";
			$password = "";
			
			$conn = new PDO('mysql:host=localhost;dbname=database_wwlocacoes', $username, $password);
			
			$conn->query("SET character_set_connection=utf8");
			$conn->query("SET character_set_client=utf8");
			$conn->query("SET character_set_results=utf8");
		} 
			catch (PDOException $e) 
			{
				echo 'Error: '. $e->getMessage();
			}
		
		return $conn;
	}
?>