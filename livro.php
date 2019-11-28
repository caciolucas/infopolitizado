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
                <li class="nav-item"><a href="quemsomos.php" class="nav-link">QUEM SOMOS?</a></li>
                
	  
               
            <li class="nav-item"><a href="quizes.php" class="nav-link">QUIZ</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    
    
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('https://midiastm.gazetaonline.com.br/_midias/jpg/2019/05/10/13capa_c2-6137601.jpg');">
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
                 	<h2 class="mb-4">Livros que você precisa ler antes de discutir sobre política</h2>
                 	<div class="text-justify">
						<p>Se você quer discutir política, saiba que o conhecimento sempre é bem vindo para que possa se posicionar de forma real e não apenas reproduzir o que não tem certeza só para fazer parte de algum movimento.</p>
                        <p>Pensando nisso - e livre de qualquer posicionamento político - o INFOPOLITIZADO! <b>lista 14 livros que você precisa ler antes de discutir e pensar sobre política e democracia hoje.</b> </p>
						<div class="row mt-5">
						
					
						
						<h4 class="mb-4">CASTELLO: A MARCHA PARA A DITADURA - LIRA NETO</h4>
						<div class="text-justify">
						<p>Figura ambígua, descrita por uns como o mais intelectual dos militares e por outros como um truculento dissimulado, Castello Branco, o primeiro presidente do regime militar, governou o Brasil a partir de 1964. Lira Neto busca fazer um retrato do político, com base em consulta à vasta documentação e entrevistas obtidas junto a alguns dos principais personagens ainda vivos.</p>
				            	<center>
				            	    <p><a href="https://www.amazon.com.br/Castello-Marcha-Para-Ditadura-Lira/dp/857244257X" target="_blank" rel="noopener"><img class="aligncenter wp-image-29873 size-medium" title="CASTELLO: A marcha para a ditadura, de Lira Neto" src="https://images-na.ssl-images-amazon.com/images/I/51ejnJUzYuL._SX346_BO1,204,203,200_.jpg" alt="CASTELLO: A marcha para a ditadura , de Lira Neto" width="200" height="300" sizes="(max-width: 200px) 100vw, 200px"></a></p>
				            	</center>
					
					
						<h4 class="mb-4">A LANTERNA NA POPA - ROBERTO OLIVEIRA CAMPOS</h4>
						
						<div class="text-justify" >
						<p>Pelas páginas desfilam muitas das maiores expressões da política e do poder no Brasil e no mundo do século XX. De Getúlio Vargas a Castello Branco, o autor esteve presente como formulador e testemunha de quase tudo de relevante que se fez no país. Aqui vemos Roberto Campos em Bretton Woods, assistindo ao nascimento do Banco Mundial e aos embates teóricos entre Lord Keynes e Eugênio Gudin; em Washington, durante a II Guerra Mundial e início da Guerra Fria, e, anos mais tarde, por ocasião da crise dos mísseis soviéticos em Cuba; na companhia de atores e atrizes no esplendor de Hollywood; confidente e interlocutor de líderes como Adenauer, De Gaulle, kennedy, Richard Nixon e Margaret Thatcher; íntimo de Nelson e David Rockfeller, de Dean Acheson e Henry Kissinger; se inquietando com as mazelas e desventuras da política e da diplomacia, e, no plano interno, convivendo com os presidentes Juscelino Kubitschek e João Goulart, e ainda com San Tiago Dantas, Horácio Lafer, e outros. De todos Roberto Campos dá a sua visão, apontando afinidades e dessemelhanças com o seu pensamento, tudo dito com coragem e forte sentido ético.</p>
				            		<center>
				            	    <p><a href="https://www.amazon.com.br/Lanterna-Popa-Volumes-Roberto-Campos/dp/8574750379/ref=sr_1_3?adgrpid=60163535472&gclid=Cj0KCQiAiNnuBRD3ARIsAM8KmlvoaUXfrSFnMPg4sP2baTyMQ53n7yCaHOTuTwFrcOQ4IgNEOWpzDL4aAk3PEALw_wcB&hvadid=326936454185&hvdev=c&hvlocphy=1031884&hvnetw=g&hvpos=1t1&hvqmt=b&hvrand=10566288930210440673&hvtargid=kwd-295245166499&hydadcr=5628_10696897&keywords=a+lanterna+na+popa&qid=1574379425&sr=8-3" target="_blank" rel="noopener"><img class="aligncenter wp-image-29873 size-medium" title="A Lanterna Na Popa, de  Roberto Oliveira Campos" src="https://www.guiadasemana.com.br/contentFiles/system/pictures/2016/3/156105/cropped/46024438.jpg" alt="A Lanterna Na Popa, de  Roberto Oliveira Campos" width="200" height="300" sizes="(max-width: 200px) 100vw, 200px"></a></p>
				            	</center>
					
					
						    
						<h4 class="mb-4">A CONSTRUÇÃO POLÍTICA DO BRASIL - LUÍS CARLOS BRESSER</h4>
						<div class="text-justify">
						<p>As grandes interpretações do Brasil, de Gilberto Freyre a Celso Furtado, não alcançaram os períodos mais recentes de nossa história. Em A construção política do Brasil, Luiz Carlos Bresser-Pereira elaborou uma análise ampla e coerente do desenvolvimento brasileiro desde a Independência até os governos de FHC, Lula e Dilma. Baseado em dois temas fundamentais - a estruturação das coalizões de classe que se sucederam no poder e a disputa entre o liberalismo econômico e o desenvolvimentismo -, este ensaio constitui ao mesmo tempo uma síntese da produção intelectual do autor.</p>
					        	<center>
				            	    <p><a href="https://www.amazon.com.br/constru%C3%A7%C3%A3o-pol%C3%ADtica-Brasil-Sociedade-Independ%C3%AAncia/dp/8573266457" target="_blank" rel="noopener"><img class="aligncenter wp-image-29873 size-medium" title="A Construção Política Do Brasil, de Luís Carlos Bresser" src="https://s3-sa-east-1.amazonaws.com/fl.mercadoeditorial.org/uploads/book/first_cover/800_9788573266450.jpg" alt="A Construção Política Do Brasil, de Luís Carlos Bresser" width="200" height="300" sizes="(max-width: 200px) 100vw, 200px"></a></p>
				            	</center>
				            	
						<div class="row mt-5">
						    
						<h4 class="mb-4">A DITADURA ENVERGONHADA  - ELIO GASPARI </h4>
						<div class="text-justify">
						<p>Nos primeiros anos após o golpe de 1964, o governo militar ainda relutava em se assumir como uma ditadura, daí o título A ditadura envergonhada. Mas com a edição do AI-5, no final de 1968, que suspendeu direitos constitucionais, ela se revela. Em A ditadura escancarada, são reconstituídos os momentos mais tenebrosos do regime, como a prática da tortura contra os opositores do regime e a violência empregada contra os guerrilheiros do Araguaia, um dos últimos núcleos de resistência política.</p>
				            	<center>
				            	    <p><a href="https://www.amazon.com.br/ditadura-envergonhada-Cole%C3%A7%C3%A3o-Ditadura-Livro-ebook/dp/B00GN9XFZE" target="_blank" rel="noopener"><img class="aligncenter wp-image-29873 size-medium" title="A Ditadura Envergonhada, de  Elio Gaspari" src="https://secureservercdn.net/184.168.47.225/fa1.994.myftpupload.com/wp-content/uploads/2018/04/a-ditadura-289x400.jpg" alt="A Ditadura Envergonhada, de  Elio Gaspari" width="200" height="300" sizes="(max-width: 200px) 100vw, 200px"></a></p>
				            	</center>
						<h4 class="mb-4">REPRESENTANTES DE QUEM? - JAIRO NICOLAU</h4>
						<div class="text-justify">
						<p>O sociólogo Jairo Nicolau, estudioso do sistema eleitoral brasileiro há mais de 20 anos, examina em Representantes de Quem? um dos problemas mencionados no início desta matéria: o da representatividade do povo nas instâncias de poder. Com texto claro e acessível, Nicolau responde a perguntas essenciais para entender realidade eleitoral do Brasil, como por que alguns deputados são eleitos mesmo recebendo menos votos que aqueles que não o foram; por que coligações produzem resultados difíceis de serem compreendidos e adulteram votos; e por que a reforma política, embora necessária, nunca aconteceu; entre outros questionamentos importantes. O autor também sugere soluções de como a legislação eleitoral e partidária do País pode ser aperfeiçoada.</p>
				            	<center>
				            	    <p><a href="https://www.amazon.com.br/Representantes-quem-caminhos-C%C3%A2mara-Deputados/dp/8537816124" target="_blank" rel="noopener"><img class="aligncenter wp-image-29873 size-medium" title="Representantes De Quem?, de Jairo Nicolau" src="https://img.huffingtonpost.com/asset/5c33b1af2200003309df230e.jpeg?ops=scalefit_630_noupscale" alt="Representantes De Quem?, de Jairo Nicolau" width="200" height="300" sizes="(max-width: 200px) 100vw, 200px"></a></p>
				            	</center>
					
						<h4 class="mb-4">A HISTÓRIA DO VOTO - JAIRO NICOLAU</h4>
						<div class="text-justify">
						<p>Poucos países têm uma história eleitoral tão rica quanto a do Brasil, que hoje representa o terceiro maior eleitorado do planeta, perdendo apenas para Índia e Estados Unidos. Para quem ainda tem dúvida da importância das eleições na estrutura política brasileira, este é um livro esclarecedor,nele o escritor Jairo Nicolau,apresenta de forma detalhada a evolução do processo eleitoral e o processo histórico para que o voto se tornasse igualitário no Brasil.</p>
							    <center>
				            	    <p><a href="https://www.amazon.com.br/Hist%C3%B3ria-voto-Brasil-Descobrindo-ebook/dp/B008OXJN4E" target="_blank" rel="noopener"><img class="aligncenter wp-image-29873 size-medium" title="A História Do Voto ,de Jairo Nicolau" src="https://img.docero.com.br/photo/l/cccc.png" alt="A História Do Voto ,de Jairo Nicolau" width="200" height="300" sizes="(max-width: 200px) 100vw, 200px"></a></p>
				            	</center>
						<div class="row mt-5">
					
						<h4 class="mb-4">ELEIÇÕES NO BRASIL: DO IMPÉRIO AOS DIAS ATUAIS - JAIRO NICOLAU</h4>
						<div class="text-justify">
						<p>Os eleitores brasileiros estão acostumados a escolher os seus representantes, a manusear urnas eletrônicas e saber o nome do político eleito minutos depois que o último voto foi computado. Mas a realidade já foi muito diferente ao longo dos quase duzentos anos de vida eleitoral no Brasil. O cientista social Jairo Nicolau percorre essa trajetória, do Império aos dias atuais, passando pela Primeira República, o Estado Novo e o regime militar. Em cada período abordado, perguntas orientam a leitura: Que cargos eram disputados? Quem podia votar? Havia fraudes? Cada uma delas vai sendo respondida, montando um panorama completo da história do voto no Brasil, dando conta, inclusive, da volumosa legislação eleitoral. Um raro retrato da evolução do processo eleitoral no país que tem o quarto maior eleitorado do planeta - perdendo apenas para a Índia, Estados Unidos e Indonésia.</p>
						        <center>
				            	    <p><a href="https://www.amazon.com.br/Elei%C3%A7%C3%B5es-Brasil-Imp%C3%A9rio-dias-atuais/dp/8537808849/ref=pd_sbs_14_img_1/144-0238860-8518840?_encoding=UTF8&pd_rd_i=8537808849&pd_rd_r=682d7b96-8d17-456f-9529-f1949aacc7d1&pd_rd_w=SuXrO&pd_rd_wg=mTH33&pf_rd_p=adb10074-dc46-4d48-9abd-ebbbd99776aa&pf_rd_r=XHRXCVJS1HCQ3RXZ30ZP&psc=1&refRID=XHRXCVJS1HCQ3RXZ30ZP" target="_blank" rel="noopener"><img class="aligncenter wp-image-29873 size-medium" title="Eleições No Brasil: Do Império Aos Dias Atuais , de Jairo Nicolau" src="https://images-na.ssl-images-amazon.com/images/I/41CPj7pwq-L.jpg" alt="Eleições No Brasil: Do Império Aos Dias Atuais , de Jairo Nicolau" width="200" height="300" sizes="(max-width: 200px) 100vw, 200px"></a></p>
				            	</center>
								<div class="row mt-5">
					
							
							
				
						<h4 class="mb-4"> A VÍTIMA TEM SEMPRE RAZÃO? -  FRANCISCO BOSCO</h4>
						<div class="text-justify">
						<p>O filósofo Francisco Bosco oferece em A Vítima Tem Sempre Razão?, um livro que tem sido objeto de calorosos debates desde seu lançamento em 2017, um panorama sobre as lutas de identidade travadas no Brasil dos últimos anos, nas ruas e nas redes sociais, que mudou bastante o cenário político contemporâneo. Bosco aborda também excessos e estratégias de argumentação e militância usadas por parte dos movimentos sociais para examinar o que essas atitudes manifestam e representam.</p>
			                	<center>
				            	    <p><a href="https://www.amazon.com.br/v%C3%ADtima-tem-sempre-raz%C3%A3o-ebook/dp/B076632M49" target="_blank" rel="noopener"><img class="aligncenter wp-image-29873 size-medium" title="A Vítima Tem Sempre Razão?,de  Francisco Bosco" src="https://img.huffingtonpost.com/asset/5c33b1b12300005e003d084b.jpeg?ops=scalefit_630_noupscale" alt="A Vítima Tem Sempre Razão?,de  Francisco Bosco" width="200" height="300" sizes="(max-width: 200px) 100vw, 200px"></a></p>
				            	</center>
							<div class="row mt-5">
					
						
					   <h4 class="mb-4">POR QUE GRITAMOS GOLPE? PARA ENTENDER O IMPEACHMENT E A CRISE POLÍTICA NO BRASIL - ANDRÉ SINGER</h4>
						<div class="text-justify">
						<p>A obra incita o amadurecimento do debate público sobre a crise política no Brasil e proporciona ao leitor as mais diversas análises sobre a dinâmica do processo de impeachment da presidente Dilma Rousseff, dentro de uma perspectiva multidisciplinar e de esquerda. Os textos inéditos que compõem a coletânea buscam desenhar uma genealogia da crise política, entender as ameaças que se colocam à democracia e aos direitos conquistados pela Constituição de 1988 e apontar caminhos de superação de nossos impasses políticos. São mais de 30 autores, entre pesquisadores, professores, ativistas, representantes de movimentos sociais, jornalistas e figuras políticas.</p>
				            	<center>
				            	    <p><a href="https://www.amazon.com.br/Por-que-gritamos-Golpe-impeachment-ebook/dp/B01IFD0WHO" target="_blank" rel="noopener"><img class="aligncenter wp-image-29873 size-medium" title="Por Que Gritamos Golpe? Para Entender O Impeachment E A Crise Política No Brasil,de  André Singer" src="https://boitempo-img.f1cdn.com.br/resizer/view/900/900/false/true/181.jpg" alt="Por Que Gritamos Golpe? Para Entender O Impeachment E A Crise Política No Brasil,de  André Singer" width="200" height="300" sizes="(max-width: 200px) 100vw, 200px"></a></p>
				            	</center>
						<div class="row mt-5">
						    
						      <h4 class="mb-4">A VERDADE VENCERÁ: O POVO SABE POR QUE ME CONDENAM - LUIZ INÁCIO LULA DA SILVA
 
