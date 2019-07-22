<?php
	$from = $_POST['email'];
	$to = "contato@wwlocacoes.com.br";

	$name = $_POST['name'];
	$subject = "Contato Através do Site";
	$message = $_POST['message'];

	$headers = "MIME-Version: 1.1\n";
	$headers .= "Content-type: text/plain; charset=UTF-8\n";
	$headers .= "From: $name <$from>";
	$headers .= "Return-Path: $name <$from>";
	$sendEmail = mail($to, $subject, $message, $headers);

	if($sendEmail) {
		echo "<script> alert('Mensagem enviada!'); location='../index.php'; </script>";
	}
		else {
			echo "<script> alert('Erro! Tente novamente!'); location='../index.php'; </script>";
		}
?>