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
 
    <section class="hero-wrap hero-wrap-2" style="background-image: url('https://revistacult.uol.com.br/home/wp-content/uploads/2019/03/ditadura.png');" style="text-align:center" />
      <div class="overlay"></div>

      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">DITADURA MILITAR (1964-1985)</h1>
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
                       <p>É designado de Ditadura Militar, regime implantado no Brasil, após a forças armadas, sob o comando do exército, terem em 1 de abril de 1964 derrubado, através de um golpe militar, o então presidente democraticamente eleito João Goulart, durante o regime militar, ocorreu um fortalecimento do poder Executivo, caracterizando um regime de exceção, uma vez que o Executivo passou a legislar. Ao mesmo tempo, o Alto Comando das Forças Armadas controlava a sucessão  presidencial, indicando um candidato militar que era confirmado pelo Congresso Nacional.</p>
                      <p>O primeiro militar a assumir a presidência foi Marechal Humberto de Alencar Castello Branco (1964 a 1967), Castello Branco foi eleito presidente de forma indireta, e seu governo deu início a implantação das bases da repressão, neste sentido, são decretados diversos atos institucionais. Foi através da decretação de diversos atos institucionais, conhecidos com AI, que o alto comando acumulou poderes no transcorrer da implantação do regime. O Ato Institucional nº 1, AI-1 era referente a cassação de mandatos e a suspensão de direitos políticos, a partir da decretação do AI-1 iniciou-se uma série de prisões daqueles que eram considerados inimigos do regime.</p>
                      <a data-toggle="collapse" href="#collapseMilitar" role="button" aria-expanded="false" aria-controls="collapseMilitar">Ler mais</a></p>
                       <div class="collapse" id="collapseMilitar"><div>
                <center>
                  <img src="https://upload.wikimedia.org/wikipedia/commons/d/df/Castelobranco.jpg" style="width:29%" align="center">
                  <p> <b>Humberto de Alencar Castelo Branco, 26° presidente do Brasil.</b></p>
                  </center> </div>
  </p> 
                      <p>Com a vitória da oposição nas eleições em cinco estados do país, principalmente em Minas Gerais e na Guanabara, o regime endureceu mais ainda e decretou o Ato Institucional nº 2, AI-2,  tornou indireta a eleição para presidente da República dissolveu os partidos políticos existentes e estabeleceu o bipartidarismo. Surgindo a Aliança Renovadora Nacional (ARENA), partido de situação e o Movimento Democrático Brasileiro (MDB) de oposição. Dentro do processo de desmobilização do cenário político nacional, o governo Castelo Branco baixou o Ato Institucional nº3, o AI-3 decretava que as eleições para Governadores seriam realizadas pela forma indiretas através das Assembléias Estaduais.</p>  
                      <p>Em 1967, Artur Costa e Silva assume à presidência no momento em que ocorre à intensificação das manifestações contra à ditadura militar. O seu governo pelo crescimento da repressão os opositores políticos ao regime, pelo crescimento da livre expressão. As tensões políticas aumentaram e fica claro que, à ditadura militar não seria algo temporário. As manifestações nas ruas ficam mais aguerridos, os estudantes saem às ruas protestando contra o regime, os confrontos entre os estudantes e as forças policiais crescem e culminam com o assassinato do estudante Edson Luís, no restaurante calabouço na cidade do Rio de Janeiro.
