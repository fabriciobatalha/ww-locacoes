<?php
	require '_routines/conn.php';
?>

<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title> WW Locações </title>
		<link rel="shortcut icon" href="_img/favicon.ico" type="image/x-icon">
		<link rel="icon" href="_img/favicon.ico" type="image/x-icon">
		<meta name="keywords" content="wwlocacoes, wwlocações, ww locacoes, ww locações">
		<meta name="description" content="Bem vindo ao site da WW Locações.">
		
		<meta name="google-site-verification" content="aFSUsCH7M3FwStR0hKqR7EtITaTw3qlbQ-gyg8oAU_8" />
		<meta name="robots" content="index, follow">
		<link rel="canonical" href="https://wwlocacoes.com.br"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<meta name="theme-color" content="#363636">
        <meta name="msapplication-navbutton-color" content="#17a2b8">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
		
		<link href="https://fonts.googleapis.com/css?family=Cabin|Cabin+Condensed" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<!-- <link rel="stylesheet" type="text/css" href="_css/_framework/bootstrap-4.1.3.min.css"> -->
		<link rel="stylesheet" type="text/css" href="_css/_library/lightbox-2.10.0.min.css">
		<link rel="stylesheet" type="text/css" href="_css/master.css">
	</head>
	
	<body data-spy="scroll" data-target="#navbarScrollSpy" data-offset="100">
		<section id="top" class="text-center text-secondary">
			<div class="container">
				<div class="row">
					<div id="top-socialnetwork" class="col-6 col-md-2">
						<a href="https://www.facebook.com/" target="_blank"> 
							<img src="_img/top/social-network/facebook.png" title="Facebook WW Locações" alt="Facebook WW Locações"> 
						</a>
					
						<a href="https://www.instagram.com/" target="_blank"> 
							<img src="_img/top/social-network/instagram.png" title="Instagram WW Locações" alt="Instagram WW Locações"> 
						</a>
					
						<a href="https://www.twitter.com/" target="_blank"> 
							<img src="_img/top/social-network/twitter.png" title="Twitter WW Locações" alt="Twitter WW Locações"> 
						</a>
					</div>
					
					<div class="col-4 col-md-4"></div>
						
					<div id="top-phone" class="d-none d-md-block col-2">
						<img src="_img/top/contact/phone.png" alt="Telefone WW Locações">
						+55 92 9 9292-9292
					</div>
						
					<div id="top-email" class="d-none d-md-block col-3">
						<img src="_img/top/contact/email.png" alt="E-mail WW Locações">
						contato@wwlocacoes.com.br
					</div>
					
					<div id="top-dashboard" class="col-2 col-md-1">
						<a href="dashboard/index.php"> 
							<img src="_img/top/dashboard.png" alt="Painel de Controle WW Locações"> 
						</a>
					</div>
				</div>
			</div>
		</section>

		<nav id="navbarScrollSpy" class="header navbar sticky-top navbar-expand-lg navbar-light">
			<div class="container">
  				<a class="navbar-brand" href="index.php">
  					<img src="_img/logo.png" alt="Logo WW Locações">
  				</a>

  				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    				<span class="navbar-toggler-icon"></span>
  				</button>
  					
  				<div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
    				<div class="navbar-nav" id="navbar-nav">
      					<a class="nav-item nav-link" href="#whoweare"> Quem Somos </a>
      					<a class="nav-item nav-link" href="#services"> Serviços </a>
      					<a class="nav-item nav-link" href="#gallery"> Galeria </a>
      					<a class="nav-item nav-link" href="#dna"> DNA </a>
      					<a class="nav-item nav-link" href="#news"> Notícias </a>
      					<a class="nav-item nav-link" href="#whatsapp"> WhatsApp </a>
      					<a class="nav-item nav-link" href="#partners"> Parceiros </a>
      					<a class="nav-item nav-link" href="#faq"> FAQ </a>
      					<a class="nav-item nav-link" href="#contact"> Contato </a>
    				</div>
  				</div>
			</div>
		</nav>

		<section class="carousel">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
							
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="_img/carousel/1.jpg" class="d-block w-100 img-fluid" alt="Banner WW Locações">
					</div>
								
					<div class="carousel-item">
						<img src="_img/carousel/2.jpg" class="d-block w-100 img-fluid" alt="Banner WW Locações">
					</div>
									
					<div class="carousel-item">
						<img src="_img/carousel/3.jpg" class="d-block w-100 img-fluid" alt="Banner WW Locações">
					</div>
				</div>
				  
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only"> Anterior </span>
				</a>
				  			
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only"> Próximo </span>
				</a>
			</div>
		</section>

		<section id="whoweare" class="py-5 text-center">
			<div class="container">
				<div class="row">
					<h1 class="col-12 mb-5"> Quem Somos </h1>
						
					<div class="col-md-1"></div>
						
					<p class="col-12 col-md-10 text-justify"> A <b> WW Empreendimentos </b> é uma empresa preparada para atender às mais específicas requisições de seu negócio. Possuimos equipamentos modernos e uma equipe de profissionais altamente qualificados. Garantimos o atendimento dos mais rigorosos QSMS existentes no mercado, otimizando tempo e custo de nossos clientes. Ut enim ad minim veniam. Ut enim ad minim veniam. Ut enim ad minim veniam. Ut enim ad minim veniam. Ut enim ad minim veniam. Ut enim ad minim veniam. </p>
						
					<div class="col-md-1"></div>
				</div>
					
				<div class="row mt-5">
					<div class="d-none d-md-block col-1"></div>
					
					<div class="col-12 col-md-5">
						<h2 class="mb-3"> Fundador </h2>
						
						<p class="text-justify"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Ut enim ad minim veniam. Ut enim ad minim veniam. Ut enim ad minim veniam. </p>
					</div>
					
					<div class="col-12 col-md-5">
						<h2 class="mb-3"> Missão </h2>
						
						<p class="text-justify"> Locar equipamentos com compromisso, qualidade e agilidade, assegurando a satisfação de nossos clientes, através do contínuo investimento humano e tecnológico. Ut enim ad minim veniam. Ut enim ad minim veniam. Ut enim ad minim veniam. </p>
					</div>
					
					<div class="d-none d-md-block col-1"></div>
				</div>
			</div>
		</section>
		
		<section id="services" class="py-5 text-center bg-light">
			<div class="container">
				<div class="row">
					<h1 class="col-12 mb-5"> Serviços </h1>
					
					<div class="col-12 col-md-4 mb-3">	
						<img src="_img/services/1.png" alt="Serviço WW Locações">
															
						<p class="title"> Locação de Balsa </p>
						
						<p class="description text-justify"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet. </p>
					</div>
					
					<div class="col-12 col-md-4 mb-3">
						<img src="_img/services/1.png" alt="Serviço WW Locações">
						
						<p class="title"> Locação de Guindaste </p>
						
						<p class="description text-justify"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet. </p>
					</div>
					
					<div class="col-12 col-md-4 mb-3">
						<img src="_img/services/1.png" alt="Serviço WW Locações">
						
						<p class="title"> Locação de Carreta </p>
						
						<p class="description text-justify"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet. </p>
					</div>
					
					<div class="col-12 col-md-4 mb-3">
						<img src="_img/services/1.png" alt="Serviço WW Locações">
						
						<p class="title"> Locação de Balsa </p>
						
						<p class="description text-justify"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet. </p>
					</div>
					
					<div class="col-12 col-md-4 mb-3">
						<img src="_img/services/1.png" alt="Serviço WW Locações">
						
						<p class="title"> Locação de Guindaste </p>
						
						<p class="description text-justify"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet. </p>
					</div>
					
					<div class="col-12 col-md-4 mb-3">
						<img src="_img/services/1.png" alt="Serviço WW Locações">
						
						<p class="title"> Locação de Carreta </p>
						
						<p class="description text-justify"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet. </p>
					</div>
				</div>
			</div>
		</section>
		
		<section id="gallery" class="py-5">
			<div class="container">
				<div class="row">
					<h1 class="col-12 mb-5 text-center"> Galeria </h1>
				</div>
				
				<div class="row">
