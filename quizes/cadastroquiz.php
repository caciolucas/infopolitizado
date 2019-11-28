<?php 
    function console_log( $data ){
        echo '<script>';
        echo 'console.log('. json_encode( $data ) .')';
        echo '</script>';
      }
    require_once '../php/connect.php';
    session_start();

    console_log($_SESSION);

    $sql= "SELECT * from categorias";
    $categorias= $conn->query($sql);

    $sql= "SELECT * from usuarios";
    $usuarios= $conn->query($sql);

    $sql = "SELECT * from quizes";
    $quizes= $conn->query($sql);

    if (!isset($_SESSION['logado']) || $_SESSION['logado']==false) {
        echo '<script>window.location.replace("index.php");</script>';
        
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>INFOPOLITIZADO!</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href='..\style.css'>
        <link rel="stylesheet" href="..\main.css">
        <link href="..\open-iconic-master/font/css/open-iconic-bootstrap.css" rel="stylesheet">
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
    </body>
    <div class="p-4">
        <h3 class="display-6 text-dark" >CADASTRO DE QUIZES</h3>
        <form method=POST action="addquestions.php">
            <input type='hidden' value='quizes' name='veio-de'>
            <div class="input-group mb-3">
                <div class="input-group-prepend" style='text-align:center'>
                    <span class="input-group-text" style='width:94px;text-align:center'  id="basic-addon1">Quiz *</span>
                </div>
                <input type="text" name="nomeQuiz" class="form-control" placeholder="Nome do quiz" >
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" style='width:105px;text-align:center'  id="basic-addon1">Categoria *</span>
                </div>
                <select name='categoriaQuiz' class='custom-select'>
                    <option value="" hidden> Escolha uma categoria </option>
                    <?php
                    while($linha = $categorias->fetch_assoc()) {
                        echo ('<option value="'.$linha['categoriasID'].'">'.$linha['nome'].'</option>');}
                    ?>
                </select>
            </div>
            <center>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" style='width:114px;text-align:center'  id="basic-addon1">Dificuldade *</span>
                </div>
                <select name='dificuldade' class='custom-select'>
                    <option value="" hidden> Escolha uma dificuldade</option>
                    <option value="1">Fácil</option>
                    <option value="2">Médio</option>
                    <option value="3">Difícil</option>

                </select>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend" style='text-align:center'>
                    <span class="input-group-text" style='width115px;text-align:center'  id="basic-addon1">Expiração *</span>
                </div>
                <input type="date" name="expiracao" class="form-control">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend" style='text-align:center'>
                    <span class="input-group-text" style='width:150px;text-align:center'  id="basic-addon1">Link Relacionado</span>
                </div>
                <input type="text" name="link_relacionado" class="form-control">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" style='width:150 px;text-align:center'  id="basic-addon1">Quiz relacionado</span>
                </div>
                <select name='quiz_relacionado' class='custom-select'>
                    <option value="NULL" hidden> Escolha um quiz como sugestão </option>
                    <?php
                    while($linha = $quizes->fetch_assoc()) {
                        echo ('<option value="'.$linha['quizID'].'">'.$linha['titulo'].'</option>');}
                    ?>
                </select>
            </div>
            
        
            </center>
            <center><button type="submit" class="btn btn-primary" name="novoquiz">Criar quiz e adicionar perguntas</button></center>
            <center><a class="btn btn-success m-1" href='../quizes'>Voltar</a></center>
        </form>
    </div> 