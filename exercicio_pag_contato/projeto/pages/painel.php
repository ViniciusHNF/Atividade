<?php

if(isset($_POST['sair'])){
    $_SESSION['logado'] = false;
    $_SESSION['usuario'] = "";
    echo "<meta HTTP-EQUIV='refresh' CONTENT='0'>";
}

$sql = $pdo->prepare("SELECT * from mensagens ORDER BY `data` DESC");
$sql->execute();
$busca = $sql->fetchAll();

?>

<section class="painel">
    <form method="post">
        <input type="submit" name="sair" value="Sair" class="btn btn-danger">
    </form>

    <?php 

    foreach ($busca as $key => $value) { 
        $data = date('d/m/Y  H:i:s', strtotime($value['data']));
        ?>
        
        <div class="card">
            <div class="card-header">
                <h3><?php echo $value['nome']; ?></h3>
            </div>
            <div class="card-body">
            <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Data</span>
                    </div>
                    <input type="text" class="form-control" placeholder="<?php echo $data; ?>" readonly>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">E-mail</span>
                    </div>
                    <input type="text" class="form-control" placeholder="<?php echo $value['email']; ?>" readonly>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Endereço</span>
                    </div>
                    <input type="text" class="form-control" placeholder="<?php echo $value['endereco']; ?>" readonly>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Fone</span>
                    </div>
                    <input type="text" class="form-control" placeholder="<?php echo $value['fone']; ?>" readonly>
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Mensagem</span>
                    </div>
                    <textarea class="form-control" aria-label="With textarea" readonly><?php echo $value['mensagem']; ?></textarea>
                </div>
            </div>
        </div>

    <?php } ?>

</section>