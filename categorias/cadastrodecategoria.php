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
    if (!isset($_SESSION['logado']) || $_SESSION['logado']==false) {
        echo '<script>window.location.replace("index.php");</script>';   
    }
    if (isset($_POST['novacategoria'])) {

        $categoria = mysqli_escape_string($conn, $_POST['categoria']);
        if (empty($categoria)){
            echo'<div class="alert alert-danger m-0" role="alert">Erro, insira o nome da categoria!</div>';
        }else {
            $sql= "SELECT * from categorias WHERE nome = '$categoria'";
            console_log($sql);
            $res= mysqli_query($conn, $sql);
            if(mysqli_num_rows($res)>0){
                echo"<div class='alert alert-warning  m-0' role='alert'>
                  Já existe uma categoria com esse nome!
                  </div>";
          
              }else{
                $sql= "INSERT INTO categorias (nome) VALUES ('$categoria')";
                $res= mysqli_query($conn, $sql);
                  
                if($res){
                  echo"<div class='alert alert-info  m-0' role='alert'>
                  Categoria cadastrada com sucesso! 
                  </div>";
                  header('Refresh:0');
                }else{
                  echo"<div class='alert alert-danger  m-0' role='alert'>
                  Erro ao cadastrar categoria!
                  </div>
                  ";
                }
              }

        }
    }
?>

<!DOCTYPE html>
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
    <div class="p-4">
        <h3 class="display-6 text-dark" >CADASTRO DE CATEGORIA</h3>
        <form method=POST action="">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" style='width:94px;text-align:center' id="basic-addon1">Categoria</span>
                </div>
                <input type="text" name="categoria" class="form-control" placeholder="Nome da categoria">
            </div>
            <center><button type="submit" class="btn btn-primary" name="novacategoria">Adicionar categoria</button></center>
        </form>
    </div>    

</body>
</html>