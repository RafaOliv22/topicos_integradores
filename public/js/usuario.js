const atualiza = document.querySelector("#btnatualiza");
const salvar = document.querySelector("#btnsalvar");

const alerta = document.querySelector("#alerta");
const titulo = document.querySelector("#titulo");
const carregando = document.querySelector("#carregando");


$('#frmcliente').validate({
    
    rules: {
       
        nome: {
            minlength: 3
        },
        sobrenome: {
            minlength: 3
        },
    },
    
    errorElement: 'span',
    errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
        $(element).addClass('is-valid');
    }
});

async function lista_cliente() {
   
    const opt = {
        method: 'POST',
        mode: 'cors',
        cache: 'default'
    }
   
    const response = await send('dadousuario.php', opt);
    
    const html = await response.text();
   
    document.getElementById('dados').innerHTML = html;
}

async function inserir() {
    const form = document.querySelector("#frmcliente");
    const formData = new FormData(form);
    
    const opt = {
        method: "POST",
        mode: 'cors',
        body: formData,
        cache: 'default'
    }
    const response = await fetch('usuario.php', opt);
    const dados = await response.text();
    console.log(dados);
    console.log(dados);
    
    if (dados == 'true') {
    
        alerta.className = 'alert alert-success';
        titulo.className = 'mb-0';
        titulo.innerHTML = `<p>Cadastro realizado com sucesso!`;
    
        carregando.className = 'mb-0 d-none';
        lista_cliente();
    
        setTimeout(() => {
    
            $("#cadastrocliente").modal('hide');
            $("#frmcliente input").val('');
            $("#alerta").removeClass('alert alert-success');
            $('#alerta').addClass('alert alert-warning');
            $("#titulo").removeClass('d-none');
            $("#titulo").addClass('mb-0');
            titulo.innerHTML = `
            <h6 class="alert-heading">Atenção!</h6>
            Todos os campos com <span class="text-danger"> * </span> 
            são obrigatórios para o
            cadastro!`;
        }, 1000);
    } else {
        titulo.className = `mb-0`;
        titulo.innerHTML = `<p>${dados}</p>`;
    }
}

document.addEventListener("DOMContentLoaded", function () {
    lista_cliente();
});

atualiza.addEventListener('click', async function () {
    lista_cliente();
});

salvar.addEventListener('click', function () {

    const valida = $('#frmcliente').valid();

    if (valida == true) {
        alerta.className = 'alert alert-primary';
        titulo.className = 'd-none';
        carregando.className = 'mb-0';
        setTimeout(() => {
            inserir();
        }, 500);
    }
});

$("#cpf").inputmask({
    mask: '999.999.999-99'
});

