<?php
require_once '../php/connect.php';
session_start();
function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
  }

// if (isset($_POST['novapergunta '])){
    
// }   
console_log($_POST);
if (isset($_POST['novoquiz'])||isset($_POST['perguntajaadicionada'])) {
    
    $criador= $_SESSION['id'];
    if(!isset($_POST['perguntajaadicionada'])){
        if (empty($_POST['nomeQuiz'])||empty($_POST['categoriaQuiz'])||empty($_POST['dificuldade'])){
            echo'<div class="alert alert-danger m-0" role="alert">Erro, preencha todos os campos para criar o quiz! Clique <a class="alert-link" href="userpage.php">aqui</a> para voltar a sua página</div>';
            $erro=1;
        }
        else{
            $erro=0;
            $nomeQuiz = mysqli_escape_string($conn, $_POST['nomeQuiz']);
            $categoriaQuiz = mysqli_escape_string($conn, $_POST['categoriaQuiz']);
            $dificuldade = mysqli_escape_string($conn, $_POST['dificuldade']);
            $expiracao = mysqli_escape_string($conn, $_POST['expiracao']);

            $quiz_relacionado = mysqli_escape_string($conn, $_POST['quiz_relacionado']);
            $link_relacionado = mysqli_escape_string($conn, $_POST['link_relacionado']);

            $sql= "SELECT * from quizes WHERE titulo = '$nomeQuiz'";
            $res= mysqli_query($conn, $sql);
            if(mysqli_num_rows($res)>0){
                echo"<div class='alert alert-warning  m-0' role='alert'>
                Já existe um Quiz com esse nome!
                </div>";
        
            }else{
                $sql= "INSERT INTO quizes (titulo, categoria, dificuldade, criador,expira,linkrelacionado,quizrelacionado) VALUES ('$nomeQuiz','$categoriaQuiz','$dificuldade','$criador','$expiracao','$link_relacionado','$quiz_relacionado')";
                $res= mysqli_query($conn, $sql);
                
                if($res){
                echo"<div class='alert alert-info  m-0' role='alert'>
                Quiz criado com sucesso, adicione as perguntas! 
                </div>";
                }else{
                echo"<div class='alert alert-danger  m-0' role='alert'>
                Erro ao cadastrar quiz!
                </div>
                ";
                }
            }

        }
    }else{
        $erro=0;
        $nomeQuiz=$_POST['nomeQuiz'];
    }

}else{
    if(isset($_POST['cadastrodepergunta'])){
        $erro=0;
        $id=$_POST['iddoquiz'];
        $nomeQuiz=$_POST['nomeQuiz'];
    }else{
        $erro=0;
        $id=$_POST['iddoquiz'];
        $erro=0;

        $sql= "SELECT * from quizes WHERE quizID=$id";
        $quizes= $conn->query($sql);
        while($linha = $quizes->fetch_assoc()){
            $quiz=$linha;
        }
        $nomeQuiz=$quiz['titulo'];
    }
}




?>
<!DOCTYPE html>
<html lang="en">
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
    <style>
        .main {
        width: 50vw;
        min-width:300px;
        margin: auto;
        margin-top: 20px;
        background: #fff;
        border: 1px solid black;
        }
        body{
        background-color: black
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
    <?php
    if(isset($_POST['perguntajaadicionada'])){
        echo('
                <div class="alert alert-success" role="alert">
                    Pergunta adicionada
                </div>
            ');
        }
    ?>
    <?php if ($erro!=1): ?>
    <div class="main p-4">
        <h3 class="display-4 text-dark" style="font-family:'Work Sans';font-weight:500">Cadastrar Perguntas</h3>
        <p class="text-dark" style="font-family:'Work Sans';font-weight:500">Quiz: <?php echo $nomeQuiz ?></p>
        <hr>
        <form method='post' action='novapergunta.php'>
            <div class="form-group">
                <label for="exampleFormControlTextarea1"><h1 class='text-dark' style="font-family:'Work Sans';font-weight:400;font-size: 20px">ENUNCIADO</h1></label>
                <textarea class="form-control" name='enunciado' rows="3" placeholder="Escreva aqui o enunciado da pergunta"></textarea>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend" style='text-align:center'>
                    <span class="input-group-text"  id="basic-addon1">A)</span>
                </div>
                <input type="text" name="alternativaA" class="form-control" placeholder="Alternativa A" >
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend" style='text-align:center'>
                    <span class="input-group-text"  id="basic-addon1">B)</span>
                </div>
                <input type="text" name="alternativaB" class="form-control" placeholder="Alternativa B" >
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend" style='text-align:center'>
                    <span class="input-group-text"  id="basic-addon1">C)</span>
                </div>
            <input type="text" name="alternativaC" class="form-control" placeholder="Alternativa C" >
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend" style='text-align:center'>
                    <span class="input-group-text"  id="basic-addon1">D)</span>
                </div>
                <input type="text" name="alternativaD" class="form-control" placeholder="Alternativa D" >
            </div>
            <div>
                <center>
                <p class="text-dark" style="font-family:'Work Sans';font-weight:500">Alternativa Correta</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="alt_correta"  value="a">
                    <label class="form-check-label" for="dificuldade1">A)</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="alt_correta"  value="b">
                    <label class="form-check-label" for="dificuldade1">B)</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="alt_correta"  value="c">
                    <label class="form-check-label" for="dificuldade1">C)</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="alt_correta"  value="d">
                    <label class="form-check-label" for="dificuldade1">D)</label>
                </div>
                </center>
                    </div>
            <center><button type="submit" class="btn btn-primary m-3" name="novapergunta">Adicionar pergunta</button></center>
            
            <input type='hidden' name='nomeQuiz' value='<?php echo($nomeQuiz);?>'>
            <input type='hidden' name='veio-de' value='<?php echo ($_POST['veio-de'])?>'>'>
            
        </form>
        <?php console_log($_POST)?>
        <center><a class="btn btn-success m-1" href='../<?php echo ($_POST['veio-de'])?>'>Voltar</a></center>
    </div>
    <?php endif;?>

    


    </body>
</html>