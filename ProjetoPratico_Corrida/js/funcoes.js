$(function(){
//-- Deixar Salvar os valores do Input --//
	var $ultimoClicado;
  var editando=false;

  document.getElementById("button").addEventListener("click", function(event){
    event.preventDefault()
  });

//-- Botão de Excluir --//
  function deletarCorrida(){
		$(this).parent('.corrida')
			.off('click')
			.hide('slow', function(){
				$(this).remove();
			});
  }

//-- Deixar Editar os valores --//
	function editarColuna(){
		editando=true;
    $ultimoClicado=$(this);
    var km=$ultimoClicado.children('.km').text();
		var minutos=$ultimoClicado.children('.minutos').text();
    var calorias=$ultimoClicado.children('.calorias').text();
    $('#km').val(km);
		$('#minutos').val(minutos);
		$('#calorias').val(calorias);
  }
  
//-- Deixar Salvar os valores Editados --//
	function salvarCorrida(){
    var km=$('#km').val();
		var minutos=$('#minutos').val();
		var calorias=$('#calorias').val();
		var $corrida;
		if(editando){
			$corrida=$ultimoClicado;
			$corrida.empty();
			editando=false;
			$ultimoClicado=undefined;
      $corrida
        .append($('<td>').addClass('km').text(km))
        .append($('<td>').addClass('minutos').text(minutos))						
        .append($('<td>').addClass('calorias').text(calorias))
        .append($('<td>').addClass('delete'));
		}else{
      $corrida=$('<tr>').addClass('corrida')
        .append($('<td>').addClass('km').text(km))
        .append($('<td>').addClass('minutos').text(minutos))
        .append($('<td>').addClass('calorias').text(calorias))
        .append($('<td>').addClass('delete'));
			$('#corridas').append($corrida);
    }

//-- Reconecer as Class e ID nas edições e na exclusão --//
    $('#km').val('');
		$('#minutos').val('');
		$('#calorias').val('');		
		$('.corrida').click(editarColuna);
		$('.delete').click(deletarCorrida);
  }
	$('#button').click(salvarCorrida);
  $('.corrida').click(editarColuna);
  $('.delete').click(deletarCorrida);
});