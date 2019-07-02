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
	$cover = $_GET['cover'];

	if($levelLoggedIn == 'Administrador')
	{
		$deleteNews = getConn()->prepare("DELETE FROM table_news WHERE id='{$id}'");
	
		if($deleteNews->execute())
		{
			unlink("../../news/covers/{$cover}");
			echo "<script> alert('Notícia excluída!'); location='../../news/history.php'; </script>";
		}
			else
			{
				echo "<script> alert('Erro! Tente novamente!'); location='../../news/history.php'; </script>";
			}
	}
		else
		{
			echo "<script> alert('Erro! Você não tem permissão para excluir esta notícia!'); location='../../home.php'; </script>";
		}
?>