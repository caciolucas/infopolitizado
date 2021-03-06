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
 
    <section class="hero-wrap hero-wrap-2" style="background-image: url('https://i.ytimg.com/vi/G9ub4tL2HOM/maxresdefault.jpg');" style="text-align:center" />
      <div class="overlay"></div>

      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">REPÚBLICA POPULISTA(1946-1964)</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php"> Início <i class="ion-ios-arrow-forward"></i></a></span> </i></span></p>
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
<p>República Populista, é um período da história brasileira iniciado em 1946, com a posse na presidência da república de Eurico Gaspar Dutra, e finalizado em 1964, a derrubada do presidente João Goulart através do Golpe Civil-Militar Historicamente o populismo está ligado a fenômenos políticos da América Latina e encontra-se atrelado ao processo de expansão industrialização e urbanização que colabora para o crescimento da burguesia industrial, da classe média e do proletariado.
                  <p>No caso específico do Brasil processo de industrialização se inicia entre os anos vinte e trinta o que posiciona o populismo em foco exatamente neste período. O populismo se caracteriza pela a ausência dos partidos políticos e de programas de governo definidos, contribuindo para que as lideranças políticas se destaquem pelo seu carisma, assistencialismo e demagogia. Permitindo uma relação direta e não institucionalizada do líder com as massas que passam a considerá-lo como um líder inquestionável.  <a data-toggle="collapse" href="#collapsePopulista" role="button" aria-expanded="false" aria-controls="collapsePopulista">Ler mais</a></p>
                <div class="collapse" id="collapsePopulista"> </p> 
                  <p>A primeira eleição presidencial para presidência da República, ocorrida logo após a derrubada do Estado Novo, foi marcada por confrontos de forças políticas ainda influenciadas pela figura de Getúlio Vargas. A UDN  que era representante dos setores liberais conservadores, que fazia oposição a Vargas,  lançou como candidato o brigadeiro Eduardo Gomes; o PTB em aliança com o PSD, ambos ligados a Getúlio, lançou o nome do general Eurico Gaspar Dutra; e o PCB disputou o pleito com o candidato Yedo Fiuza. O general Eurico Gaspar Dutra venceu as eleições com 55 por cento dos votos. Durante o governo Dutra, foi elaborado uma nova Constituição para o Brasil. A Constituição de 1946 foi promulgada no dia 18 de setembro de 1946, após meses de elaboração e foi responsável por trazer parcialmente direitos políticos e democráticos aos cidadãos brasileiros. Externamente  governo Dutra foi marcado pela aproximação com os Estados Unidos, reflexo do início da guerra fria (rompimento das relações diplomáticas com a URSS e o Partido Comunista do Brasil  foi colocado na ilegalidade.</p>
                  <p>No campo econômico, Dutra praticou uma política de incentivo à importação de bens de consumo com o objetivo de combate à inflação. Entretanto, as consequências da adoção dessa política  foi o esvaziamento das reservas cambiais do país, acumuladas durante a Segunda Guerra, o que forçou o governo a abandonar  política de incentivo à importação. Buscando romper o quadro da delicada situação econômica, o governo  Dutra propôs a implantação do Plano Salte, no qual o Estado determinaria os investimentos públicos em áreas consideradas essenciais para o desenvolvimento do país (Saúde, Alimentação, Transporte e Energia).</p>
                  <p>Em 1951, Vargas voltou ao poder através de eleições democráticas, como já era esperado adotou suas clássicas políticas econômicas nacionalistas e intervencionistas. Contrariando os interesses de parte do empresariado brasileiro, Getúlio adotou medidas econômicas  como a limitação da remessa de lucros ao exterior e da entrada de multinacionais no país. Com o objetivo de fomentar a economia, Vargas adotou o Plano de Reaparelhamento Econômico Dentre as principais deste plano temos a criação em 1952 do Banco Nacional de Desenvolvimento Econômico (BNDE), e em 1953 da Petrobrás (1953), criada após o lançamento de uma campanha que tinha como lema “O Petróleo é nosso” mobilizou grande parte da opinião pública brasileira. A criação da Petrobras representou o auge plataforma nacionalista.</p>
                  <p>Começaram a surgir sinais da insatisfação de setores estratégicos de opinião, sobretudo dos representantes do capital estrangeiro e da burguesia nacional. Estes setores criticavam Vargas por procurar implantar uma política econômica de cunho nacionalista ao mesmo tempo que se a aproximava do operariado. Setores conservadores para acusar Getúlio de tentar implantar uma república  sindicalista, aos moldes como na Argentina de Peronista. Pressionado por uma série de eventos, em 1954 Getúlio Dornelles Vargas cometeu suicídio dentro do Palácio do Catete. Seu vice-presidente, João Café Filho passou a dirigir o País.</p> 
                  <p>João Fernandes Campos Café Filho (Café Filho) nasceu no dia 3 de fevereiro de 1899 na cidade de Natal, estado do Rio Grande do Norte. As primeiras atividades que exerceu foram as de advogado e jornalista. Durante a campanha de 1930, foi integrante da Aliança Liberal no Rio Grande do Norte. No Com a implantação do governo provisório de Getúlio Vargas, foi nomeado chefe de polícia.. Em 1935, Foi eleito deputado federal pelo Rio Grande do Norte,  por duas legislaturas, em 1935 e 1946. Com o suicídio de Vargas, assumiu a presidência em 24 de agosto de 1954.  foi o sucessor de Getúlio Vargas e assumiu em 1954, exerceu o cargo até novembro de 1955. Seu governo foi marcante pelas medidas econômicas liberais comandadas pelo economista Eugênio Gudin. Foi afastado da presidência por problemas de saúde, assume a presidência, Carlos Luz, presidente da Câmara). Em virtude do seu envolvimento em uma tentativa de impedir a posse de Juscelino Kubitschek, assumindo a presidência da república o senador Nereu Ramos, no momento presidente do Senado. Após o exercício da presidência, Café Filho trabalhou em uma imobiliária no Rio de Janeiro, posteriormente, foi nomeado para o cargo de ministro do Tribunal de Contas da Guanabara pelo  então governador Carlos Lacerda. Ele permaneceu no cargo até 1969, ano que se aposentou.</p> 
                  <p>Juscelino Kubitschek de Oliveira eleito presidente do Brasil nas eleições de 1955, tendo como vice-presidente, João Goulart (Jango). Assumiu a presidência da república no dia 31 de janeiro de 1956, permanecendo até 31 de janeiro de 1961.</p> 
                  <p>Em meio às turbulências políticas que chegaram inclusive a ameaça a sua posse, Juscelino Kubitschek lançou um ousado plano desenvolvimentista que, segundo ele mesmo, iria fazer o Brasil crescer “50 anos em 5”. Denominado de Plano de Metas, tinha como slogan “50 anos de progresso em 5 anos de realizações”. O Plano pretendeu atuar em cinco setores da economia nacional: energia, transportes, indústrias de base, alimentação e educação.  Kubitschek permitiu a abertura da economia para o capital internacional e, desta forma, atraiu o investimento de grandes empresas das grandes montadoras de automóveis como, Ford, Volkswagen, Willys e GM (General Motors).</p>
                  <p>Expandiu-se a infra-estrutura de rodovias, ferrovias e portos, energia elétrica, armazéns e silos. Ele ainda criou a Superintendência do Desenvolvimento do Nordeste (SUDENE), a fim de atenuar as disparidades regionais. Ao mesmo tempo buscou promover o desenvolvimento do interior do país construindo uma rede de rodovias e transferindo a capital do Brasil para Brasília. . A construção de Brasília foi um marco no governo Juscelino,  passando a simbolizar o processo de modernização que o  país estava vivenciando.</p> 
                  <p>Em 1960, Jânio Quadros,  membro da UDN foi eleito presidente, assumindo a presidência em 1961, mas renunciou em agosto do mesmo ano. Jânio, um ex-professor paulista que pregava a moralização do governo, utilizando a vassoura como símbolo de sua campanha presidencial, insistia em moralizar o cenário político nacional e “varrer” a corrupção do país. Jânio, fez um governo contraditório. A fórmula adotada por ele foi combinar uma política interna conservadora e anti popular, com uma política externa independente. Essa política, notabilizou por ataques à China nacionalista e pela condecoração do líder da Revolução Cubana, Ernesto “Che” Guevara. Essa postura acabou por atrair à desconfiança da burguesia e à ira dos militares sobre o governo.</p> 
                  <p>Jânio Quadros tentou promover um auto-golpe, renunciando para voltar com plenos poderes. Ele acreditava que o Congresso Nacional não aceitaria seu pedido de renúncia em virtude da ligação do vice João Goulart, com à esquerda trabalhista. Entretanto, contrariando os prognósticos de Jânio, o congresso aceitou a renúncia. Com a renúncia deu-se início a uma grave crise política. A cúpula militar posicionou-se contra posse de João Goulart, vice-presidente e sucessor de acordo com a Constituição. Os militares não queriam aceitá-lo na presidência, alegando que Jango representava a possibilidade de implantação de uma ditadura comunista no Brasil. Uma solução intermediária foi acertada,  o impasse foi solucionado com a instalação do sistema parlamentarista no Brasil. Sendo Goulart empossado presidente em 07 de Setembro de 1961.</p> 
                  <p>O clima de instabilidade e radicalismo político vigente contribuiu para o insucesso do parlamentarismo, favorecendo a antecipação do plebiscito que determinaria o sistema político seria adotado no país.</p> 
                  <p>Com a vitória do presidencialismo, a economia prosseguia com uma elevada taxa inflacionária. Com o intuito de combater a inflação e promover o crescimento econômico, o governo lançou o Plano Trienal, um programa que incluía uma série de medidas reformas institucionais Entre as medidas, constava-se o controle do déficit público e, ao mesmo tempo, a manutenção da política desenvolvimentista através da captação de recursos no exterior como o objetivo de realizar as chamadas reformas de base. (reformas bancária, fiscal, urbana, eleitoral, agrária e educacional). Ao mesmo tempo, eram propostas medidas de cunho nacionalista, com maior intervenção do estatal economia e regulamentação dos investimentos estrangeiros no país, através de um maior controle das remessas de lucros para o exterior. O plano foi atacado tanto pela esquerda quanto pelos conservadores, todos preocupados mais com as implicações políticas que com os resultados práticos.  O governo, atordoado pelas críticas de todos os lados e fustigado pelos problemas econômicos que aumentavam, optou pelo apoio das esquerdas.</p>
                  <p>Desgastado com a crise econômica e com a oposição de políticos conservadores e de parte da alta cúpula das forças, o presidente procurou fortalecer-se, incentivando de manifestações que defendem suas propostas. Com o objetivo de angariar apoio popular para defesa da instituição das Reformas de Base, Goulart, realizou no dia 13 de março de 1964, um o Comício da Central do Brasil, no Rio de Janeiro, anunciou  assinatura um decreto presidencial que estatizou as refinarias de petróleo privadas e outro um que desapropriou terras às margens de ferrovias e rodovias federais, para realização de uma reforma agrária.  Essa mobilização pelas reformas de base desencadeou a reação de proprietários de terras, parcelas das forças armadas e dos interesses políticos norte-americanos no Brasil. Em um cenário político bastante radicalizado, foi realizada no dia 19 de março de 1964, em São Paulo, a Marcha da Família com Deus pela Liberdade, que mobilizou 500 mil pessoas contra o governo de João Goulart e a suposta “ameaça comunista” que rondava o país.</p>
                  <p>Na madrugada do dia 31 de março de 1964, o movimento militar eclodiu em Belo Horizonte e espalhou-se rapidamente por todo o Brasil, praticamente sem reação da esquerda. Alguns políticos e líderes de esquerda foram presos,  um grupo significativo de opositores ao golpe preferiu abandonar o país. Goulart exilou-se no Uruguai, onde permaneceu até o seu falecimento em 1976. Era o início do Regime Civil-Militar, que perdurou até o ano de 1985.</p>
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