prisões daqueles que eram considerados inimigos do regime.</p>  
                      <div><center>
  <img src="https://upload.wikimedia.org/wikipedia/commons/6/66/Costa_e_Silva.jpg" style="width:29%" align="center">
  <p> <b>Artur da Costa e Silva, 27° presidente do Brasi.</b></p>
  </center> </div>                      
                      </p>
                      <p>O projeto governamental de transformar as universidades em fundações provocou uma forte reação no movimento que ficou conhecida como a Passeata dos Cem Mil nas ruas do centro do Rio de Janeiro. A Passeata dos Cem Mil marcou o ápice da reação da sociedade contra o regime militar.</p> 
                      <p>O crescimento das manifestações de oposição ao regime militar durante o governo Costa e Silva, contribuiu para que os militares tomassem medidas para o endurecimento do regime e uma das mais marcantes do período foi a promulgação do Ato Institucional nº5, o AI-5. Dentre outras atribuições o decreto passou a permitir a presidência da república; cassar os mandatos legislativos, executivos, federais, estaduais e municipais e suspender os direitos políticos dos cidadãos, demitir, remover, aposentar funcionários civis e militares. No tocante aos direitos do cidadão, o AI-5 feria as garantias civis mais elementares como a retirada do direito a habeas corpus A partir do AI-5 o país viveria uma censura aos meios de comunicação. Em razão do agravamento do seu estado de saúde Costa e Silva afastou-se da presidência da república e o executivo passou a ser exercido por uma Junta Militar. Em agosto de 1969, o general Costa e Silva morreu em decorrência de um derrame cerebral.</p>
                      <p>Entretanto, quem segue à risca o Ato Institucional n°5 foi o presidente Emílio Garrastazu Médici que assumiu à presidência da república em 1969. Foi nesse período que o país vivenciou à fase mais repressiva da ditadura, à censura aos meios de comunicação e à utilização de tortura de prisioneiros políticos tornaram-se corriqueiras. Ao mesmo tempo que opção pela utilização da luta armada para combater o regime se acendeu nesse período. Mas foi também foi o momento que trouxe mais legitimidade para o regime. Uma vez que foi no Governo Médici, que o Brasil viveu o chamado “milagre econômico”. O principal ideólogo do “milagre” foi o economista Antônio Delfim Netto, ministro da Fazenda desde o Governo Costa e Silva.</p>
                      <div><center>
  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/92/Em%C3%ADlio_Garrastazu_M%C3%A9dici%2C_presidente_da_Rep%C3%BAblica._%28cropped%29.tif/lossy-page1-200px-Em%C3%ADlio_Garrastazu_M%C3%A9dici%2C_presidente_da_Rep%C3%BAblica._%28cropped%29.tif.jpg" style="width:29%" align="center">
  <p> <b>Emílio Garrastazu Médici, 28° presidente do Brasi.</b></p>
  </center> </div>          
                      </p> 
                      <p>O denominado “milagre econômico” foi um período da economia brasileira marcado pela realização de grandes obras públicas. Tais como, rodovia Transamazônica, a ponte Rio-Niterói e Usina Hidrelétrica de Itaipu. Ao mesmo tempo, ocorreu a expansão do setor industrial, proporcionado através da expansão do crédito e da manutenção de baixos índices salariais, através de uma forte repressão ao movimento sindical.  incitou uma explosão consumista entre os setores médios da população. Mas a euforia de crescimento econômico era custeada através da aquisição de vultosos empréstimos obtidos no exterior.  A despeito do crescimento da economia, uma parte significativa da população do país não sentiu isso no bolso. Apesar da grande empregabilidade, à desigualdade social não parou de crescer.</p> 
                      <p>O governo Médici também foi marcado pela utilização maciça dos meios de comunicação com o objetivo de promover o regime. Com a utilização de slogans como Slogans como “Pra Frente Brasil!”, “Ninguém Segura este país” e “Brasil: Ame-o ou deixe-o  Neste, tentou-se divulgar uma concepção de que o Brasil estava em construção com o objetivo de chegar ao primeiro mundo. A conquista do Tricampeonato de futebol do Brasil na copa do mundo do México, em 1970, contribuiu para estimular a retórica ufanista e a propaganda do regime. Entretanto, com o surgimento da primeira crise petrolífera internacional, em 1973 o país foi atingido e seu crescimento econômico foi afetado  causando instabilidade no governo Médici. O regime militar, de forma geral, começou a perder apoio popular.</p> 
                      <p>Com o término do mandato de Médici, assume a presidência da república o Gen Ernesto Geisel (1974-1979). Neste momento, a crise do petróleo e a recessão mundial interferem fortemente na economia brasileira, crescimento da com a insatisfação popular. Como Geisel foi iniciado o processo de transição para a democracia, por ele mesmo designado que deveria ocorrer de forma “lenta, gradual e segura”. A implantação do processo de abertura política foi necessária devido o agravamento da crise econômica que gerou aumento da inflação e da dívida interna. Contribuindo para o crescimento descontentamento da população para com o regime. Na implantação do processo de abertura política lenta e gradual, o Congresso Nacional foi fechado, o sistema judiciário, assim como a legislação, passaram por mudanças.  Dentre algumas mudanças que Ernesto fez, temos a dos chamados senadores biônicos, que nada mais foi que, um terço dos senadores teriam indicação para presidência da república, assim, os militares garantiam uma base forte para apoiá-los e serem a maioria dentro do senado brasileiro, além do mandato presidencial que se estendeu de 5 para 6 anos. No ano seguinte, teve de enfrentar a maior greve ocorrida durante o regime, a greve dos metalúrgicos do ABC paulista, marcou a retomada do movimento sindical independente no país e ao mesmo tempo lançou para o cenário nacional a figura do líder metalúrgico Luiz Inácio da Silva.
                       <div><center>
  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Ernesto_Geisel.jpg/200px-Ernesto_Geisel.jpg" style="width:29%" align="center">
  <p> <b>Ernesto Beckmann Geisel, 29° presidente do Brasi.</b></p>
  </center> </div>          
                      </p>
                      <p>Em 1978, Geisel decretou o fim do AI-5, maioria governista no Congresso Nacional promulgou a Emenda Constitucional nº 11, revogando os atos institucionais da ditadura. O habeas corpus foi restaurado. No mesmo ano, foi eleito presidente pelo Colégio Eleitoral Gen. João Baptista Figueiredo, que se deparou com uma difícil tarefa a cumprir, garantir a continuidade do processo de abertura política iniciado por Geisel. Figueiredo ao tomar posse, afirmou que faria do Brasil uma democracia. Figueiredo. Contudo, setores militares de extrema direita começaram a pressioná-lo para interromper o processo de abertura polícia. Ao mesmo tempo, se deparou com uma situação delicada econômica, com o crescimento da inflação corroendo os salários do trabalhadores e com isso impulsionando o crescimento da oposição ao regime. A principal ação do seu governo foi a  promulgação da Lei de anistia em 1979, após uma ampla mobilização social, a lei concedeu à anistia à todos que cometeram crimes políticos ou eleitorais e àqueles que sofreram restrições em seus direitos políticos. A lei de anistia beneficiou, além das vítimas do golpe militar, os responsáveis por torturas, mortes e desaparecimentos de opositores do regime.</p> 
                      <p>Durante o governo de Figueiredo, mais um passo foi dado no processo de abertura política, com a abertura política, com a Nacional (ARENA) deixam de existir.  Dentre  os partidos criados nesse período foram,  o Partido dos Trabalhadores (PT), o Partido Trabalhista Brasileiro (PTB), o Partido Democrático Trabalhista (PDT),  Partido Democrático Social (PDS), e o Partido Movimento Democrático Brasileiro (PMDB). Apesar disso, setores de extrema direita das forças armadas  não concordavam com a medidas tomadas para permitir o retorno da democracia, e tentado interromper o processo passaram a cometer atentados terroristas a bomba realizados em bancas de jornais,sedes de jornais da oposição e igrejas que apoiavam a oposição ao regime.
                      <div><center>
  <img src="https://upload.wikimedia.org/wikipedia/commons/a/af/Figueiredo_%28colour%29.jpg" style="width:29%" align="center">
  <p> <b>João Baptista de Oliveira Figueiredo, 30° presidente do Brasi.</b></p>
  </center> </div>          
                      </p>
                      <p>Os dois principais atentados ligados à essa corrente radical foram à carta bomba, destinada à Ordem do Advogados do Brasil (OAB), seção do Rio de Janeiro, que matou à secretaria da instituição em 27 de Agosto de 1980 e o atentado que ocorreu no Rio de Janeiro em 30 de Abril de 1981, no Riocentro,  Centro de Convenções do Rio, onde se realizava uma show musical em homenagem ao dia do trabalhador. Dois integrantes do exército pretendiam explodir duas bombas no local. Uma das bombas chegou a atingir a central de energia, mas a outra explodiu dentro do carro em que estavam, no colo de um dos militares. Um sargento Guilherme Pereira do Rosário morreu e o outro oficial Guilherme Pereira do Rosário, ficou gravemente ferido. </p>
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