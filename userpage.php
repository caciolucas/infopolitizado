<?php 
    function console_log( $data ){
        echo '<script>';
        echo 'console.log('. json_encode( $data ) .')';
        echo '</script>';
      }
    require_once 'php/connect.php';
    session_start();

    
    $dificuldades=array();
    $dificuldades[1]='Fácil';
    $dificuldades[2]='Médio';
    $dificuldades[3]='Difícil';

    $today = getdate();
    $day=$today['mday'];
    $month=$today['mon'];
    $year=$today['year'];
    $date="$year-$month-$day";
    
    // if (!isset($_SESSION['logado']) || $_SESSION['logado']==false) {
    //     echo '<script>window.location.replace("index.php");</script>';   
    // }
    $sql="SELECT quizes.titulo as 'Nome do Quiz',quizes.quizID as 'ID do Quiz',recordes, count(perguntas.quiz) as 'n', usuarios.nome as 'Nome do criador', quizes.dificuldade as 'Dificuldade', quizes.expira as 'Data de Expiraçao', categorias.nome as 'Categoria' from  recordes right join quizes on recordes.quizID=quizes.quizID left join perguntas on perguntas.quiz=quizes.quizID left join usuarios on usuarios.usuarioID=quizes.criador left join categorias on categorias.categoriasID=quizes.categoria WHERE recordes.usuarioID=".$_SESSION['id']." group by quizes.quizID";
    $resultado=$conn->query($sql);
    $resultado2=$conn->query($sql);
    while($linha=$resultado2->fetch_assoc()){
        console_log($linha);
    }
    console_log('aaaaaaaaa');
    $todos_recordes=array();
    while($linha=$resultado->fetch_assoc()){
        $todos_recordes[$linha['ID do Quiz']]=array(
            'acertos'=>$linha['recordes'],
            'n'=>$linha['n'],
            'porcentagem'=>($linha['recordes']/$linha['n']),
            'Nome do Quiz'=>$linha['Nome do Quiz'],
            'Nome do Criador'=>$linha['Nome do criador'],
            'Dificuldade'=>$linha['Dificuldade'],
            'Data de Expiracao'=>$linha['Data de Expiraçao'],
            'Categoria'=>$linha['Categoria']
            );
    }
    console_log($todos_recordes);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>INFOPOLITIZADO!</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href='css/circle.css'>
        <link rel="stylesheet" href='scss/circle.scss'>
        <link rel="stylesheet" href="main.css">
        <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="main.css">
        <link href="open-iconic-master/font/css/open-iconic-bootstrap.css" rel="stylesheet">
    </head>
    <body>
	    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" style="font-family:'Work Sans';font-weight:800" href="index.php">INFOPOLITIZADO!</a>
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
    <div class="main p-4">
    <?php if ($_SESSION['admin']==1) : ?>
        <h3 class="display-4 text-dark" style="font-family:'Verdana';font-weight:300">PAINEL DE ADMINISTRADOR</h3>
        <h3 class="display-5 text-dark" style="font-family:'Verdana';font-weight:300">OPÇÕES</h3>
        <hr>
        <div class='container-fluid'>
            <div class='row'>
                
                <div class="col-sm-12 col-lg-3">
                    <div class="p-4" style="width:100%;/* margin: auto; */">
                        <a href='categorias' class='btn btn-warning circle' title='Categorias'><img src="open-iconic-master\svg\list-rich.svg" class='oi' alt="Categorias"></a>
                    </div>    
                </div>
                <div class="col-sm-12 col-lg-3">
                    <div class="p-4">
                        <a href='quizes' class='btn btn-info circle' title='Quizes'><img src="open-iconic-master\svg\puzzle-piece.svg" class='oi' style="margin-top: 25%;margin-left: 33%;" alt="Quizes"></a>
                    </div>    
                </div>
                <div class="col-sm-12 col-lg-3">
                    <div class="p-4">
                        <a href='usuarios' class='btn btn-success circle' title='Usuários'><img src="open-iconic-master\svg\person.svg" class='oi' alt="Usuários"></a>
                    </div>    
                </div>
                <div class="col-sm-12 col-lg-3">
                    <div class="p-4" style="width:100%;/* margin: auto; */">
                        <a href='perguntas' class='btn btn-danger circle' title='Perguntas'><img src="open-iconic-master\svg\script.svg" class='oi' alt="Perguntas"></a>
                    </div>    
                </div>
            </div>
        </div>
    <?php endif;?>
    <h3 class="display-4 text-dark" style="font-family:'Verdana';font-weight:300">SEUS RECORDES</h3>
        <hr>
        <div class='container-fluid'>
            <div class='row'>        
            <?php foreach ($todos_recordes as $id => $valor):?>
            <div class="col-sm-6 col-lg-4">
                <div class="card m-3"  >
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $valor['Nome do Quiz']?></h5>
                        <h5 class="card-title"><?php echo $valor['acertos']?> acertos de <?php echo $valor['n']?> </h5>
                        <div style='width:100%;height:auto;margin:auto;'>
                        <div  class="c100 p<?php echo(round(100*$valor['porcentagem']));?> small">
                            <span><?php echo(round(100*$valor['porcentagem']));?>%</span>
                            <div class="slice">
                                <div class="bar"></div>
                                <div class="fill"></div>
                            </div>
                        </div>
                        </div>
                        <br><br><br><br>
                        <p class="card-text">
                        <div>
                        Criado por: <strong><?php echo $valor['Nome do Criador']?></strong><br>
                        Dificuldade: <strong><?php echo $dificuldades[$valor['Dificuldade']] ?></strong><br>
                        Categoria: <strong><?php echo $valor['Categoria']?> </strong><br>
                        Data de Expiracao: <strong><?php echo $valor['Data de Expiracao']?> </strong><br>
                        Situação: <strong><?php if(strtotime($date)<=strtotime($valor['Data de Expiracao'])){echo 'Ativo';}else{echo 'Inativo';}?> </strong>
                        </div>
                        </p>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
            </div>
        </div>
    </div>

    
    

    
  

  <!-- loader -->
  


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