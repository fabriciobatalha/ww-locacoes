<?php
    session_start();
	require 'conn.php';

	if(isset ($_SESSION['userLoggedIn']['email']) and isset ($_SESSION['userLoggedIn']['password']))
	{
		header('Location: ../home.php');
		exit;
  	}

	$email = $_POST['email'];
	
	if(empty($email))
	{
		echo "<script language='javascript' type='text/javascript'>alert('Informe seu e-mail!');window.location.href='../index.php';</script>";
		exit();
	}
		else
		{
			$query = getConn()->prepare("SELECT * FROM table_user WHERE email='{$email}'");
			$query->execute();
			$busca = $query->rowCount();
			
			if($busca > 0)
			{
				$newPassword = substr(md5(time()), 0, 6);

				$from = "naoresponda@wwlocacoes.com.br";
				$to = $email;
			
				$name = "WW Locações";
				$subject = "Recuperação de Senha";
				$message = "Sua nova senha de acesso à Área Administrativa é $newPassword.";
			
				$headers = "MIME-Version: 1.1\n";
				$headers .= "Content-type: text/plain; charset=UTF-8\n";
				$headers .= "From: $name <$from>";
				$headers .= "Return-Path: $name <$from>";
					
				//if(1 == 1)
    			if(mail($to, $subject, $message, $headers))
    			{
    				$updatePassword = getConn()->prepare("UPDATE table_user SET password='{$newPassword}' WHERE email='{$email}'");
    
					if($updatePassword->execute())
					{
						echo "<script> alert('Nova senha enviada para seu email!'); location='../index.php'; </script>";
					}
						else
						{
							echo "<script> alert('Erro! Tente Novamente!'); location='../forgotpassword.php'; </script>";
						}	
				}
					else
					{
						echo "<script> alert('Erro! Tente Novamente!'); location='../forgotpassword.php'; </script>";
					}
			}
				else
				{
					echo "<script> alert('Erro! E-mail não encontrado!'); location='../forgotpassword.php'; </script>";	
				}
		}
?>