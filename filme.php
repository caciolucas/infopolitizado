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
	  
               
            <li class="nav-item"><a href="quizes.php" class="nav-link">QUIZ</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('https://blog.enem.com.br/wp-content/uploads/2016/01/Render-Rolo-De-Filme.png');">
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
                 	<h2 class="mb-4">Filmes que retratam momentos políticos do Brasil</h2>
                 	<div class="text-justify">
						
						<p>Se a política é assunto para todos os momentos no Brasil dos últimos anos, não seria diferente no cinema. </p>
						<p>Na lista há desde obras que falam sobre a vida e a herança deixada por ex-presidentes como Getúlio Vargas e Juscelino Kubitschek até as lembranças do regime militar, quando um governo democrático foi destituído e perseguições passaram a fazer parte da rotina da população.
Veja uma seleção de obras que ajudam a entender o conflito político atual e problemas vividos pela sociedade brasileira.
<b>Confira 16 filmes para entender o Brasil de hoje.</b> </p>
						<div class="row mt-5">
						    
						<h4 class="mb-4"><b>Olga (2004)</b></h4>
						<div class="text-justify">
						<p>Inspirado na biografia escrita por Fernando Morais sobre a militante comunista alemã de origem judaica, o filme retrata Olga Benário como mulher do líder comunista Luís Carlos Prestes, um dos maiores inimigos do então presidente Getúlio Vargas. A obra narra o sofrimento dessa importante figura, que acabou sendo deportada para a Alemanha e morta em um campo de concentração nazista. </p>
				            	<center><iframe width="560" height="315" src="https://www.youtube.com/embed/-JyTxwszqGI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><div class="row mt-5"></center>
					
					
						<h4 class="mb-4"> <b>Entreatos (2004)</b></h4>
						
						<div class="text-justify" >
						<p>Do diretor João Moreira Salles, o documentário segue a campanha do então candidato presidencial Luís Inácio Lula da Silva em reuniões, comícios, planos, debates na TV, com sua família e aliados políticos nas eleições de 2002, quando Lula se consagrou Presidente da República.</p>
						<center><iframe width="560" height="315" src="https://www.youtube.com/embed/yDGcF6v4UCY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
						<div class="row mt-5">
						    
						<h4 class="mb-4"><b>O Ano em que Meus Pais Saíram de Férias (2006)</b></h4>
						<div class="text-justify">
						<p>Situado em 1970, o filme mostra a vida de Mauro, um garoto de 12 anos que adora futebol e jogo de botão. Certo dia, sua vida muda completamente: seus pais saem de férias de forma inesperada e sem motivo aparente para ele. Na verdade, foram obrigados a fugir da perseguição política durante a Ditadura Militar no Brasil, tendo que deixá-lo com o avô paterno. Porém o avô enfrenta problemas, o que faz com que Mauro tenha que ficar com Shlomo, um velho judeu solitário que é vizinho de seu avô.</p>
						<center><iframe width="560" height="315" src="https://www.youtube.com/embed/eDihyQAOQ1s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
						<div class="row mt-5">
						    
						<h4 class="mb-4"><b>Os Dias Eram Assim (2017)</b></h4>
						<div class="text-justify">
						<p>Exibida pela Rede Globo, esta série brasileira retrata o cotidiano de uma família no contexto da Ditadura Militar. Ela mostra como as configurações sociais vão se transformando no país, desde a Ditadura até as mudanças políticas que levaram às "Diretas Já".</p>
						<center><iframe width="560" height="315" src="https://www.youtube.com/embed/eq5U8DKCzTE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
						<div class="row mt-5">
						    
						<h4 class="mb-4"><b>O Mecanismo (2018)</b></h4>
						<div class="text-justify">
						<p>Esta série ficcional retrata investigações sobre alegações de corrupção em empresas de petróleo e construção, estatais e privadas, no Brasil. Disponível no Netflix, e estrelada por Selton Mello, a série é uma analogia à Operação Lava Jato, que acontece no país desde 2014.</p>
						<center><iframe width="560" height="315" src="https://www.youtube.com/embed/80NBF4O-guM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
						<div class="row mt-5">
					
						<h4 class="mb-4"><b>Getúlio (2014)</b></h4>
						<div class="text-justify">
						<p>Do diretor João Jardim,O filme mostra a intimidade de Getúlio Vargas, então presidente da República, em seus 19 últimos dias de vida. Em um ambiente de pressão, em decorrência das acusações de que teria ordenado o atentado contra o jornalista Carlos Lacerda, Getúlio (interpretado por Tony Ramos) avalia os riscos existentes até tomar a decisão de se suicidar.</p>
							<center><iframe width="560" height="315" src="https://www.youtube.com/embed/8JbryJO9GJs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
						<div class="row mt-5">
					
						<h4 class="mb-4"><b>Os anos JK (1980)</b></h4>
						<div class="text-justify">
						<p>O documentário de Silvio Tendler aborda, além da própria história do ex-presidente Juscelino Kubitschek, fatos que marcaram a vida política brasileira como o Estado Novo, a eleição de Dutra, a atuação do Partido Comunista, a retomada do poder por Getúlio, seu suicídio, o período João Goulart e os governos militares que se seguiram ao golpe de 1964.</p>
							<p><center><iframe width="560" height="315" src="https://www.youtube.com/embed/LLw0Kqb463s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center> </p>
								<div class="row mt-5">
					
							
							
				
						<h4 class="mb-4"><b>Jango (1984)</b></h4>
						<div class="text-justify">
						<p>Também dirigido por Silvio Tendler, “Jango” refaz a trajetória política de João Goulart e fala sobre as reformas de base propostas pelo ex-presidente. O contexto do Golpe de 1964 também aparece nas imagens do documentário, que é narrado pelo ator José Wilker e conta com depoimentos de Magalhães Pinto, Aldo Arantes, Raul Ryff, Afonso Arinos e Francisco Julião, entre outros. </p>
						<p><center><iframe width="560" height="315" src="https://www.youtube.com/embed/SaU6pIBv9f4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center> </p>
							<div class="row mt-5">
					
						
					   <h4 class="mb-4"><b>Batismo de Sangue(2006)</b></h4>
						<div class="text-justify">
						<p> Direção de Helvécio Ratton,inspirado no livro homônimo de Frei Beto, o filme narra a história de um grupo de freis dominicanos que se revolta contra o regime militar. Além de retratar a perseguição e a tortura de quem fazia parte da luta armada contra o regime – ou, no caso, dos freis, quem dava suporte, o filme fala da relação entre o catolicismo e o comunismo.</p>
						<p><center><iframe width="560" height="315" src="https://www.youtube.com/embed/uhBemy_vXCk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center> </p>
						<div class="row mt-5">
						    
						      <h4 class="mb-4"><b>Peões(2004)</b></h4>
						<div class="text-justify">
						<p>No documentário de Eduardo Coutinho, metalúrgicos anônimos contam suas histórias de vida – entremeadas pelas greves no ABC. O filme retrata a origem e o fortalecimento dos sindicatos e mostra a visão pessoal dos trabalhadores sobre Lula e os rumos do país.