<?php
					$queryCategoryOne = getConn()->prepare("SELECT * FROM table_gallery WHERE category='1' ORDER BY id DESC");
					$queryCategoryOne->execute();
					$countCategoryOne = $queryCategoryOne->rowCount();
					
					$queryCategoryTwo = getConn()->prepare("SELECT * FROM table_gallery WHERE category='2' ORDER BY id DESC");
					$queryCategoryTwo->execute();
					$countCategoryTwo = $queryCategoryTwo->rowCount();
				
					if($countCategoryOne > 0)
					{
?>
      					<p class="col-12"> Balsas </p>
<?php
                		foreach($queryCategoryOne as $resultCategoryOne)
                		{				
?>	
							<a href="dashboard/gallery/photos/<?php echo $resultCategoryOne['photo']; ?>" class="col-6 col-md-3 mb-4" data-lightbox="mygallery" data-title="<?php echo $resultCategoryOne['photo']; ?>">
								<img class="w-100" src="dashboard/gallery/photos/<?php echo $resultCategoryOne['photo']; ?>" alt="Foto WW Locações"> 
							</a>
<?php
                		}
					}
					
					if($countCategoryTwo > 0)
					{
?>
      					<p class="col-12"> Escavadeiras </p>
<?php
                		foreach($queryCategoryTwo as $resultCategoryTwo)
                		{				
?>	
							<a href="dashboard/gallery/photos/<?php echo $resultCategoryTwo['photo']; ?>" class="col-6 col-md-3 mb-4" data-lightbox="mygallery" data-title="<?php echo $resultCategoryTwo['photo']; ?>">
								<img class="w-100" src="dashboard/gallery/photos/<?php echo $resultCategoryTwo['photo']; ?>" alt="Foto WW Locações"> 
							</a>
<?php
                		}
					}
						
					if($countCategoryOne <= 0 and $countCategoryTwo <= 0)
					{
						echo "
							<div class='col-12 text-center'>
								<button class='btn btn-warning text-light'> Não há fotos! </button>
							</div>
						";
					}
