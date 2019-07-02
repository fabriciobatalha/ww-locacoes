<?php
    session_start();
	require '../conn.php';

	if(!isset ($_SESSION['userLoggedIn']['email']) and !isset ($_SESSION['userLoggedIn']['password']))
	{
  		unset($_SESSION['userLoggedIn']['email']);
  		unset($_SESSION['userLoggedIn']['password']);
		
		header('Location: ../../index.php');
		exit;
  	}

	$id = $_POST['id'];
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$level = $_POST['level'];

	if(empty($id) || empty($name) || empty($surname) || empty($email) || empty($password) || empty($level))
	{
		echo "<script language='javascript' type='text/javascript'>alert('Preencha todos os campos!');window.location.href='../../index.php';</script>";
		exit();
	}
		else
		{
			$query = getConn()->prepare("SELECT * FROM table_user WHERE email='{$email}' AND id!='{$id}'");
			$query->execute();
			$busca = $query->rowCount();
			
			if($busca > 0)
			{		
				echo "<script> alert('Erro! E-mail já cadastrado!'); location='../../home.php'; </script>";
			}
				else
				{
					$updateUser = getConn()->prepare("UPDATE table_user SET name='{$name}', surname='{$surname}', email='{$email}', password='{$password}', level='{$level}' WHERE id='{$id}'");
		
					if($updateUser->execute())
					{
						echo "<script> alert('Dados atualizados com sucesso!'); location='../../users.php'; </script>";
					}
						else
						{
							echo "<script> alert('Erro! Tente novamente!'); location='../home.php'; </script>";
						}
				}
		}
?>