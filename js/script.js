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

	$("#BtnEntrar").click(function (e) {

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
					/*<a href="" class="nav-link" style="color: white; font-size: 17px" 
					data-toggle="modal" data-target="#Sesion" id="btnInicio" 
					onclick="document.getElementById('titulo').innerHTML = 'Inicia tu sesión!'">Iniciar Sesión</a>
                    */                
                    
					$("#btnInicio").remove();
					
					$("#navbarSupportedContent").append('<a href="" class="nav-link" style="color: white; font-size: 17px" data-toggle="modal" data-target="#Sesion" id="btnInicio">'+data.datos_usuario.nombre+'</a>');

				} else {
					/*FALLO DE DATOS*/
					console.log('NOLOOOOOOOOOOOOOOOOOOOO')
				}
			}
		});//ajax
		$("#Sesion").modal('hide');
	});



	$("#BtnRegisrtar").click(function () {

		form = $("#register-form");
		console.log('llega');
		$.ajax({
			type: "post",
			dataType: "json",
			url: "procesa.php",
			data: form.serialize() + "&accion=registrar",
			success: function (data) {
				if (data.valido) {
					/*registro correcto */
					console.log(data);
					console.log('registro correcto');
					 
				} else {
					/*FALLO DE DATOS*/
					console.log('fallo durante el registro');
					console.log(data.error);
				}
			}
		});//ajax
	});

});