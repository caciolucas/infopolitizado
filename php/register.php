<?php 
  function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
    }
require_once 'connect.php';


if (isset($_POST['cadastrar'])) {

  $user  = mysqli_escape_string($conn, $_POST['user']);  
  $senha = mysqli_escape_string($conn, $_POST['senha']);
  $confirmacao = mysqli_escape_string($conn, $_POST['confirmacao']);
  $nome  = mysqli_escape_string($conn, $_POST['nome']);
  $email = mysqli_escape_string($conn, $_POST['email']);
  
  if (empty($user) || empty($senha) || empty($nome) || empty($email)) {
    $erro_preencha=TRUE;
    $completou=TRUE;
    
  }else {

    $sql= "SELECT * from usuarios WHERE usuario = '$user'";
    $res= mysqli_query($conn, $sql);

    if(mysqli_num_rows($res)>0){
      $erro_em_uso=TRUE;
      $completou=TRUE;

    }else{
      if ($senha!=$confirmacao) {
        $erro_confirmacao=TRUE;
        $completou=TRUE;
      }else {
          
        $senha = md5($senha);
        $sql= "INSERT INTO usuarios (usuario,nome,senha,email,admin) VALUES ('$user','$nome','$senha','$email',0)";
        console_log($sql);
        $res= mysqli_query($conn, $sql);
          
        if($res){
          $sucesso = TRUE;
        }else{
          $erro = TRUE;
        }
        $completou=TRUE;
      }
    }
  }
}

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel='stylesheet' href='../main.css'>
    <title>Cadastro</title>
    <script> 
        function ValidateEmail(inputText){
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if(inputText.value.match(mailformat)){
          document.form1.text1.focus();
          return true;
          }else{
          alert("You have entered an invalid email address!");
          document.form1.text1.focus();
          return false;}
}
    </script>

    <style>
      .main {
        width: 30vw;
        min-width:300px;
        margin: auto;
        margin-top: 20px;
        background: #fff;
        border: 1px solid black;
      }
      body{
        background-color: black
      }
      h1{
        text-align:center;
      }
      a:hover{
        text-decoration: none;
      }
    </style>
</head>
<body>
  <?php if(isset($completou)):?>
    <?php if(isset($erro_preencha)):?>
      <div class='alert alert-danger' role='alert'>
        Por favor, preencha todos os campos!
      </div>
    <?php elseif(isset($erro_em_uso)):?>
      <div class='alert alert-warning' role='alert'>
        Este usuário já está em uso!
      </div>
    <?php elseif(isset($erro_confirmacao)):?>
      <div class='alert alert-warning' role='alert'>
        As senhas não coincidem!
      </div>
    <?php elseif(isset($sucesso)):?>
      <div class='alert alert-info' role='alert'>
          Usuário cadastrado com sucesso! <a href='login.php' class='alert-link'>Clique aqui</a> para fazer login
      </div>
    <?php elseif($erro): ?>
      <div class='alert alert-danger' role='alert'>
        Erro ao cadastrar usuário! Por favor, contate um administrador!
      </div>
    <?php endif;?>

  <?php endif;?>
<a href="../index.php"><h1 class="text-light login-title">INFOPOLITIZADO!</h1></a>
    <div class="main p-4">
    <h1 class=" text-dark" >REGISTRO</h1>
      <form method=POST action="">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
              <span class="input-group-text" style='width:100px;'>Nome</span>
          </div>
          <input type="text" name="nome" class="form-control" placeholder="Seu nome" aria-describedby="basic-addon1" id="nome">
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
              <span class="input-group-text" style='width:100px;' id="basic-addon1">Usuário</span>
          </div>
          <input type="text" name="user" class="form-control" placeholder="Usuário para login"  id="login">
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
              <span class="input-group-text" style='width:100px;' id="basic-addon1">Senha</span>
          </div>
          <input type="password" name="senha" class="form-control" placeholder="Senha para login" id="senha">
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
              <span class="input-group-text" style='width:100px;' id="basic-addon1">Confirme</span>
          </div>
          <input type="password" name="confirmacao" class="form-control" placeholder="Confirme sua senha" id="confirmacao">
        </div>
        
        <div class="input-group mb-3">
          <div class="input-group-prepend">
              <span class="input-group-text" style='width:100px;' id="basic-addon1">E-mail</span>
          </div>
          <input type="text" name="email" class="form-control" placeholder="Seu e-mail" id="email">
        </div>


        <center><button type="submit" class="btn btn-primary" name="cadastrar">Cadastrar</button></center>
      </form>
    </div>
</body>
</html>