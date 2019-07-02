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

	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$level = $_POST['level'];

	if(empty($name) || empty($surname) || empty($email) || empty($password) || empty($level))
	{
		echo "<script language='javascript' type='text/javascript'>alert('Preencha todos os campos!');window.location.href='../../users/registry.php';</script>";
		exit();
	}
		else
		{
			$query = getConn()->prepare("SELECT * FROM table_user WHERE email='{$email}'");
			$query->execute();
			$busca = $query->rowCount();

			if($busca > 0)
			{		
				echo "<script> alert('Erro! E-mail já cadastrado!'); location='../../users/registry.php'; </script>";
			}
				else
				{
					$registerUser = getConn()->prepare("INSERT INTO table_user (name, surname, email, password, level) VALUES ('{$name}', '{$surname}', '{$email}', '{$password}', '{$level}')");

					if($registerUser->execute())
					{
						echo "<script> alert('Usuário cadastrado!'); location='../../users/registry.php'; </script>";
					}
						else
						{
							echo "<script> alert('Erro! Tente novamente!'); location='../../users/registry.php'; </script>";
						}
				}
		}
?>