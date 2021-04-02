<?php 

if(isset($_POST['botao_login'])){
    $login_usuario = $_POST['login_usuario'];
    $login_senha = $_POST['login_senha'];

    $sql = $pdo->prepare("SELECT * FROM `usuarios` WHERE `nome_usuario` = ? AND `senha_usuario` = ?");
    $sql->execute(array($login_usuario,$login_senha));
    $resultado_busca = $sql->fetchAll();
    $quantidade_usuarios = count($resultado_busca);

    if($quantidade_usuarios == 1){
        foreach ($resultado_busca as $key => $value) {}
        $_SESSION['logado'] = true;
        $_SESSION['usuario'] = $value['nome_usuario'];
        echo "<meta HTTP-EQUIV='refresh' CONTENT='0'>";
    }else{
        echo '<div class="alert alert-danger" style="text-align: center;" role="alert">';
        echo "Usuário ou senha incorreto!";
        echo '</div>';
    }

    
}

?>