//Estructura básica de código jquery

/*$(document).ready(function(){
    alert("HOLA")
});*/

/*$(document).ready(function(){
    $('label').on('click',function(event){
        alert("Clic en una etiqueta");
    });
});*/

$(document).ready(function(){
    $('#login').on('submit',function(event){
        event.preventDefault();
        //alert("Envío del formulario");
        var usuario=$('#usuario').val();
        var contrasena=$('#contrasena').val();
       
        //alert("El usuario que ingresaste es: "+usuario);
        //alert("La contraseña que ingresaste es: "+contrasena);
        
        $.post("php/login.php",{usuario:usuario,contrasena:contrasena},
            function (respuesta) {
                //alert(respuesta);
            if (respuesta=='0'){
                swal({text:"Error al iniciar sesión",icon:"warning"});
                $('#usuario').val('');
                $('#contrasena').val('');
                $('#usuario').focus();
            }else if(respuesta=='1'){
                url="php/menu.php";
                $(location).attr('href',url);
            }
                
            });
    });
});