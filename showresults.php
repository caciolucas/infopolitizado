<?php 
    require_once 'php/connect.php';
    session_start();
    function console_log( $data ){
        echo '<script>';
        echo 'console.log('. json_encode( $data ) .')';
        echo '</script>';
      };
    $id=$_POST['quizid'];
    $sql_quiz="SELECT * FROM quizes WHERE quizID=$id";
    $quiz=($conn->query($sql_quiz))->fetch_assoc();
    console_log($quiz);
    $id_relacionado=$quiz['quizrelacionado'];
    $quiz_relacionado=($conn->query("SELECT titulo FROM quizes WHERE quizID=$id_relacionado"))->fetch_assoc();
    
    $sql="SELECT * FROM recordes WHERE usuarioID=".$_SESSION['id']." and quizID=".$id;
    $recorde=($conn->query($sql));
    $recorde2=($conn->query($sql));
    $erro=0;
    if (!count($recorde->fetch_all())){
        $sql_insert="INSERT INTO recordes (recordes,quizID,usuarioID) values (".$_POST['acertos'].",$id,".$_SESSION['id'].")";
        $res= mysqli_query($conn, $sql_insert); 
            if($res){
                $novo=1;
            }else{
                $erro=1;
            }
    }else {
        $recorde_atual=$recorde2->fetch_assoc();
        if ($recorde_atual['recordes']<=$_POST['acertos']) {
            $sql_update="UPDATE recordes set recordes=".$_POST['acertos']." WHERE quizID=$id and usuarioID=".$_SESSION['id'];
            $res= mysqli_query($conn, $sql_update); 
            if($res){
                $novo=1;
            }else{
                $erro=1;
            }
        }else{
            $erro=0;
        }

    }

?>
<html lang="pt-br">
<head>
    <title>INFOPOLIZADO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href='scss\circle.scss'>
    <link rel="stylesheet" href='css\circle.css'>
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
        .main{
            margin:auto;
            margin-top:20px;
            width:500px
        }
        body{
            background-image: url('books_bg.jpg');
            background-size: 400px;
            background-repeat: repeat;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" style="font-family:'Work Sans';font-weight:800" href="index.php">INFOPOLITIZADO!</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegaÃƒÂ§ÃƒÂ£o">
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
    <?php if (isset($novo)):?>
        <div class='alert alert-primary m-0' role='alert'>
            Novo recorde atingido, parabéns!
        </div>
    <?php elseif ($erro):?>
        <div class='alert alert-danger m-0' role='alert'>
            Tivemos um problema com o banco de dados, por favor, contate um administrador
        </div>
    <?php endif;?>
    <div class='main p-4' style='background:rgba(255,255,255,0.8)'>
        <h3 >Você acertou <?php echo $_POST['acertos']?> questão(ões)!</h3>
        <h4 style='text-align:center'>Aprenda mais sobre esse tema <a Target="_blank"  href='<?php echo $quiz['linkrelacionado']?>'>aqui! </a> 
        <h4 style='text-align:center'>Responda também o quiz <strong><?php echo $quiz_relacionado['titulo']?></strong></h4>
        <div style='width:240px;margin:auto;'>
            <div class="c100 p<?php echo(round(100*$_POST['porcentagem']));?> big">
                <span><?php echo(round(100*$_POST['porcentagem']));?>%</span>
                <div class="slice">
                    <div class="bar"></div>
                    <div class="fill"></div>
                </div>
            </div>
            <center><a class='btn btn-primary' href='quizes.php'>Responder mais quizes</a></center>
        </div>
        
    </div>
    
</body>