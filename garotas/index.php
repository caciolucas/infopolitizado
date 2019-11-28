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
                      <a class="dropdown-item" href="../republicaespadas.php">República das Espadas</a>
                      <a class="dropdown-item" href="../republicaoligarquica.php">República Oligárquicas</a>
                      <a class="dropdown-item" href="../eleicoes.php">República Eleições na Primeira República</a>
                      <a class="dropdown-item" href="../vargas.php">Era Vargas</a>
                      <a class="dropdown-item" href="../populista.php">República Populista</a>
                      <a class="dropdown-item" href="../ditadura.php">Ditadura Militar</a>
                      <a class="dropdown-item" href="../redemocratizacao.php">Redemocratização do Brasil</a>
                    </div>
                  </li>
                <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	
	        	 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    NOVA REPÚBLICA
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="../constituicao.php">Constituição de 1988</a>
                      <a class="dropdown-item" href="../constituicao.php">Governo José Sarney</a>
                      <a class="dropdown-item" href="../constituicao.php">Governo Fernando Collor de Mello</a>
                      <a class="dropdown-item" href="../constituicao.php">Governo Itamar Franco</a>
                      <a class="dropdown-item" href="../constituicao.php">Governo Fernando Henrique Cardoso</a>
                      <a class="dropdown-item" href="../constituicao.php">Governo Luiz Inácio Lula da Silva</a>
                      <a class="dropdown-item" href="../constituicao.php">Governo Dilma Rousseff</a>
                      <a class="dropdown-item" href="../constituicao.php">Governo Michel Temer</a>
	        	<li class="nav-item"><a href="index.php" class="nav-link">LUTE COMO UMA GAROTA</a></li>
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
             <p class="breadcrumbs" style="color: #fff"><span class="mr-2"><a href="index.php"> Início <i class="ion-ios-arrow-forward"></i></a></span></i></span></p>
          </div>
          </div>
        </div>
      </div>
    </section>
    <section>	
		<div class="row justify-content-center mb-5 pb-2">
			<div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
            	<h1 class="mb-4">Participação das mulheres na política</h1>
                <div class="text-justify">
					<p>A luta pelo direito à participação política das mulheres existe no Brasil desde antes da proclamação da República. O Código Eleitoral Provisório, Decreto 21076 de 24 de fevereiro de 1932, assinado por Getúlio Vargas, estendeu o direito aos votos às mulheres, porém estabeleceu algumas regras: era preciso ser ou viúva ou solteira, e ter renda própria; às mulheres casadas não era permitido o voto alegando-se que elas deviam obediência aos maridos e, portanto, não podiam votar livremente. Somente dois anos depois, a lei se estendeu a todas as mulheres, independente do seu estado civil. Porém nenhuma mulher era obrigada a votar, a obrigatoriedade do voto só se deu em 1946.</p> 
                    <p>Atualmente, o Brasil ocupa 156° posição em um ranking de 190 países sobre a ocupação de mulheres nos parlamentos. Apesar de os números não serem os ideais, no poder legislativo a igualdade de gênero entre homens e mulheres têm progredido mesmo que a passos lentos. Já no poder executivo a realidade é muito pior quando tratamos de representatividade feminina.</p>
					<div class="row mt-5">
						<b><i>"As rosas da resistência nascem no asfalto. A gente recebe rosas, mas vamos estar com o punho cerrado falando de nossa existência contra os mandos e desmandos que afetam nossas vidas." (FRANCO, Marielle)</i></b>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section >
		<div id="carouselExampleIndicators" class="carousel slide" style='width:50vw;margin:auto' data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="11"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="12"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="13"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="14"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="15"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="16"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="17"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="18"></li>
					
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100 imagem-cortada" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a8/29-_Imperatriz_rainha_D._Leopoldina.jpg/245px-29-_Imperatriz_rainha_D._Leopoldina.jpg" alt="First slide">
					<div class="carousel-caption d-none d-md-block caption">
						<h4 class='text-light'>Maria Leopoldina de Áustria</h4>
						<h5 class='text-light'>A PRIMEIRA MULHER A GOVERNAR O PAÍS</h5>
						<p>Saiba mais sobre a história de <strong>Maria Leopoldina</strong> clicando <a href="mleopoldina.php">AQUI</a></p>
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100 imagem-cortada" src="https://upload.wikimedia.org/wikipedia/commons/b/b2/Maria_Quit%C3%A9ria_de_Jesus_Medeiros.jpg" alt="Second slide">
					<div class="carousel-caption d-none d-md-block caption">
						<h4 class='text-light'>Maria Quitéria</h4>
						<h5 class='text-light'>A PRIMEIRA  BRASILEIRA A INGRESSAR NA CARREIRA MILITAR NO BRASIL</h5>
						<p>Saiba mais sobre a história de <strong>Maria Quitéria</strong> clicando <a href="mariaquiteria.php">AQUI</a></p>
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100 imagem-cortada" src="https://lh3.googleusercontent.com/-ec7VeE6Q2p0/TY6EEtpqu5I/AAAAAAAAAOU/3hmzqruMz8w/s1600/nisia-floresta.jpg" alt="Second slide">
					<div class="carousel-caption d-none d-md-block caption">
						<h4 class='text-light'>Nísia Floresta Brasileira Augusta</h4>
						<h5 class='text-light'>A primeira educadora feminista do brasil</h5>
						<p>Saiba mais sobre a história de <strong>Nísia Floresta Brasileira Augusta</strong> clicando <a href="nisia.php">AQUI</a> </p>
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100 imagem-cortada" src="https://i.pinimg.com/originals/e2/47/77/e2477770479554fedd77f62b23323a3e.jpg" alt="Second slide">
					<div class="carousel-caption d-none d-md-block caption">
						<h4 class='text-light'>Princesa Isabel</h4>
						<h5 class='text-light'>A princesa regente do Brasil</h5>
						<p>Saiba mais sobre a história de <strong>Princesa Isabel</strong> clicando <a href="princesaisabel.php">AQUI</a></p>
					</div>
				</div>
					<div class="carousel-item">
					<img class="d-block w-100 imagem-cortada" src="http://3.bp.blogspot.com/-Qn7fXOpWjPs/Vqa3-uxKXNI/AAAAAAAAMb4/_OiT2ESMlU4/s1600/Daltro1.gif" alt="Second slide">
					<div class="carousel-caption d-none d-md-block caption">
						<h4 class='text-light'>Leolinda Figueiredo Daltro</h4>
						<h5 class='text-light'></h5>Fundou o primeiro partido feminino em 1910</h5>
						<p>Saiba mais sobre a história de <strong>Leolinda Daltro</strong> clicando <a href="leolinda.php">AQUI</a></p>
					</div>
				</div>
					<div class="carousel-item">
					<img class="d-block w-100 imagem-cortada" src="http://mujeresconciencia.com/app/uploads/2019/08/lutz.jpg" alt="Second slide">
					<div class="carousel-caption d-none d-md-block caption">
						<h4 class='text-light'>Bertha Lutz</h4>
						<h5 class='text-light'>Lutou pelo sufrágio feminino </h5>
						<p>Saiba mais sobre a história de <strong>Bertha Lutz</strong> clicando <a href="bertha.php">AQUI</a></p>
					</div>
				</div>
					<div class="carousel-item">
					<img class="d-block w-100 imagem-cortada" src="https://scontent.cdninstagram.com/vp/4ab1c27fd2fbab3e2efe09ea4a7d8ef0/5DEC6B91/t51.2885-15/e35/17076918_415195092207134_3454564808899166208_n.jpg?_nc_ht=scontent-frt3-1.cdninstagram.com" alt="Second slide">
					<div class="carousel-caption d-none d-md-block caption">
						<h4 class='text-light'>Celina Guimarães</h4>
						<h5 class='text-light'>A primeira eleitora do Brasil</h5>
						<p>Saiba mais sobre a história de <strong>Celina Guimarães</strong> clicando <a href="celina.php">AQUI</a></p>
					</div>
				</div>
					<div class="carousel-item">
					<img class="d-block w-100 imagem-cortada" src="http://2.bp.blogspot.com/_deBNWpjP6v0/ShOFrrmmR8I/AAAAAAAAARw/hiI_fpwBcV8/s320/JBARBOSA.jpg" alt="Second slide">
					<div class="carousel-caption d-none d-md-block caption">
						<h4 class='text-light'>Júlia Alves Barbosa Cavalcanti</h4>
						<h5 class='text-light'>Segunda mulher no Brasil a tirar título de eleitor</h5>
						<p>Saiba mais sobre a história de <strong>Júlia Cavalcanti</strong> clicando <a href="julia.php">AQUI</a></p>
					</div>
				</div>
					<div class="carousel-item">
					<img class="d-block w-100 imagem-cortada" src="https://2.bp.blogspot.com/-lmUBuzeCOLE/WqEzqopcqaI/AAAAAAAABiE/_s1Gw8nBL2EXtfhhqVzfvXQr5TFJTc2FQCEwYBhgL/s200/06-joana-cacilda-bessa.jpg" alt="Second slide">
					<div class="carousel-caption d-none d-md-block caption">
						<h4 class='text-light'>Joana Cacilda de Bessa</h4>
						<h5 class='text-light'>primeira eleitora de Pau dos Ferros e a primeira mulher no Brasil a ser eleita vereadora.</h5>
						<p>Saiba mais sobre a história de <strong>Joana Cacilda de Bessa</strong> clicando <a href="joana.php">AQUI</a></p>
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100 imagem-cortada" src="http://1.bp.blogspot.com/_Ua_ZKuBFZjY/TGVeHJIVU7I/AAAAAAAAAIs/JuMWCCh_WvA/s1600/Alzira+Soriano.jpg" alt="Second slide">
					<div class="carousel-caption d-none d-md-block caption">
						<h4 class='text-light'>Alzira Teixeira</h4>
						<h5 class='text-light'>A primeira prefeita do Brasil e da América Latina.</h5>
						<p>Saiba mais sobre a história de <strong>Alzira Teixeira</strong> clicando <a href="alzira.php">AQUI</a></p>
					</div>
				</div>
					<div class="carousel-item">
					<img class="d-block w-100 imagem-cortada" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Carlota_Pereira_de_Queiroz_1920%27s.jpg/200px-Carlota_Pereira_de_Queiroz_1920%27s.jpg" alt="Second slide">
					<div class="carousel-caption d-none d-md-block caption">
						<h4 class='text-light'>Carlota Pereira</h4>
						<h5 class='text-light'>A primeira deputada federal da América Latina.</h5>
						<p>Saiba mais sobre a história de <strong>Carlota Pereira</strong> clicando <a href="carlota.php">AQUI</a></p>
					</div>
				</div>
					<div class="carousel-item">
					<img class="d-block w-100 imagem-cortada" src="https://secureservercdn.net/166.62.112.219/889.9df.myftpupload.com/wp-content/uploads/posts/8500004_1489062873524_file.jpg" alt="Second slide">
					<div class="carousel-caption d-none d-md-block caption">
						<h4 class='text-light'>Antonieta de Barros</h4>
						<h5 class='text-light'>A primeira deputada estadual negra do país e primeira deputada mulher do estado de Santa Catarina.</h5>
						<p>Saiba mais sobre a história de <strong>Antonieta de Barros</strong> clicando <a href="antonieta.php">AQUI</a></p>
					</div>
				</div>
					<div class="carousel-item">
					<img class="d-block w-100 imagem-cortada" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRY9OJnVq2EayVbgMmAJecc1TTN7aoHNqMrTHnKiMUHTyZ-Jypt&s" alt="Second slide">
					<div class="carousel-caption d-none d-md-block caption">
						<h4 class='text-light'>Maria do Céu Pereira Fernandes</h4>
						<h5 class='text-light'>Primeira mulher a ocupar o cargo de deputada na Assembleia Legislativa do RN</h5>
						<p>Saiba mais sobre a história de <strong>Maria do Céu Pereira Fernandes</strong> clicando <a href="mariaceu.php">AQUI</a></p>
					</div>
				</div>
					<div class="carousel-item">
					<img class="d-block w-100 imagem-cortada" src="https://upload.wikimedia.org/wikipedia/commons/5/54/Eunice_Michiles_em_2015.jpg" alt="Second slide">
					<div class="carousel-caption d-none d-md-block caption">
						<h4 class='text-light'>Eunice Michiles</h4>
						<h5 class='text-light'>A primeira Senadora</h5>
						<p>Saiba mais sobre a história de <strong>Maria do Céu Pereira Fernandes</strong> clicando <a href="eunice.php">AQUI</a></p>
					</div>
				</div>
    				<div class="carousel-item">
    					<img class="d-block w-100 imagem-cortada" src="https://pbs.twimg.com/profile_images/765503930977619968/PYEURVoT.jpg" alt="Second slide">
    					<div class="carousel-caption d-none d-md-block caption">
    						<h4 class='text-light'>Wilma de Faria</h4>
    						<h5 class='text-light'>Primeira governadora do estado do Rio Grande do Norte</h5>
    						<p>Saiba mais sobre a história de <strong>Wilma de Faria</strong> clicando <a href="wilma.php">AQUI</a></p>
    					</div>
    				</div>
        				<div class="carousel-item">
        					<img class="d-block w-100 imagem-cortada" src="https://upload.wikimedia.org/wikipedia/commons/8/81/Dilma_Rousseff_-_foto_oficial_2011-01-09.jpg" alt="Second slide">
        					<div class="carousel-caption d-none d-md-block caption">
        						<h4 class='text-light'>Dilma Rousseff</h4>
        						<h5 class='text-light'>Primeira Presidenta da República do Brasil</h5>
        						<p>Saiba mais sobre a história de <strong>Dilma Rousseff</strong> clicando <a href="dilma.php">AQUI</a></p>
        					</div>
        				</div>
            				<div class="carousel-item">
            					<img class="d-block w-100 imagem-cortada" src="https://mossorohoje.com.br/uploads/materia/imagem1/11035/open-uri20181203-18070-18jlcx5" alt="Second slide">
            					<div class="carousel-caption d-none d-md-block caption">
            						<h4 class='text-light'>Rosalba Ciarlini</h4>
            						<h5 class='text-light'>54ª Governadora do Rio Grande do Norte</h5>
            						<p>Saiba mais sobre a história de <strong>Rosalba Ciarlini</strong> clicando <a href="rosalba.php">AQUI</a></p>
            					</div>
            				</div>
                				<div class="carousel-item">
            					<img class="d-block w-100 imagem-cortada" src="https://upload.wikimedia.org/wikipedia/commons/6/62/Senadora_F%C3%A1tima_Bezerra_%28Foto_oficial%29.jpg" alt="Second slide">
            					<div class="carousel-caption d-none d-md-block caption">
            						<h4 class='text-light'>Fátima Bezerra</h4>
            						<h5 class='text-light'>Atual Governadora do estado do Rio Grande do Norte, eleita em 2018.</h5>
            						<p>Saiba mais sobre a história de <strong>Fátima Bezerra</strong> clicando <a href="fatima.php">AQUI</a></p>
            					</div>
            				</div>
            					<div class="carousel-item">
            					<img class="d-block w-100 imagem-cortada" src="https://jornalggn.com.br/sites/default/files/2019/09/o-que-a-morte-de-marielle-franco-tem-a-ver-com-as-ameacas-das-milicias-digitais-por-alvaro-miranda-marielle12.jpg" alt="Second slide">
            					<div class="carousel-caption d-none d-md-block caption">
            						<h4 class='text-light'>Marielle Franco</h4>
            						<h5 class='text-light'>Inspiração feminista na política.</h5>
            						<p>Saiba mais sobre a história de <strong>Marielle Franco</strong> clicando <a href="marielle.php">AQUI</a></p>
            					</div>
            				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</section>
<br>
<br>
    
		
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


  <script src="../js/jquery.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/jquery.animateNumber.min.js"></script>
  <script src="../js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../js/google-map.js"></script>
  <script src="../js/main.js"></script>
    
  </body>
</html>