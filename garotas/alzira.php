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
            	<h1 class="mb-4">Alzira Teixeira</h1>
                <div class="text-justify">
					<p>Luiza Alzira Teixeira de Vasconcelos, nasceu em Jardim de Angicos(RN) , em 1896. </p>
					  <center>
  <img src="http://1.bp.blogspot.com/_Ua_ZKuBFZjY/TGVeHJIVU7I/AAAAAAAAAIs/JuMWCCh_WvA/s1600/Alzira+Soriano.jpg" style="width:26%" align="right">
  </center>
                    <p>Em 1928, aos 32 anos, disputou pelo Partido Republicano, às eleições para prefeita de Lajes (RN), vencendo com 60% dos votos.Tornou-se a primeira mulher a assumir comando do executivo municipal na América do Sul.Sua eleição repercutiu na imprensa internacional sendo notícia publicada na época pelo jornal “The New York Times”. </p>
                   
                   <p>Contudo, ela permaneceu no cargo apenas por um ano. O Senado Federal  anulou os votos das mulheres, e a eleição de Alzira e de outras que se tornaram vereadoras como Júlia Alves Barbosa em Natal e Joana Cacilda de Bessa em Pau dos Ferros foram invalidadas.Os senadores consideravam que as mulheres não estavam aptas para participar da vida pública. Em protesto, Alzira permaneceu afastada da vida política.Somente em 1945 ela voltaria à vida pública, candidatando-se à vereadora em Lajes. Foi eleita três vezes consecutivas e, liderando a bancada da UDN, chegou à presidência da Câmara por mais de uma vez. 
</p>
                    <p>
                 Faleceu em Natal, aos 66 anos, 1963
</p>
					<div class="row mt-5">
					
					</div>
				</div>
			</div>
		</div>
	</section>
	

		
  