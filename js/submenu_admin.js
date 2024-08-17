$( document ).ready(function(){
	//alert("Prueba");
	//-
	$(".submenu").on("click",function(){
		var enlace = $(this).attr('enlace');
		$("#contenido").load(enlace);
		//alert(enlace);
	});
});