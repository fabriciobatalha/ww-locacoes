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
	$photo = $_GET['photo'];

	if($levelLoggedIn == 'Administrador')
	{
		$deletePhoto = getConn()->prepare("DELETE FROM table_gallery WHERE id='{$id}'");

		if($deletePhoto->execute())
		{
			unlink("../../gallery/photos/{$photo}");
			echo "<script> alert('Foto excluída!'); location='../../gallery/history.php'; </script>";
		}
			else
			{
				echo "<script> alert('Erro! Tente novamente!'); location='../../gallery/history.php'; </script>";
			}
	}
		else
		{
			echo "<script> alert('Erro! Você não tem permissão para excluir esta foto!'); location='../../home.php'; </script>";
		}
?>