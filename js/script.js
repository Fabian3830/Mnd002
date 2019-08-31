


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
	$(document).on("click", "#BtnEntrar", function () {

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
					localStorage['id_cliente'] =data.datos_usuario.Id;
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






	$(document).on("click", "#logout", function () {

		localStorage['login'] = false;
		localStorage['datos_usuarios'] = undefined;
		$("#quark").remove();
		$("#logout").remove();
		var aa = "document.getElementById('titulo').innerHTML = 'Inicia tu sesión!'";
		$("#navbarSupportedContent").append('<a  href=""  class="nav-link" style="color: white; font-size: 17px" data-toggle="modal" data-target="#Sesion" id="btnInicio" onclick=" ' + aa + ' ">Iniciar Sesión</a>');
	});


	$(document).on("click", "#confirma_compra", function () {
		if ("login" in localStorage) {

			if (localStorage["login"] == 'true') {
				form = $("#emptyf");
				
				$.ajax({
					type: "post",
					dataType: "json",
					url: "procesa.php",
					data: form.serialize() + "&id_cliente="+localStorage['id_cliente']+"&datos="+localStorage["carrito"]+"&accion=comprar",
					success: function (data) {
						
						
					if (data.valido) {
							window.alert('se compro');
						} else {
							window.alert('no se compro');
						}
					}
				});//ajax
			} else {
				window.alert('no has iniciado sesion');
			}
		} else {

			window.alert('no has iniciado sesion');
		}
		 
	});



});



function articulo(nombre, ide, cant) {
	this.nombre = nombre;
	this.ide = ide;
	this.cant = cant;
}


function agregar(elemento) {

	//JSON.parse(text);  JSON->JS
	//JSON.stringify();  JS->JSON
	var arrayDeCadenas = $(elemento).data('value').split('-');
	//window.alert(arrayDeCadenas);
	if ("carrito" in localStorage) {

		var yare = new articulo(arrayDeCadenas[0], arrayDeCadenas[1], 1);
		var daze = JSON.parse(localStorage['carrito']);
		localStorage['carrito'] = JSON.stringify([yare].concat(daze));

	} else {
		var yare = new articulo(arrayDeCadenas[0], arrayDeCadenas[1], 1);
		localStorage['carrito'] = JSON.stringify([yare]);
	}
}


function miFuncion() {
	if ("carrito" in localStorage) {

		var arrayx = JSON.parse(localStorage['carrito']);

		//console.log(arrayx)


		$(".dropdown-divider").remove();
		$(".dropdown-item").remove();
		arrayx.forEach(item => {
			$("#poep").append('<div  class="dropdown-divider"></div>');
			$("#poep").append('<a   class="dropdown-item" href="#">' + item.nombre + '</a>');

		});


	} else {
		//no hace nada

	}


}