?>
				</div>
			</div>
		</section>
		
		<section id="dna" class="py-5 text-center bg-light">
			<div class="container">
				<div class="row">					
					<h1 class="col-12 mb-5"> DNA </h1>

					<div class="col-12 col-md-3 mb-3">
						<img src="_img/dna/1.png" alt="DNA WW Locações">
						
						<p class="title"> Compromisso com Cliente </p>
						
						<p class="description text-justify"> Possuímos excelente atendimento, além de equipamentos novos e revisados, proporcionando segurança e precisão. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
						</p>
					</div>
					
					<div class="col-12 col-md-3 mb-3">
						<img src="_img/dna/2.png" alt="DNA WW Locações">
						
						<p class="title"> Qualidade </p>
						
						<p class="description text-justify"> É fundamental em atividades que exigem máquinas robustas, que os serviços prestados sejam feitos com precisão e rapidez, pois, com isso, nossos clientes atenderão seus prazos com confiabilidade e economia. </p>
					</div>
					
					<div class="col-12 col-md-3 mb-3">
						<img src="_img/dna/3.png" alt="DNA WW Locações">
						
						<p class="title"> Profissionais Comprometidos </p>
						
						<p class="description text-justify"> Nossa empresa conta com profissionais qualificados e experientes para atender todas as necessidades dos nossos Clientes. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do. </p>
					</div>
					
					<div class="col-12 col-md-3 mb-3">
						<img src="_img/dna/4.png" alt="DNA WW Locações">
						
						<p class="title"> Responsabilidade Ambiental </p>
						
						<p class="description text-justify"> Presamos pela proteção e preservação do meio ambiente, sempre comprometidos em conduzir as suas atividades com responsabilidade ambiental, contribuindo para o desenvolvimento sustentável. </p>
					</div>
					
					<div class="col-12 col-md-3 mb-3">
						<img src="_img/dna/5.png" alt="DNA WW Locações">
						
						<p class="title"> Saúde e Segurança </p>
						
						<p class="description text-justify"> Promovemos a segurança e saúde no ambiente de trabalho, disponibilizando para isso todas as condições e equipamentos necessários para a prática segura de suas operações. </p>
					</div>
					
					<div class="col-12 col-md-3 mb-3">
						<img src="_img/dna/1.png" alt="DNA WW Locações">
						
						<p class="title"> Compromisso com Cliente </p>
						
						<p class="description text-justify"> Possuímos excelente atendimento, além de equipamentos novos e revisados, proporcionando segurança e precisão. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
						</p>
					</div>
					
					<div class="col-12 col-md-3 mb-3">
						<img src="_img/dna/2.png" alt="DNA WW Locações">
						
						<p class="title"> Qualidade </p>
						
						<p class="description text-justify"> É fundamental em atividades que exigem máquinas robustas, que os serviços prestados sejam feitos com precisão e rapidez, pois, com isso, nossos clientes atenderão seus prazos com confiabilidade e economia. </p>
					</div>
					
					<div class="col-12 col-md-3 mb-3">
						<img src="_img/dna/3.png" alt="DNA WW Locações">
						
						<p class="title"> Profissionais Comprometidos </p>
						
						<p class="description text-justify"> Nossa empresa conta com profissionais qualificados e experientes para atender todas as necessidades dos nossos Clientes. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do. </p>
					</div>
				</div>
			</div>
		</section>
		
		<section id="news" class="py-5 text-center">
			<div class="container">
				<div class="row">
					<h1 class="col-12 mb-5"> Notícias </h1>						
