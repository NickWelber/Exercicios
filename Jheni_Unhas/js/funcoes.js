/* FUNÇÕES PARA MODAL E LOGIN */
$(function(){

  var url = "http://localhost/Jheni_Unhas";  

/* FUNÇÃO LOGOUT */
  function onBtnLogoutClick(){
    $.get(url + "/logout.php")
      .done(function(){
        alert('Logout realizado com sucesso!');
        window.location.href = "login.php";
      });
  }

/* FUNÇÃO ALTERAR PERFIL */
    function onBtnAlterarPerfilClick(){
      alert('Função alterar perfil não aplicada! Desculpe Professores');
    };
  

/* FUNÇÂO DELETE SERVIÇO */
  function onServicoDeleteClick() {
    var linha = $(this).closest('.servico-item');

    linha
      .hide('slow', function () {
        var id_servico = linha.children(".servico-id_servico").text();
        $.post(url + "/remover_servico.php",
          { id_servico: id_servico },
        );
        linha.remove();
      });
  }

/* FUNÇÂO DELETE AGENDA */
  function onAgendaDeleteClick() {
    var linha = $(this).closest('.agenda-item');

    linha
      .hide('slow', function () {
        var id_agenda = linha.children(".agenda-id_agenda").text();
        $.post(url + "/remover_agenda.php",
          { id_agenda: id_agenda },
        );
        linha.remove();
      });
  }


/* FUNÇÂO EDITAR SERVIÇO */
  function onServicoEditClick() {
    var linha = $(this).closest('.servico-item');
    var id_servico = linha.children(".servico-id_servico").text();
    var id_categoria_servico = linha.children(".servico-id_categoria_servico").text();
    var nome_servico = linha.children(".servico-nome_servico").text();
    var preco_servico = linha.children(".servico-preco_servico").text();
    var data_servico = linha.children(".servico-data_servico").text();
/* console.log(id_servico); */

    $('#id_servico').val(id_servico);
    $('#id_categoria_servico').val(id_categoria_servico);
    $('#nome_servico').val(nome_servico);
    $('#preco_servico').val(preco_servico);
    $('#data_servico').val(data_servico);
    $('#NovoServico').modal();

  }

/* FUNÇÂO EDITAR AGENDA */
  function onAgendaEditClick() {
    var linha = $(this).closest('.agenda-item');
    var id_agenda = linha.children(".agenda-id_agenda").text();
    var data_servico = linha.children(".agenda-data_servico").text();
    var horario_servico = linha.children(".agenda-horario_servico").text();
    var situacao = linha.children(".agenda-situacao").text();
    var id_venda = linha.children(".agenda-id_venda").text();
    var id_servico = linha.children(".agenda-id_servico").text();
    var id_cliente = linha.children(".agenda-id_cliente").text();
    var id_manicure = linha.children(".agenda-id_manicure").text();
/* console.log(id_servico); */

    $('#id_agenda').val(id_agenda);
    $('#data_servico').val(data_servico);
    $('#horario_servico').val(horario_servico);
    $('#situacao').val(situacao);
    $('#id_venda').val(id_venda);
    $('#id_servico').val(id_servico);
    $('#id_cliente').val(id_cliente);
    $('#id_manicure').val(id_manicure);
    $('#NovaAgenda').modal();

  }

// LIMPAR MODAL QUANDO FECHADO
  $('#NovoServico').on('hidden.bs.modal', function () {
    $('#id_servico').val(0);
    $('#id_categoria_servico').val("");
    $('#nome_servico').val("");
    $('#preco_servico').val("");
    $('#data_servico').val("");
  });

  $('#NovaAgenda').on('hidden.bs.modal', function () {
    $('#id_agenda').val(0);
    $('#data_servico').val("");
    $('#horario_servico').val("");
    $('#situacao').val("");
    $('#id_venda').val("");
    $('#id_servico').val("");
    $('#id_cliente').val("");
    $('#id_manicure').val("");
  });


  $('.servico-delete').click(onServicoDeleteClick);
  $('.agenda-delete').click(onAgendaDeleteClick);
  $('.servico-edit').click(onServicoEditClick);
  $('.agenda-edit').click(onAgendaEditClick);
  $('#btnLogout').click(onBtnLogoutClick);
  $('#btnAlterarPerfil').click(onBtnAlterarPerfilClick);
});


$(document).ready(function() {

/*-- PAGINA INDEX SCROLL ANIMADO PARA SEÇÕES --*/
    let navBtn = $('.nav-item');
  
    let bannerSection = $('#mainSlider');
    let aboutSection = $('#about-area');
    let servicesSection = $('#services-area');
    let contactSection = $('#contact-area');
  
    let scrollTo = '';
  
    $(navBtn).click(function() {
      let btnId = $(this).attr('id');
  
      if(btnId == 'about-menu') {
        scrollTo = aboutSection;
      } else if(btnId == 'services-menu') {
        scrollTo = servicesSection;
      } else if(btnId == 'contact-menu') {
        scrollTo = contactSection;
      } else {
        scrollTo = bannerSection;
      }
  
      $([document.documentElement, document.body]).animate({
          scrollTop: $(scrollTo).offset().top - 70
      }, 1500);
    });
  
  });
  
/*-- VALIDAÇÃO DO FORMULARIO FALE CONOSCO --*/
function validaFaleConosco(){
  var celular = document.getElementById("celular").value;
  var celularRegExp = /^\(0[0-9]{2}\)9[0-9]{4}-[0-9]{4}$/;

  var telefone = document.getElementById("telefone").value;
  var telefoneRegExp = /^\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4}$/;

  var email = document.getElementById("email").value;

  if (!celularRegExp.test(celular)){
      document.getElementById("erroCelular").innerHTML = 
      "Celular em formato invalido.";
      return false;
  }
  if (!telefoneRegExp.test(telefone)){
    document.getElementById("erroTelefone").innerHTML = 
    "Telefone em formato invalido.";
    return false;
}
  if (email.indexOf("@") == -1 || email.indexOf(".") == -1){
      document.getElementById("erroEmail").innerHTML = 
          "E-mail Inválido.";
        return false;
  }
}

/*-- CARRINHO ADICONAR --*/
  var carrinho = new Array();
  var formaPagamento;
  var id_usuario = new Array();

  function comprar(nome, valor){
    var produto = [nome, valor]

    carrinho.push(produto);
    alert("ADD = " +carrinho);
}


