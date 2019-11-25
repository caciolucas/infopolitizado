<?php
function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
  }

require_once '../php/connect.php';
$id= $_GET['id'];
session_start();

if ($_SESSION['admin']==1){
    $sql= "SELECT * from usuarios WHERE usuarioID= '$id'";
    $usuarios= mysqli_query($conn,$sql);
    $dados= mysqli_fetch_array($usuarios);

    $opcao=0;

    if ($dados['admin']==1) {
        $sql2= "UPDATE usuarios SET admin=0 WHERE usuarioID= '$id'";
        $opcao=1;
    }else{
        $sql2= "UPDATE usuarios SET admin=1 WHERE usuarioID= '$id'";
        $opcao=2;
    }
    $res= mysqli_query($conn, $sql2);
}



?>
    <form method='POST' action='listausuarios.php' id='form_confirmado'>
    <input type='hidden' name='alterado' value='<?php echo $opcao?>'>
    <input type='hidden' name='nome_usuario' value='<?php echo $dados['usuario']?>'> 
    </form>
    <script type="text/javascript">
        document.getElementById('form_confirmado').submit(); // SUBMIT FORM
    </script>