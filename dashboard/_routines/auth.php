<?php
    session_start();
    require 'conn.php';

	if(isset ($_SESSION['userLoggedIn']['email']) and isset ($_SESSION['userLoggedIn']['password']))
	{
		header('Location: ../home.php');
		exit;
  	}

	$email = $_POST['email'];
	$password = $_POST['password'];

	if(empty($email) || empty($password))
	{
		echo "<script language='javascript' type='text/javascript'>alert('Preencha todos os campos!');window.location.href='../index.php';</script>";
		exit();
	}
		else
		{
			$query = getConn()->prepare("SELECT * FROM table_user WHERE email='{$email}' AND password='{$password}'");
			$query->execute();
			$busca = $query->rowCount();
			$linha = $query->fetchObject();
		
			if($busca > 0)
			{
				$userLoggedIn = array('id' => $linha->id, 'name' => $linha->name, 'email' => $linha->email, 'password' => $linha->password, 'level' => $linha->level);
				$_SESSION['userLoggedIn'] = $userLoggedIn;
				
				header('Location: ../home.php');
				exit;
			}
				else
				{
					echo "<script language='javascript' type='text/javascript'>alert('E-mail e/ou senha incorretos!');window.location.href='../index.php';</script>";
					exit();
				}
		}
?>