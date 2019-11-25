<?php 
    function console_log( $data ){
        echo '<script>';
        echo 'console.log('. json_encode( $data ) .')';
        echo '</script>';
      }
    require_once 'php/connect.php';
    session_start();
    
    if (!isset($_SESSION['logado']) || $_SESSION['logado']==false) {
        echo '<script>window.location.replace("index.php");</script>';   
    }  
    $id=$_POST['id'];
    $sql= "SELECT * FROM quizes WHERE quizID=$id";
    $quiz= ($conn->query($sql))->fetch_assoc();
    
    $sql2="SELECT perguntaID, enunciado, resposta_Certa, alternativaA,alternativaB,alternativaC,alternativaD from perguntas inner join respostas on pergunta = perguntaID";
    $results= ($conn->query($sql2));

    $perguntas_e_respostas=[];
    $i=0;
    while ($linha=$results->fetch_assoc()) {
        $perguntas_e_respostas[$i]=$linha;
        $i++;
    }
    $perguntas_e_respostas= array_reverse($perguntas_e_respostas);
    console_log($perguntas_e_respostas);
    
    $questao = 0;
    
    if (isset($_POST['respondida'])){
        $questao++;
    }



?>
<html lang="pt-br">
<head>
    <title>INFOPOLIZADO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href='style.css'>
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
                    <a class='dropdown-item' href='userpage.php'>Minha pagina</a>
                    <a class='dropdown-item bg-danger text-light' href='php/logout.php'>Logout</a>
                    </div>
                </li>"
                ;}?>
            </ul>
        </div>
    </nav>
    <h1><?php echo $quiz['titulo']?></h1>
    <div class='main p-4' style='background:lightblue;width:50vw;margin:auto'>
        <h2>Pergunta <?php echo ($questao+1)?></h2>
        <p><?php echo $perguntas_e_respostas[$questao]['enunciado'] ?></p>

        <form method='POST' action='#'>
            <div class="custom-control custom-radio">
                <input type="radio" id="customRadio1" name="customRadio" value='A' class="custom-control-input">
                <label class="custom-control-label" for="customRadio1">
                    <?php echo $perguntas_e_respostas[$questao]['alternativaA']?>
                </label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="customRadio2" name="customRadio" value='B' class="custom-control-input">
                <label class="custom-control-label" for="customRadio2">
                    <?php echo $perguntas_e_respostas[$questao]['alternativaB']?>
                </label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="customRadio3" name="customRadio" value='C' class="custom-control-input">
                <label class="custom-control-label" for="customRadio3">
                    <?php echo $perguntas_e_respostas[$questao]['alternativaC']?>
                </label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="customRadio4" name="customRadio" value='D' class="custom-control-input">
                <label class="custom-control-label" for="customRadio4">
                    <?php echo $perguntas_e_respostas[$questao]['alternativaD']?>
                </label>
            </div>

            <?php if ($questao+1!=count($perguntas_e_respostas)):?>
            <center><input class='btn btn-primary' name='respondida' type='submit'></center>
            <?php else:?>
            <center><input class='btn btn-primary' name='respondida' value='Finalizar' type='submit'></center>
            <?php endif;?>

        </form>

    </div>
</body>
</html>