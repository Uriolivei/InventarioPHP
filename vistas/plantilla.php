<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory</title>
    <!-- icono -->
    <link rel="shortcut icon" href="views/img/plantilla/logo.png" type="image/x-icon">

    <!-- plugins css -->
    <!-- bootstrap 3.3.7 -->
    <link rel="stylesheet" href="views/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="views/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="views/bower_components/Ionicons/css/ionicons.min.css">
    <!-- theme style -->
    <link rel="stylesheet" href="views/dist/css/AdminLTE.css">
    <!-- AdminLTE Skins -->
    <link rel="stylesheet" href="views/dist/css/skins/_all-skins.min.css">
    <!-- switch -->
    <link rel="stylesheet" href="views/dist/css/switch.css">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- DataTable -->
    <link rel="stylesheet" href="views/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="views/bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">
    <!-- checkbox -->
    <link rel="stylesheet" href="views/plugins/iCheck/all.css">
    <!-- Datarange picker -->
    <link rel="stylesheet" href="views/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- morris chart -->
    <link rel="stylesheet" href="views/bower_components/morris.js/morris.css">
    <!-- select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- PLUGINS DE JAVASCRIPT -->
    <script src="views/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="views/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="views/bower_components/fastclick/lib/fastclick.js"></script>
    <script src="views/dist/js/adminlte.min.js"></script>
    <!-- DataTable -->
    <script src="views/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="views/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="views/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
    <script src="views/bower_components/datatables.net-bs/js/responsive.bootstrap.min.js"></script>
    <!-- SweetAlert 2 -->
    <script src="views/plugins/sweetalert2/sweetalert2.all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <!-- InputMask -->
    <script src="views/plugins/input-mask/jquery.inputmask.js"></script>
    <script src="views/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="views/plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <!-- iCheck -->
    <script src="views/plugins/iCheck/icheck.min.js"></script>
    <!-- jQuery Number -->
    <script src="views/plugins/jqueryNumber/jquerynumber.min.js"></script>
    <!-- daterangepicker -->
    <script src="views/bower_components/moment/min/moment.min.js"></script>
    <script src="views/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- morris.js -->
    <script src="views/bower_components/raphael/raphael.min.js"></script>
    <script src="views/bower_components/morris.js/morris.min.js"></script>
    <!-- chart js -->
    <script src="views/bower_components/Chart.js/Chart.js"></script>
<script>
    function cargarCategoria() {
        $("#contenido-principal").load("vistas/modulos/categoria.php", function(response, status, xhr) {
            if (status === "error") {
                console.error("Error al cargar la página de categorías:", xhr.status, xhr.statusText);
            }
        });
    }
    </script>
    </head>
    <link rel="icon" type="image/png" href="images/DB_16х16.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inventario</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">


    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">


    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,100,700,900' rel='stylesheet'
          type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- inject:css -->
    <link rel="stylesheet" href="vistas/dist/css/lib/getmdl-select.min.css">
    <link rel="stylesheet" href="vistas/dist/css/lib/nv.d3.min.css">
    <link rel="stylesheet" href="vistas/dist/css/application.min.css">
    <!-- endinject -->

<script>
    function cargarCategoria() {
        $("#contenido-principal").load("vistas/modulos/categoria.php", function(response, status, xhr) {
            if (status === "error") {
                console.error("Error al cargar la página de categorías:", xhr.status, xhr.statusText);
            }
        });
    }
    </script>
    </head>
<body>
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header is-small-screen">
    

    <?php 
    //menu
    include "modulos/menu.php";

    //Cabecera
    include "modulos/cabeza.php";
    ?>

    <main class="mdl-layout__content">
        <div id="contenido-principal" class="mdl-grid mdl-grid--no-spacing dashboard">
            <!-- Contenido dinámico cargado aquí -->
        </div>

        <div class="mdl-grid mdl-grid--no-spacing dashboard">

            <div class="mdl-grid mdl-cell mdl-cell--9-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone mdl-cell--top">

                <!-- Estadisticas -->
                <div class="mdl-cell mdl-cell--4-col-desktop mdl-cell--4-col-tablet mdl-cell--2-col-phone">
                    <div class="mdl-card mdl-shadow--2dp pie-chart">
                        <div class="mdl-card__title">
                            <h2 class="mdl-card__title-text">Estadisticas de Venta</h2>
                        </div>
                        <div class="mdl-card__supporting-text">
                            <div class="pie-chart__container">

                            </div>
                        </div>
                    </div>
                </div>

                
                <!-- Line chart-->
                <div class="mdl-cell mdl-cell--7-col-desktop mdl-cell--7-col-tablet mdl-cell--4-col-phone">
                    <div class="mdl-card mdl-shadow--2dp line-chart">
                        <div class="mdl-card__title">
                            <h2 class="mdl-card__title-text">Financiamiento de ventas anual</h2>
                        </div>
                        <div class="mdl-card__supporting-text">
                            <div class="line-chart__container">

                            </div>
                        </div>
                    </div>
                </div>
            

            <div class="mdl-grid mdl-cell mdl-cell--3-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone mdl-cell--top">
                <!-- Ubicación de la tienda -->
                <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--6-col-tablet mdl-cell--2-col-phone">
                    <div class="mdl-card mdl-shadow--2dp robot">
                        <div class="mdl-card__title mdl-card--expand">
                            <h2 class="mdl-card__title-text">ROBOT DE EMPRESA </h2>
                        </div>
                        <div class="mdl-card__supporting-text">
                            <div>
                                Ventas de productos
                            </div>
                            <a href="http://www.starwars.com/databank/bb-8" target="_blank">Poner la ubicacion de la tienda</a>
                        </div>
                    </div>
                </div>
                
                

            </div>
        </div>

    </main>

</div>

<!-- inject:js -->
<script src="vistas/dist/js/d3.min.js"></script>
<script src="vistas/dist/js/getmdl-select.min.js"></script>
<script src="vistas/dist/js/material.min.js"></script>
<script src="vistas/dist/js/nv.d3.min.js"></script>
<script src="vistas/dist/js/layout/layout.min.js"></script>
<script src="vistas/dist/js/scroll/scroll.min.js"></script>
<script src="vistas/dist/js/widgets/charts/discreteBarChart.min.js"></script>
<script src="vistas/dist/js/widgets/charts/linePlusBarChart.min.js"></script>
<script src="vistas/dist/js/widgets/charts/stackedBarChart.min.js"></script>
<script src="vistas/dist/js/widgets/employer-form/employer-form.min.js"></script>
<script src="vistas/dist/js/widgets/line-chart/line-charts-nvd3.min.js"></script>
<script src="vistas/dist/js/widgets/map/maps.min.js"></script>
<script src="vistas/dist/js/widgets/pie-chart/pie-charts-nvd3.min.js"></script>
<script src="vistas/dist/js/widgets/table/table.min.js"></script>
<script src="vistas/dist/js/widgets/todo/todo.min.js"></script>
<!-- endinject -->

</body>
</html>