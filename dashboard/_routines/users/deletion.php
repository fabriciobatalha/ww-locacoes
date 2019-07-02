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

	$id = $_GET['id'];
	$levelLoggedIn = $_SESSION['userLoggedIn']['level'];

	if($levelLoggedIn == 'Administrador')
	{
		$deleteUser = getConn()->prepare("DELETE FROM table_user WHERE id='{$id}'");

		if($deleteUser->execute())
		{
			echo "<script> alert('Usuário excluído!'); location='../../users.php'; </script>";
		}
			else
			{
				echo "<script> alert('Erro! Tente novamente!'); location='../../users.php'; </script>";
			}
	}
		else
		{
			echo "<script> alert('Erro! Você não tem permissão para excluir este usuário!'); location='../../home.php'; </script>";
		}
?>