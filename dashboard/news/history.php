<?php
    session_start();
    require '../_routines/conn.php';

    if(!isset ($_SESSION['userLoggedIn']['email']) and !isset ($_SESSION['userLoggedIn']['password']))
	{
  		unset($_SESSION['userLoggedIn']['email']);
  		unset($_SESSION['userLoggedIn']['password']);
		
		header('Location: ../index.php');
		exit;
  	}
?>

<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title> Painel de Controle </title>
        <link rel="shortcut icon" href="../_img/favicon.ico" type="image/x-icon">
		<link rel="icon" href="../_img/favicon.ico" type="image/x-icon">
       
        <meta name="robots" content="noindex, nofollow, noimageindex">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <meta name="theme-color" content="#17a2b8">
        <meta name="msapplication-navbutton-color" content="#17a2b8">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        
        <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
     
      	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<!-- <link rel="stylesheet" type="text/css" href="../_css/_framework/bootstrap-4.1.3.min.css"> -->
        <link rel="stylesheet" type="text/css" href="../_css/_library/lightbox-2.10.0.min.css">
        <link rel="stylesheet" type="text/css" href="../_css/master.css">
    </head>
    
    <body class="exo-2 bg-light">
        <nav class="sticky-top navbar navbar-expand-lg navbar-light bg-light box-shadow">
            <a class="navbar-brand" href="../home.php"> 
            	<img src="../_img/logo.png" alt="Painel de Controle"> 
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

                <a class="px-3 ml-lg-4 mr-2 my-2 btn btn-outline-success" href="../my-account.php" role="button"> Minha Conta </a>
                <a class="px-3 ml-lg-3 mr-2 my-2 btn btn-outline-danger" href="../_routines/my-account/logout.php" role="button"> Sair </a>
            </div>
        </nav>
        
        <section class="my-5 text-center">
            <div class="container">
                <div class="text-center text-lg-left">
                    <a class=" btn btn-outline-info" href="../news.php" role="button"> Voltar à Notícias </a>
                </div>
          
                <div class="my-5">
                    <h2 class="display-4 text-secondary"> Histórico </h2>
                </div>
                
                <div class="row">
                	<table class="col-12 table table-borderless">
						<thead>
							<tr>
								<th scope="col"> Referência </th>
								<th scope="col"> Capa </th>
								<th scope="col"> Editar </th>
								<th scope="col"> Excluir </th>
							</tr>
						</thead>
<?php
						$queryNews = getConn()->prepare("SELECT * FROM table_news ORDER BY id ASC");
						$queryNews->execute();
						$countNews = $queryNews->rowCount();
				
						if($countNews > 0)
						{
                			foreach($queryNews as $result)
                			{
								
?>								<tbody>
									<tr>
										<td> Notícia <?php echo $result['id']; ?> </td>
							
										<td class="table-option">
											<a href="../news/covers/<?php echo $result['cover']; ?>" data-lightbox="mygallery" data-title="Notícia <?php echo $result['id']; ?>"> 
												<img src="../_img/_options/show.png" alt="Visualizar Notícia"> 
											</a>
										</td>
										
										<td class="table-option"> 
											<a href="update.php?id=<?php echo $result['id']; ?>"> 
												<img src="../_img/_options/update.png" alt="Atualizar Notícia"> 
											</a> 
										</td>
										
										<td class="table-option"> 
											<a href="../_routines/news/deletion.php?id=<?php echo $result['id']; ?>&cover=<?php echo $result['cover']; ?>" onclick="return confirm('Excluir Notícia <?php echo $result['id']; ?>?')"> 
												<img src="../_img/_options/delete.png" alt="Excluir Notícia"> 
											</a> 
										</td>
									</tr>
								</tbody> 		
<?php
                			}
						}
							else
							{
?>
								<tbody>
									<tr>
										<td colspan="4"> Sem registros! </td>										
									</tr>
								</tbody>						 
<?php
							}

?>		
					</table>
                </div>
            </div>
        </section> 
    	
    	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
    	<!-- <script type="text/javascript" src="../_js/_library/jquery-3.3.1.min.js"></script> -->
      	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<!-- <script type="text/javascript" src="../_js/_library/popper-1.14.3.min.js"></script> -->
       	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <!-- <script type="text/javascript" src="../_js/_framework/bootstrap-4.1.3.min.js"></script> -->
        <script type="text/javascript" src="../_js/_library/lightbox-2.10.0.min.js"></script>
    	<script type="text/javascript" src="../_js/master.js"></script> 
    </body>
</html>