<?php 
    function console_log( $data ){
        echo '<script>';
        echo 'console.log('. json_encode( $data ) .')';
        echo '</script>';
    }
    require_once 'php/connect.php';
    session_start();
      

    if (!isset($_SESSION['logado']) || $_SESSION['logado']==false) {
        echo '<script>window.location.replace("index.php");</script>';}
    
    $dificuldades=array();
    $dificuldades[1]='Facil';
    $dificuldades[2]='Medio';
    $dificuldades[3]='Dificil';
    
    $id=$_POST['id'];

    console_log($id);

    $sql="SELECT quizes.quizID as 'ID' ,quizes.titulo as 'Nome', usuarios.nome as 'Criador', categorias.nome as 'Categoria', quizes.dificuldade as 'Dificuldade', quizes.expira as 'Validade' from quizes INNER JOIN usuarios on quizes.criador = usuarios.usuarioID INNER JOIN categorias on quizes.categoria = categorias.categoriasID WHERE quizes.quizID=$id";
    
    console_log($sql);
    $results= $conn->query($sql);

    $sql2="SELECT perguntas.enunciado AS 'Enunciado', perguntas.perguntaID as'ID' FROM perguntas WHERE quiz=$id";

    $results2= $conn->query($sql2);

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>INFOPOLITIZADO!</title>
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
                        <a class='dropdown-item' href='userpage.php'>Minha página</a>
                        <a class='dropdown-item bg-danger text-light' href='php/logout.php'>Logout</a>
                        </div>
                    </li>"
                    ;}?>
                </ul>
            </div>
        </nav>
        <h3 class='display-6 text-dark'>INFORMAÇÕES DO QUIZ</h3>
            <table class='table table-hover table-sm '>
                <thead>
                    <tr>
                        <th scope='col'>Nome</th>
                        <th scope='col'>Criador</th>
                        <th scope='col'>Categoria</th>
                        <th scope='col'>Dificuldade</th>
                        <th scope='col'>Expira</th>
                        <th scope='col'>Opções</th>
                    </tr>
               </thead>
               <tbody>
                   <?php while ($linha=$results->fetch_assoc()):?>
                            <tr>
                            <td><?php echo $linha['Nome'];?></td>
                            <td><?php echo $linha['Criador'];?></td>
                            <td><?php echo $linha['Categoria'];?></td>
                            <td><?php echo $dificuldades[$linha['Dificuldade']];?></td>
                            <td><?php echo $linha['Validade'];?></td>
                            <td>
                            <form method='POST' action='quizes\editaquiz.php' style='display: inline'>
                                <input type='hidden' name='id' value='<?php echo $linha['ID']?>'>
                                <input type='submit' name='botao-editar' class='btn btn-primary m-1' value='Editar'>                                
                            </form>
                            <form method='POST' action='quizes\removequiz.php' style='display: inline'>
                                <input type='hidden' name='veio-de' value='..\quizes.php'>
                                <input type='hidden' name='id' value='<?php echo $linha['ID']?>'>
                                <input type='submit' name='botao-remover' class='btn btn-danger m-1' value='Remover'>                                
                            </form>
                            </tr>
                    <?php endwhile;?>
               </tbody>
            </table>
        <h3 class='display-6 text-dark'>PERGUNTAS CADASTRADAS</h3>
            <table class='table table-hover table-sm '>
                <thead>
                    <tr>
                        <th scope='col'>Enunciado</th>
                        <th scope='col'>Opções</th>
                    </tr>
               </thead>
               <tbody>
                   <?php while ($linha2=$results2->fetch_assoc()):?>
                        <tr>
                            <td><strong><?php echo $linha2['Enunciado'];?><strong></td>
                            <td>
                            <form method='POST' action='perguntas\editapergunta.php' style='display: inline'>
                                <input type='hidden' name='id' value='<?php echo $linha['ID']?>'>
                                <input type='submit' class='btn btn-success' value='Editar' name='editar'>
                            </form>
                            <form method='POST' action='perguntas\removepergunta.php' style='display: inline'>
                                <input type='hidden' name='id' value='<?php echo $linha['ID']?>'>
                                <input type='submit' class='btn btn-danger' value='Remover' name='remover'>
                            </form>
                                
                            </td>
                        </tr>
                    <?php endwhile;?>
                        <td colspan='2'>
                            <form method='POST' action='quizes/addquestions.php'>
                                <input type='hidden' name='veio-de' value='lista_de_perguntas.php'>
                                <input type='hidden' name='iddoquiz' value='<?php echo($id)?>'>
                                <input type='submit' name='novapergunta' value='Nova Pergunta' class='btn btn-primary m-1>'>
                            </form>
                        </tr>
               </tbody>
            </table>