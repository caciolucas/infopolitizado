<?php
require_once '../php/connect.php';
session_start();
function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
  }

if (!isset($_SESSION['logado']) || $_SESSION['logado']==false) {
    echo '<script>window.location.replace("index.php");</script>';   
} 

if (isset($_POST['editarpergunta']) or isset($_POST['confirma'])) {
    $erro_vazio=FALSE;
    $sucesso=FALSE;
    $erro_geral=FALSE;

    $id=$_POST['id'];

    $sql= "SELECT enunciado, quiz, quizes.titulo, resposta_certa,respostaID,perguntaID,alternativaA,alternativaB,alternativaC,alternativaD FROM perguntas inner join respostas on respostas.pergunta = perguntaID inner join quizes on perguntas.quiz = quizes.quizID WHERE perguntaID='$id'";
    $pergunta= ($conn->query($sql))->fetch_assoc();

    if (isset($_POST['confirma'])) {
        $enunciado = mysqli_escape_string($conn, $_POST['enunciado']);
        
        $alternativaA = mysqli_escape_string($conn, $_POST['alternativaA']);
        $alternativaB = mysqli_escape_string($conn, $_POST['alternativaB']);
        $alternativaC = mysqli_escape_string($conn, $_POST['alternativaC']);
        $alternativaD = mysqli_escape_string($conn, $_POST['alternativaD']);
        
        $resposta_correta = mysqli_escape_string($conn, $_POST['alt_correta']);

    
        if (empty($enunciado) || empty($alternativaA) || empty($alternativaB) || empty($alternativaC) || empty($alternativaD) || empty($resposta_correta)) {
            $erro_vazio=TRUE;
        }
        else{
            $sql_update_pergunta= "UPDATE perguntas SET enunciado = '$enunciado', resposta_certa = '$resposta_correta' WHERE perguntaID=$id";
            $sql_update_resposta= "UPDATE respostas SET alternativaA = '$alternativaA', alternativaB = '$alternativaB', alternativaC = '$alternativaC', alternativaD = '$alternativaD' WHERE respostaID=".$pergunta['respostaID'];
            $res= mysqli_query($conn, $sql_update_pergunta);
            $res2= mysqli_query($conn, $sql_update_resposta);
            
            if($res && $res2){
                $sucesso=TRUE;
                $sql= "SELECT enunciado, quiz, quizes.titulo, resposta_certa,respostaID,perguntaID,alternativaA,alternativaB,alternativaC,alternativaD FROM perguntas inner join respostas on respostas.pergunta = perguntaID inner join quizes on perguntas.quiz = quizes.quizID WHERE perguntaID='$id'";
                $pergunta= ($conn->query($sql))->fetch_assoc();
            }else{
                $erro_geral=TRUE;
            }
        }
        
    }

}else{
    echo '<script>window.location.replace("listaperguntas.php");</script>';   
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
        background-color: darkseagreen
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
 
    <?php if ($erro_vazio): ?>
        <div class='alert alert-danger  m-0' role='alert'>
            Erro ao editar a pergunta, preencha todos os campos!
        </div>
    <?php endif ?>
    <?php if ($erro_geral): ?>
        <div class='alert alert-danger  m-0' role='alert'>
            Erro ao editar a pergunta, contate um administrador!
        </div>
    <?php endif ?>
    <?php if ($sucesso): ?> 
        <a style ='text-decoration:none' href='listaperguntas.php'>
            <div class='alert alert-success  m-0' role='alert'>
                Pergunta editada com sucesso, <strong> clique aqui para voltar!</strong>
            </div>
        </a>
    <?php endif ?>
    <div class="main p-4">
        <h3 class="display-4 text-dark" style="font-family:'Work Sans';font-weight:500">Editar Pergunta</h3>
        <p class="text-dark" style="font-family:'Work Sans';font-weight:500">Quiz: <?php echo $pergunta['titulo'] ?></p>
        <hr>
        <form method='post' action='editapergunta.php'>
            <div class="form-group">
                <label for="exampleFormControlTextarea1"><h1 class='text-dark' style="font-family:'Work Sans';font-weight:400;font-size: 20px">ENUNCIADO</h1></label>
                <textarea class="form-control" name='enunciado' rows="3" placeholder="Escreva aqui o enunciado da pergunta"><?php echo $pergunta['enunciado'] ?></textarea>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend" style='text-align:center'>
                    <span class="input-group-text"  id="basic-addon1">A)</span>
                </div>
                <input type="text" value='<?php echo $pergunta['alternativaA'] ?>' name="alternativaA" class="form-control" placeholder="Alternativa A" >
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend" style='text-align:center'>
                    <span class="input-group-text"  id="basic-addon1">B)</span>
                </div>
                <input type="text"  value='<?php echo $pergunta['alternativaB'] ?>'name="alternativaB" class="form-control" placeholder="Alternativa B" >
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend" style='text-align:center'>
                    <span class="input-group-text"  id="basic-addon1">C)</span>
                </div>
                <input type="text"  value='<?php echo $pergunta['alternativaC'] ?>'name="alternativaC"  class="form-control" placeholder="Alternativa C" >
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend" style='text-align:center'>
                    <span class="input-group-text"  id="basic-addon1">D)</span>
                </div>
                <input type="text" value='<?php echo $pergunta['alternativaD'] ?>' name="alternativaD" class="form-control" placeholder="Alternativa D" >
            </div>
            <div>
                <center>
                <p class="text-dark" style="font-family:'Work Sans';font-weight:500">Alternativa Correta</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" <?php if($pergunta['resposta_certa']=='a'):?> checked <?php endif ?> type="radio" name="alt_correta"  value="a">
                    <label class="form-check-label" for="dificuldade1">A)</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" <?php if($pergunta['resposta_certa']=='b'):?> checked <?php endif ?> type="radio" name="alt_correta"  value="b">
                    <label class="form-check-label" for="dificuldade1">B)</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" <?php if($pergunta['resposta_certa']=='c'):?> checked <?php endif ?> type="radio" name="alt_correta"  value="c">
                    <label class="form-check-label" for="dificuldade1">C)</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" <?php if($pergunta['resposta_certa']=='d'):?> checked <?php endif ?> type="radio" name="alt_correta"  value="d">
                    <label class="form-check-label" for="dificuldade1">D)</label>
                </div>
                </center>
                    </div>
            <center><button type="submit" class="btn btn-primary m-3" name="confirma">Salvar pergunta</button></center>
            
            <input type='hidden' name='id' value='<?php echo($id);?>'>

        </form>
        <center><a class="btn btn-success m-1" href='../perguntas'>Voltar</a></center>
    </div>

    


    </body>
</html>