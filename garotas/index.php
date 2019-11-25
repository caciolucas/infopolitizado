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
	  
	  
	        	<li class="nav-item"><a href="../quizes.php" class="nav-link">QUIZ</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    <!-- Carrossel -->
    <section>
        <div class="carousel-item">
            <img src="https://www.altoastral.com.br/wp-content/uploads/2016/09/n%C3%ADsia-floresta-feminismo-brasil.jpg" alt="nisia1">
            <div class="carousel-caption d-none d-md-block">
                <h5>Saiba mais sobre a história de <strong>Nísia Floresta Brasileira Augusta</strong> clicando <a href="nisia.php">AQUI</a> </h5>
                <p>Nisia Floresta Brasileira Augusta</p>
            </div>
        </div>
    </section>
    <!-- Final do Carrossel -->
    <section class="hero-wrap hero-wrap-2" style="background-image: url('http://www.sindiedutec.org.br/disco/mulheres.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
             <h2 class="mb-2 bread">Personalidades femininas que fizeram história no cenário brasileiro. </h2>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Início<i class="ion-ios-arrow-forward"></i></a></span> 
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
	<section class="ftco-section ftco-no-pb">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" style="background-image: url(https://upload.wikimedia.org/wikipedia/commons/thumb/a/a8/29-_Imperatriz_rainha_D._Leopoldina.jpg/245px-29-_Imperatriz_rainha_D._Leopoldina.jpg);"></div>
						</div>
						<div class="text pt-3 text-center">
							<h3>Maria Leopoldina de Áustria</h3>
							<span class="position mb-2">A PRIMEIRA MULHER A GOVERNAR O PAÍS</span>
							<div class="text-justify">
								
		               			Saiba mais sobre a história de <strong>Maria Leopoldina</strong> clicando <a href="mleopoldina.php">AQUI</a> 
	              			</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" style="background-image: url(https://upload.wikimedia.org/wikipedia/commons/b/b2/Maria_Quit%C3%A9ria_de_Jesus_Medeiros.jpg);"></div>
						</div>
						<div class="text pt-3 text-center">
							<h3>Maria Quitéria</h3>
							<span class="position mb-2">A PRIMEIRA  BRASILEIRA A INGRESSAR NA CARREIRA MILITAR NO BRASIL</span>
							<div class="text-justify">
							
		              			</ul>
		               			Saiba mais sobre a história de <strong>Maria Quitéria</strong> clicando <a href="mariaquiteria.php">AQUI</a> 
	              			</div>
						</div>
					</div>
				</div>	
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" style="background-image: url(https://lh3.googleusercontent.com/-ec7VeE6Q2p0/TY6EEtpqu5I/AAAAAAAAAOU/3hmzqruMz8w/s1600/nisia-floresta.jpg);"></div>
						</div>
						<div class="text pt-3 text-center">
							<h3> Nísia Floresta Brasileira Augusta</h3>
							<span class="position mb-2">A primeira educadora feminista do brasil</span>
							<div class="text-justify">
							
		               			Saiba mais sobre a história de <strong>Nísia Floresta Brasileira Augusta</strong> clicando <a href="nisia.php">AQUI</a> 
	            			</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" style="background-image: url(https://i.pinimg.com/originals/e2/47/77/e2477770479554fedd77f62b23323a3e.jpg);"></div>
							</div>
						<div class="text pt-3 text-center">
							<h3>Princesa Isabel</h3>
							<span class="position mb-2"> A princesa regente do Brasil</span>
							<div class="text-justify">			
							
		               			Saiba mais sobre a história de <strong>Princesa Isabel</strong> clicando <a href="princesaisabel.php">AQUI</a>  
	              			</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" style="background-image: url(http://3.bp.blogspot.com/-Qn7fXOpWjPs/Vqa3-uxKXNI/AAAAAAAAMb4/_OiT2ESMlU4/s1600/Daltro1.gif);"></div>
						</div>
						<div class="text pt-3 text-center">
							<h3>Leolinda Figueiredo Daltro</h3>
							<span class="position mb-2">fundou o primeiro partido feminino em 1910.</span>
							<div class="text-justify">
							
		               			Saiba mais sobre a história de <strong>Leolinda Figueiredo Daltro</strong> clicando <a href="leolinda.php">AQUI</a>  
	              			</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" style="background-image: url(http://mujeresconciencia.com/app/uploads/2019/08/lutz.jpg);"></div>
						</div>
						<div class="text pt-3 text-center">
							<h3>Bertha Lutz</h3>
							<span class="position mb-2">lutou pelo sufrágio feminino no Brasil</span>
							<div class="text-justify">
							
		            			Saiba mais sobre a história de <strong>Bertha Lutz</strong> clicando clicando <a href="bertha.php">AQUI</a> 
	              			</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" style="background-image: url(https://scontent.cdninstagram.com/vp/4ab1c27fd2fbab3e2efe09ea4a7d8ef0/5DEC6B91/t51.2885-15/e35/17076918_415195092207134_3454564808899166208_n.jpg?_nc_ht=scontent-frt3-1.cdninstagram.com);"></div>
						</div>
						<div class="text pt-3 text-center">
						 	<h3>Celina Guimarães</h3>
						 	<span class="position mb-2">a primeira eleitora do Brasil</span>
							<div class="text-justify">		
							
		               			Saiba mais sobre a história de <strong>Celina Guimarães</strong> clicando clicando <a href="celina.php">AQUI</a> 
	              			</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(http://2.bp.blogspot.com/_deBNWpjP6v0/ShOFrrmmR8I/AAAAAAAAARw/hiI_fpwBcV8/s320/JBARBOSA.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>Júlia Alves Barbosa Cavalcanti</h3>
								<span class="position mb-2">segunda mulher no Brasil a tirar título de eleitor</span>
									<div class="text-justify">
									
									
		               Saiba mais sobre a história de <strong>Júlia Alves Barbosa Cavalcanti</strong> clicando <a href= "julia.php" >AQUI</a> 
	              </div>
	              
	              
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
<!--outro bloco -->
	<section class="ftco-section ftco-no-pb">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(https://2.bp.blogspot.com/-lmUBuzeCOLE/WqEzqopcqaI/AAAAAAAABiE/_s1Gw8nBL2EXtfhhqVzfvXQr5TFJTc2FQCEwYBhgL/s200/06-joana-cacilda-bessa.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>Joana Cacilda de Bessa</h3>
								<span class="position mb-2">primeira eleitora de Pau dos Ferros e a primeira mulher no Brasil a ser eleita vereadora.</span>	
								<div class="text-justify">
									
								
		               Saiba mais sobre a história de <strong>Joana Cacilda de Bessa</strong> clicando <a href="joana.php">AQUI</a> 
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(http://s.glbimg.com/jo/g1/f/original/2010/11/01/alzira-2.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>Alzira Teixeira</h3>
								<span class="position mb-2">a primeira prefeita do Brasil e da América Latina</span>
								<div class="text-justify">
									
								
		               Saiba mais sobre a história de <strong>Alzira Teixeira</strong> clicando <a href="alzira.php">AQUI</a> 
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(https://peregrinacultural.files.wordpress.com/2009/07/1-carlota-de-queiroz32sp146.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
							    <h3>Carlota Pereira</h3>
								<span class="position mb-2"> a primeira deputada federal da América Latina</span>
								<div class="text-justify">
									
								
		              	Saiba mais sobre a história de <strong>Carlota Pereira</strong> clicando clicando <a href="carlota.php">AQUI</a> 
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(http://www.afreaka.com.br/wp-content/uploads/2015/01/Antonieta-de-Barros2.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>Antonieta de Barros</h3>
								<span class="position mb-2">a primeira deputada estadual negra do país</span>
								<div class="text-justify">
									
								
		             	Saiba mais sobre a história de <strong>Antonieta de Barros</strong> clicando clicando <a href="antonieta.php">AQUI</a> 
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(http://www.cartapotiguar.com.br/wp-content/uploads/2015/03/07-maria-do-cc3a9u-fernandes-de-arac3bajo.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>Maria do Céu Pereira Fernandes</h3>
								<span class="position mb-2">primeira mulher a ocupar o cargo de deputada na Assembleia Legislativa do Rio Grande do Norte</span>
								<div class="text-justify">
									
								
		              	Saiba mais sobre a história de <strong>Maria do Céu </strong> clicando clicando <a href="mariaceu.php">AQUI</a> 
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(https://acervo.oglobo.globo.com/incoming/18831720-33c-45d/imagemVerticalFotogaleria/Eunice-Michiles.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>Eunice Michiles</h3>
								<span class="position mb-2">a primeira senadora do Brasil</span>
								<div class="text-justify">
									
									
		              	Saiba mais sobre a história de <strong>Eunice Michiles</strong> clicando clicando <a href="eunice.php">AQUI</a> 
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(https://blog.flaviomarinho.com.br/wp-content/uploads/2018/06/Wilma-de-Faria.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>Wilma de Faria</h3>
								<span class="position mb-2">primeira governadora do estado do Rio Grande do Norte</span>
								<div class="text-justify">
									
								
		               Saiba mais sobre a história de <strong>Wilma de Faria</strong> clicando <a href="wilma.php" >AQUI</a>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(https://upload.wikimedia.org/wikipedia/commons/thumb/8/81/Dilma_Rousseff_-_foto_oficial_2011-01-09.jpg/200px-Dilma_Rousseff_-_foto_oficial_2011-01-09.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>Dilma Rousseff</h3>
								<span class="position mb-2">primeira presidenta do Brasil</span>
								<div class="text-justify">
									
								
		               Saiba mais sobre a história de <strong>Dilma Rousseff</strong> clicando <a href="dilma.php">AQUI</a> 
	              </div>
	              
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		

<!--outro bloco -->
		
			<section class="ftco-section ftco-no-pb">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(https://pbs.twimg.com/profile_images/1562870424/Governadora_Twitter_001.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>Rosalba Ciarlini</h3>
								<span class="position mb-2">54ª Governadora do Rio Grande do Norte</span>
								<div class="text-justify">
									
								
		               Saiba mais sobre a história de <strong>Rosalba Ciarlini</strong> clicando <a href="rosalba.php">AQUI</a> 
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(https://www.camara.leg.br/internet/deputado/bandep/74037.jpgmaior.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
							    <h3>Fátima Bezerra</h3>
								<span class="position mb-2">atual governadora do estado do Rio Grande do Norte eleita em 2018</span>
									<div class="text-justify">
									
			
		               Saiba mais sobre a história de <strong>Fátima Bezerra</strong> clicando <a href="fatima.php">AQUI</a> 
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(https://abrilveja.files.wordpress.com/2019/03/marielle-franco-vereadora-assassinato-2018-5726.jpg.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
							    <h3>Marielle Franco</h3>
							    <span class="position mb-2"> inspiração feminista na política</span>
								<div class="text-justify">
									
								
		               Saiba mais sobre a história de <strong>Marielle Franco</strong> clicando <a href="marielle.php">AQUI</a> 
	              </div>
		</section>
		<!-- <section >
			<div id="carouselExampleIndicators" class="carousel slide w-50" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="https://www.altoastral.com.br/wp-content/uploads/2016/09/n%C3%ADsia-floresta-feminismo-brasil.jpg" alt="Nísia Floresta">
						<div class="carousel-caption d-none d-md-block">
    						<h5>Nísia Floresta</h5>
    						<p>Descrição</p>
  						</div>
					</div>
					<div class="carousel-item active">
						<img class="d-block w-100" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a8/29-_Imperatriz_rainha_D._Leopoldina.jpg/245px-29-_Imperatriz_rainha_D._Leopoldina.jpg" alt="Maria Leopoldina">
						<div class="carousel-caption d-none d-md-block">
    						<h5>MARIA LEOPOLDINA</h5>
    						<p>A PRIMEIRA MULHER A GOVERNAR O PAÍS</p>
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
		</section> -->
        
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Contato</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">	R. Antônia de Lima Paiva, 155 - Nova Esperança, Parnamirim - RN, 59143-455</span></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">	infopolitizado@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">Recent Blog</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Dec 25, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-5 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Dec 25, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Services</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Deparments</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"../></script>
  <script src="../js/google-map.js"></script>
  <script src="../js/main.js"></script>
    
  </body>
</html>