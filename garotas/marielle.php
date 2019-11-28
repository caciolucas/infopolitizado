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
<html lang="pt-br">
  <head>
    <title>INFOPOLITIZADO!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">

    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/ionicons.min.css">
    
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../main.css">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">INFOPOLITIZADO!</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navega?§??o">
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
                      <a class='dropdown-item' href='userpage.php'>Minha pagina</a>
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
                      <a class="dropdown-item" href="espadas.php">República das Espadas</a>
                      <a class="dropdown-item" href="oligarquica.php">República Oligárquicas</a>
                      <a class="dropdown-item" href="../eleicoes.php">República Eleições na Primeira República</a>
                      <a class="dropdown-item" href="../vargas.php">Era Vargas</a>
                      <a class="dropdown-item" href="../populista.php">República Populista</a>
                      <a class="dropdown-item" href="../ditadura.php">Ditadura Militar</a>
                      <a class="dropdown-item" href="../redemocratizacao.php">Redemocratização do Brasil</a>

                  </li>
                 <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	
	        	 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    NOVA REPÚBLICA
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="../constituicao.php">Constituição de 1988</a>
                      <a class="dropdown-item" href="sarney.php">Governo José Sarney</a>
                      <a class="dropdown-item" href="collor.php">Governo Fernando Collor de Mello</a>
                      <a class="dropdown-item" href="itamar.php">Governo Itamar Franco</a>
                      <a class="dropdown-item" href="cardoso.php">Governo Fernando Henrique Cardoso</a>
                      <a class="dropdown-item" href="lula.php">Governo Luiz Inácio Lula da Silva</a>
                      <a class="dropdown-item" href="rousseff.php">Governo Dilma Rousseff</a>
                      <a class="dropdown-item" href="temer.php">Governo Michel Temer</a>  
	        	<li class="nav-item"><a href="../garotas" class="nav-link">LUTE COMO UMA GAROTA</a></li>
	        <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	
	        	 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   POLÍTICA LITERÁRIA
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="../filme.php">Filmes</a>
                      <a class="dropdown-item" href="../livro.php">Livros</a>
                      <a class="dropdown-item" href="../musica.php">Músicas</a>
                    </div>
                </li>
                <li class="nav-item"><a href="quemsomos.php" class="nav-link">QUEM SOMOS?</a></li>
	  
	  
	        	<li class="nav-item"><a href="../quizes.php" class="nav-link">QUIZ</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('http://www.sindiedutec.org.br/disco/mulheres.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
             <h2 class="mb-2 bread">Personalidades femininas que fizeram história no cenário brasileiro. </h2>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Voltar<i class="ion-ios-arrow-forward"></i></a></span> 
          </div>
        </div>
      </div>
    </section>
    <section>	
	          <div class="row justify-content-center mb-5 pb-2">
			<div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
            	<h1 class="mb-4">Marielle Franco</h1>
                <div class="text-justify">
					<p>Marielle Francisco da Silva, conhecida como Marielle Franco, natural do Rio de Janeiro (RJ)  , nasceu em 27 de julho de 1979, formada em ciências sociais com mestrado em Administração Pública, foi uma feminista e defensora dos direitos humanos. </p>
					 <center>
  <img src="https://catracalivre.com.br/wp-content/uploads/2019/03/16730487-360838430968422-3673928308505353388-n.jpg" style="width:29%" align="right">
  </center>
                    <p>Iniciou a sua vida pública em 2016, como Vereadora da Câmara Municipal do Rio de Janeiro pelo PSOL. com 46.502 votos, , com a quinta maior votação,enquanto vereadora foi Presidente da Comissão da Mulher da Câmara do Rio de Janeiro. </p>
                    
                    <p>Sua campanha foi baseada na tríade gênero, raça e cidade. Negra e lésbica, defendia causas ligadas aos direitos humanos., denunciava constantemente abusos de autoridade por parte de policiais contra moradores de comunidades carentes.</p>
                    
                    <p>Em 14 de março de 2018, foi assassinada em um atentado em que 13 tiros atingiram ao veículo onde estava, matando também o seu motorista, Anderson Pedro Mathias Gomes, no Estácio, Região Central do Rio de Janeiro </p>
                    

					<div class="row mt-5">
					
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