<?php
						$queryNews = getConn()->prepare("SELECT * FROM table_news ORDER BY id DESC");
						$queryNews->execute();
						$countNews = $queryNews->rowCount();
							
						if($countNews > 0)
						{
							foreach($queryNews as $result)
							{
?>
								<!-- News Card -->
								<div class="col-12 col-md-4">
									<div class="card mx-3 mb-4 mb-md-5">
										<img src="dashboard/news/covers/<?php echo $result['cover']; ?>" class="card-img-top" alt="Notícia WW Locações">

										<div class="card-body">
											<p class="card-title title"> <?php echo $result['title']; ?> </p>

											<p class="card-text description text-justify"> <?php echo $result['description']; ?> </p>

											<a href="#" class="btn btn-info" data-toggle="modal" data-target="#x<?php echo $result['id']; ?>"> Leia Mais </a>
										</div>
									</div>
								</div>
								
								<!-- Modal Card -->
								<div class="modal fade bd-example-modal-lg" id="x<?php echo $result['id']; ?>" tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  									<div class="modal-dialog modal-lg" role="document">
    									<div class="modal-content">
      										<div class="modal-header">
        										<p class="modal-title title" id="exampleModalLabel"> <?php echo $result['title']; ?> </p>

        										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          											<span aria-hidden="true">&times;</span>
        										</button>
      										</div>
      										
      										<div class="modal-body">
												<img class="w-100 modal-cover" src="dashboard/news/covers/<?php echo $result['cover']; ?>" alt="Notícia WW Locações">									
<?php 
							 					echo nl2br("<p class='news text-justify mt-3 mt-md-5 px-2 px-md-5'> $result[news] </p>");
?>
      										</div>
      										
      										<div class="modal-footer">
        										<button type="button" class="btn btn-secondary" data-dismiss="modal"> Fechar </button>
      										</div>
    									</div>
  									</div>
								</div>
<?php
							}
						}
							else
							{
?>
								<div class="col-12 text-center">
									<button class="btn btn-warning text-light"> Não há notícias! </button>
								</div>
<?php
							}