</h4>
						<div class="text-justify">
						<p>Às vésperas do desfecho de uma guerra jurídica sem precedentes chega às livrarias o livro A verdade vencerá: o povo sabe por que me condenam, do ex-presidente Luiz Inácio Lula da Silva. O lançamento se situa em um momento crucial da vida de um dos maiores políticos da história brasileira, na virada de fevereiro para março de 2018, enquanto o país aguarda a decisão do Poder Judiciário sobre sua prisão em decorrência da perseguição movida pela operação Lava Jato. É difícil pensar no que acontece no momento presente, pois lida com nossas emoções de uma forma profunda. Entretanto, é necessário muitos livros para pensar sobre política.</p>
				            	<center>
				            	    <p><a href="https://www.amazon.com.br/Verdade-Vencer%C3%A1-Povo-Sabe-Condenam/dp/8575596217" target="_blank" rel="noopener"><img class="aligncenter wp-image-29873 size-medium" title="A Verdade Vencerá: O Povo Sabe Por Que Me Condenam,de  Luiz Inácio Lula Da Silva" src="http://imagens.lelivros.love/2018/04/Baixar-A-Verdade-Vencera-O-Povo-Sabe-Por-Que-Me-Condenam-Luiz-Incio-Lula-da-Silva-em-Pdf-ePub-e-Mobi-ou-ler-online.jpg" alt="A Verdade Vencerá: O Povo Sabe Por Que Me Condenam,de  Luiz Inácio Lula Da Silva" width="200" height="300" sizes="(max-width: 200px) 100vw, 200px"></a></p>
				            	</center>
						<div class="row mt-5">
					
				
						<h4 class="mb-4">DIÁRIOS DA PRESIDÊNCIA  - FERNANDO HENRIQUE CARDOSO</h4>
						<div class="text-justify">
						<p>Fernando Henrique Cardoso manteve o hábito quase semanal de registrar, num gravador, o dia a dia do poder. Os diários têm a franqueza das confissões deixadas à posteridade — como de fato era a intenção original do autor. Neles transparecem as hesitações do cotidiano, os julgamentos duros de amigos próximos, os pontos de vista que mudam com os fatos, as afinidades que se criam e as que arrefecem. Para o leitor, são não só uma janela aberta para a intimidade do poder como uma ferramenta valiosa para a compreensão do Brasil contemporâneo.</p>
				               <center>
				            	    <p><a href="https://www.amazon.com.br/Di%C3%A1rios-presid%C3%AAncia-1995-1996-Fernando-Henrique/dp/8535926542" target="_blank" rel="noopener"><img class="aligncenter wp-image-29873 size-medium" title=" Diários Da Presidência,de Fernando Henrique Cardoso" src="https://images-na.ssl-images-amazon.com/images/I/51DEhNAYiNL.jpg" alt=" Diários Da Presidência,de Fernando Henrique Cardoso" width="200" height="300" sizes="(max-width: 200px) 100vw, 200px"></a></p>
				            	</center>
						<div class="row mt-5">
					
				
					
						<h4 class="mb-4">POLÍTICA PARA MEU FILHO - FERNANDO SAVATER</h4>
						<div class="text-justify">
						<p>Buscando manter o tom bem-humorado de Ética para meu filho, nesta obra Fernando Savater exige um pouco mais da atenção do leitor ao tratar de política. Escrito em tom de conversa, o autor dirige-se ao filho, ao mesmo tempo que a todos os que se interessam pelo tema.</p>
		                       	<center>
				            	    <p><a href="https://www.amazon.com.br/Politica-Para-Filho-Fernando-Savater/dp/857665069X" target="_blank" rel="noopener"><img class="aligncenter wp-image-29873 size-medium" title="Política Para Meu Filho,de Fernando Savater" src="http://www.bandnewsfm.com.br/wp-content/uploads/2018/10/POL%C3%8DTICA-PARA-MEU-FILHO.jpg" alt="Política Para Meu Filho,de Fernando Savater" width="200" height="300" sizes="(max-width: 200px) 100vw, 200px"></a></p>
				            	</center>
						<div class="row mt-5">
					
					
						<h4 class="mb-4">POLÍTICA  - MIRIAM MORAES</h4>
						<div class="text-justify">
						<p>Muita gente detesta política – e enche a boca, até com orgulho, para dizer isto. Trata-se de um erro. Querendo ou não, todos nós praticamos política o tempo todo. É impossível viver em sociedade sem exercê-la por ação ou omissão. Ou seja, mesmo quem diz que detesta política está fazendo política. No caso, a opção é pelo descaso pelo próprio destino ou pelo destino da cidade, estado ou país. Este livro enfrenta este assunto de forma clara, objetiva e – porque não dizer? – pedagógica. Míriam Moraes destrincha um leque de subtemas: os erros mais nefastos e evitáveis do debate político; os modos de avaliar a competência dos gestores públicos; as responsabilidades das três esferas de governo; a mídia, sua falsa isenção e seus interesses no jogo político; como o contribuinte acaba pagando o custo do financiamento privado das campanhas; a corrupção e o atual sistema eleitoral; como separar o joio do trigo no meio da boataria das redes sociais. E, por último, mas não menos importante: porque as mobilizações de 2013 não tiveram resultados práticos. O livro esclarece questões que intrigam muita gente. Por exemplo: quantas vezes você ouviu falar de esquerda ou direita e ficou sem saber o que estas duas palavras significam exatamente? E centro, centro-direita, centro-esquerda, extrema-direita, extrema-esquerda? Mais importante: de que maneira as escolhas realizadas levando em consideração tais termos influenciam diretamente o seu cotidiano?.</p>
		                		<center>
				            	    <p><a href="https://www.amazon.com.br/Pol%C3%ADtica-M%C3%ADriam-Moraes-ebook/dp/B00P6O5QUO" target="_blank" rel="noopener"><img class="aligncenter wp-image-29873 size-medium" title="Política,de Miriam Moraes" src="https://miro.medium.com/max/900/0*PuXWmNROmM4_fOhu." alt="Política,de Miriam Moraes" width="200" height="300" sizes="(max-width: 200px) 100vw, 200px"></a></p>
				            	</center>
						<div class="row mt-5">
					
						<h4 class="mb-4">A ELITE DO ATRASO: DA ESCRAVIDÃO A BOLSONARO - JESSÉ SOUZA</h4>
						<div class="text-justify">
						<p>A elite do atraso se tornou um clássico contemporâneo da sociologia brasileira, um livro fundamental de Jessé Souza, o sociólogo que ousou colocar na berlinda as obras que eram consideradas essenciais para se entender o Brasil.Por meio de uma linguagem fluente, irônica e ousada, Jessé apresenta uma nova visão sobre as causas da desigualdade que marca nosso país e reescreve a história da nossa sociedade. Mas não a do patrimonialismo, nossa suposta herança de corrupção trazida pelos portugueses, tese utilizada tanto à esquerda quanto à direita para explicar o Brasil. Muito menos a do brasileiro cordial, ambíguo e sentimental.No âmago da interpretação de Jessé não está a corrupção política. Para ele, a questão a partir da qual se deve explicar a história passada e atual do Brasil – e de suas classes, portanto – não é outra senão a escravidão.Sob uma perspectiva inédita, ele revela fatos cruciais sobre a vida nacional, demonstrando como funcionam as estruturas ocultas que movem as engrenagens do poder e de que maneira a elite do dinheiro exerce sua força invisível e manipula a sociedade – com o respaldo das narrativas da mídia, do judiciário e de seu combate seletivo à corrupção.</p>
		                		<center>
				            	    <p><a href="https://www.amazon.com.br/elite-atraso-escravid%C3%A3o-Bolsonaro/dp/8556080421/ref=pd_sbs_14_t_0/144-0238860-8518840?_encoding=UTF8&pd_rd_i=8556080421&pd_rd_r=e75611f3-3382-4e74-8ddc-7e54ede0d90c&pd_rd_w=rDVl8&pd_rd_wg=aUiVP&pf_rd_p=adb10074-dc46-4d48-9abd-ebbbd99776aa&pf_rd_r=HBBX1W1N9ZSMD1RJPW8B&psc=1&refRID=HBBX1W1N9ZSMD1RJPW8B" target="_blank" rel="noopener"><img class="aligncenter wp-image-29873 size-medium" title="A elite do atraso: da escravidão a Bolsonaro,de Jessé Souza" src="https://images-na.ssl-images-amazon.com/images/I/41WbiVhQf3L.jpg" alt="A elite do atraso: da escravidão a Bolsonaro,de Jessé Souza" width="200" height="300" sizes="(max-width: 200px) 100vw, 200px"></a></p>
				            	</center>
						<div class="row mt-5">
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
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