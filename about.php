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

    <script src="src/js/owl.carousel.js" data-cover></script>
		<script src="src/js/owl.support.js" data-cover></script>
		<script src="src/js/owl.autoplay.js" data-cover></script>

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="main.css">
    <script>
      $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })
    </script>
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
    
  <section class="hero-wrap hero-wrap-2" style="background-image: url('http://s.glbimg.com/po/tt/f/original/2012/09/25/final1.jpg');" style="text-align:center">
    <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">BRASIL REPUBLICANO</h1>
            <p class="breadcrumbs">
              <span class="mr-2">
                <a href="index.php"> Inicio <i class="ion-ios-arrow-forward"></i></a>
              </span>
              <span> 
              </span>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
	<section class="ftco-[section] ftco-no-pt ftc-no-pb">													
    <div class="text-justify">
      <div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-7 wrap-about py-2 pr-md-4 ftco-animate" id='oligarquicas'>	
					<div class="services-2 d-flex">
						
						<div class="text">
							<h1>REPÚBLICA VELHA - PRIMEIRA REPÚBLICA(1889-1930)</h1>
							 <div class="text-justify">
              <p>A república velha ou Primeira República é o período da história do Brasil que se estendeu da Proclamação da República em 15 de novembro de 1989 até a Revolução de 1930. Esse período foi dividido em dois momentos: A República das Espadas e República Oligárquicas. </p>
            </div>
					</div>
				</div>
      </div>
      <div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-7 wrap-about py-2 pr-md-4 ftco-animate" id='oligarquicas'>	
					<div class="services-2 d-flex">
						<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-diploma"></span></div>
						<div class="text">
							<h2>REPÚBLICA OLIGÁRQUICAS</h2>
              <p>Período compreendido entre os anos de 1894 a 1930,  tem início com a eleição do primeiro presidente civil do Brasil, Prudente de Morais. Nesta fase da história do Brasil, o cenário político foi dominado pelas oligarquias  agroexportadoras. <a data-toggle="collapse" href="#collapseOligarquicas" role="button" aria-expanded="false" aria-controls="collapseOligarquicas">Ler mais</a></p>
              <div class="collapse" id="collapseOligarquicas">
                        <p>A República Oligárquica foi caracterizada por um acordo político entre as oligarquias mineiras e paulistas que garantiam um revezamentos entre elas no exercício da presidência da república. Esse acordo foi denominado de República do Café com Leite (Referência aos principais produtos produzidos por São Paulo (café) e Minas Gerais (leite).   Em geral, os presidentes eleitos eram do Partido Republicano Paulista (PRP) e do Partido Republicano Mineiro (PRM). Para que isso ocorresse, havia acordos e práticas de manipulação do processo eleitoral, e era facilitado pelo fato do voto ser aberto. </p>
                  </div>
								</div>
							</div>
            </div>
          </div>
        </div>
      </div>
    	<div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-7 wrap-about py-2 pr-md-4 ftco-animate">
    			<div class="services-2 d-flex">
            <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-diploma"></span></div>
						<div class="text">
							<h2>AS ELEIÇÕES NA PRIMEIRA REPÚBLICA</h2>
							<p>Na República Velha, o sistema eleitoral encontrava-se corrompido através da fraude eleitoral e pela manipulação dos votos pelos coronéis.  O  coronelismo tem suas raízes no II Império (1822-1889), quando latifundiários passaram a ocuparam postos na Guarda Nacional  criada com o objetivo de conter  as rebeliões populares. Que eclodiram em diversas províncias. Com a instituição do regime republicano a Guarda Nacional foi extinta, entretanto, o termo de coronel continuou sendo usado para se referir aos grandes proprietários de terras que controlavam determinadas regiões. <a data-toggle="collapse" href="#collapseEleicoes" role="button" aria-expanded="false" aria-controls="collapseEleicoes">Ler mais</a></p>
              <div class="collapse" id="collapseEleicoes">
                      <p>Durante a República Velha,  o voto era aberto, de tal modo que era possível saber em qual candidato o eleitor iria votar. Os coronéis enviavam os seus jagunços para os locais de votação para pressionar os seus eleitores. Caso contrariasse as orientações do coronel, o eleitor sofria retaliações, como: agressões físicas, perda do emprego, despejos de suas casas. Desta forma, os coronéis controlavam o voto popular, através do abuso de autoridade, compra de votos ou utilização da máquina pública. O de controle do voto popular através do coronel foi denominada de voto de cabresto.  Assim, cada coronel possuía um curral eleitoral, que era uma determinada área onde  encontrava-se  os indivíduos controlados por ele.</p> 
                      <p>Durante a República Velha, o voto era aberto, de tal modo que era possível saber em qual candidato o eleitor votava.</p> 
                      <p>Uma das mais significativas mudanças sociais que ocorreram na metade da década de 1910 foi a urbanização e o crescimento das indústrias.  A expansão da indústria fez surgir a burguesia industrial, a classe média e o operariado. No Sul e Sudeste do Brasil, essas transformações foram mais intensas, com o surgimento e desenvolvimento desses novos grupos e classes sociais, colocaram em perigo o domínio político exclusivo das oligarquias agrárias.</p>
                      <p>A partir da década de 1920, começaram a ocorrer na conjuntura nacional alguns fatores sociais e políticos que contribuíram para a derrocada da República Velha. O agravamento da crise econômica, a eclosão de revoltas e levantes militares, o crescimento das camadas sociais urbanas, além dos conflitos políticos devido à progressiva divisão das oligarquias dominantes formam o conjunto de fatores que provocaram  o enfraquecimento do sistema oligárquico. Neste processo a burguesia passou a reivindicar participação nas decisões governamentais e reformas das instituições políticas. E exigindo mudanças, de modo a eliminar a fraude, a corrupção e o coronelismo. Ao mesmo tempo, passou a pressionar por mudanças mais significativas na política econômica, reivindicando maiores investimentos no setor industrial e a extinção da política de valorização ao café.</p>
                      <p>Em 1929, a economia mundial sofre um forte abalo devido à crise provocada pela quebra da bolsa valores de Nova York. Uma das características mais marcantes da crise foi a sua amplidão, uma vez que a economia capitalista já vivenciava um alto grau de interdependência, arrastando consigo países que possuíam ligação com a economia norte-americana. O Brasil, era um país exclusivamente agroexportador e tinha na cafeicultura como principal atividade agrícola, sendo ela  responsável por 70% do total das exportações e os Estados Unidos o  principal mercado, adquirindo cerca de 80% das exportações brasileiras. Em razão da forte dependência da economia brasileira para com para com a economia norte-americana os efeitos da crise, foram drásticos para o Brasil. 
                      <p>Por esse motivo, a crise de 1929 foi um importante fator a contribuir para o enfraquecimento político das oligarquias cafeeiras deixando claro para as elites dominantes a inviabilidade e os limites do modelo de economia agroexportadora.</p>
                      <p>Na sucessão presidencial de 1930, ocorreu um impasse entre São Paulo e Minas Gerais sobre o candidato que disputaria o pleito. O presidente Washington Luis rompeu com a Política do Café com Leite ao apoiar a candidatura do paulista Júlio Prestes à presidência da república, contrariando o acordo que seria o de apoiar a candidatura do mineiro Antônio Carlos. Com essa atitude oligarquias mineiras, tendo a frente o Governador Antônio Carlos de Andrade, preterido por Prestes na indicação a concorrer à presidência da república passaram a apoiar oligarquias  dissidentes do Rio Grande do Sul e Paraíba,  formando um grupo político de oposição denominado Aliança Liberal.</p>
                      <p>Nas eleições de 30, à Aliança Liberal apresentou como candidato à presidência da república, o gaúcho Getúlio Vargas, tendo como seu vice, o paraibano João Pessoa. A candidatura oposicionista foi derrotada sendo eleito, o candidato Júlio Prestes. No dia 3 de Outubro de 1930, um grupo oposicionistas, insatisfeito com o resultado do pleito passaram a articular um golpe para derrubar o governo de Washington Luís e impedir a posse de Júlio Prestes,  tropas do exército e da marinha de diversas regiões do país se deslocam ao Rio de Janeiro, Diante de uma iminente guerra civil, as Forças Armadas (Exército e Marinha) deram um golpe de Estado depondo o presidente Washington Luiz. Uma junta militar foi formada e transmitiu o governo a Getúlio Vargas, líder máximo da Revolução. Vargas governou o Brasil de 1930 a 1945.</p>
                    </div>
									</div>
								</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    	<div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-7 wrap-about py-2 pr-md-4 ftco-animate" id='vargas'>	
					<div class="services-2 d-flex">
						<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-diploma"></span></div>
						<div class="text">
							<h2>A ERA VARGAS (1930 - 1945)</h2>
              <p> Governo provisório (1930-1934): O Governo Provisório iniciou-se em 1930, quando Getúlio Vargas foi nomeado presidente e estendeu-se até 1934, quando Vargas foi reeleito em eleição indireta, dando início ao Governo Constitucional. É nesse momento que, Vargas suspende a Constituição de 1891, iniciando um processo de centralização política, com a dissolução do Congresso Nacional e das Assembleias Legislativas estaduais e municipais e a substituição dos governadores de Estado por interventores nomeados pelo próprio Vargas. Neste novo  cenário são criados novos ministérios, o Ministério do Trabalho, Indústria e Comércio e o Ministério da Educação e Saúde. <a data-toggle="collapse" href="#collapseVargas" role="button" aria-expanded="false" aria-controls="collapseVargas">Ler mais</a></p>
              <div class="collapse" id="collapseVargas">
                        <p>Esse foi o período de reorganização do Estado nacional e de preparação para a criação de uma nova Constituição. Entretanto, o retardamento em convocar uma Assembleia Nacional Constituinte colaborou de forma decisiva para que a oligarquia e industriais paulistas a desencadeassem a Revolução Constitucionalista de 1932. Estado de São Paulo se mobilizou, mais de 300 mil voluntários se apresentaram para combater na revolução. Por outro lado, Getúlio, conseguiu apoio das tropas militares do Rio Grande do Sul, deixando São Paulo, isolado contando apenas com um pequeno apoio do Mato Grosso. Ambos os lados perderam muitas vidas, os paulistas, cercados por todos os lados, decidiram abandonar a revolta.</p>
                        <p>Em novembro de 1933, Vargas convocou uma assembleia constituinte, de certa forma, a convocação da constituinte e a promulgação da constituição de 1934, significou para a oligarquia paulista uma vitória. A carta promulgada estabeleceu o voto feminino e o voto secreto, uma  maior independência do poder judiciário e direitos trabalhistas. Criando a lei que estabeleceu o Salário Mínimo, jornada de trabalho de oito horas por dia, repouso semanal e férias remuneradas. Junto da promulgação da  Constituição, Vargas foi reeleito indiretamente para ser presidente para o período compreendido entre 1934 e 1938. Essa constituição foi a que vigorou por menos tempo entre todas as constituições vigorando por apenas três anos.</p> 
                        <p>Governo Constitucional (1934-1937): Período caracterizado pela existência de um regime de governo democrático liberal. Ao mesmo tempo ocorreu uma radicalização no cenário político nacional com o surgimento de duas agremiações políticas antagônicas, com a fundação em 1932 da Ação Integralista Brasileira (AIB), que tinha preceitos fascistas e era liderada por Plínio Salgado. Em 1935 foi criada a Aliança Nacional Libertadora (ANL), foi uma frente ampla de esquerda composta por setores de organizações de caráter anti-imperialista, anti fascista e  que contou com a participação de diversos setores de centro esquerda incluindo o Partido Comunista Brasileiro ,Luiz Carlos Prestes era o presidente de honra do movimento, uma vez que na época da sua criação encontrava-se exilado na URSS.</p>
                        <p>Em 5 de Julho de 1935, quando estava sendo celebrada os levantes Tenentistas, Luís Carlos Prestes que já havia retornado clandestinamente ao Brasil. lançou um manifesto em apoio à ANL, ao qual incentivava uma revolução contra o governo de Vargas.Aproveitando-se a grande repercussão do manifesto, Getúlio, com base na recém promulgada Lei de Segurança Nacional, determinou o fechamento da organização. Com a decretação da  ilegalidade da ANL cresceu em seus membros a disposcição para deflagração de um levante armado para depor o governo e que instaurar um governo nacional-revolucionário. A ação foi planejada nos quartéis e os militares deram início às rebeliões em novembro de 1935 em Natal, Rio Grande do Norte  estourou um levante militar em nome da ANL, onde os revolucionários chegaram a tomar o poder durante três dias. Após, se alastrou para o Recife e Rio de Janeiro, entretanto como o movimento ocorreu de forma desarticulada, o governo federal não teve muitas dificuldades para debelar o movimento.</p> 
                        <p>Em 1937 quando o mandato de Getúlio estava prestes a finalizar com a realização de  eleições, o governo anuncia a descoberta de um novo plano comunista para a tomada do poder (o Plano Cohen), e sob o pretexto da necessidade de combate a este novo plano comunista o Congresso Nacional foi fechado, bem como as assembleias estaduais e câmaras municipais. O Poder Executivo passou a ter o controle efetivo sobre as demais instâncias de poder. </p>
                        <p> Estado Novo (1937-1945): Com apoio do exército, Getúlio utiliza de falsa ameaça comunista para fechar as casas legislativas e intervir nos executivos estaduais nomeando interventores para  governar os estados. É desse modo, que, com o golpe de estado, apoio popular que ele se manterá no poder por mais oito anos, dando início ao governo ditatorial conhecido como Estado Novo.</p>  
                        <p>Pode-se dizer que essa é uma ditadura personalista e quer dizer que a legitimidade do seu governo, é por meio da personalidade Getúlio Vargas, a pessoa em si, uma vez que todos os partidos políticos estavam na ilegalidade e no caso, ele consegue a legitimação da sua figura por meio da criação do Departamento de Imprensa e Propaganda (DIP), encarregado da censura e da propaganda e promoção do regime junto à população. O apelo direto às massas era uma marca da demagogia populista e Vargas soube tirar proveito máximo dessa estratégia. Estimulando o sentimento nacionalista em torno de uma ameaça comunista conseguiu um forte apoio popular ao seu governo.</p>
                        <p>No tocante à economia, Vargas promoveu a industrialização brasileira,  O modelo político econômico implantado foi o nacional desenvolvimentista, dessa forma investiu-se fortemente na indústria de base nacional, implantando órgãos de administração pública como o Conselho Nacional do Petróleo (CNP), Instituto Brasileiro de Geografia e Estatística (IBGE) e o Departamento Administrativo do Serviço Público (DASP). E ao mesmo tempo, criando empresas como: Companhia Siderúrgica Nacional (1941); Companhia Vale do Rio Doce (1942); Fábrica Nacional de Motores (1942); Companhia Nacional de Álcalis (1943); Companhia Hidrelétrica do São Francisco (1945). Essa é a primeira vez que vemos no Brasil a industrialização como uma política de Estado e para esse projeto dar certo era necessário Vargas mediar os conflitos entre os trabalhadores e empresários, e esse vai ser um dos motivos para a criação da Consolidação das Leis de Trabalho (CLT), a CLT unificou a legislação trabalhista, além de introduzir novos direitos trabalhistas e da Justiça do Trabalho. A partir daí ele passa a ser conhecido como o Pai dos pobres fortalecendo a imagem de um presidente paternalista, atento às necessidades das camadas pobres da sociedade brasileira. No entanto, com a entrada do Brasil na Segunda Guerra mundial, ao lado dos Estados Unidos, e a vitória dos Aliados contra as ditaduras Nazista e Fascista na Europa ganha força entre, a opinião pública, a ideia de democracia. Intelectuais, artistas, profissionais liberais e grande parcela do povo queriam a volta da democracia ao país. Era grande a contradição, os brasileiros tinham lutando na guerra contra ditaduras fascistas na Europa, entretanto no Brasil existia uma ditadura.</p>
                        <p>Devido a pressão de diversos setores da sociedade, que vinham até mesmo de setores militares, Vargas promulga um Ato Adicional permitindo anistia  política e ao mesmo tempo, criando o Código Eleitoral, no qual regulamenta a criação de partidos políticos para participarem nas eleições que seriam realizadas no final do ano de 1945. A lei eleitoral de maio de 1945, elaborada sob a supervisão do ministro da Justiça Agamenon Magalhães, determinou a constituição de partidos de caráter nacional, o que rompia com a tradição regionalista da política partidária brasileira.</p>
                        <p>Os partidos políticos que surgiram neste momento, serão os principais partidos atuantes da década de 1940 à de 1960.  Os principais partidos foram:a União Democrática Nacional (UDN), o Partido Social Democrático (PSD) e o Partido Trabalhista Brasileiro (PTB) e o Partido Comunista do Brasil (PCB). Neste momento surgiu um movimento de apoio a Getúlio, que foi denominado de "Queremismo" com os lemas: "Queremos Getúlio" e "Constituinte com Getúlio", que defendia a permanência de Vargas na presidência da república até a promulgação da nova constituição O movimento "queremista", alertou os chefes militares para a possibilidade de Vargas vir a boicotar as eleições, com objetivo de se manter no cargo. Devido a isso, em 29 de outubro de 1945, um golpe liderado pelos generais Góes Monteiro e Eurico Gaspar Dutra depuseram Getúlio Vargas da presidência da República.</p>
                      </div>
									</div>
								</div>
							</div>
            </div>
          </div>
        </div>
      </div>
    	<div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-7 wrap-about py-2 pr-md-4 ftco-animate" id='populista'>	
					<div class="services-2 d-flex">
						<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-diploma"></span></div>
						<div class="text">
							<h2> REPÚBLICA POPULISTA (1945-1964)</h2>
                <p>República Populista, é um período da história brasileira iniciado em 1946, com a posse na presidência da república de Eurico Gaspar Dutra, e finalizado em 1964, a derrubada do presidente João Goulart através do Golpe Civil-Militar Historicamente o populismo está ligado a fenômenos políticos da América Latina e encontra-se atrelado ao processo de expansão industrialização e urbanização que colabora para o crescimento da burguesia industrial, da classe média e do proletariado. <a data-toggle="collapse" href="#collapsePopulista" role="button" aria-expanded="false" aria-controls="collapsePopulista">Ler mais</a></p>
                <div class="collapse" id="collapsePopulista">
                  <p>No caso específico do Brasil processo de industrialização se inicia entre os anos vinte e trinta o que posiciona o populismo em foco exatamente neste período. O populismo se caracteriza pela a ausência dos partidos políticos e de programas de governo definidos, contribuindo para que as lideranças políticas se destaquem pelo seu carisma, assistencialismo e demagogia. Permitindo uma relação direta e não institucionalizada do líder com as massas que passam a considerá-lo como um líder inquestionável. </p> 
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
                  <p>Na madrugada do dia 31 de março de 1964, , o movimento militar eclodiu em Belo Horizonte e espalhou-se rapidamente por todo o Brasil, praticamente sem reação da esquerda. Alguns políticos e líderes de esquerda foram presos,  um grupo significativo de opositores ao golpe preferiu abandonar o país. Goulart exilou-se no Uruguai, onde permaneceu até o seu falecimento em 1976.  Era o início do Regime Civil-Militar, que perdurou até o ano de 1985.</p>
                </div>
              </div>
          </div>
        </div>
      </div>
		  <div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-7 wrap-about py-2 pr-md-4 ftco-animate" id='ditadura'>	
					<div class="services-2 d-flex">
						<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-diploma"></span></div>
						<div class="text" >
							<h2>DITADURA MILITAR(1964-1985)</h2>
              <p>É designado de Ditadura Militar, regime implantado no Brasil, após a forças armadas, sob o comando do exército, terem em 1 de abril de 1964 derrubado, através de um golpe militar, o então presidente democraticamente eleito João Goulart, durante o regime militar, ocorreu um fortalecimento do poder Executivo, caracterizando um regime de exceção, uma vez que o Executivo passou a legislar. Ao mesmo tempo, o Alto Comando das Forças Armadas controlava a sucessão  presidencial, indicando um candidato militar que era confirmado pelo Congresso Nacional. <a data-toggle="collapse" href="#collapseMilitar" role="button" aria-expanded="false" aria-controls="collapseMilitar">ler mais</a></p>
              <div class="collapse" id="collapseMilitar">
                      <p>O primeiro militar a assumir a presidência foi Marechal Humberto de Alencar Castello Branco (1964 a 1967), Castello Branco foi eleito presidente de forma indireta, e seu governo deu início a implantação das bases da repressão, neste sentido, são decretados diversos atos institucionais. Foi através da decretação de diversos atos institucionais, conhecidos com AI, que o alto comando acumulou poderes no transcorrer da implantação do regime. O Ato Institucional nº 1, AI-1 era referente a cassação de mandatos e a suspensão de direitos políticos, a partir da decretação do AI-1 iniciou-se uma série de prisões daqueles que eram considerados inimigos do regime.</p> 
                      <p>Com a vitória da oposição nas eleições em cinco estados do país, principalmente em Minas Gerais e na Guanabara, o regime endureceu mais ainda e decretou o Ato Institucional nº 2, AI-2,  tornou indireta a eleição para presidente da República dissolveu os partidos políticos existentes e estabeleceu o bipartidarismo. Surgindo a Aliança Renovadora Nacional (ARENA), partido de situação e o Movimento Democrático Brasileiro (MDB) de oposição. Dentro do processo de desmobilização do cenário político nacional, o governo Castelo Branco baixou o Ato Institucional nº3, o AI-3 decretava que as eleições para Governadores seriam realizadas pela forma indiretas através das Assembléias Estaduais.</p>  
                      <p>Em 1967, Artur Costa e Silva assume à presidência no momento em que ocorre à intensificação das manifestações contra à ditadura militar. O seu governo pelo crescimento da repressão os opositores políticos ao regime, pelo crescimento da livre expressão. As tensões políticas aumentaram e fica claro que, à ditadura militar não seria algo temporário. As manifestações nas ruas ficam mais aguerridos, os estudantes saem às ruas protestando contra o regime, os confrontos entre os estudantes e as forças policiais crescem e culminam com o assassinato do estudante Edson Luís, no restaurante calabouço na cidade do Rio de Janeiro.</p>
                      <p>O projeto governamental de transformar as universidades em fundações provocou uma forte reação no movimento que ficou conhecida como a Passeata dos Cem Mil nas ruas do centro do Rio de Janeiro. A Passeata dos Cem Mil marcou o ápice da reação da sociedade contra o regime militar.</p> 
                      <p>O crescimento das manifestações de oposição ao regime militar durante o governo Costa e Silva, contribuiu para que os militares tomassem medidas para o endurecimento do regime e uma das mais marcantes do período foi a promulgação do Ato Institucional nº5, o AI-5. Dentre outras atribuições o decreto passou a permitir a presidência da república; cassar os mandatos legislativos, executivos, federais, estaduais e municipais e suspender os direitos políticos dos cidadãos, demitir, remover, aposentar funcionários civis e militares. No tocante aos direitos do cidadão, o AI-5 feria as garantias civis mais elementares como a retirada do direito a habeas corpus A partir do AI-5 o país viveria uma censura aos meios de comunicação. Em razão do agravamento do seu estado de saúde Costa e Silva afastou-se da presidência da república e o executivo passou a ser exercido por uma Junta Militar. Em agosto de 1969, o general Costa e Silva morreu em decorrência de um derrame cerebral.</p>
                      <p>Entretanto, quem segue à risca o Ato Institucional n°5 foi o presidente Emílio Garrastazu Médici que assumiu à presidência da república em 1969. Foi nesse período que o país vivenciou à fase mais repressiva da ditadura, à censura aos meios de comunicação e à utilização de tortura de prisioneiros políticos tornaram-se corriqueiras. Ao mesmo tempo que opção pela utilização da luta armada para combater o regime se acendeu nesse período. Mas foi também foi o momento que trouxe mais legitimidade para o regime. Uma vez que foi no Governo Médici, que o Brasil viveu o chamado “milagre econômico”. O principal ideólogo do “milagre” foi o economista Antônio Delfim Netto, ministro da Fazenda desde o Governo Costa e Silva.</p> 
                      <p>O denominado “milagre econômico” foi um período da economia brasileira marcado pela realização de grandes obras públicas. Tais como, rodovia Transamazônica, a ponte Rio-Niterói e Usina Hidrelétrica de Itaipu. Ao mesmo tempo, ocorreu a expansão do setor industrial, proporcionado através da expansão do crédito e da manutenção de baixos índices salariais, através de uma forte repressão ao movimento sindical.  incitou uma explosão consumista entre os setores médios da população. Mas a euforia de crescimento econômico era custeada através da aquisição de vultosos empréstimos obtidos no exterior.  A despeito do crescimento da economia, uma parte significativa da população do país não sentiu isso no bolso. Apesar da grande empregabilidade, à desigualdade social não parou de crescer.</p> 
                      <p>O governo Médici também foi marcado pela utilização maciça dos meios de comunicação com o objetivo de promover o regime. Com a utilização de slogans como Slogans como “Pra Frente Brasil!”, “Ninguém Segura este país” e “Brasil: Ame-o ou deixe-o  Neste, tentou-se divulgar uma concepção de que o Brasil estava em construção com o objetivo de chegar ao primeiro mundo. A conquista do Tricampeonato de futebol do Brasil na copa do mundo do México, em 1970, contribuiu para estimular a retórica ufanista e a propaganda do regime. Entretanto, com o surgimento da primeira crise petrolífera internacional, em 1973 o país foi atingido e seu crescimento econômico foi afetado  causando instabilidade no governo Médici. O regime militar, de forma geral, começou a perder apoio popular.</p> 
                      <p>Com o término do mandato de Médici, assume a presidência da república o Gen Ernesto Geisel (1974-1979). Neste momento, a crise do petróleo e a recessão mundial interferem fortemente na economia brasileira, crescimento da com a insatisfação popular. Como Geisel foi iniciado o processo de transição para a democracia, por ele mesmo designado que deveria ocorrer de forma “lenta, gradual e segura”. A implantação do processo de abertura política foi necessária devido o agravamento da crise econômica que gerou aumento da inflação e da dívida interna. Contribuindo para o crescimento descontentamento da população para com o regime. Na implantação do processo de abertura política lenta e gradual, o Congresso Nacional foi fechado, o sistema judiciário, assim como a legislação, passaram por mudanças.  Dentre algumas mudanças que Ernesto fez, temos a dos chamados senadores biônicos, que nada mais foi que, um terço dos senadores teriam indicação para presidência da república, assim, os militares garantiam uma base forte para apoiá-los e serem a maioria dentro do senado brasileiro, além do mandato presidencial que se estendeu de 5 para 6 anos. No ano seguinte, teve de enfrentar a maior greve ocorrida durante o regime, a greve dos metalúrgicos do ABC paulista, marcou a retomada do movimento sindical independente no país e ao mesmo tempo lançou para o cenário nacional a figura do líder metalúrgico Luiz Inácio da Silva.</p>
                      <p>Em 1978, Geisel decretou o fim do AI-5, maioria governista no Congresso Nacional promulgou a Emenda Constitucional nº 11, revogando os atos institucionais da ditadura. O habeas corpus foi restaurado. No mesmo ano, foi eleito presidente pelo Colégio Eleitoral Gen. João Baptista Figueiredo, que se deparou com uma difícil tarefa a cumprir, garantir a continuidade do processo de abertura política iniciado por Geisel. Figueiredo ao tomar posse, afirmou que faria do Brasil uma democracia. Figueiredo. Contudo, setores militares de extrema direita começaram a pressioná-lo para interromper o processo de abertura polícia. Ao mesmo tempo, se deparou com uma situação delicada econômica, com o crescimento da inflação corroendo os salários do trabalhadores e com isso impulsionando o crescimento da oposição ao regime. A principal ação do seu governo foi a  promulgação da Lei de anistia em 1979, após uma ampla mobilização social, a lei concedeu à anistia à todos que cometeram crimes políticos ou eleitorais e àqueles que sofreram restrições em seus direitos políticos. A lei de anistia beneficiou, além das vítimas do golpe militar, os responsáveis por torturas, mortes e desaparecimentos de opositores do regime.</p> 
                      <p>Durante o governo de Figueiredo, mais um passo foi dado no processo de abertura política, com a abertura política, com a Nacional (ARENA) deixam de existir.  Dentre  os partidos criados nesse período foram,  o Partido dos Trabalhadores (PT), o Partido Trabalhista Brasileiro (PTB), o Partido Democrático Trabalhista (PDT),  Partido Democrático Social (PDS), e o Partido Movimento Democrático Brasileiro (PMDB). Apesar disso, setores de extrema direita das forças armadas  não concordavam com a medidas tomadas para permitir o retorno da democracia, e tentado interromper o processo passaram a cometer atentados terroristas a bomba realizados em bancas de jornais,sedes de jornais da oposição e igrejas que apoiavam a oposição ao regime.</p>
                      <p>Os dois principais atentados ligados à essa corrente radical foram à carta bomba, destinada à Ordem do Advogados do Brasil (OAB), seção do Rio de Janeiro, que matou à secretaria da instituição em 27 de Agosto de 1980 e o atentado que ocorreu no Rio de Janeiro em 30 de Abril de 1981, no Riocentro,  Centro de Convenções do Rio, onde se realizava uma show musical em homenagem ao dia do trabalhador. Dois integrantes do exército pretendiam explodir duas bombas no local. Uma das bombas chegou a atingir a central de energia, mas a outra explodiu dentro do carro em que estavam, no colo de um dos militares. Um sargento Guilherme Pereira do Rosário morreu e o outro oficial Guilherme Pereira do Rosário,  ficou gravemente ferido</p>
                    </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>

		<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_4.jpg);" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section heading-section-black ftco-animate">
            <h2 class="mb-4"><span>20 Years of</span> Experience</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        </div>	
    		<div class="row d-md-flex align-items-center justify-content-center">
    			<div class="col-lg-10">
    				<div class="row d-md-flex align-items-center">
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="18">0</strong>
		                <span>Certified Teachers</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="351">0</strong>
		                <span>Successful Kids</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="564">0</strong>
		                <span>Happy Parents</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="300">0</strong>
		                <span>Awards Won</span>
		              </div>
		            </div>
		          </div>
	          </div>
          </div>
        </div>
    	</div>
    </section>



    </section>
    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2" id='presidentes'>
          <div class="col-md-8 text-center heading-section ftco-animate" id='presidentes' >
          	<span class="subheading">Presidentes do Brasil</span>
            <h2 class="mb-4"><span>NOVA REPUBLICA</span> (1985 - ATUALMENTE)</h2>
            <p>A nova República tem início após a ditadura militar (1964-1985) e se estende até os dias de hoje.</p>
          </div>
        </div>
        <div class="text-justify">
          <div class="row ftco-animate justify-content-center">
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url(http://g1.globo.com/Noticias/Politica/foto/0,,17413015-FMMP,00.jpg)">
                  </div>
                  <div class="text ml-2 bg-light">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p> José Sarney(1985 - 1989)</p>
                    <p class="name">Assumiu interinamente a presidência, enquanto se aguardava a recuperação da saúde de Tancredo. Entretanto, após a realização de sete cirurgias, Neves faleceu, em 21 de abril de 1985.  Com a morte de Tancredo, Sarney assumiu a presidência de forma definitiva, e recebeu como herança, uma dívida externa de 100 bilhões de dólares e uma inflação de 230%. Sarney jurou honrar os compromissos.</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url(https://upload.wikimedia.org/wikipedia/commons/thumb/b/bf/Fernando_Collor_1992_B%26W.jpg/200px-Fernando_Collor_1992_B%26W.jpg)">
                  </div>
                  <div class="text ml-2 bg-light">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Fernando Collor de Mello (1990 - 1992) </p>
                    <p class="name">Fernando Collor de Mello assumiu a Presidência da República em 15 de março de 1990, Collor foi o primeiro presidente eleito pelo povo desde a eleição de Jânio Quadros (1960) que venceu a última eleição direta para presidente antes da implantação do Regime Militar.</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url(https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/Itamar_Augusto_Cautiero_Franco.gif/200px-Itamar_Augusto_Cautiero_Franco.gif)">
                  </div>
                  <div class="text ml-2 bg-light">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p> Itamar Franco (1993 - 1994) </p>
                    <p class="name">Itamar Augusto Cautiero Franco assume a presidência da República em outubro de 1992, com um amplo apoio partidário. O Brasil vivia um período conturbado, recessão prolongada, altas taxas de inflação e desemprego. Em meio a toda essa turbulência a população brasileira se encontravam em uma situação de descrença geral nas instituições públicas, após o impeachment de Collor acusado de corrupção. Neste sentido, Itamar Franco busca formar uma coalizão partidária como suporte para superar da crise política instalada no país. </p>

                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url(https://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Fernando_Henrique_Cardoso_%281999%29.jpg/200px-Fernando_Henrique_Cardoso_%281999%29.jpg)">
                  </div>
                  <div class="text ml-2 bg-light">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Fernando Henrique Cardoso (1995 - 2002)</p>
                    <p class="name">Fernando Henrique Cardoso foi presidente por dois mandatos consecutivos (de 1995 a 1998 e de 1999 a 2003). Ao longo do seu primeiro mandato presidencial, a economia brasileira se manteve estável, em consequência do controle da inflação conseguido através do Plano Real. O primeiro mandato de Fernando Henrique foi marcado por privatizações como das companhias Companhia Vale do Rio Doce, a Empresa Brasileira de Telecomunicações (Embratel), e da Companhia Siderúrgica Nacional (CSN), pela entrada de capital estrangeiro no país e pela e redução os direitos trabalhistas através da flexibilização das legislações.</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url(https://upload.wikimedia.org/wikipedia/commons/thumb/f/f4/Lula_-_foto_oficial_-_05_jan_2007.jpg/200px-Lula_-_foto_oficial_-_05_jan_2007.jpg)">
                  </div>
                  <div class="text ml-2 bg-light">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p> Luiz Inácio Lula da Silva (2003 - 2010) </p>
                    <p class="name">Luiz Inácio Lula da Silva  assumiu à presidência, em 1° de janeiro de 2003. E governou o país durante dois mandatos consecutivos entre  os anos de 2003 a 2006, e entre os anos de 2007 a 2011.O seu governo teve como principais marcas a manutenção da estabilidade econômica, a retomada do crescimento do País e a redução da pobreza e da desigualdade social. No plano econômico, Lula deu continuidade a diversas posturas anteriormente adotadas no governo FHC, a escolha de Henrique Meirelles filiado ao PSDB, partido de oposição ao governo para ficar à frente ao Banco Central.</p>
                    </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url(https://upload.wikimedia.org/wikipedia/commons/thumb/8/81/Dilma_Rousseff_-_foto_oficial_2011-01-09.jpg/200px-Dilma_Rousseff_-_foto_oficial_2011-01-09.jpg)">
                  </div>
                  <div class="text ml-2 bg-light">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p> Dilma Rousseff (2011 - 2016) </p>
                    <p class="name">Dilma Vana Rousseff, foi a primeira mulher a ocupar a presidência da república. Ao  tomar posse, Dilma manteve as propostas do Estado do Bem-Estar Social implementadas por Lula, c como “Bolsa Família” e “Minha Casa, minha vida”. No plano econômico externo, Dilma assumiu com uma forte recessão na economia mundial, que atingiu a economia nacional. Tentando reverter essa crise, aumentou os investimentos na infraestrutura do país através do Programa de Aceleração do Crescimento 2 (PAC 2). foram mantidos os programas de assistência social. </p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url(https://upload.wikimedia.org/wikipedia/commons/thumb/2/26/Michel_Temer_%28foto_oficial%29.jpg/200px-Michel_Temer_%28foto_oficial%29.jpg)">
                  </div>
                  <div class="text ml-2 bg-light">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p> Michel Temmer (2016 - 2018) </p>
                    <p class="name">O governo de Michel Miguel Elias Temer Lulia, teve início no dia 12 de maio de 2016, quando ele assumiu interinamente o cargo de presidente da República Brasileira, após o afastamento temporário da presidente Dilma, em consequência da aceitação do processo de impeachment pelo Senado Federal. Concluído o processo, no dia 31 de agosto, Temer assumiu o cargo de forma definitiva, que ele ocupou até o dia 1º de janeiro de 2019. Ao assumir o governo o presidente Temer, o país estava vivenciando  uma  com uma grave crise econômica, ao mesmo tempo, crescia insatisfação popular devido a ampliação e das intensas denúncias de corrupção envolvendo todos os setores da política. </p>
                    </div>
                </div>
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
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
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
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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

  <script src="src/js/owl.animate.js"></script>
  <script src="src/js/owl.autoheight.js"></script>
  <script src="src/js/owl.autoplay.js"></script>
  <script src="src/js/owl.autorefresh.js"></script>
  <script src="src/js/owl.carousel.js"></script>
  <script src="src/js/owl.hash.js"></script>
  <script src="src/js/owl.lazyload.js"></script>
  <script src="src/js/owl.navigation.js"></script>
  <script src="src/js/owl.support.js"></script>
  <script src="src/js/owl.support.modernizr.js"></script>
  <script src="src/js/owl.video.js"></script>

  <script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
  </script>
  </body>
</html>
              