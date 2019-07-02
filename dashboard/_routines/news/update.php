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
	$oldCover = $_POST['oldCover'];
	$coverName = $_FILES['cover']['name'];
	$title = $_POST['title'];
	$description = $_POST['description'];
	$news = $_POST['news'];

	if(empty($id) || empty($title) || empty($description) || empty($news))
	{
		echo "<script language='javascript' type='text/javascript'>alert('Preencha todos os campos!');window.location.href='../../news/history.php';</script>";
		exit();
	}
		else
		{
			if(empty($coverName))
			{
				$updateNews = getConn()->prepare("UPDATE table_news SET title='{$title}', description='{$description}', news='{$news}' WHERE id='{$id}'");

				if($updateNews->execute())
				{
					echo "<script> alert('Notícia atualizada, menos a capa! (Obs.: Nenhuma nova capa selecionada!)'); location='../../news/history.php'; </script>";
				}
					else
					{
						echo "<script> alert('Erro! Tente novamente!'); location='../../news/history.php'; </script>";
					}
			}
				else
				{
					$folder = "../../news/covers/";
					$temporaryCoverName = $_FILES['cover']['tmp_name'];

					$allowedFormat = array("png", "PNG", "jpeg", "JPEG", "jpg", "JPG");
					$extension = end(explode(".", $coverName));

					if(in_array($extension, $allowedFormat))
					{
						$newCoverName = uniqid().".$extension";
						$sendCover = move_uploaded_file($temporaryCoverName, $folder.$newCoverName);

						if($sendCover == true)
						{					
							$updateNews1 = getConn()->prepare("UPDATE table_news SET cover='$newCoverName', title='{$title}', description='{$description}', news='{$news}' WHERE id='{$id}'");

							if($updateNews1->execute())
							{
								unlink("../../news/covers/{$oldCover}");
								echo "<script> alert('Notícia atualizada!'); location='../../news/history.php'; </script>";
							}
								else
								{
									unlink("../../news/covers/{$newCoverName}");
									echo "<script> alert('Erro! Tente novamente!'); location='../../news/history.php'; </script>";
								}
						}
							else
							{
								$updateNews2 = getConn()->prepare("UPDATE table_news SET title='{$title}', description='{$description}', news='{$news}' WHERE id='{$id}'");

								if($updateNews2->execute())
								{
									echo "<script> alert('Noticia atualizada, menos a capa! (Obs.: Capa não enviada para o servidor!)'); location='../../news/history.php'; </script>";	
								}
									else
									{
										echo "<script> alert('Erro! Tente novamente!'); location='../../news/history.php'; </script>";
									}
							}
					}
						else
						{
							$updateNews3 = getConn()->prepare("UPDATE table_news SET title='{$title}', description='{$description}', news='{$news}' WHERE id='{$id}'");

							if($updateNews3->execute())
							{
								echo "<script> alert('Notícia atualizada, menos a capa! (Obs.: Capa com formato inválido!)'); location='../../news/history.php'; </script>";
							}
								else
								{
									echo "<script> alert('Erro integral! Tente novamente! (02)'); location='../../news/history.php'; </script>";
								}
						}
				}	
		}
?>