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

	$coverName = $_FILES['cover']['name'];
	$title = $_POST['title'];
	$description = $_POST['description'];
	$news = $_POST['news'];

	if(empty($coverName) || empty($title) || empty($description) || empty($news))
	{
		echo "<script language='javascript' type='text/javascript'>alert('Preencha todos os campos!');window.location.href='../../news/registry.php';</script>";
		exit();
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
					$registerNews1 = getConn()->prepare("INSERT INTO table_news (cover, title, description, news) VALUES('{$newCoverName}', '{$title}', '{$description}', '{$news}')");
			
					if($registerNews1->execute())
					{
						echo "<script> alert('Notícia cadastrada!'); location='../../news.php'; </script>";
					}
						else
						{
							unlink("../../news/covers/{$newCoverName}");
							echo "<script> alert('Erro! Tente novamente!'); location='../../news.php'; </script>";
						}
				}
					else
					{
						$registerNews2 = getConn()->prepare("INSERT INTO table_news (title, description, news) VALUES('{$title}', '{$description}', '{$news}')");
						
						if($registerNews2->execute())
						{
							echo "<script> alert('Noticia cadastrada sem capa!'); location='../../news.php'; </script>";	
						}
							else
							{
								echo "<script> alert('Erro! Tente novamente!'); location='../../news.php'; </script>";
							}	
					}
			}
				else
				{
					$registerNews3 = getConn()->prepare("INSERT INTO table_news (title, description, news) VALUES('{$title}', '{$description}', '{$news}')");
					
					if($registerNews3->execute())
					{
						echo "<script> alert('Notícia cadastrada sem capa!'); location='../../news.php'; </script>";
					}
						else
						{
							echo "<script> alert('Erro! Tente novamente!'); location='../../news.php'; </script>";
						}
				}	
		}
?>