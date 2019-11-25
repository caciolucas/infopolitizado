<?php 

require_once '../php/connect.php';
session_start();

if (!isset($_SESSION['logado']) || $_SESSION['logado']==false) {
    echo '<script>window.location.replace("index.php");</script>';   
}else{
if ($_SESSION['admin']==1) {
    $id=$_POST['id'];

    $sql_delete_resposta="DELETE FROM respostas WHERE pergunta='$id'";
    $res= mysqli_query($conn, $sql_delete_resposta);
    $sql_delete_pergunta="DELETE FROM perguntas WHERE perguntaID='$id'";
    $res2= mysqli_query($conn, $sql_delete_pergunta);
        
    
?>
    <form method='POST' action='listaperguntas.php' id='form_confirmado'>
    <input type='hidden' name='apagado' value='<?php if($res && $res2): ?>1<?php else: ?>0<?php endif; ?>'>
    </form>
    <script type="text/javascript">
        document.getElementById('form_confirmado').submit(); // SUBMIT FORM
    </script>
<?php };}?>