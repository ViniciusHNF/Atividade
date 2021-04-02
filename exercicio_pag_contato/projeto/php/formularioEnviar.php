<?php 

if(isset($_POST['enviar'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $fone = $_POST['fone'];
    $mensagem = $_POST['mensagem'];

    date_default_timezone_set('America/Sao_Paulo');
    $momento = date('Y-m-d H:i:s');   

    $sql = $pdo->prepare("INSERT INTO `mensagens` VALUES(null,?,?,?,?,?,?)");
    $sql->execute(array($nome,$email,$endereco,$fone,$mensagem,$momento));

    echo '<span id="mensagem_enviada" class="oculto"></span>';
    
}

?>