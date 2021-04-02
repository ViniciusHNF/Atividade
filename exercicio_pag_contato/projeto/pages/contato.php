<style>
    
    @media screen and (min-height: 715px){
    footer{
        position: absolute;
    }
}
</style>

<section class="contato">

    <div class="alert alert-success mensagem_sucesso oculto" role="alert" id="mensagem_sucesso">
        A mensagem foi enviada com sucesso!
    </div>
    <div class="alert alert-warning mensagem_sucesso oculto" role="alert" id="mensagem_alerta">
        Preencha todos os campos para poder enviar a mensagem! <br>
        Obs: Preencha com um E-mail válido
    </div>

    <h3>ENTRE EM CONTATO CONOSCO</h3>

    <div class="formulario">
        <div class="titulo">
            <h4>Mande-nos uma mensagem</h4>
        </div>

        <form method="post">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Nome:</span>
                </div>
                <input type="text" class="form-control" name="nome" required>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Email:</span>
                </div>
                <input type="email" class="form-control" name="email" required>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Endereço:</span>
                </div>
                <input type="text" class="form-control" name="endereco" required>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Fone:</span>
                </div>
                <input type="tel" class="form-control" name="fone" required>
            </div>

            <div class="input-group-prepend textarea">
                <span class="input-group-text">Mensagem</span>
            </div>
            <textarea name="mensagem" class="form-control" required></textarea>

            <a class="btn btn-warning" href="" role="button">Limpar campos</a>
            <input type="submit" name="enviar" value="Enviar" class="btn btn-primary" onclick="botao_enviar();">
            <div class="clear"></div>
        </form>
    </div>

    <div class="boxr">
        <div class="titulo">
            <h4>Mais informações</h4>
        </div>

        <div class="lista">
            <ul>
                <li class="oculto" id="item_lista_1">Horário de funcionamento: de 8 as 16h</li>
                <li class="oculto" id="item_lista_2">Outros canais de atendimento:</li>
                <ul>
                    <li class="oculto" id="item_lista_3"><a href="tel:+5588981317675"><img src="imagens/tel.png"> Tel: +55 88 98131-7675</a></li>
                    <li class="oculto" id="item_lista_4"><a href="https://api.whatsapp.com/send?phone=5588981317675&text=Ol%C3%A1"><img src="imagens/whatsapp.png"> Whatsapp: 88981317675</a></li>
                    <li class="oculto" id="item_lista_5"><a href="mailto:contato@viniciushnf.com"><img src="imagens/email.png"> Email: contato@viniciushnf.com</a></li>
                </ul>
            </ul>
        </div>

    </div>

    <div class="clear"></div>
    
</section>