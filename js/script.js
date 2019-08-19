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
					 
                    localStorage['datos-usuarios']=data.datos_usuario; 
					$("#btnInicio").remove();
					
					$("#navbarSupportedContent").append('<a  class="nav-link" style="color: white; font-size: 17px" >'+data.datos_usuario.nombre+'</a>');
					$("#BtnEntrar").attr("data-dismiss", "modal");
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
					alert('registro correcto :>)');
		            location.reload(); 			 
				} else {
					/*FALLO DE DATOS*/
					console.log('fallo durante el registro');
					console.log(data.error);
				}
			}
		});//ajax
	});

});