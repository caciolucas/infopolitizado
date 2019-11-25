<?php
require_once 'connect.php';
if (isset($_POST['novacategoria'])) {
    $categoria = mysqli_escape_string($conn, $_POST['categoria']);
    if (empty($categoria)){
        echo'<div class="alert alert-danger" role="alert">Atenção, preencha todos os campos!</div>';
        
      }
}
?>