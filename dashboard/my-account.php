<?php
    session_start();
    require '_routines/conn.php';

    if(!isset ($_SESSION['userLoggedIn']['email']) and !isset ($_SESSION['userLoggedIn']['password']))
	{
  		unset($_SESSION['userLoggedIn']['email']);
  		unset($_SESSION['userLoggedIn']['password']);
		
		header('Location: index.php');
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
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
     
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<!-- <link rel="stylesheet" type="text/css" href="_css/_framework/bootstrap-4.1.3.min.css"> -->
        <link rel="stylesheet" type="text/css" href="_css/master.css">
    </head>
    
    <body class="exo-2 bg-light">
        <nav class="sticky-top navbar navbar-expand-lg navbar-light bg-light box-shadow">
            <a class="navbar-brand" href="home.php"> 
            	<img src="_img/logo.png" alt="Painel de Controle"> 
            </a>
            
            <span class="d-block d-lg-none navbar-text">
                Olá, <b><?php echo $_SESSION['userLoggedIn']['name']; ?></b>
            </span>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
             
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <span class="d-none d-lg-block navbar-text">
                        Olá, <b><?php echo $_SESSION['userLoggedIn']['name']; ?></b>
                    </span>                         
                </ul>

                <a class="px-3 ml-lg-3 mr-2 my-2 btn btn-outline-danger" href="_routines/my-account/logout.php" role="button"> Sair </a>
            </div>
        </nav>
        
        <section class="my-5 text-center">
            <div class="container">
                <div class="text-center text-lg-left">
                    <a class=" btn btn-outline-info" href="index.php" role="button"> Voltar ao Painel </a>
                </div>
          
                <div class="my-5">
                    <h2 class="display-4 text-secondary"> Minha Conta </h2>
                </div>
                
                <div class="row">
                	<div class="col-1 col-md-3 col-lg-4"></div>
                	
                	<?php
                		$query = getConn()->prepare("SELECT * FROM table_user WHERE id='{$_SESSION['userLoggedIn']['id']}'");
						$query->execute();
						$result = $query->fetchObject();
					?>
                	
                	<form class="col-10 col-md-6 col-lg-4" action="_routines/my-account/update.php" method="post" enctype="multipart/form-data">         	
                    	<div class="form-group d-none">
                    		<input type="number" name="id" value="<?php echo $result->id; ?>" class="form-control" placeholder="ID" required>
                    	</div>
                    	
                    	<div class="form-group">
                    		<input type="text" name="name" value="<?php echo $result->name; ?>" class="form-control" maxlength="15" placeholder="Nome" required>
                    	</div>

                    	<div class="form-group">
                        	<input type="text" name="surname" value="<?php  echo $result->surname; ?>" class="form-control" maxlength="15" placeholder="Sobrenome" required>
                    	</div>

                    	<div class="form-group">
                        	<input type="email" name="email" value="<?php echo $result->email; ?>" class="form-control" maxlength="70" placeholder="Email" required>
						</div>

                    	<div class="form-group">
                        	<input type="password" name="password" id="password" value="<?php echo $result->password; ?>" class="form-control" maxlength="15" placeholder="Senha" required> 
                    	</div>
                    	
                    	<div class="form-group">
                    		<button type="button" id="show-password" name="show-password" class="fa fa-eye-slash" aria-hidden="true"></button>
						</div>
<?php
                 		if($_SESSION['userLoggedIn']['level'] == 'Administrador')
						{
?>
							<div class="form-group">
								<select name="level" class="form-control" required>
									<option value="<?php echo $result->level; ?>" selected> <?php echo $result->level; ?> </option>
								</select>
                        	</div>
<?php
						}
							else
							{
?>
								<div class="form-group">
									<select name="level" class="form-control" required readonly>
										<option value="<?php echo $result->level; ?>" selected> <?php echo $result->level; ?> </option>
									</select>
                        		</div>
<?php
							}
?>
                    	<div class="form-group">
                        	<input class="form-control btn btn-outline-success" type="submit" value="Atualizar">
                    	</div>
            		</form>
              		
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