// Editar categoria
$(".tablas").on("click","btnEditarCategoria", function(){
    var idCategoria = $(this).attr("idCategoria");
    var datos = new FormData();
    datos.append("idCategoria",idCategoria);
    $.ajax({
        url: "ajax/categoria.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType:"json",
        success: function(respuesta){
            $("#editarCategoria").val(respuesta["nombre"]);
            $("#idCategoria").val(respuesta["id"]);
        }
        
    })
})