?>
				</div>
			</div>
		</section>
		
		<section id="whatsapp" class="py-5 text-center">
			<div class="container">
				<div class="row">
					<div class="col-3 col-md-5"></div>
						
					<div class="col-6 col-md-2">
						<img src="_img/whatsapp.png" alt="WhatsApp WW Locações">
						<a href="https://wa.me/559292491808?text=Ol%C3%A1%20%F0%9F%96%90%F0%9F%8F%BB%0A%0AGostaria%20de%20detalhes%20sobre%20os%20servi%C3%A7os%20que%20a%20WW%20Loca%C3%A7%C3%B5es%20disp%C3%B5e%20%F0%9F%9A%9C" target="_blank" class="col-12 mt-3 btn btn-success"> WhatsApp </a>
					</div>
						
					<div class="col-3 col-md-5"></div>
				</div>
			</div>
		</section>
		
		<section id="partners" class="py-5 text-center bg-light">
			<div class="container">
				<div class="row">
					<h1 class="col-12 mb-5"> Parceiros </h1>
					
					<div class="col-6 col-md-3 mb-5">
						<a href="http://www.petrobras.com.br" target="_blank"> 
							<img src="_img/partners/1.png" alt="Parceiro WW Locações"> 
						</a>
					</div>
					
					<div class="col-6 col-md-3 mb-5">
						<a href="http://www.andradegutierrez.com.br" target="_blank"> 
							<img src="_img/partners/2.png" alt="Parceiro WW Locações"> 
						</a>
					</div>
					
					<div class="col-6 col-md-3 mb-5">
						<a href="http://www.tabocas.com.br" target="_blank"> 
							<img src="_img/partners/3.png" alt="Parceiro WW Locações"> 
						</a>
					</div>
					
					<div class="col-6 col-md-3 mb-5">
						<a href="http://www.petrobras.com.br" target="_blank"> 
							<img src="_img/partners/1.png" alt="Parceiro WW Locações"> 
						</a>
					</div>
					
					<div class="col-6 col-md-3 mb-5">
						<a href="http://www.andradegutierrez.com.br" target="_blank"> 
							<img src="_img/partners/2.png" alt="Parceiro WW Locações"> 
						</a>
					</div>
					
					<div class="col-6 col-md-3 mb-5">
						<a href="http://www.tabocas.com.br" target="_blank"> 
							<img src="_img/partners/3.png" alt="Parceiro WW Locações"> 
						</a>
					</div>
					
					<div class="col-6 col-md-3 mb-5">
						<a href="http://www.petrobras.com.br" target="_blank"> 
							<img src="_img/partners/1.png" alt="Parceiro WW Locações"> 
						</a>
					</div>

					<div class="col-6 col-md-3 mb-5">
						<a href="http://www.andradegutierrez.com.br" target="_blank"> 
							<img src="_img/partners/2.png" alt="Parceiro WW Locações"> 
						</a>
					</div>
					
					<div class="col-6 col-md-3 mb-5">
						<a href="http://www.tabocas.com.br" target="_blank"> 
							<img src="_img/partners/3.png" alt="Parceiro WW Locações"> 
						</a>
					</div>
					
					<div class="col-6 col-md-3 mb-5">
						<a href="http://www.petrobras.com.br" target="_blank"> 
							<img src="_img/partners/1.png" alt="Parceiro WW Locações"> 
						</a>
					</div>
					
					<div class="col-6 col-md-3 mb-5">
						<a href="http://www.andradegutierrez.com.br" target="_blank"> 
							<img src="_img/partners/2.png" alt="Parceiro WW Locações"> 
						</a>
					</div>
					
					<div class="col-6 col-md-3 mb-5">
						<a href="http://www.tabocas.com.br" target="_blank"> 
							<img src="_img/partners/3.png" alt="Parceiro WW Locações"> 
						</a>
					</div>
				</div>
			</div>
		</section>
		
		<section id="faq" class="py-5 text-center">
			<div class="container">
				<div class="row px-2 px-md-0">
					<h1 class="col-12 mb-5"> FAQ </h1>
				
					<a class="col-12 py-3 my-2 btn btn-info" data-toggle="collapse" href="#faqOne" role="button" aria-expanded="false" aria-controls="collapseExample"> Anim pariatur cliche reprehenderit? </a>

					<div class="collapse" id="faqOne">
						<div class="card card-body">
							<p class="description mb-0"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. </p>
						</div>
					</div>
					
					<a class="col-12 py-3 my-2 btn btn-info" data-toggle="collapse" href="#faqTwo" role="button" aria-expanded="false" aria-controls="collapseExample"> Anim pariatur cliche reprehenderit? </a>

					<div class="collapse" id="faqTwo">
						<div class="card card-body">
							<p class="description mb-0"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. </p>
						</div>
					</div>
					
					<a class="col-12 py-3 my-2 btn btn-info" data-toggle="collapse" href="#faqThree" role="button" aria-expanded="false" aria-controls="collapseExample"> Anim pariatur cliche reprehenderit? </a>

					<div class="collapse" id="faqThree">
						<div class="card card-body">
							<p class="description mb-0"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. </p>
						</div>
					</div>
					
					<a class="col-12 py-3 my-2 btn btn-info" data-toggle="collapse" href="#faqFour" role="button" aria-expanded="false" aria-controls="collapseExample"> Anim pariatur cliche reprehenderit? </a>

					<div class="collapse" id="faqFour">
						<div class="card card-body">
							<p class="description mb-0"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. </p>
						</div>
					</div>
					
					<a class="col-12 py-3 my-2 btn btn-info" data-toggle="collapse" href="#faqFive" role="button" aria-expanded="false" aria-controls="collapseExample"> Anim pariatur cliche reprehenderit? </a>

					<div class="collapse" id="faqFive">
						<div class="card card-body">
							<p class="description mb-0"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. </p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="contact" class="py-5 bg-light">
			<div class="container">
				<div class="row">
					<h1 class="col-12 mb-5 text-center"> Contato </h1>
					
					<div class="d-none d-md-block col-3"></div>
					
					<form class="col-12 col-md-6" method="post" action="_routines/sendemail.php">
 						
 						<div class="form-row">
  							<div class="form-group col-12">
      							<label for="inputEmail"> E-mail </label>
      							<input name="email" type="email" class="form-control" id="inputEmail" required>
    						</div>
						</div>
 						
 						<div class="form-row">
  							<div class="form-group col-12">
      							<label for="inputName"> Nome </label>
      							<input name="name" type="text" class="form-control" id="inputName" required>
    						</div>
						</div>
  						
  						<div class="form-row">
    						<div class="form-group col-12">
    							<label for="exampleFormControlTextarea"> Mensagem </label>
    							<textarea name="message" class="form-control no-resize" id="exampleFormControlTextarea" rows="5" required></textarea>
  							</div>
						</div>
  						
  						<button type="submit" class="col-12 btn btn-info" name="submit"> Enviar </button>
					</form>
					
					<div class="d-none d-md-block col-3"></div>
				</div>
			</div>
		</section>
		
		<footer class="pt-5 pb-3">
			<div class="container">
				<div class="row mb-5 text-center text-white">					
					<div class="col-12 col-md-4 mb-4 mb-md-0">
						<img src="_img/footer/contact.png" alt="Contato WW Locações">
						
						<h5 class="my-3"> Contato </h5>
						
						<p class="mb-0"> (92) 99292-9292 </p>
						
						<p class="mb-0"> contato@wwlocacoes.com.br </p>
					</div>
					
					<div class="col-12 col-md-4 mb-4 mb-md-0">
						<img src="_img/footer/localization.png" alt="Localização WW Locações">
						
						<h5 class="my-3"> Localização </h5>
						
						<p class="mb-0"> Av. Cel Sávio Belota, 23 </p>
						
						<p class="mb-0"> Cidade Nova </p>
						
						<p class="mb-0"> Manaus/AM </p>
					</div>
					
					<div class="col-12 col-md-4">
						<img src="_img/footer/credits.png" alt="Créditos WW Locações">
						
						<h5 class="my-3"> Créditos </h5>
						
						<p class="mb-0 text-justify"> Nosso website utiliza ícones e tecnologias sob licenças livres. Consideramos justo citar quem disponibiliza estes recursos. Creditamos a Icons8 pela disponibilização de ícones e as comunidades Bootstrap, jQuery e Lokesh Dhakar pelos recursos tecnológicos. </p>
					</div>
				</div>
			
				<div class="row">
					<div class="col-6">
						<p class="mb-0 text-white"> @ 2019 WW Locações </p>
					</div>
					
					<div class="col-6 text-right">
						<a class="mb-0 text-white" href="https://www.farosys.com" target="_blank"> Desenvolvimento FaroSys </a>
					</div>
				</div>
			</div>
		</footer>
		
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
		<!-- <script type="text/javascript" src="_js/_library/jquery-3.3.1.min.js"></script> -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<!-- <script type="text/javascript" src="_js/_library/popper-1.14.3.min.js"></script> -->
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<!-- <script type="text/javascript" src="_js/_framework/bootstrap-4.1.3.min.js"></script> -->
		<script type="text/javascript" src="_js/_library/lightbox-2.10.0.min.js"></script>
		<script type="text/javascript" src="_js/master.js"></script>
	</body>
</html>