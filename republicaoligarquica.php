<?php 
    function console_log( $data ){
        echo '<script>';
        echo 'console.log('. json_encode( $data ) .')';
        echo '</script>';
      }
    session_start();
    console_log($_SESSION);
    if (!isset($_SESSION['logado'])) {
        $_SESSION['logado']=false;
    }
    
    
?>
<!DOCTYPE html>
<html lang="PT-BR">
  <head>
    <title>INFOPOLITIZADO!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="main.css">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">INFOPOLITIZADO!</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegaÃ§Ã£o">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
            <ul class="nav navbar-nav ml-auto">
                <?php if($_SESSION['logado']==false){echo
                '<li class="nav-item">
                    <a class="nav-link" href="php/register.php"><span class="fas fa-user" style="color: #fff"></span> Cadastrar-se</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="php/login.php"><span class="fas fa-sign-in-alt" style="color: #fff"></span> Entrar</a>
                </li>';}else{echo
                    "<li class='nav-item dropdown'>
                    <a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                    <span class='fas fa-user mx-1' style='color: #fff'></span>
                      ".$_SESSION['nome']."
                    </a>
                    <div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>
                      <a class='dropdown-item' href='userpage.php'>Minha página</a>
                      <a class='dropdown-item bg-danger text-light' href='php/logout.php'>Logout</a>
                    </div>
                  </li>"
                ;}?>
            </ul>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center">
	    	<a class="navbar-brand" href="index.php">INFOPOLITIZADO!</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <!-- <p class="button-custom order-lg-last mb-0"><a href="appointment.html" class="btn btn-secondary py-2 px-3">Make An Appointment</a></p> -->
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      BRASIL REPUBLICANO
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="republicaespadas.php">República das Espadas</a>
                      <a class="dropdown-item" href="republicaoligarquica.php">República Oligárquicas</a>
                      <a class="dropdown-item" href="eleicoes.php">República Eleições na Primeira República</a>
                      <a class="dropdown-item" href="vargas.php">Era Vargas</a>
                      <a class="dropdown-item" href="populista.php">República Populista</a>
                      <a class="dropdown-item" href="ditadura.php">Ditadura Militar</a>
                      <a class="dropdown-item" href="redemocratizacao.php">Redemocratização do Brasil</a>
                    </div>
                  </li>
                <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	
	        	 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    NOVA REPÚBLICA
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="constituicao.php">Constituição de 1988</a>
                      <a class="dropdown-item" href="constituicao.php">Governo José Sarney</a>
                      <a class="dropdown-item" href="constituicao.php">Governo Fernando Collor de Mello</a>
                      <a class="dropdown-item" href="constituicao.php">Governo Itamar Franco</a>
                      <a class="dropdown-item" href="constituicao.php">Governo Fernando Henrique Cardoso</a>
                      <a class="dropdown-item" href="constituicao.php">Governo Luiz Inácio Lula da Silva</a>
                      <a class="dropdown-item" href="constituicao.php">Governo Dilma Rousseff</a>
                      <a class="dropdown-item" href="constituicao.php">Governo Michel Temer</a>
	        	<li class="nav-item"><a href="garotas" class="nav-link">LUTE COMO UMA GAROTA</a></li>
	        <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	
	        	 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   POLÍTICA LITERÁRIA
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="filme.php">Filmes</a>
                      <a class="dropdown-item" href="livro.php">Livros</a>
                      <a class="dropdown-item" href="musica.php">Músicas</a>
                    </div>
                </li>
                <li class="nav-item"><a href="quemsomos.php" class="nav-link">QUEM SOMOS?</a></li>
	  
	  
	        	<li class="nav-item"><a href="quizes.php" class="nav-link">QUIZ</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
 <!-- END nav -->
 
    <section class="hero-wrap hero-wrap-2" style="background-image: url('https://www.blogdomarioadolfo.com.br/wp-content/uploads/2018/08/CARGE21.jpg');" style="text-align:center" />
      <div class="overlay"></div>

      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">REPÚBLICA OLIGÁRQUICA(1894-1930)</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php"> Início <i class="ion-ios-arrow-forward"></i></a></span></i></span></p>
          </div>
        </div>
      </div>
    </section>
            <section class="ftco-section ftco-no-pt ftc-no-pb">
				 <div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-7 wrap-about py-2 pr-md-4 ftco-animate">	
					<div class="services-2 d-flex">
						<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-diploma"></span></div>
						<div class="text">
								<div class="text-justify">
                                  <p>Período compreendido entre os anos de 1894 a 1930,  tem início com a eleição do primeiro presidente civil do Brasil, Prudente de Morais. Nesta fase da história do Brasil, o cenário político foi dominado pelas oligarquias  agroexportadoras. 
                                  <a data-toggle="collapse" href="#collapseOligarquicas" role="button" aria-expanded="false" aria-controls="collapseOligarquicas">Ler mais</a></p>
                                  <div class="collapse" id="collapseOligarquicas">
                                  <p>A República Oligárquica foi caracterizada por um acordo político entre as oligarquias mineiras e paulistas que garantiam um revezamentos entre elas no exercício da presidência da república. Esse acordo foi denominado de República do Café com Leite (Referência aos principais produtos produzidos por São Paulo (café) e Minas Gerais (leite).  Em geral, os presidentes eleitos eram do Partido Republicano Paulista (PRP) e do Partido Republicano Mineiro (PRM). Para que isso ocorresse, havia acordos e práticas de manipulação do processo eleitoral, e era facilitado pelo fato do voto ser aberto. 
                    </p>
                  </div>
								</div>
							</div>
            </div>
          </div>
        </div>
      </div>			
						
					</div>
					</div>
          	                  
          	</section>
          	                  
          	                  
          	                  
          	                  
          	                  
          	                  
	
    <!-- FALE CONOSCO -->
    	</div>
    </section>
    
    
		
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Contato</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">R. Antônia de Lima Paiva, 155 - Nova Esperança, Parnamirim - RN, 59143-455</span></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">	infopolitizado@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Atalhos</h2>
              <ul class="list-unstyled">
                <li><a href="index.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Voltar ao Inicio</a></li>
                <li><a href="vargas.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Era Vargas</a></li>
                <li><a href="temer.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Governo Michel Temer</a></li>
                <li><a href="rousseff.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Governo Dilma Rousseff</a></li>
                <li><a href="filme.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Filmes</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Fale conosco!</h2>
              	<form action="mailto.php">
				  	<div class="input-group mb-3">
          			<!-- <div class="input-group-prepend">
              			<span class="input-group-text" style='width:95px;'>Nome</span>
          			</div> -->
          				<input type="text" name="nome" class="form-control" placeholder="Seu nome" aria-describedby="basic-addon1" id="login">
					</div>
					<div class="input-group mb-3">
          			<!-- <div class="input-group-prepend">
              			<span class="input-group-text" style='width:95px;'>E-mail:</span>
          			</div> -->
          				<input type="text" name="email" class="form-control" placeholder="Seu e-mail" aria-describedby="basic-addon1" id="email">
        			</div>
        			<div class="input-group mb-3">
          			<!-- <div class="input-group-prepend">
              			<span class="input-group-text" style='width:95px;'>Assunto:</span>
          			</div> -->
          				<input type="text" name="assunto" class="form-control" placeholder="Assunto da mensagem" aria-describedby="basic-addon1" id="assunto">
					</div>
					<div class="input-group mb-3">
	          			<textarea type="text" name="mensagem" class="form-control" rows='4' placeholder="Escreva aqui sua mensagem" id="mensagem"></textarea>
	        		</div>
					<center><button type="submit" class="btn btn-dark" name="cadastrar">Enviar</button></center>
              	</form>
            </div>
           
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

             <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Desenvolvido por Jerlândia Basílio, Luana Taurino e Roberta Medeiros</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
    
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>