</p>
						<p><center><iframe width="560" height="315" src="https://www.youtube.com/embed/XbNUyjNxfUI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center> </p>
						<div class="row mt-5">
					
				
						<h4 class="mb-4"><b>Real - o Plano por trás da história (2017)</b></h4>
						<div class="text-justify">
						<p>O filme nos leva ao ano de 1993, onde o inflexível Gustavo Franco é um crítico feroz da política econômica adotada pelo governo brasileiro nos últimos anos, que resultou em um cenário de hiperinflação. Opositor de políticas de cunho social, é adepto de um choque fiscal de forma que seja criada uma moeda forte, que devolva a dignidade aos cidadãos. Quando o presidente Itamar Franco nomeia Fernando Henrique Cardoso como o novo Ministro da Fazenda, Gustavo é convidado a integrar uma verdadeira força-tarefa, cujo objetivo é criar um novo plano econômico.
</p>
				       <p><center><iframe width="560" height="315" src="https://www.youtube.com/embed/LgPA9jKl9Yw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center> </p>
						<div class="row mt-5">
					
				
					
						<h4 class="mb-4"><b> O Desafio (1965)</b></h4>
						<div class="text-justify">
						<p>Ao retratar os desencontros amorosos de um casal, no período pós- golpe militar de 1964, Paulo Cezar Saraceni tenta mostrar de que forma parcelas da população reagiram à nova situação política. Enquanto a história avança e o medo toma conta “de tudo e de todos”, o país e o romance entre Ada (Isabella), a mulher de um empresário, e Marcelo (Oduvaldo Vianna Filho), um jornalista, caem numa espiral de incertezas. O filme traz cenas do espetáculo teatral Opinião, com apresentações de Zé Keti, Maria Bethânia e João do Vale, e canções como Eu Vivo num Tempo de Guerra, de Edu Lobo e Gianfrancesco Guarnieri.</p>
					<p><center><iframe width="560" height="315" src="https://www.youtube.com/embed/hcggtO2bmvo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center> </p>
						<div class="row mt-5">
					
						<h4 class="mb-4"><b>Excelentíssimos(2018)</b></h4>
						<div class="text-justify">
						<p>Douglas Duarte, diretor do filme, decidiu ir à Câmara dos Deputados retratar o funcionamento da casa por alguns meses. Não esperava filmar também, nesse período, o processo de impeachment da ex-presidente Dilma Rousseff. “O documentário mostra a atuação do presidenciável Jair Bolsonaro em diversas sessões. Dessa forma, estabelece relações próximas com essa eleição”, diz o diretor do festival.</p>
							<center><iframe width="560" height="315" src="https://www.youtube.com/embed/eQG-UYZcwE4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
							<div class="row mt-5">
							    
						<h4 class="mb-4"><b>O candidato honesto 2 (2018)</b></h4>
						<div class="text-justify">
						<p>Se a procura é por algo menos compromissado e divertido, a sequência de 'O candidato honesto', estrelada por Leandro Hassum, pode ser uma boa pedida. A comédia, se utiliza de sátiras e humor leve para retratar as dificuldades no exercício do mandato de um presidente da República.</p>
					    	<center><iframe width="560" height="315" src="https://www.youtube.com/embed/tVZ6I6U0LyE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
							<div class="row mt-5">
							    
						<h4 class="mb-4"><b>Torre das Donzelas (2018)</b></h4>
						<div class="text-justify">
						<p>Filmado por Susanna Lira, conta a estória do prédio em São Paulo que abrigava presas políticas durante a Ditadura Militar, 40 anos depois. Essa narrativa é feita a partir de relatos das próprias mulheres que passaram pela penitenciária feminina, que se reúnem. Uma das personagens de destaque é a ex-presidente Dilma Rousseff, retirada do poder por um processo de impeachment.</p>
					    	<center><iframe width="560" height="315" src="https://www.youtube.com/embed/xxUzXbiksIo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
							<div class="row mt-5">
							    
						<h4 class="mb-4"><b>Junho: o mês que Abalou o Brasil (2014)</b></h4>
						<div class="text-justify">
						<p>De João Wainer,para vários analistas políticos, os protestos de junho de 2013, que inicialmente miravam o aumento das passagens de ônibus e depois passaram a ter como alvos o governo Dilma e a Copa do Mundo 2014, entre outros temas, significaram o pontapé inicial da polarização política que tomou conta do Brasil nos anos seguintes. Daquelas manifestações, surgiram grupos como o Movimento Brasil Livre (MBL), um dos simbolos da acensão da direita via redes sociais, e uma insatisfação generalizada que aos poucos foi encontrando voz no então deputado federal Jair Bolsonaro, hoje presidente da República. Produzido pelo jornal Folha de S.Paulo, o filme tenta dar conta do que aconteceu nas ruas naquele conturbado mês 2013.</p>
					    	<center><iframe width="560" height="315" src="https://www.youtube.com/embed/5kH_SAu9SEc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
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