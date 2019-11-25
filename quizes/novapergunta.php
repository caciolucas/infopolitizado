<?php
require_once '../php/connect.php';
session_start();
function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
  }
if (isset($_POST['novapergunta'])) {
    if (empty($_POST['enunciado'])||empty($_POST['alternativaA'])||empty($_POST['alternativaB'])||empty($_POST['alternativaC'])||empty($_POST['alternativaD'])||empty($_POST['alt_correta'])){
        echo'<div class="alert alert-danger m-0" role="alert">Erro, preencha todos os campos para criar o quiz!</div>';
    }else {
        $nomeQuiz=$_POST['nomeQuiz'];
        $sql= "SELECT quizID from quizes WHERE titulo = '$nomeQuiz'";        
        $res= mysqli_query($conn, $sql);
        $quizID= mysqli_fetch_array($res)['quizID'];

        $enunciado = mysqli_escape_string($conn, $_POST['enunciado']);
        
        $alternativaA = mysqli_escape_string($conn, $_POST['alternativaA']);
        $alternativaB = mysqli_escape_string($conn, $_POST['alternativaB']);
        $alternativaC = mysqli_escape_string($conn, $_POST['alternativaC']);
        $alternativaD = mysqli_escape_string($conn, $_POST['alternativaD']);

        $alt_correta = mysqli_escape_string($conn, $_POST['alt_correta']);

        $sql="INSERT INTO perguntas (enunciado,quiz,resposta_certa) values ('$enunciado','$quizID','$alt_correta')";
        mysqli_query($conn,$sql);

        $sql= "SELECT perguntaID from perguntas WHERE enunciado = '$enunciado'";        
        $res= mysqli_query($conn, $sql);
        $perguntaID= mysqli_fetch_array($res)['perguntaID'];

        $sql= "INSERT INTO respostas (pergunta,alternativaA,alternativaB,alternativaC,alternativaD) values ('$perguntaID','$alternativaA','$alternativaB','$alternativaC','$alternativaD')";
        $res=mysqli_query($conn,$sql);
        
        

    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pergunta adicionada!</title>
    <script type="text/javascript">
    function submitform() {
        document.formulario.submit();
    }
</script>
</head>
<body>
    <form name='formulario' method='post' action='addquestions.php'>
        <input type='hidden' name='veio-de' value='<?php echo $_POST['veio-de']?>'>
        <input name='perguntajaadicionada' value='Nova pergunta' type='hidden'>
        <input type='hidden' name='nomeQuiz' value='<?php echo $nomeQuiz?>'>
    </form>
    <script>submitform()</script>
</body>
</html>