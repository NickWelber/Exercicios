/* FUNÇÕES PARA MODAL E LOGIN */
$(function(){

  var url = "http://localhost/Jheni_Unhas";

/* FUNÇÔES MODAL CADASTRAR SERVICO */
  function addServico(id_servico, id_categoria_servico, nome_servico, preco_servico, data_servico) {

      var $servico = $("<tr />").addClass("servico-item")
                    .append($("<td />").addClass("servico-id").text(id_servico))                      
                    .append($("<td />").addClass("servico-id_categoria_servico").text(id_categoria_servico))
                    .append($("<td />").addClass("servico-nome_servico").text(nome_servico))
                    .append($("<td />").addClass("servico-preco_servico").text(preco_servico))
                    .append($("<td />").addClass("text-center")
                        .append($("<div />").addClass('servico-edit')
                          .append($("<i />").addClass("material-icons text-warning")
                            .attr("data-toggle","tooltip").attr("title", "Editar")
                            .text("create")
                          )
                        )
                        .append($("<div />").addClass('servico-delete')
                            .append($("<i />").addClass("material-icons text-danger")
                              .attr("data-toggle","tooltip").attr("title", "Excluir")
                              .text("delete")
                            )
                        )
                      )
                      .append($("<td />").addClass("servico-data_servico").text(function(){
                        // Convert 'yyyy-mm-dd hh:mm:ss' to 'dd/mm/yyyy hh:mm:ss'
                        return data_servico.replace(/^(\d{4})-(\d{2})-(\d{2})/, '$3/$2/$1');
                      }));

    $("#servico-list").append($servico);
    $('.servico-delete').click(onServicoDeleteClick);
    $('.servico-edit').click(onServicoEditClick);
    $('[data-toggle="tooltip"]').tooltip();
  }
  

/* FUNÇÔES MODAL CADASTRAR SERVICO */
function addAgenda(id_agenda, data_servico, horario_servico, situacao, id_venda, 
    id_servico, id_cliente, id_manicure) {
  var $agenda = $("<tr />") .addClass("agenda-item") 
    .append($("<td />") .addClass("agenda-id") .text(id_agenda))
    .append($("<td />")
        .addClass("agenda-data_servico")
        .text(function () {
          // Convert 'yyyy-mm-dd hh:mm:ss' to 'dd/mm/yyyy hh:mm:ss'
          return data_servico.replace(/^(\d{4})-(\d{2})-(\d{2})/, '$3/$2/$1');
    }))
    .append($("<td />") .addClass("agenda-horario_servico") .text(horario_servico))
    .append($("<td />") .addClass("agenda-situacao") .append($("<span />")
        .addClass(function () {
          switch (situacao) {
            case "1":
              return "badge badge-primary";
            case "2":
              return "badge badge-warning";
            case "3":
              return "badge badge-success";
          }
        })
        .text(function () {
          switch (situacao) {
            case "1":
              return "PENDENTE";
            case "2":
              return "CANCELADO";
            case "3":
              return "FINALIZADO";
          }
        }))
    )
    .append($("<td />") .addClass("agenda-id_venda") .text(id_venda))
    .append($("<td />") .addClass("agenda-id_servico") .text(id_servico))
    .append($("<td />") .addClass("agenda-id_cliente") .text(id_cliente))
    .append($("<td />") .addClass("agenda-id_manicure") .text(id_manicure))
    .append($("<td />")
    .addClass("text-center") .append($("<div />")
        .addClass('agenda-change-status') .append($("<i />")
          .addClass("material-icons text-success")
          .attr("data-toggle", "tooltip")
          .attr("title", "Mudar status")
          .text("check")
        ))
      .append($("<div />")
        .addClass('agenda-edit') .append($("<i />")
          .addClass("material-icons text-warning")
          .attr("data-toggle", "tooltip")
          .attr("title", "Editar")
          .text("create")
        ))
      .append($("<div />") 
        .addClass('agenda-delete') .append($("<i />")
          .addClass("material-icons text-danger")
          .attr("data-toggle", "tooltip")
          .attr("title", "Excluir")
          .text("delete")
        )
      )
    );

  $('#agenda-list').append($agenda);
  $('.agenda-delete').click(onAgendaDeleteClick);
  $('.agenda-change-status').click(onAgendaChangeStatusClick);
  $('.agenda-edit').click(onAgendaEditClick);
  $('[data-toggle="tooltip"]').tooltip();
}

/* FUNÇÃO LOGOUT */
  function onBtnLogoutClick(){
    $.get(url + "/logout.php")
      .done(function(){
        alert('Logout realizado com sucesso!');
        window.location.href = "login.php";
      });
  }

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
  function onServicoDeleteClick() {
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


    $('#id_servico').val(id_servico);
    $('#id_categoria_servico').val(id_categoria_servico);
    $('#nome_servico').val(nome_servico);
    $('#preco_servico').val(preco_servico);
    $('#data_servico').val(data_servico);
    $('#NovoServico').modal();

  }

  /* FUNÇÂO EDITAR AGENDA */
  function onServicoEditClick() {
    var linha = $(this).closest('.agenda-item');
    var id_agenda = linha.children(".agenda-id_agenda").text();
    var data_servico = linha.children(".agenda-data_servico").text();
    var horario_servico = linha.children(".agenda-horario_servico").text();
    var situacao = linha.children(".agenda-situacao").text();
    var id_venda = linha.children(".agenda-id_venda").text();
    var id_servico = linha.children(".agenda-id_servico").text();
    var id_cliente = linha.children(".agenda-id_cliente").text();
    var id_manicure = linha.children(".agenda-id_manicure").text();


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

  $('#btnLogout').click(onBtnLogoutClick);

// limpar o modal quando for fechado
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

// buscar itens
  $('#busca').typeahead({
    source: function (query, result) {
      $.ajax({
        url: url + "/buscar_servico.php",
        data_servico: { query: query, id_servico: $.cookie("id_servico") },
        dataType: "json",
        type: "POST",
        success: function (data_servico) {
          result($.map(data_servico, function (item) {
            return item;
          }));
        }
      });
    }
  });

  function onBtnBuscarClick() {
    $("#servico-list").empty();
    var id_categoria_servico = $('#busca').val();
    $.getJSON(url + "/buscar_servico.php",
      { query: id_servico, nome_servico: $.cookie("nome_servico") })
      .done(function (data_servico) {
        if (data_servico.length > 0) {
          for (var servico = 0; servico < data_servico.length; servico++) {
            addServico(data_servico[servico].id_servico, data_servico[servico].id_categoria_servico, 
              data_servico[servico].nome_servico, data_servico[servico].preco_servico, data_servico[servico].data_servico);
          }
        } else {
          loadServico();
        }
      });
  }

  $('#btnBuscar').click(onBtnBuscarClick);
  loadServico();
});

$(document).ready(function() {

/*-- SCROLL ANIMADO PARA SEÇÕES --*/
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

/*-- Carrinho e ADICONAR --*/
  var carrinho = new Array();
  var formaPagamento;
  var id_usuario = new Array();

  function comprar(nome, valor){
    var produto = [nome, valor]

    carrinho.push(produto);
    alert("ADD = " +carrinho);
}