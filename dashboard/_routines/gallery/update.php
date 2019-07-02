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
	$category = $_POST['category'];

	if(empty($id) || empty($category))
	{
		echo "<script language='javascript' type='text/javascript'>alert('Preencha todos os campos!');window.location.href='../../gallery/history.php';</script>";
		exit();
	}
		else
		{
			$updatePhoto = getConn()->prepare("UPDATE table_gallery SET category='{$category}' WHERE id='{$id}'");

			if($updatePhoto->execute())
			{
				echo "<script> alert('Foto atualizada!'); location='../../gallery/history.php'; </script>";
			}
				else
				{
					echo "<script> alert('Erro! Tente novamente!'); location='../../gallery/history.php'; </script>";
				}
		}
?>