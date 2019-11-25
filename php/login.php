<?php
  require_once 'connect.php';
  session_start();

  function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
  }

  //$db = mysql_select_db("Dados_User");

    if (isset($_POST['entrar'])) {

      $user = mysqli_escape_string($conn, $_POST['user']);
      $senha=  mysqli_escape_string($conn, $_POST['senha']);
      console_log($user);

      if (empty($user) || empty($senha)) {
        echo '<div class="alert alert-danger" role="alert">Atenção, preencha todos os campos!</div>';
      }
      else {

        $sql= "SELECT usuario from usuarios WHERE usuario = '$user'";
        $res= mysqli_query($conn, $sql);
        
        $sql2= "SELECT usuario from usuarios WHERE email = '$user'";
        $res2= mysqli_query($conn, $sql2);
  

        if (mysqli_num_rows($res)>0 || mysqli_num_rows($res2)>0) {
          $senha = md5($senha);
          $sql= "SELECT * from usuarios WHERE usuario= '$user' AND senha='$senha'";
          $res= mysqli_query($conn, $sql);
          
          $sql2= "SELECT * from usuarios WHERE email= '$user' AND senha='$senha'";
          $res2= mysqli_query($conn, $sql2);

          if (mysqli_num_rows($res)==1 || mysqli_num_rows($res2)==1) {
            $dados= mysqli_fetch_array($res);
            if (empty($dados)){
              $dados= mysqli_fetch_array($res2);
            }
            console_log(gettype($dados));
            $_SESSION['logado']=true;
            $_SESSION['nome']= $dados['nome'];
            $_SESSION['id']= $dados['usuarioID'];
            $_SESSION['admin']= $dados['admin'];
            echo('<script>window.location.href = "../index.php"</script>');
            die();
          } else {
              echo"<script language='javascript' type='text/javascript'>
              alert('Senha incorreta!');</script>";
          }
        } else {
          echo"<script language='javascript' type='text/javascript'>
              alert('Dados errados!');</script>";
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
    <link rel="stylesheet" href="../main.css">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">

    <title>Login</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    

    <style>
      .main {
        width: 20vw;
        min-width:300px;
        margin: auto;
        margin-top: 20px;
        background: #ffff;
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
    <a href="../index.php"><h1 class="text-dark login-title"></h1></a>
    <div class="main p-4">
      <h1 class="text-dark">LOGIN</h1>
      <form method=POST action="">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <div class="input-group-text"><span class="fas fa-user" ></span></div>
          </div>
          <input type="text" name="user" class="form-control" placeholder="Usuário ou e-mail" id="login">
        </div>
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <div class="input-group-text"><span class="fas fa-key" ></span></div>
          </div>
          <input type="password" name="senha" class="form-control" placeholder="Senha" id="senha">
        </div>
        <center><button type="submit" class="btn btn-primary" name="entrar">Entrar</button></center>
      </form>
      <a href="register.php">Cadastre-se</a>
    </div>
</body>
</html>