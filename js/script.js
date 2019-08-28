$(function () {




	if ("login" in localStorage) {

		//alert(localStorage["login"]);
		if (localStorage["login"] == 'true') {

			$("#btnInicio").remove();
			if ($("#quark").length) {
				// hacer algo aquí si el elemento existe
			} else {
				$("#navbarSupportedContent").append('<a  class="nav-link" style="color: white; font-size: 17px" id="quark" >' + localStorage['datos_usuarios'] + '</a>');
			}
			if ($("#logout").length) {
				// hacer algo aquí si el elemento existe
			} else {
				$("#navbarSupportedContent").append('<button type="submit" class="btn btn-primary my-auto" style="width: 80px; height: 47px" id="logout" ><label class="mb-0" style="font-size: 18px">logout</label> </button>');
			}
			
			
			

		}


	}

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

	//$(document).on("click", "#logout", function () {
	$(document).on("click", "#BtnEntrar",function () {

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
					//console.log(data);

					localStorage['datos_usuarios'] = data.datos_usuario.nombre;
					//console.log(localStorage['datos_usuarios']);
					localStorage['login'] = true;

					$("#btnInicio").remove();
					$("#navbarSupportedContent").append('<a  class="nav-link" style="color: white; font-size: 17px" id="quark" >' + localStorage['datos_usuarios'] + '</a>');
					$("#navbarSupportedContent").append('<button type="submit" class="btn btn-primary my-auto" style="width: 80px; height: 47px" id="logout" ><label class="mb-0" style="font-size: 18px">logout</label> </button>');
					$("#Sesion").modal('hide');
					//location.reload();
				} else {
					/*FALLO DE DATOS*/
					console.log('NOLOOOOOOOOOOOOOOOOOOOO');
				}
			}
		});//ajax

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




	/*$("#logout").click(function () {
		alert('OK');

		localStorage['login'] = false;
		localStorage['datos_usuarios'] = undefined;
		/*
		$.ajax({
			type: "post",
			dataType: "json",
			url: "procesa.php",
			data: "accion=registrar",
			success: function (data) {
				
			}
		});
		$("#quark").remove();
		$("#logout").remove();
		var aa = "document.getElementById('titulo').innerHTML = 'Inicia tu sesión!'";
		$("#navbarSupportedContent").append('<a  href=""  class="nav-link" style="color: white; font-size: 17px" data-toggle="modal" data-target="#Sesion" id="btnInicio" onclick=" ' + aa + ' ">Iniciar Sesión</a>');
		//location.reload();
	});*/

	$(document).on("click", "#logout", function () {
		
		localStorage['login'] = false;
		localStorage['datos_usuarios'] = undefined;
		$("#quark").remove();
		$("#logout").remove();
		var aa = "document.getElementById('titulo').innerHTML = 'Inicia tu sesión!'";
		$("#navbarSupportedContent").append('<a  href=""  class="nav-link" style="color: white; font-size: 17px" data-toggle="modal" data-target="#Sesion" id="btnInicio" onclick=" ' + aa + ' ">Iniciar Sesión</a>');
	});
});
