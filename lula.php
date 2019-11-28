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
 
    <section class="hero-wrap hero-wrap-2" style="background-image: url('https://publisher-publish.s3.eu-central-1.amazonaws.com/pb-brasil247/swp/jtjeq9/media/20191114221144_2d70fa1e-f477-4c80-a710-196cbec8c8a2.jpeg');" style="text-align:center" />
      <div class="overlay"></div>

      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">LUIZ INÁCIO LULA DA SILVA (2003-2010)
 </h1>
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
				 <center>
  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f4/Lula_-_foto_oficial_-_05_jan_2007.jpg/200px-Lula_-_foto_oficial_-_05_jan_2007.jpg" style="width:29%" align="right">
  </center>				    
               <p>Luiz Inácio Lula da Silva  assumiu à presidência, em 1° de janeiro de 2003. E governou o país durante dois mandatos consecutivos entre  os anos de 2003 a 2006, e entre os anos de 2007 a 2011.  Lula foi o primeiro líder de um partido de esquerda, o primeiro operário e o primeiro civil sem diploma universitário .eleito presidente da república. O seu governo teve como principais marcas a manutenção da estabilidade econômica, a retomada do crescimento do País e a redução da pobreza e da desigualdade social. No plano econômico, Lula deu continuidade a diversas posturas anteriormente adotadas no governo FHC, a escolha de Henrique Meirelles filiado ao PSDB, partido de oposição ao governo para ficar à frente ao Banco Central. Dando um forte sinal para o mercado, principalmente o Internacional de que em seu governo não haveria mudanças bruscas na condução da política econômica </p>
              <p>O Governo Lula teve como um traço significativo na economia, a baixa inflação, a redução do desemprego, um crescimento real do salário mínimo e continuados recordes da balança comercial. E no tocante a questão social, o governo Lula notabilizou-se pelo avanço de programas sociais, como o Bolsa Família, um programa de transferência direta de renda, direcionado às famílias em situação de pobreza e de extrema pobreza de modo que consigam superar a situação de vulnerabilidade e pobreza e o Fome Zero, criado para combater a fome e as suas causas estruturais. Ambos  programas foram reconhecidos pela Organização das Nações Unidas (ONU) como os programas que permitiram ao Brasil a saída do mapa da fome. E o Programa Minha Casa, Minha Vida um programa de habitação federal lançado pelo Governo. facilita as condições de acesso ao imóvel para famílias de baixa renda. Tais programas assistencialistas os mais necessitados sustentavam o caráter popular do governo.</p>

 <a data-toggle="collapse" href="#collapseMilitar" role="button" aria-expanded="false" aria-controls="collapseMilitar">ler mais</a></p>
              <div class="collapse" id="collapseMilitar">
                      <p>Com relação à política externa, o governo buscou implementar uma política de relações com o mundo desenvolvido com o objetivo de elevar o diálogo político e ampliar os intercâmbios comerciais, na atração de investimentos e na cooperação científica e tecnológica. Neste sentido, buscou concretizar novo tipo de articulação diplomática promovendo novas ações, além dos fóruns internacionais já firmados como a Organização Mundial do Comércio (OMC), e a Organização das Nações Unidas com o objetivo de ampliar intercâmbio recíproco, priorizando a ampliação do comércio no sul do continente. Americano. Ao mesmo tempo, o governo procurou executar ações que visavam gerar uma imagem positiva do país no cenário mundial. Como o envio de tropas brasileiras em missões de paz criadas pelo ONU, para auxiliar na estabilização do Haiti e do Timor Leste após esses países terem passado por catástrofes naturais que desestabilizaram profundamente a economia e a infraestrutura desses países. Além da realização de competições internacionais como o (Pan-Americano) e a escolha do Brasil para sediar a Copa do Mundo de futebol de 2014 e dos Jogos Olímpicos de 2016.</p> 
                      <p>Esse esquema de corrupção,  passou a ser denominada pela mídia como “mensalão” Com a expansão do processo de investigação, surgiram novos eventos ligados ao esquema de corrupção surgiram, colocando em risco à estabilidade governamental. Apesar do escândalo do Mensalão ter atingido figuras chaves do governo e do PT, nas eleições de 2006, Lula foi eleito no segundo turno, derrotando o candidato Geraldo Alckmin (PSDB).</p> 
                      <p>No segundo mandato do governo Lula a inflação foi controlada e o índice de desemprego diminuiu. E, com o intuito de desenvolver a infraestrutura do país foi criado o Programa de Aceleração do Crescimento (PAC), que construiu portos, rodovias, ferrovias e investiu-se em saneamento básico.
                      <p>Em 2010, o Brasil, juntamente com Rússia, Índia e China criaram um bloco de países emergentes (BRIC). Em 2011, a África do Sul passou a fazer parte do bloco, por foi adicionado "S" ao acrônimo, que passou a ser denominado de BRICS.</p>
                      <p>O crescimento econômico brasileiro também o levou ao ingresso no G-20, constituído pela União Europeia e às dezenove maiores economias mundiais. No começo do ano de 2008 iniciou-se uma nova crise no governo. Após o surgimento de denúncias sobre irregularidades sobre o uso indevido de cartões corporativos. As denúncias levaram à demissão da Ministra da Promoção da Igualdade Racial, Matilde Ribeiro.</p>
                      <p>Apesar do grande número de escândalos políticos que envolveram o PT, a popularidade do Presidente Lula, continuou expressiva, encerrando o seu governo com a maior aprovação da história, com um índice de popularidade  acima de 80%. Em 2010, foi escolhida pelo PT para concorrer à eleição presidencial, Dilma  Vana Rousseff no cargo de presidente, após ter derrotado, no segundo turno,  o candidato  José Serra, (PSDB) nas eleições de 2010.</p>



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