<?php
function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
  };
    require_once 'php/connect.php';
    session_start();
    
    if (!isset($_SESSION['logado']) || $_SESSION['logado']==false) {
        echo '<script>window.location.replace("index.php");</script>';   
    }  
    $id=$_POST['id'];
    if (!isset($_POST['enviado'])) {
        echo '<script>window.location.replace("index.php");</script>';   
    }
    $sql2="SELECT perguntaID, resposta_Certa from perguntas where perguntas.quiz=$id";
    $results= ($conn->query($sql2));

    $ver=$results->fetch_all();
    
    $perguntas=array();

    foreach ($ver as $i => $value) {
        $perguntas[$value[0]]=$value[1];
    }


    $respostas= array();
    foreach ($_POST as $key => $value) {
        if (array_key_exists($key,$perguntas)) {
            $respostas[$key]=$value;
        }
    }

    $total=count($perguntas);
    $n_resposta=count($respostas);
    

    $erro=0;
    if ($total!=$n_resposta){
        $erro=1;
    }else{
        $acertos=0;
        foreach ($respostas as $id_pergunta => $resposta_escolhida) {
            if($perguntas[$id_pergunta]==$resposta_escolhida){
                $acertos++;
            }
        }
        $porcentagem=$acertos/count($perguntas);
    }

?>

<?php if ($erro==1):?>
<form method='POST' action='playquiz.php' id='form_erro'>
    <input type='hidden' name='erro'>
    <input type='hidden' name='id' value='<?php echo $id?>'>
</form>
    <script type="text/javascript">
        document.getElementById('form_erro').submit(); // SUBMIT FORM
    </script>
<?php else:?>

    <form method='POST' action='showresults.php' id='form_sucesso'>
    <input type='hidden' name='acertos' value='<?php echo $acertos?>'>
    <input type='hidden' name='porcentagem' value='<?php echo $porcentagem?>'>
    <input type='hidden' name='quizid' value='<?php echo $id?>'>
</form>
    <script type="text/javascript">
        document.getElementById('form_sucesso').submit(); // SUBMIT FORM
    </script>


<?php endif;?>