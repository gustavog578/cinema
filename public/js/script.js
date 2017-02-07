$(document).ready(function(){

	$("#registro").click(function(){
		var dato = $("#genre").val();
		var route = '../genero';
		var token = $("#token").val();
		$.ajax({
			url: route,
			headers: {'X-CSRF-TOKEN': token},
			type: 'POST',
			dataType: 'json',
			data:{genre: dato},
			success:function(){
				$("#msj-success").fadeIn();
			},
			error:function(msj){
				$("#msj").html(msj.responseJSON.genre);
				$("#msj-error").fadeIn();

			}
		});
	});

	$("#registroIdioma").click(function(){

		var data = $("#idioma").val();
		var route = '../idioma';
		var token = $("#token").val();

		$.ajax({
			url : route,
			headers: {'X-CSRF-TOKEN': token},
			type: 'POST',
			dataType: 'json',
			data:{name: data},
			success:function(){
				$("#msj-success").fadeIn();
			},
			error:function(){
				$("#msj").html(msj.responseJSON.idioma);
				$("#msj-error").fadeIn();
			}
		});
});

})