$( document ).ready(function(){
	//-
	$(".nav-link").on("click",function(){
		//alert("Diste click en el menu...");
		var enlace = $(this).attr('enlace');
		$("#contenido").load(enlace);
		$("body").attr("link",enlace);
		//alert(enlace);
	});

	$(".prueba").on("click",function(){
		alert("Diste click en el menu...");
		/*var enlace = $(this).attr('enlace');
		$("#contenido").load(enlace);
		//alert(enlace);*/
	});
});