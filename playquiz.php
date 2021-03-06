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
    
    $sql2="SELECT perguntaID, enunciado, alternativaA,alternativaB,alternativaC,alternativaD from perguntas left join respostas on pergunta = perguntaID where perguntas.quiz=$id";
    console_log($sql2);
    $results= ($conn->query($sql2));
    $perguntas_e_respostas=[];
    $i=0;
    while ($linha=$results->fetch_assoc()) {
        console_log($linha);
        $i++;
        $perguntas_e_respostas[$i]=$linha;
    }
    $perguntas_e_respostas= array_reverse($perguntas_e_respostas);
    console_log($perguntas_e_respostas);
    


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
    <style>
        body{
            background-image: url('question_bg.jpg');
            background-repeat: repeat;
        }
    </style>
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
    <?php if(isset($_POST['erro'])):?>
        <div class='alert alert-danger  m-0' role='alert'>
            Responda todas as perguntas!
        </div>
    <?php endif;?>

    <h1><?php echo $quiz['titulo']?></h1>
    <div class='main p-4' style='background:rgba(255,255,255,0.8);width:50vw;margin:auto'>
        <form method='POST' action='checkanswers.php'>
            <input type='hidden' name='id' value='<?php echo $id?>'>
        <?php foreach ($perguntas_e_respostas as $i => $pergunta):?>
        <h2>Pergunta <?php echo ($i+1)?></h2>
        <p><?php echo $pergunta['enunciado'] ?></p>
            <div class="custom-control custom-radio">
                <input type="radio" id="customRadio<?php echo $i?>.1" name="<?php echo $pergunta['perguntaID']?>" value='a' class="custom-control-input"> 
                <label class="custom-control-label" for="customRadio<?php echo $i?>.1">
                    <?php echo $pergunta['alternativaA']?>
                </label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="customRadio<?php echo $i?>.2" name="<?php echo $pergunta['perguntaID']?>" value='b' class="custom-control-input">
                <label class="custom-control-label" for="customRadio<?php echo $i?>.2">
                    <?php echo $pergunta['alternativaB']?>
                </label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="customRadio<?php echo $i?>.3" name="<?php echo $pergunta['perguntaID']?>" value='c' class="custom-control-input">
                <label class="custom-control-label" for="customRadio<?php echo $i?>.3">
                    <?php echo $pergunta['alternativaC']?>
                </label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="customRadio<?php echo $i?>.4" name="<?php echo $pergunta['perguntaID']?>" value='d' class="custom-control-input">
                <label class="custom-control-label" for="customRadio<?php echo $i?>.4">
                    <?php echo $pergunta['alternativaD']?>
                </label>
            </div>
        <?php endforeach;?>
            <input style='margin:auto;display:flex' class='btn btn-dark' type='submit' value='Enviar respostas' name='enviado'>
        </form>
    </div>
</body>
</html>