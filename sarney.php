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
                      <a class="dropdown-item" href="sarney.php">Governo José Sarney</a>
                      <a class="dropdown-item" href="collor.php">Governo Fernando Collor de Mello</a>
                      <a class="dropdown-item" href="itamar.php">Governo Itamar Franco</a>
                      <a class="dropdown-item" href="cardoso.php">Governo Fernando Henrique Cardoso</a>
                      <a class="dropdown-item" href="lula.php">Governo Luiz Inácio Lula da Silva</a>
                      <a class="dropdown-item" href="rousseff.php">Governo Dilma Rousseff</a>
                      <a class="dropdown-item" href="temer.php">Governo Michel Temer</a>
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
 
    <section class="hero-wrap hero-wrap-2" style="background-image: url('https://aventurasnahistoria.uol.com.br/media/_versions/sarneyficatranqilo_widelg.jpg');" style="text-align:center" />
      <div class="overlay"></div>

      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">JOSÉ SARNEY (1985-1990) </h1>
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
						<br>
						<div class="text">
								<div class="text-justify">
				    
               <p>Embora tenha sido eleito através do colégio eleitoral, Tancredo Neves não chegou a assumir o cargo de presidente da República pois teve que ser submetido a uma cirurgia de emergência que foi realizada antes da data da posse, marcada para o dia ia 15 de março de 1985.  <p>
                   	 <center>
  <img src="https://upload.wikimedia.org/wikipedia/commons/f/fb/Foto_Oficial_Sarney_EBC.jpg" style="width:29%" align="right">
  </center>			
  <p>José Sarney Assumiu interinamente a presidência, enquanto se aguardava a recuperação da saúde de Tancredo. Entretanto, após a realização de sete cirurgias, Neves faleceu, em 21 de abril de 1985.  Com a morte de Tancredo, Sarney assumiu a presidência de forma definitiva, e recebeu como herança, uma dívida externa de 100 bilhões de dólares e uma inflação de 230%. Para combater a inflação a equipe econômica liderada pelo Ministro da Fazenda, Dílson Funaro tomou medidas de grande impacto, criando o Plano Cruzado. Dentre as mudanças implantadas pelo plano econômico, o cruzeiro, moeda vigente na época, foi mudada para o cruzado. salários foram congelados, tendo reajuste sempre que a inflação atingisse 20% (gatilho salarial).  <p> 
    <p>A correção monetária foi extinta, e, foi criado o seguro-desemprego. No início, o plano conseguiu atingir seus objetivos, diminui o desemprego e reduziu a inflação. A popularidade do plano conseguiu fazer com que o partido do presidente, o PMDB saísse vitorioso nas eleições de 1985 e do ano seguinte, em 1986.  Entretanto após alguns meses, o Plano Cruzado apresentou sinais de desgaste, pois o governo não fez nenhum ajuste em suas contas, o plano fracassou e seguiram-se outros sem resultados positivos como os: Plano Cruzado II, Plano Bresser de 1987.   <p>

 <a data-toggle="collapse" href="#collapseMilitar" role="button" aria-expanded="false" aria-controls="collapseMilitar">Ler mais</a>  <p>
              <div class="collapse" id="collapseMilitar">
                      <p>Em junho de 1985 Sarney enviou mensagem ao Congresso convocando uma Assembleia Nacional Constituinte, a ser formada por membros do próprio Congresso. Presidida pelo Dep.  Ulysses Guimarães (MDB), a Assembleia Nacional Constituinte foi inaugurada no dia 1 de fevereiro de 1987 e encerrada em 5 de outubro de 1988. quando foi promulgada a nova Constituição brasileira.  <p>
  <p>Em virtude do crescimento da inflação, em  janeiro de 1989, o ministro Maílson da Nóbrega implantou um novo plano econômico,  o Plano Verão, que decretou um novo congelamento de preços e criou uma nova moeda, o Cruzado Novo. Assim como os outros planos, este também fracassou, e Sarney terminou o governo com o Brasil vivenciando uma recessão econômica e um índice inflacionário sem precedentes na história do país.  <p>
  <p>Ao final do mandato de José Sarney, em 1989, ocorreram eleições diretas para presidente, que não se realizavam há 30 anos, o segundo turno da eleição foi disputado por Luiz Inácio Lula da Silva candidato pelo Partido dos Trabalhadores (PT) e por Fernando Collor de Mello candidato pelo Partido da Renovação Nacional,  (PRN). Fernando Collor de Mello foi eleito Presidente da República em 1989.

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