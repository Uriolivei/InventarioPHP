<div id="contenido-principal" class="content-wrapper">
</div>

// SideBar Menu
$('.siderbar-menu').tree()
// Data Table
$(".tablas").DataTable({
    "language":{
        "sProcessing":      "Procesando...",
        "sLengthMenu":      "Mostrar_MENU_registros",
        "sZeroRecords":     "No se encontraron resultados",
        "sEmptyTable":       "Ningún dato disponible en esta tabla",
        "sInfo":            "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
        "sInfoEmpty":       "Mostrando registros del 0 al 0 de un total de 0",
        "sInfoFiltered":    "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix":     "",
        "sSearch":          "Buscar:",
        "sUrl":             "",
        "sInfoThousands":   ",",
        "sLoadingRecords":  "Cargando...",
        "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
        },
        "oAria": {
            "sSortAscending":   ": Activar para ordenar la columna de manera ascedente",
            "sSortDescending":  ": Activar para ordenar la columna de manera descendente"
        }
        
    }
})