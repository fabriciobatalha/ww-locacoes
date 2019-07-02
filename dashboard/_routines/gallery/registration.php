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

	$photoName = $_FILES['photo']['name'];
	$category = $_POST['category'];

	if(empty($photoName) || empty($category))
	{
		echo "<script language='javascript' type='text/javascript'>alert('Preencha todos os campos!');window.location.href='../../gallery/registry.php';</script>";
		exit();
	}
		else
		{
			$folder = "../../gallery/photos/";
			$temporaryPhotoName = $_FILES['photo']['tmp_name'];

			$allowedFormat = array("png", "PNG", "jpeg", "JPEG", "jpg", "JPG");
			$extension = end(explode(".", $photoName));

			if(in_array($extension, $allowedFormat))
			{
				$newPhotoName = uniqid().".$extension";
				$sendPhoto = move_uploaded_file($temporaryPhotoName, $folder.$newPhotoName);

				if($sendPhoto == true)
				{
					$registerPhoto = getConn()->prepare("INSERT INTO table_gallery (photo, category) VALUES ('{$newPhotoName}', '{$category}')");

					if($registerPhoto->execute())
					{
						echo "<script> alert('Foto cadastrada com sucesso!'); location='../../gallery/registry.php'; </script>";
					}
						else
						{
							echo "<script> alert('Erro! Foto envia para pasta, mas não cadastrada no banco de dados!'); location='../../gallery/registry.php'; </script>";
						}
				}
					else
					{
						echo "<script> alert('Erro ao enviar foto! Tente novamente.'); location='../../gallery/registry.php'; </script>";
					}
			}
				else
				{
					echo "<script> alert('Arquivo inválido!'); location='../../gallery/registry.php'; </script>";
				}
		}
?>