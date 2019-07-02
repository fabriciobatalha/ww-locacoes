<?php
    session_start();
    require '_routines/conn.php';

    if(isset ($_SESSION['userLoggedIn']['email']) and isset ($_SESSION['userLoggedIn']['password']))
	{
		header('Location: home.php');
		exit;
  	}
?>

<!DOCTYPE html>  

<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title> Painel de Controle </title>
        <link rel="shortcut icon" href="_img/favicon.ico" type="image/x-icon">
		<link rel="icon" href="_img/favicon.ico" type="image/x-icon">
       
        <meta name="robots" content="noindex, nofollow, noimageindex">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <meta name="theme-color" content="#17a2b8">
        <meta name="msapplication-navbutton-color" content="#17a2b8">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        
        <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
     
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<!-- <link rel="stylesheet" type="text/css" href="_css/_framework/bootstrap-4.1.3.min.css"> -->
        <link rel="stylesheet" type="text/css" href="_css/index_account-recovery.css">
    </head>
    
    <body class="exo-2 bg-light text-center">
        <section>
        	<div class="container py-5">
            	<div class="text-center text-lg-left">
                    <a class="btn btn-outline-primary" href="index.php" role="button"> Voltar ao Login </a>
                </div>
                
                <div class="row">
                    <div class="col-1 col-md-3 col-lg-4"></div>

                    <div class="block col-10 col-md-6 col-lg-4 px-5 py-4">
                        <form method="post" action="_routines/retrieve-account.php">
                            <div class="mb-3">
                                <img src="_img/account-recovery.png" alt="Esqueci minha senha">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> @ </span>
                                </div>

                                <input type="email" class="form-control" placeholder="E-mail" name="email" required>
                            </div>
                            
                            <div class="mb-3">
                                <button class="w-100 btn btn-outline-danger" type="submit"> Gerar Nova Senha </button>
                            </div> 
                        </form>
                    </div>

                    <div class="col-1 col-md-3 col-lg-4"></div>
                </div>
            </div>    
        </section>
        
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
    	<!-- <script type="text/javascript" src="_js/_library/jquery-3.3.1.min.js"></script> -->
      	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<!-- <script type="text/javascript" src="_js/_library/popper-1.14.3.min.js"></script> -->
       	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <!-- <script type="text/javascript" src="_js/_framework/bootstrap-4.1.3.min.js"></script> -->
        <script type="text/javascript" src="_js/master.js"></script>
    </body>
</html>