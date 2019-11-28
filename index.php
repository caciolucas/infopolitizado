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
	    	<a class="navbar-brand" href="index.php" >INFOPOLITIZADO!</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
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

	        	<li class="nav-item"><a href="quizes.php"  class="nav-link <?php if ($_SESSION['logado']==false) {
                    echo 'disabled" style="color: rgba(0,0,0,0.2);cursor:pointer;"';
                }else{
					echo '"';

				}
                ?>>QUIZ</a></li>
	         
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url(https://direitodiario.com.br/wp-content/uploads/2017/03/Constitui%C3%A7%C3%A3o-Federal-de-1988.jpeg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 text-center ftco-animate">
           <h1 class="mb-4">CONSTITUIÇÃO <span> FEDERAL DE 1988</span></h1>
            <p><a href="constituicao.php" class="btn btn-secondary px-4 py-3 mt-3">LER AQUI</a></p>
          </div>
        </div>
        </div>
      </div>

      <div class="slider-item" style="background-image:url(https://conteudo.imguol.com.br/c/noticias/2014/02/28/passeata-dos-cem-mil-1968-1393596043557_615x300.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 text-center ftco-animate">
             <h1 class="mb-4">DITADURA <span>MILITAR</span></h1>
            <p><a href="ditadura.php" class="btn btn-secondary px-4 py-3 mt-3">LER AQUI</a></p>
          </div>
        </div>
        </div>
      </div>
       <div class="slider-item" style="background-image:url(https://cdn.culturagenial.com/imagens/artistascontraaditadura.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 text-center ftco-animate">
           <h1 class="mb-4">POLÍTICA LITERÁRIA</h1>
            <p><a href="" class="btn btn-secondary px-4 py-3 mt-3">LER AQUI</a></p>
          </div>
        </div>
        </div>
      </div>
       <div class="slider-item" style="background-image:url(https://ptnacamara.org.br/portal/wp-content/uploads/2019/03/marielle-384x220.png);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 text-center ftco-animate">
           <h1 class="mb-4">LUTE COMO UMA GAROTA</span></h1>
            <p><a href="index.php" class="btn btn-secondary px-4 py-3 mt-3">LER AQUI</a></p>
          </div>
        </div>
        </div>
      </div>
       <div class="slider-item" style="background-image:url(https://publisher-publish.s3.eu-central-1.amazonaws.com/pb-brasil247/swp/jtjeq9/media/20191114221144_2d70fa1e-f477-4c80-a710-196cbec8c8a2.jpeg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 text-center ftco-animate">
           <h1 class="mb-4">GOVERNO  LULA</h1>
            <p><a href="lula.php" class="btn btn-secondary px-4 py-3 mt-3">LER AQUI</a></p>
          </div>
        </div>
        </div>
      </div>
    </section>
</div>
<section>					
</div>
			<section>	
			        <div class="row justify-content-center mb-5 pb-2">
					<div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
                 	<h1 class="mb-4">Afinal, o que é ser jovem?</h1>
                 	<div class="text-justify">
						<p>Será que os discursos sobre juventude apresentam o mesmo sentido ou carregam sentidos diferentes?Será que existe de fato um limite entre o momento em que ela se inicia e termina?</p>
						<p>Juventude é um desses termos que parecem óbvios, dessas palavras que se explicam por elas mesmas e assunto a respeito do qual todo mundo tem algo a dizer, normalmente reclamações indignadas ou esperanças entusiasmadas. Afinal, todos nós somos ou fomos jovens (há mais ou menos tempo), convivemos com jovens em relações mais ou menos próximas, e nas últimas décadas eles têm sido tema de alta exposição nos diferentes tipos de mídia que atravessam nosso cotidiano (ABRAMO, 2005, p. 37).</p>
						<p>Pois é, uma palavra sobre a qual as pessoas sempre têm algo a dizer: de que ela é um estado de espírito, ou que é o futuro do mundo, ou mesmo que é uma fase perigosa e há quem afirme que ela seja revolucionária.</p>
						<p>A Juventude,para a maioria das pessoas,é sinônimo de transição,de novas experiências,de novos interesses e de preparação para as obrigações da vida adulta.No entanto,ao contrário do que muitas pessoas pensam,a Juventude não é um fenômeno natural, mas uma construção social e histórica, que ocorreu durante a modernidade (PERALVA, 1997).</p>
						<p>No Brasil, a atual Política Nacional de Juventude (PNJ), considera jovem todo cidadão ou cidadã da faixa etária entre os 15 e os 29 anos. A Política Nacional de Juventude divide essa faixa etária em 3 grupos: jovens da faixa etária de 15 a 17 anos, denominados jovens-adolescentes; jovens de 18 a 24 anos, como jovens-jovens; e jovens da faixa dos 25 a 29 anos, como jovens-adultos.</p>
						<div class="row mt-5">
					
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="ftco-intro" style= "background-image: url(http://www.fn10.com.br/wp-content/uploads/2016/03/GERAL_-jovem-eleitor_-foto-sheila-wiroski-350x263.jpg)" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
        	<div class="row">
					<div class="text-justify">
					<div class="col-md-9">
						<div class=" justify-content-center align-items-center">
						<h2 class="mb-4">O DIREITO AO VOTO DOS ADOLESCENTES NO BRASIL</h2>
						<div class="text-justify">
					     	<p>Milhares de jovens comemoraram a decisão exclamando em bom som: “Chegou a nossa vez, voto aos 16”.
					           O voto aos 16 anos foi uma conquista do movimento 
    					  	   estudantil, incorporada à Constituição de 1988. Entre o fim da década de 1980 e o início da seguinte, estudantes e jovens, de um modo geral, demonstravam interesse na vida política nacional e desejo de se manifestar, por meio do voto, sobre os rumos do país. </p>
    						<p>Poder votar foi um sonho dos jovens nos anos 1980. Depois de pressionar a sociedade e parlamentares, articulados em entidades como a União Brasileira dos Estudantes Secundaristas (UBES) e a União Brasileira dos Estudantes (UNE), a conquista veio com uma emenda aprovada pelos deputados constituintes com 355 votos, ante 98 contrários e 38 abstenções.</p>
    						<p>Após décadas de ditadura militar, a Assembleia Constituinte era formada por parlamentares escolhidos especialmente para criar a nova Constituição brasileira, esta que vale até hoje, chamada “Constituição Cidadã”. Foi então em 2 de março daquele ano, aprovada a emenda do deputado Hermes Zanetti. Com 355 votos a favor, 98 contrários e 38 abstenções, a escolha dos representantes do país era, finalmente, facultada aos maiores de 16 e menores de 18 anos.</p>
    					</div>
					</div>
				</div>
			</div>
		</section>
    <section class="ftco-section" >
		    <div id="" style= background-image: url(https://camaraligada.files.wordpress.com/2014/03/02-ditadura.jpg;) class="content content-picture">
			<div class="row justify-content-center mb-5 pb-2">
			<div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
				<div class="text-justify">
                <h2 class="mb-4"><span>JOVEM</span> COMO PROTAGONISTA DE SUA HISTÓRIA</h2>
                    <p> Desde 1985, quando a ONU estabelece o Ano Internacional da Juventude, um outro olhar para os jovens começa a ser construído no mundo: a juventude passa a ser reconhecida como um grupo de características e necessidades específicas.</p>
                    <p> Esse movimento de reconhecimento de direitos é resultado de crescentes mobilizações de organizações da sociedade civil pela ampliação de direitos sociais específicos da juventude, corresponde a um desejo global por concepções que entendam o jovem como partícipe da vida pública e aponta para necessidade de mudança na relação do Estado e da sociedade com a juventude.</p>
                    <p> No Brasil, a construção de políticas públicas de juventude também faz parte do histórico de lutas e movimentos organizados da sociedade civil, que, mesmo que ainda bastante recente, tem pautado as necessidades de representação legais e cidadãs da juventude. Em seu estudo sobre políticas públicas para juventude no Brasil, Sposito e Carrano apontam que, antes de serem incorporados pela esfera governamental, programas e eventuais políticas destinados aos jovens já vinham sendo experimentados pela sociedade civil por meio de organizações não governamentais e de fundações empresariais, recobertos de extrema diversidade quanto às orientações.</p>
                    <p> Esses programas e ações apontavam para uma concepção da juventude não mais com base na ideologia do menor em situação irregular, mas na doutrina cidadã de proteção integral aos adolescentes em conflito com a lei.</p>
                    <p> O conjunto de mobilizações e pressões sociais articuladas em torno desses princípios teve início em 2004, com a criação do Plano Nacional de Juventude, passando pela criação da Secretaria Nacional de Juventude (SNJ) e do Conselho Nacional de Juventude (Conjuve), e culminou na realização das Conferências de Juventude que vêm ocorrendo desde 2008, na aprovação da PEC da Juventude em 2010 e, finalmente, na criação o Estatuto da Juventude em 2013.</p>
                    <p> Como resultado de todas as pressões e mobilizações sociais, foi desenhado o Estatuto da Juventude, documento que sintetiza os avanços dessas lutas por reconhecimento e direitos plenos da juventude. É fundamental, assim, não apenas reconhecer a importância de tais conquistas, mas também assimilar na prática os princípios defendidos nesse documento.</p>
        
          </div>
        </div>	
			
		</section>
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url(http://psicanalisedemocracia.com.br/wp-content/uploads/2018/08/protesto-aumento-da-passagem.jpeg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 text-center ftco-animate">
           <h1 class="mb-4">JORNADAS DE <span> JUNHO</span></h1>
            <p><a href="jornadas.php" class="btn btn-secondary px-4 py-3 mt-3">LER AQUI</a></p>
          </div>
        </div>
        </div>
      </div>

      <div class="slider-item" style="background-image:url(http://edwilsonaraujo.com/wp-content/uploads/2018/03/Marcelo-Prates.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 text-center ftco-animate">
             <h1 class="mb-4">DIRETAS <span>JÁ!</span></h1>
            <p><a href="diretas.php" class="btn btn-secondary px-4 py-3 mt-3">LER AQUI</a></p>
          </div>
        </div>
        </div>
      </div>
       <div class="slider-item" style="background-image:url(http://memoriasdaditadura.org.br/wp-content/uploads/2014/11/edson-luis.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 text-center ftco-animate">
           <h1 class="mb-4">EDSON LUIS</h1>
            <p><a href="edson.php" class="btn btn-secondary px-4 py-3 mt-3">LER AQUI</a></p>
          </div>
        </div>
        </div>
      </div>
       <div class="slider-item" style="background-image:url(http://ubes.org.br/ubesnovo/wp-content/uploads/2017/03/voto-aos-16-719x480.jpg
);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 text-center ftco-animate">
           <h1 class="mb-4">SE LIGA, 16</span></h1>
            <p><a href="seliga.php" class="btn btn-secondary px-4 py-3 mt-3">LER AQUI</a></p>
          </div>
        </div>
        </div>
      </div>
       <div class="slider-item" style="background-image:url(https://ctb.org.br/wp-content/uploads/2018/06/marchados100mil-defesadademocracia.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 text-center ftco-animate">
           <h1 class="mb-4">PASSEATA DOS CEM MIL</h1>
            <p><a href="cemmil.php" class="btn btn-secondary px-4 py-3 mt-3">LER AQUI</a></p>
          </div>
        </div>
        </div>
      </div>
      
       <div class="slider-item" style="background-image:url(https://radicalfurioso.files.wordpress.com/2010/08/arquivo_radical_furioso_jairo_costa_053.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 text-center ftco-animate">
           <h1 class="mb-4">MOVIMENTO FORA COLLOR (CARAS PINTADAS)</h1>
            <p><a href="caras.php" class="btn btn-secondary px-4 py-3 mt-3">LER AQUI</a></p>
          </div>
        </div>
        </div>
      </div>
    </section>
</div>

 
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