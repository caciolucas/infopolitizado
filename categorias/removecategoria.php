<?php 

require_once '../php/connect.php';
session_start();

if (!isset($_SESSION['logado']) || $_SESSION['logado']==false) {
    echo '<script>window.location.replace("index.php");</script>';   
}else{
if ($_SESSION['admin']==1) {
    $id=$_POST['id'];

    $sql_delete_categoria="DELETE FROM categorias WHERE categoriasID='$id'";
    $res= mysqli_query($conn, $sql_delete_categoria);

        
    
?>
    <form method='POST' action='listacategorias.php' id='form_confirmado'>
    <input type='hidden' name='apagado' value='<?php if($res): ?>1<?php else: ?>0<?php endif; ?>'>
    </form>
    <script type="text/javascript">
        document.getElementById('form_confirmado').submit(); // SUBMIT FORM
    </script>
<?php };}?>