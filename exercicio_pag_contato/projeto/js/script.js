var mensagem_enviada = document.getElementById('mensagem_enviada');
if (mensagem_enviada != null) {
    var div_mensagem_sucesso = document.getElementById('mensagem_sucesso');
    div_mensagem_sucesso.classList.add('visivel');

    setTimeout(() => {
        div_mensagem_sucesso.classList.remove('visivel');
    }, 5000);

    mostrarLista();
}

function botao_enviar() {
    if (mensagem_enviada == null) {
        var div_mensagem_alerta = document.getElementById('mensagem_alerta');
        div_mensagem_alerta.classList.add('visivel');
    }
    setTimeout(() => {
        div_mensagem_alerta.classList.remove('visivel');
    }, 10000);
}

animacao_lista();
function animacao_lista() {
    var q = 1;
    animacaoLista();
    function animacaoLista() {
        if (q < 6) {
            var item_lista = document.getElementById('item_lista_' + q);
            setTimeout(() => {
                item_lista.classList.remove('oculto');
                setTimeout(() => {
                    item_lista.classList.add('amd');
                    q++;
                    animacaoLista();
                }, 1);
            }, 1000);
        }
    }
}

function mostrarLista() {
    for (var i = 1; i < 6; i++) {
        var item_lista = document.getElementById('item_lista_' + i);
        item_lista.classList.remove('oculto');
        item_lista.classList.add('amd');
    }
}