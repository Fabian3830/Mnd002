$(function () {

	$("#btnInicio").click(function (e) {
		$("#login-form").delay(100).fadeIn(100);
		$("#register-form").fadeOut(100);
		e.preventDefault();
	});
	$("#btnSesion").click(function (e) {
		$("#login-form").delay(100).fadeIn(100);
		$("#register-form").fadeOut(100);
		e.preventDefault();
	});
	$('#Registro').click(function (e) {
		$("#register-form").delay(100).fadeIn(100);
		$("#login-form").fadeOut(100);
		e.preventDefault();
	});

	$("#BtnEntrar").click(function () {

		form = $("#login-form");
		console.log('llega');
		$.ajax({
			type: "post",
			dataType: "json",
			url: "procesa.php",
			data: form.serialize() + "&accion=login",
			success: function (data) {
				if (data.valido) {
					/*INICIOO SESION */
					console.log(data)
					console.log(data.datos_usuario)
				} else {
					/*FALLO DE DATOS*/
					console.log('NOLOOOOOOOOOOOOOOOOOOOO')
				}
			}
		});//ajax
	});


});