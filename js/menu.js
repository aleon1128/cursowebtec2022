$(document).ready(function(){
    //swal("Seleccionaste la opción semestres");
    $('#semestre').on('click', function (event) {
        event.preventDefault();
        //swal("Seleccionaste la opción semestres");
        $('#dinamico').load("menu_semestres.php");
    });
    $('#grupo').on('click', function (event) {
        event.preventDefault();
        //swal("Seleccionaste la opción grupos");
        $('#dinamico').load("grupos.php");
    });
    $('#materia').on('click', function (event) {
        event.preventDefault();
        //swal("Seleccionaste la opción materias");
        $('#dinamico').load("menu_materias.php");
    });
    $('#consulta').on('click', function (event) {
        event.preventDefault();
        //swal("Seleccionaste la opción consulta");
        $('#dinamico').load("consultas.php");
    });

    //Submenú agregar semestre
    $(document).on('click','#agregar_semestre', function (event) {
        event.preventDefault();
        //swal("Seleccionaste la opción Agregar periodo");
        $('#dinamico').load("formulario_semestres.php");
    });
    //Submenu consultar semestre
    $(document).on('click','#consultar_semestre', function (event) {
        event.preventDefault();
        //swal("Seleccionaste la opción Consultar semestre");
        $('#dinamico').load("../php/consulta_semestres.php");
    });

     //Submenú agregar materia
     $(document).on('click','#agregar_materia', function (event) {
        event.preventDefault();
        //swal("Seleccionaste la opción Agregar materia");
        $('#dinamico').load("formulario_materias.php");
    });
    //Submenu consultar materia
    $(document).on('click','#consultar_materia', function (event) {
        event.preventDefault();
        //swal("Seleccionaste la opción Consultar semestre");
        $('#dinamico').load("../php/consulta_materias.php");
    });

    //ENVIAR VARIABLES PARA AGREGAR SEMESTRE
    $(document).on('submit','#formulario_agregar_semestre', function (event) {
        event.preventDefault();
        //swal("Estás intentando enviar el formulario");
        //Envio de la información del formulario_semestres
        $.post("agregar_semestre.php", $('#formulario_agregar_semestre').serialize(),
            function (data) {
                //swal(data);
                if(data=="1"){
                    swal({text:"Semestre guardado correctamente",icon:"success"});
                    $('#dinamico').load("consulta_semestres.php");
                }else{
                    swal("Error","No se puede guardar semestre","error");
                }
            });
    });

    //ENVIAR VARIABLES PARA AGREGAR MATERIA
    $(document).on('submit','#formulario_agregar_materia', function (event) {
        event.preventDefault();
        //swal("Estás intentando enviar el formulario");
        //Envio de la información del formulario_semestres
        $.post("agregar_materia.php", $('#formulario_agregar_materia').serialize(),
            function (data) {
                //swal(data);
                if(data=="1"){
                    swal({text:"Materia guardada correctamente",icon:"success"});
                    $('#dinamico').load("formulario_materias.php");
                }else{
                    swal("Error","No se puede guardar la materia","error");
                }
            });
    });
    
    //Monitorea el evento de la clase switch_btn
    $(document).on('click','.switch_btn', function (event) {
        event.preventDefault();
        
        var id_semestre=$(this).attr("id_semestre");
        var status_update=$(this).attr("status_update");
        
        $.post("actualizar_estatus_semestre.php", {id_semestre:id_semestre,status_update:status_update},
            function (data, textStatus, jqXHR) {
                if (data=="1"){
                    $('#dinamico').load("consulta_semestres.php");        
                }else if(data=="0"){
                    swal("Error","No se puede actualizar el semestre","error");
                }else{
                    swal("Error", "No puede haber más de un semestre activo","error");
                }
            });
    });

});

/*$(document).ready(function(){
    $('label').on('click',function(event){
        alert("Clic en una etiqueta");
    });
});*/