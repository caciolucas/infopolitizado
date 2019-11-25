<?php 
    function console_log( $data ){
        echo '<script>';
        echo 'console.log('. json_encode( $data ) .')';
        echo '</script>';
      }
    require_once '../php/connect.php';
    session_start();

    console_log($_SESSION);
    
    $admin=array();
    $admin[1]='fa-check text-success';
    $admin[0]='fa-times text-danger';

    $sql= "SELECT * from categorias";
    $categorias= $conn->query($sql);

    $sql= "SELECT * from usuarios";
    $usuarios= $conn->query($sql);

    if (!isset($_SESSION['logado']) || $_SESSION['logado']==false) {
        echo '<script>window.location.replace("index.php");</script>';   
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
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
        <?php if (isset($_POST['alterado'])){
        if ($_POST['alterado']==0):?>
            <div class='alert alert-danger  m-0' role='alert'>
                Erro ao modificar usuário <?php echo $_POST['nome_usuario']?>!
            </div>
        <?php elseif($_POST['alterado']==1): ?>
            <div class='alert alert-warning  m-0' role='alert'>
                O usuário <?php echo $_POST['nome_usuario']?> não é mais um administrador!
            </div>
        <?php elseif($_POST['alterado']==2): ?>
            <div class='alert alert-success  m-0' role='alert'>
                O usuário <?php echo $_POST['nome_usuario']?> agora é um administrador!
            </div>

        <?php endif; ?>
    <?php };?>
        <h3 class='display-6 text-dark'>USUÁRIOS CADASTRADOS</h3>
        <table class='table table-hover table-sm '>
            <thead>
                <tr>
                    <th scope='col'>Nome</th>
                    <th scope='col'>Usuário</th>
                    <th scope='col'>E-mail</th>
                    <th scope='col'>Administrador</th>
                    <th scope='col'>Opções</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($linha=$usuarios->fetch_assoc()):?>
                        <tr>
                        <td><?php echo $linha['nome'];?></td>
                        <td><?php echo $linha['usuario'];?></td>
                        <td><?php echo $linha['email'];?></td>
                        <td class="icon"><i class="fa <?php echo $admin[$linha['admin']] ?>"></i></td>
                        <td><a class='btn btn-primary' href="switchadmin.php?id=<?php echo $linha['usuarioID']?>">Administrador</a></td>
                        </tr>
                <?php endwhile;?>
            </tbody>
        </table>
        <center><a class="btn btn-success m-1" href='../usuarios'>Voltar</a></center>
    </body>
</html>