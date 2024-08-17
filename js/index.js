$( document ).ready(function(){
	//alert("Esto es jquery");

	//Sirve para ocultar o mostrar el parrafo Prueba_Click
	$('#switch').on("click",function(event) {
		//alert("Diste click en el parrafo");
		$('#prueba_click').toggle('slow');
	});

	//Funcion para iniciar sesión en el sistema
	$('#formulario_login').on("submit",function(e){
		e.preventDefault();
		var usuario = $('#usuario').val();
		var password = $('#password').val();
		$.post('scripts/login.php', {name:usuario,pass:password}, function(respuesta) {
		  //Inicia redireccionado de acuerdo si es correcto el login o no.

		  switch(respuesta){
		  	case "1":
		  		//alert("Regresó un 1");
		  		var admin = "scripts/menu_admin.php";
		  		$(location).attr('href',admin);
		  		break;
		  	case "2":
		  		var asistente = "scripts/menu_asistente.php";
		  		$(location).attr('href',asistente);
		  		break;
		  	case "3":
		  		//alert("Regresó un 3");
		  		swal("LOGIN", "Nivel de acceso inexistente", "warning");
		  		break;
		  	case "4":
		  		//alert("Regresó un 4");
		  		swal("LOGIN", "Password incorrecto", "error");
		  		break;
		  	case "5":
		  		//alert("Regresó un 5");
		  		swal("LOGIN", "Usuario no existe", "error");
		  		break;
		  	default:
		  		break;
		  }
		});
		
		//alert(usuario+"--"+password);
		//console.log("Enviaste el formulario");
	});
	
});