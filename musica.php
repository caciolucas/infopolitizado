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
    };
    
    
?>
<!DOCTYPE html>
<html lang="pt-br">
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
	  
               
            <li class="nav-item"><a href="quizes.php" class="nav-link">QUIZ</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('http://www.innoscience.com.br/wp-content/uploads/2015/10/Como-Promover-A-Sua-M%C3%BAsica-0.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Política Literária</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Início <i class="ion-ios-arrow-forward"></i></a></span></p>
          </div>
        </div>
      </div>
    </section>
    
			<section>	
			        <div class="row justify-content-center mb-5 pb-2">
					<div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
                 	<h2 class="mb-4">Músicas que retratam momentos políticos do Brasil</h2>
                 	<div class="text-justify">
						<p>O golpe militar de 1964 instaurou no Brasil uma forte censura, praticada através dos Atos Institucionais (AI’s) criados para aumentar a repressão do Estado sobre a população ou qualquer manifestação que fosse contrária ao governo imposto no país.Não demorou para a música – enquanto manifestação artístico-cultural de forte teor político – estar entre os principais alvos da censura.O mais duro de todos os Atos Institucionais foi o AI5, elaborado em 13 de Dezembro de 1968 pelo então ministro da Justiça Luís Antônio da Gama e Silva, censurava a música, cinema, teatro e televisão,ou seja, uma obra seria censurada por motivos vagos, como subversão da moral ou dos bons costumes, e a censura da imprensa e de outros meios de comunicação. Mas nem isso calava a voz dos artistas. <b><i>Assim, conheça 12 músicas de protesto à Ditadura Militar.</i></b> </p>
						<div class="row mt-5">
						    
						<h4 class="mb-4">Apesar De Você -  Chico Buarque</h4>
						<div class="text-justify">
						<p>Em outubro de 1969, Médici assumiu a presidência da república. No mesmo ano, o AI-5 entrou para a Constituição. Este Ato foi o mais duro do período da Ditadura Militar e dava total poder aos governantes e seus subordinados para punir aqueles que eram contra o regime. Muitos músicos acabaram “ganhando” o exílio devido a suas composições contra o governo, como foi o caso de Caetano Veloso e Gilberto Gil. Assustado com a censura, Chico escreveu a canção de protesto Apesar De Você. O “você”, encontrado no título e na letra da canção, seria nada mais, nada menos, que o próprio Médici. Entretanto, a letra passou pela censura e o compacto (CD da época) vendeu 100 mil cópias em uma semana. Contudo, o governo passou a desconfiar da canção após uma nota publicada em um jornal carioca e mandou recolher todos os compactos vendidos, além de punir o censor que aprovou a canção e proibir a execução da canção nas rádios.</p>
				            	<center><iframe class='youtube-player' type='text/html' width='640' height='360' src='https://www.youtube.com/embed/xbH2E1XfscA?version=3&rel=1&fs=1&autohide=2&showsearch=0&showinfo=1&iv_load_policy=1&wmode=transparent' allowfullscreen='true' style='border:0;'></iframe><div class="row mt-5"></center>
					
					
						<h4 class="mb-4"> Domingo No Parque -  Gilberto Gil part. Os Mutantes</h4>
						
						<div class="text-justify" >
						<p>A canção, lançada em 1967, levou o 2º lugar do III Festival de Música Popular Brasileira, realizado no mesmo ano. Na época, o militar Costa e Silva, conhecido por ser governo linha dura, estava no poder. O festival era vigiado por alguns agentes do DOPS (Departamento de Ordem Política e Social), que cuidava da censura, mas, mesmo assim, algumas músicas de cunho social, como Domingo No Parque, passaram pela censura e chamaram a atenção. A letra, além de ser importante para a história da música (sons de capoeira) e da política brasileira, contém várias figuras de linguagem, como anáfora e metonímia.</p>
						<center><iframe class='youtube-player' type='text/html' width='640' height='360' src='https://www.youtube.com/embed/Zbv3M-AdxC0?version=3&#038;rel=1&#038;fs=1&#038;autohide=2&#038;showsearch=0&#038;showinfo=1&#038;iv_load_policy=1&#038;wmode=transparent' allowfullscreen='true' style='border:0;'></iframe></center>
						<div class="row mt-5">
						    
						<h4 class="mb-4">Pra não Dizer que não Falei das Flores -  Geraldo Vandré</h4>
						<div class="text-justify">
						<p>Essa é, até hoje, uma das músicas de protesto contra o regime militar mais famosa. A canção, também conhecida como Caminhando, ficou com a 2ª posição do Festival Internacional da Canção de 1968. A primeira posição ficou para Tom Jobim e Chico Buarque, com a música Sabiá, também de protesto. O problema é que o público preferia a canção de Vandré e todo esse apelo popular resultou em vaias para Tom e Chico. Por isso, antes de se apresentar no festival, Vandré saudou os colegas de profissão. Para escutar a música Sabiá, e tentar escolher a sua favorita,</b></p>
						<center><iframe class='youtube-player' type='text/html' width='640' height='360' src='https://www.youtube.com/embed/wkEGNgib2Yw?version=3&rel=1&fs=1&autohide=2&showsearch=0&showinfo=1&iv_load_policy=1&wmode=transparent' allowfullscreen='true' style='border:0;'></iframe></center>
						<div class="row mt-5">
						    
						<h4 class="mb-4">Alegria, Alegria -  Caetano Veloso</h4>
						<div class="text-justify">
						<p>A composição de Caetano , de 1968, foi um dos maiores sucessos da Tropicália, movimento que modernizou a música popular brasileira. Rock, Bossa Nova, Samba e Baião se misturavam nas composições. Os tropicalistas acreditavam que a revolução no cenário musical, por si só, já era uma forma de protesto contra a ditadura. Por outro lado, os mais reacionários, criticavam os tropicalistas e suas músicas pela falta de protesto ativo.</p>
						<center><iframe class='youtube-player' type='text/html' width='640' height='360' src='https://www.youtube.com/embed/eC4lwEvG3AE?version=3&rel=1&fs=1&autohide=2&showsearch=0&showinfo=1&iv_load_policy=1&wmode=transparent' allowfullscreen='true' style='border:0;'></iframe></center>
						<div class="row mt-5">
						    
						<h4 class="mb-4">Eu Sou Terrível -  Roberto carlos</h4>
						<div class="text-justify">
						<p>Se de um lado os tropicalistas apostaram na revolução musical para protestar contra o regime militar, de outro, os “mocinhos “da Jovem Guarda faziam pura música de entretenimento, para animar os bailinhos. Roberto Carlos era o principal ídolo do movimento, ao lado de Erasmo Carlos e Ronnie Von. Eles apostaram em adaptações brasileiras de hits internacionais, como dos Beatles, para ganhar a fama. Em uma linguagem mais ao pé da letra (mas vale a pena uma reflexão mais profunda), a Tropicália era o movimento dos reacionários e a Jovem Guarda, o dos “riquinhos”, que, em uma linguagem mais atual, gostavam de ostentar: falavam sobre garotas, festanças, carrões…</p>
						<center><iframe class='youtube-player' type='text/html' width='640' height='360' src='https://www.youtube.com/embed/lUti8yis-Po?version=3&rel=1&fs=1&autohide=2&showsearch=0&showinfo=1&iv_load_policy=1&wmode=transparent' allowfullscreen='true' style='border:0;'></iframe></center>
						<div class="row mt-5">
					
						<h4 class="mb-4">O Bêbado e O Equilibrista -  Elis Regina</h4>
						<div class="text-justify">
						<p>A música gravada pela  Elis Regina, que, de início, parece tranquila, é considerada, até hoje, o Hino da Anistia. A cantora sempre foi engajada na política e gravou essa composição para questionar o exílio de alguns artistas brasileiros. No trecho “Dança na corda bamba de sombrinha e, em cada passo dessa linha, pode se machucar”, podemos identificar a metáfora do equilibrista de circo, que vive sempre sobre o fio e corre o risco de cair e se machucar a qualquer minuto, com os artistas na época da ditadura.</p>
							<center><iframe class='youtube-player' type='text/html' width='640' height='360' src='https://www.youtube.com/embed/1YWCKal3xRs?version=3&rel=1&fs=1&autohide=2&showsearch=0&showinfo=1&iv_load_policy=1&wmode=transparent' allowfullscreen='true' style='border:0;'></iframe></center>
						<div class="row mt-5">
					
						<h4 class="mb-4"> Cálice -  Chico Buarque e Gilberto Gil</h4>
						<div class="text-justify">
						<p>Cálice foi outra música lendária que retratou esse nosso momento político de opressão. Composta por Chico Buarque e Gilberto Gil no ano de 1973, a música foi censurada e só pode ser gravada também em 1978.  Ela é uma música hipnotizante, pois traz uma analogia com a Paixão de Cristo e todo o sofrimento vivido pelos brasileiros com a ditadura militar. Só o nome já mostra sua genialidade pelo termo cálice ser ambíguo no sentido que pode ser lido também como o imperativo do verbo calar (cale-se).Se em escrituras religiosas no cálice era servido o sangue de Cristo, na música é fácil perceber que o sangue é das pessoas que acabavam sendo torturadas e, até mesmo, mortas. </p>
							<p><center><iframe allowfullscreen="" frameborder="0" height="360" src="https://www.youtube.com/embed/RzlniinsBeY" width="640"></center></iframe></p>
								<div class="row mt-5">
					
							
							
				
						<h4 class="mb-4">Jorge Maravilha -  Chico Buarque</h4>
						<div class="text-justify">
						<p>Lançada em 1974, é mais uma música de Chico Buarque, agora sob o pseudônimo de Julinho de Adelaide, criado para driblar a censura. Os versos “você não gosta de mim, mas sua filha gosta” parecia uma relação conflituosa entre sogro, genro e filha. Mas, na verdade, fazia alusão à família do general Geisel. Geisel odiava Chico Buarque. No entanto, a filha do militar manifestava interesse pelo trabalho do composito</p>
						<p><center><iframe width="560" height="315" src="//www.youtube.com/embed/tFYaN2gon0M?modestbranding=1" frameborder="0" allowfullscreen></iframe></center> </p>
							<div class="row mt-5">
					
						
					   <h4 class="mb-4">Eu quero é botar meu bloco na rua - Sérgio Sampaio</h4>
						<div class="text-justify">
						<p>Com ritmo alegre e dolente a marcha-rancho “Eu quero é botar meu bloco na rua”, de 1972, carrega contrastes em todo andamento. Lançada pelo autor Sérgio Sampaio no VII Festival Internacional da Canção, e finalista do concurso, a música tornou-se emblemática não só pela letra ácida e contestadora, mas, talvez principalmente, em razão do desempenho de Sampaio no palco que, entre outras coisas, simulou um ato sexual com seu violão enquanto cantava: “Eu quero é botar meu bloco na rua/Brincar, botar pra gemer…”. Autobiográfica, balizada em versos imprecisos e debochados, a canção anuncia pontos importantes da liberdade sexual que aquela geração almejava.</p>
						<p><center><iframe width="640" height="360" src="//www.youtube.com/embed/j1HcLta6fmI?modestbranding=1" frameborder="0" allowfullscreen></iframe></center> </p>
						<div class="row mt-5">
						    
						      <h4 class="mb-4">É proibido proibir - Caetano Veloso</h4>
						<div class="text-justify">
						<p>É proibido proibir é uma música de Caetano Veloso, lançada em 1968. Esta canção era uma manifestação das grandes mudanças culturais que estavam ocorrendo no mundo na década de 1960. Na apresentação realizada no Teatro da Universidade Católica de São Paulo, a música de Caetano foi recebida com furiosa vaia pelo público que lotava o auditório. Indignado, Caetano fez um longo e inflamado discurso que quase não se podia ouvir, tamanho era o barulho dentro do teatro.
</p>
						<p><center><iframe width="640" height="360" src="https://www.youtube.com/embed/EeBa5AGBCkc?feature=player_embedded" frameborder="0" allowfullscreen></iframe></center> </p>
						<div class="row mt-5">
					
				
						<h4 class="mb-4">Mosca na sopa - Raul Seixas</h4>
						<div class="text-justify">
						<p>Mosca na sopa é uma música de Raul Seixas, lançada em 1973. Apesar das controvérsias acerca do sentido da música, a letra faz uma referência clara à ditadura militar. Através de uma metáfora, o povo é a “mosca” e, a ditadura militar, “a sopa”. Desta forma, o povo é apresentado como aquele que incomoda, que não pode ser eliminado, pois sempre vão existir aqueles que se levantam contra regimes opressores.</p>
				       <p><center><iframe width="640" height="360" src="https://www.youtube.com/embed/fi2vh_uP3Rk?feature=oembed"frameborder="0" allowfullscreen></iframe></center> </p>
						<div class="row mt-5">
					
				
					
						<h4 class="mb-4">Que país é esse? - Renato Russo</h4>
						<div class="text-justify">
						<p>A canção foi escrita por Renato Russo em 1978, embora só tenha sido gravada 9 anos depois, dando título ao terceiro disco da banda Legião Urbana. O cantor confessou que adiou o lançamento porque tinha esperança que as coisas melhorassem e a música deixasse de fazer sentido. No entanto, quase uma década depois, tudo se mantinha igual. O tema lança fortes críticas sociais, mostrando o Brasil como um país atravessado pela impunidade, a falta de regras e a corrupção generalizada.Em 1987, o país vivia um período complexo: apesar de já não estar na mão dos militares, não existiam ainda eleições diretas. Tancredo Neves, eleito por um colégio eleitoral em 1985, morreu antes de assumir o poder. Seu vice, José Sarney, ficou à frente da nação e instaurou o Plano Cruzado, um conjunto de medidas econômicas que traziam uma nova moeda e acabaram fracassando. Renato Russo demonstra todo o seu espanto, o seu choque e a sua tristeza, questionando as motivações de uma nação que ignora o sofrimento do próprio povo e apenas se preocupa com dinheiro.</p>
					<p><center><iframe width="640" height="360" src="//www.youtube.com/embed/CqttYsSYA3k" frameborder="0" allowfullscreen></iframe></center> </p>
						<div class="row mt-5">
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
							</div>
						</div>
					</div>
				</div>
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
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2 mb-0">Connect With Us</h2>
            	<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
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