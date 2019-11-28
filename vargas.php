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
 
    <section class="hero-wrap hero-wrap-2" style="background-image: url('https://image.slidesharecdn.com/eravargas-170612153821/95/era-vargas-19301945-1-638.jpg?cb=1497282381');" style="text-align:center" />
      <div class="overlay"></div>

      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">ERA VARGAS(1930-1945)</h1>
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
              <p>A Era Vargas é assim denominada fase da história do Brasil compreendida entre os anos de 1930 e 1945, quando Vargas governou o país por 15 anos.  
            <p><b>Governo provisório (1930-1934):</b> Iniciou-se em 1930, com a nomeação de Getúlio Vargas  à presidência da república  e estendeu-se até 1934, quando Vargas foi reeleito através de  eleição indireta, dando início ao Governo Constitucional. Foi  nesse momento que, Vargas suspendeu a Constituição de 1891, iniciando um processo de centralização política, com a dissolução do Congresso Nacional e das Assembleias Legislativas estaduais e municipais. Ao mesmo tempo, interveio nos estados  substituindo os governadores de  por interventores nomeados pelo próprio Vargas. Neste novo  cenário foram criados novos ministérios, o Ministério do Trabalho, Indústria e Comércio e o Ministério da Educação e Saúde.  O retardamento em convocar uma Assembleia Nacional Constituinte colaborou de forma decisiva para que a oligarquia e industriais paulistas  desencadearam a Revolução Constitucionalista de 1932. Estado de São Paulo se mobilizou, mais de 300 mil voluntários se apresentaram para combater na revolução. Por outro lado, Getúlio, conseguiu apoio das tropas militares do Rio Grande do Sul, deixando São Paulo, isolado contando apenas com um pequeno apoio do Mato Grosso. Ambos os lados perderam muitas vidas, os paulistas, cercados por todos os lados, decidiram abandonar a revolta.</p> 
            <p>Em novembro de 1933, Vargas convocou uma assembleia constituinte, de certa forma, a convocação da constituinte e a promulgação da constituição de 1934, significou para a oligarquia paulista uma vitória. A carta promulgada estabeleceu o voto feminino e o voto secreto, uma  maior independência do poder judiciário e direitos trabalhistas. Criando a lei que estabeleceu o Salário Mínimo, jornada de trabalho de oito horas por dia, repouso semanal e férias remuneradas. Junto da promulgação da  Constituição, Vargas foi reeleito indiretamente para ser presidente para o período compreendido entre 1934 e 1938.</p>
             <a data-toggle="collapse" href="#collapseOligarquicas" role="button" aria-expanded="false" aria-controls="collapseOligarquicas">Ler mais</a></p>
                          <div class="collapse" id="collapseOligarquicas">
                        <p><b>Governo Constitucional (1934-1937):</b> Período caracterizado pela existência de um regime de governo democrático liberal. Ao mesmo tempo ocorreu uma radicalização no cenário político nacional com o surgimento de duas agremiações políticas antagônicas, Ação Integralista Brasileira (AIB),  fundada em 1932   tinha preceitos fascistas e era liderada por Plínio Salgado. Aliança Nacional Libertadora (ANL),  1935 foi uma frente ampla de esquerda composta por setores de organizações de caráter anti-imperialista, anti fascista e  que contou com a participação de diversos setores de centro esquerda incluindo o Partido Comunista Brasileiro.Luiz Carlos Prestes era o presidente de honra do movimento, uma vez que na época da sua criação encontrava-se exilado na URSS.
                        <p>Em 5 de Julho de 1935, quando estava sendo celebrada os levantes Tenentistas, Luís Carlos Prestes que já havia retornado clandestinamente ao Brasil, lançou um manifesto em apoio à ANL, ao qual incentivava uma revolução contra o governo de Vargas.Aproveitando-se a grande repercussão do manifesto, Getúlio, com base na recém promulgada Lei de Segurança Nacional, determinou o fechamento da organização. Com a decretação da  ilegalidade da ANL cresceu em seus membros a disposição para deflagração de um levante armado para depor o governo e instaurar um governo nacional-revolucionário. em novembro de 1935 em Natal, Rio Grande do Norte  estourou um levante militar em nome da ANL, onde os revolucionários chegaram a tomar o poder durante três dias. Após, se alastrou para o Recife e Rio de Janeiro, entretanto como o movimento ocorreu de forma desarticulada, o governo federal não teve muitas dificuldades para debelar o movimento. </p>
                        <p>Em 1937 quando o mandato de Getúlio estava prestes a finalizar com a realização de  eleições, o governo anuncia a descoberta de um novo plano comunista para a tomada do poder (o Plano Cohen), e sob o pretexto da necessidade de combate a este novo plano comunista o Congresso Nacional foi fechado, bem como as assembleias estaduais e câmaras municipais. O Poder Executivo passou a ter o controle efetivo sobre as demais instâncias de poder. </p>
                        
                        <p><b>Estado Novo (1937-1945):</b> Com apoio do exército, Getúlio utilizou de falsa ameaça comunista para fechar as casas legislativas e intervir nos executivos estaduais nomeando interventores para  governar os estados. </p>
                        <p>No tocante à economia, Vargas promoveu a industrialização brasileira,  O modelo político econômico implantado foi o nacional desenvolvimentista, dessa forma investiu-se fortemente na indústria de base nacional, implantando órgãos de administração pública como o Conselho Nacional do Petróleo (CNP), Instituto Brasileiro de Geografia e Estatística (IBGE) e o Departamento Administrativo do Serviço Público (DASP). E ao mesmo tempo, criando empresas como: Companhia Siderúrgica Nacional (1941); Companhia Vale do Rio Doce (1942); Fábrica Nacional de Motores (1942); Companhia Nacional de Álcalis (1943); Companhia Hidrelétrica do São Francisco (1945). Essa é a primeira vez que vemos no Brasil a industrialização como uma política de Estado e para esse projeto dar certo era necessário Vargas mediar os conflitos entre os trabalhadores e empresários. Nesse sentido, criou a Consolidação das Leis de Trabalho (CLT), unificou a legislação trabalhista, além de introduzir novos direitos trabalhistas e da Justiça do Trabalho. A partir deste momento, Vargas  passou a ser conhecido como o Pai dos pobres fortalecendo a imagem de um presidente paternalista, atento às necessidades das camadas pobres da sociedade brasileira. No entanto, com a entrada do Brasil na Segunda Guerra mundial, ao lado, dos Aliados contra as ditaduras Nazista e Fascista na Europa ganha força entre, a opinião pública brasileira, a ideia de democracia. Era grande a contradição, os brasileiros tinham lutando na guerra contra ditaduras fascistas na Europa, entretanto no Brasil existia uma ditadura.  Nesse processo, Intelectuais, artistas, profissionais liberais e grande parcela do povo passaram  a defender o retorno  da democracia ao país.</p> 
                        <p>Devido a pressão de diversos setores da sociedade, que vinham até mesmo de setores militares, Vargas promulga um Ato Adicional permitindo anistia  política e ao mesmo tempo, criando o Código Eleitoral, no qual regulamenta a criação de partidos políticos para participarem nas eleições que seriam realizadas no final do ano de 1945. A lei eleitoral determinou a constituição de partidos de caráter nacional, o que rompia com a tradição regionalista da política partidária brasileira.</p>
                        <p>Os partidos políticos que surgiram neste momento, serão os principais partidos atuantes da década de 1940 à de 1960. Os principais partidos foram:a União Democrática Nacional (UDN), o Partido Social Democrático (PSD) e o Partido Trabalhista Brasileiro (PTB) e o Partido Comunista do Brasil (PCB). Neste momento surgiu um movimento de apoio a Getúlio, que foi denominado de "Queremismo" com os lemas: "Queremos Getúlio" e "Constituinte com Getúlio", que defendia a permanência de Vargas na presidência da república até a promulgação da nova constituição O movimento "queremista", alertou os chefes militares para a possibilidade de Vargas vir a boicotar as eleições, com objetivo de se manter no cargo. Devido a isso, em 29 de outubro de 1945, um golpe liderado pelos generais Góes Monteiro e Eurico Gaspar Dutra depuseram Getúlio Vargas da presidência da República. 
                        </p>
                    <p>Em 1951, Vargas voltou ao poder. Entretando, no dia 24 de Agosto de 1954, ele comete suicídio, dando um tiro em seu peito e deixando uma carta-testamento para seu povo.
                    <div class="text-justify">
							
		               			Veja a carta testamento de <strong>Getúlio Dornelles Vargas</strong> clicando <a href="https://www.sohistoria.com.br/ef2/getulio/">AQUI</a> 
		               			<p>Ou ouça o áudio da carta:</p>
		               <center> 
		              <iframe width="560" height="315" src="https://www.youtube.com/embed/XV7ZA6tkzoA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		                   
		               </center>
	            			</div>
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