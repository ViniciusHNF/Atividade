<?php 

    //Desenvolvido por Vinicius Henrique
    //https://viniciushnf.com/

    include('php/config.php');
    session_start();
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>ViniciusHNF</title>
    
    <!--Desenvolvido por Vinicius Henrique-->
    <!--https://viniciushnf.com/-->

    <meta name="author" content="Vinicius Henrique">
    <meta name="description" content="Sou um desenvolvedor Full Stack. Entre em contato e venha fazer um orçamento">
    
    <link rel="stylesheet" href="estilo/style.css">
    <link rel="shortcut icon" href="imagens/favicon.gif" type="image/x-icon">
    <!--CSS bootstrap--> <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    
<nav class="navbar navbar-dark bg-dark">
    <a href="https://viniciushnf.com">
        <img src="imagens/logo.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
    </a>
    <div class="dropdown">
        <a class="btn btn-secondary" href="https://viniciushnf.com" role="button">Home</a>
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Contato
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" target="_blanck" href="https://api.whatsapp.com/send?phone=5588981317675&text=Ol%C3%A1"><img src="imagens/whatsapp.png">Whatsapp</a>
            <a class="dropdown-item" target="_blanck" href="https://www.instagram.com/viniciushnf/"><img src="imagens/instagram.png">Instagram</a>
            <a class="dropdown-item" target="_blanck" href="mailto:contato@viniciushnf.com"><img src="imagens/email.png">Email</a>
        </div>
    </div>
</nav>


<?php 

if($url == 'painel'){
    if(isset($_SESSION['logado'])){
        if($_SESSION['logado']){
            include('pages/painel.php');
        }else{
            include('php/logar.php');
            include('pages/login.php');
        }
    }else{
        include('pages/login.php');   
    }
}else{
    include('pages/contato.php');
}

include('php/formularioEnviar.php');

?>


<footer>
    <h6>Desenvolvido por <a href="https://viniciushnf.com/" target="_blank">ViniciusHNF</a></h6>
</footer>

<script src="js/script.js"></script>

</body>
<!--Jquery bootstrap--><script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<!--JS bootstrap--> <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="    sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>