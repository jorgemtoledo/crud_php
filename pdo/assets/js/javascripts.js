$('#formCadastrar').on('submit', function(event) {
	event.preventDefault();
	var dados = $(this).serialize();

	$.ajax({
		url: 'controllers/ControllerCadastrar.php',
		type: 'post',
		dataType: 'html',
		data: dados,
		success: function(dados) {
			$('.resultado').show().html(dados);
		}
	});
});

/* Confirmar antes de deletar os dados */
$('.deletar').on('click', function(event) {
	event.preventDefault();

	var link = $(this).attr('href');

	if (confirm('Deseja mesmo apagar esse dado?')) {
		window.location.href = link;
	} else {
		return false;
	}
});
