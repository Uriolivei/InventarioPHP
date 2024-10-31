
<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="icon" type="image/png" href="images/DB_16х16.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>La Tiendita de Jonh</title>

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

</head>
<body>
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header is-small-screen">
    <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
        
        <!-- Título centrado en el medio sin afectar los elementos a la derecha -->
        <h2 style="position: absolute; left: 50%; transform: translateX(-50%); margin: 0;">
            La Tiendita de Jonh
        </h2>
        
        <!-- Espaciador para alinear los elementos a la derecha -->
        <div class="mdl-layout-spacer"></div>

        <div class="material-icons mdl-badge mdl-badge--overlap mdl-button--icon notification" id="notification"
            data-badge="12">
            notifications_none
        </div>

            <!-- Notifications dropdown-->
            <ul class="mdl-menu mdl-list mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right mdl-shadow--2dp notifications-dropdown"
            for="notification">
            <li class="mdl-list__item">
                Tienes 3 nuevas norificaciones!
            </li>
            <li class="mdl-menu__item mdl-list__item list__item--border-top">
                <span class="mdl-list__item-primary-content">
                    <span class="mdl-list__item-avatar background-color--primary">
                        <i class="material-icons">plus_one</i>
                    </span>
                    <span>Tienes 3 nuevos pedidos.</span>
                </span>
                <span class="mdl-list__item-secondary-content">
                <span class="label">Ahora</span>
                </span>
            </li>
            <li class="mdl-menu__item mdl-list__item list__item--border-top">
                <span class="mdl-list__item-primary-content">
                    <span class="mdl-list__item-avatar background-color--secondary">
                        <i class="material-icons">error_outline</i>
                    </span>
                  <span>Error en la BD</span>
                </span>
                <span class="mdl-list__item-secondary-content">
                  <span class="label">1 min</span>
                </span>
            </li>
            <li class="mdl-menu__item mdl-list__item list__item--border-top">
                <span class="mdl-list__item-primary-content">
                    <span class="mdl-list__item-avatar background-color--primary">
                        <i class="material-icons">mail_outline</i>
                    </span>
                  <span>Tines 4 mensajes nuevos.</span>
                </span>
                <span class="mdl-list__item-secondary-content">
                  <span class="label">5 días</span>
                </span>
            </li>
            <li class="mdl-list__item list__item--border-top">
                <button href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect">TODAS LAS NOTIFICACIONES</button>
            </li>
        </ul>

        <div class="material-icons mdl-badge mdl-badge--overlap mdl-button--icon message" id="inbox" data-badge="3">
            mail_outline
        </div>

        <!-- Messages dropdown-->
        <ul class="mdl-menu mdl-list mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right mdl-shadow--2dp messages-dropdown"
            for="inbox">
            <li class="mdl-list__item">
                Tienes 3 nuevos mensajes!
            </li>
            <li class="mdl-menu__item mdl-list__item mdl-list__item--two-line list__item--border-top">
                <span class="mdl-list__item-primary-content">
                    <span class="mdl-list__item-avatar background-color--primary">
                        <text>A</text>
                    </span>
                    <span>Alexa</span>
                    <span class="mdl-list__item-sub-title">Fiesta de Cumpleaños</span>
                </span>
                <span class="mdl-list__item-secondary-content">
                  <span class="label label--transparent">2 min</span>
                </span>
            </li>
            <li class="mdl-menu__item mdl-list__item mdl-list__item--two-line list__item--border-top">
                <span class="mdl-list__item-primary-content">
                    <span class="mdl-list__item-avatar background-color--baby-blue">
                        <text>M</text>
                    </span>
                    <span>Miguel</span>
                    <span class="mdl-list__item-sub-title">Sin Asunto</span>
                </span>
                <span class="mdl-list__item-secondary-content">
                  <span class="label label--transparent">20 min</span>
                </span>
            </li>
            <li class="mdl-menu__item mdl-list__item mdl-list__item--two-line list__item--border-top">
                <span class="mdl-list__item-primary-content">
                    <span class="mdl-list__item-avatar background-color--mint">
                        <text>D</text>
                    </span>
                    <span>TEMU</span>
                    <span class="mdl-list__item-sub-title">NOTICIAS</span>
                </span>
                <span class="mdl-list__item-secondary-content">
                <span class="label label--transparent">25 Octubre</span>
                </span>
            </li>
            <li class="mdl-list__item list__item--border-top">
                <button href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect">MOSTRAR TODOS LOS MENSAJES</button>
            </li>
        </ul>

        <div class="avatar-dropdown" id="icon">
            <span>John</span>
            <img src="vistas/img/jonh_2.png">
        </div>

            <!-- Account dropdown-->
        <ul class="mdl-menu mdl-list mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect mdl-shadow--2dp account-dropdown"
            for="icon">
            <li class="mdl-list__item mdl-list__item--two-line">
                <span class="mdl-list__item-primary-content">
                    <span class="material-icons mdl-list__item-avatar"></span>
                    <span>John Perez</span>
                    <span class="mdl-list__item-sub-title">Admin@gmail.com</span>
                </span>
            </li>
            <li class="list__item--border-top"></li>
            <li class="mdl-menu__item mdl-list__item">
                <span class="mdl-list__item-primary-content">
                    <i class="material-icons mdl-list__item-icon">account_circle</i>
                    Mi cuenta
                </span>
            </li>
            <li class="mdl-menu__item mdl-list__item">
                <span class="mdl-list__item-primary-content">
                    <i class="material-icons mdl-list__item-icon">perm_contact_calendar</i>
                    Mis eventos
                </span>
            </li>
            <li class="list__item--border-top"></li>
            <li class="mdl-menu__item mdl-list__item">
                <span class="mdl-list__item-primary-content">
                    <i class="material-icons mdl-list__item-icon">settings</i>
                    Configuraciones
                </span>
            </li>
            <a href="login.html">
                <li class="mdl-menu__item mdl-list__item">
                    <span class="mdl-list__item-primary-content">
                        <i class="material-icons mdl-list__item-icon text-color--secondary">exit_to_app</i>
                        Cerrar Sesión
                    </span>
                </li>
            </a>
        </ul>

            <button id="more"
                    class="mdl-button mdl-js-button mdl-button--icon">
                <i class="material-icons">more_vert</i>
            </button>

            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect mdl-shadow--2dp settings-dropdown"
                for="more">
                <li class="mdl-menu__item">
                    Configuraciones
                </li>
            </ul>
        </div>
    </header>

    
    <div class="mdl-layout__drawer">
        <header>darkboard</header>
        <div class="scroll__wrapper" id="scroll__wrapper">
            <div class="scroller" id="scroller">
                <div class="scroll__container" id="scroll__container">
                    <nav class="mdl-navigation">
                        <a class="mdl-navigation__link mdl-navigation__link--current" href="index.php">
                            <i class="material-icons" role="presentation">dashboard</i>
                            Dashboard
                        </a>
                        <div class="sub-navigation">
                            <a class="mdl-navigation__link">
                                <i class="material-icons">view_comfy</i>
                                Almacén
                                <i class="material-icons">keyboard_arrow_down</i>
                            </a>
                            <div class="mdl-navigation">
                                <a class="mdl-navigation__link" href="ui-buttons.html">
                                    Buttons
                                </a>
                                <a class="mdl-navigation__link" href="ui-cards.html">
                                    Cards
                                </a>
                            </div>
                        </div>
                    
                        <div class="sub-navigation">
                            <a class="mdl-navigation__link">
                                <i class="material-icons">pages</i>
                                Pages
                                <i class="material-icons">keyboard_arrow_down</i>
                            </a>
                            <div class="mdl-navigation">
                                <a class="mdl-navigation__link" href="login.html">
                                    Sign in
                                </a>
                                <a class="mdl-navigation__link" href="sign-up.html">
                                    Sign up
                                </a>
                                <a class="mdl-navigation__link" href="forgot-password.html">
                                    Forgot password
                                </a>
                                <a class="mdl-navigation__link" href="404.html">
                                    ERROR 404
                                </a>
                            </div>
                        </div>
                        <div class="mdl-layout-spacer"></div>
                        <hr>
                        <a class="mdl-navigation__link" href="https://github.com/CreativeIT/getmdl-dashboard">
                            <i class="material-icons" role="presentation">link</i>
                            GitHub
                        </a>
                    </nav>
                </div>
            </div>
            <div class='scroller__bar' id="scroller__bar"></div>
        </div>
    </div>

    <main class="mdl-layout__content">

        <div class="mdl-grid mdl-grid--no-spacing dashboard">

            <div class="mdl-grid mdl-cell mdl-cell--9-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone mdl-cell--top">

                <!-- Pie chart-->
                <div class="mdl-cell mdl-cell--4-col-desktop mdl-cell--4-col-tablet mdl-cell--2-col-phone">
                    <div class="mdl-card mdl-shadow--2dp pie-chart">
                        <div class="mdl-card__title">
                            <h2 class="mdl-card__title-text">Mi día</h2>
                        </div>
                        <div class="mdl-card__supporting-text">
                            <div class="pie-chart__container">

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Weather widget-->
                <div class="mdl-cell mdl-cell--4-col-desktop mdl-cell--4-col-tablet mdl-cell--2-col-phone">
                    <div class="mdl-card mdl-shadow--2dp weather">
                        <div class="mdl-card__title">
                            <h2 class="mdl-card__title-text">Ahora</h2>

                            <div class="mdl-layout-spacer"></div>
                            <div class="mdl-card__subtitle-text">
                                <i class="material-icons">room</i>
                                Pucallpa, Ucayali
                            </div>
                        </div>
                        <div class="mdl-card__supporting-text mdl-card--expand">
                            <p class="weather-temperature">29<sup>&deg;</sup></p>

                            <h4 >
                                Soleado
                            </h4>
                        </div>
                    </div>
                </div>
                <!-- Trending widget-->
                <div class="mdl-cell mdl-cell--4-col-desktop mdl-cell--4-col-tablet mdl-cell--2-col-phone">
                    <div class="mdl-card mdl-shadow--2dp trending">
                        <div class="mdl-card__title">
                            <h2 class="mdl-card__title-text">Trending</h2>
                        </div>
                        <div class="mdl-card__supporting-text">
                            <ul class="mdl-list">
                                <li class="mdl-list__item">
                                    <span class="mdl-list__item-primary-content list__item-text">UX</span>
                                    <span class="mdl-list__item-secondary-content">
                                        <i class="material-icons trending__arrow-up" role="presentation">&#xE5C7</i>
                                    </span>
                                    <span class="mdl-list__item-secondary-content trending__percent">1 %</span>
                                </li>
                                <li class="mdl-list__item list__item--border-top">
                                    <span class="mdl-list__item-primary-content list__item-text">PHP</span>
                                    <span class="mdl-list__item-secondary-content">
                                        <i class="material-icons trending__arrow-down" role="presentation">&#xE5C5</i>
                                    </span>
                                    <span class="mdl-list__item-secondary-content trending__percent">2 %</span>
                                </li>
                                <li class="mdl-list__item list__item--border-top">
                                    <span class="mdl-list__item-primary-content list__item-text ">Big Data</span>
                                    <span class="mdl-list__item-secondary-content">
                                        <i class="material-icons trending__arrow-up" role="presentation">&#xE5C7</i>
                                    </span>
                                    <span class="mdl-list__item-secondary-content trending__percent">5 %</span>
                                </li>
                                <li class="mdl-list__item list__item--border-top">
                                    <span class="mdl-list__item-primary-content list__item-text">Material Design</span>
                                    <span class="mdl-list__item-secondary-content">
                                        <i class="material-icons trending__arrow-up" role="presentation">&#xE5C7</i>
                                    </span>
                                    <span class="mdl-list__item-secondary-content trending__percent">18 %</span>
                                </li>
                                <li class="mdl-list__item list__item--border-top">
                                    <span class="mdl-list__item-primary-content">JavaScript</span>
                                    <span class="mdl-list__item-secondary-content">
                                        <i class="material-icons trending__arrow-up" role="presentation">&#xE5C7</i>
                                    </span>
                                    <span class="mdl-list__item-secondary-content trending__percent">17 %</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Robot card-->
                <div class="mdl-cell mdl-cell--10-col-desktop mdl-cell--5-col-tablet mdl-cell--2-col-phone">
                    <div class="mdl-card mdl-shadow--2dp robot">
                        <div class="mdl-card__title mdl-card--expand">
                            <h2 class="mdl-card__title-text">BB-8</h2>
                        </div>
                        <div class="mdl-card__supporting-text">
                            <div>
                                A skittish but loyal astromech, BB-8 accompanied Poe Dameron on many missions for the
                                Resistance helping keep his X-wing in working order.
                            </div>
                            <a href="http://www.starwars.com/databank/bb-8" target="_blank">Star Wars Databank</a>
                        </div>
                    </div>
                </div>

                <!-- Line chart-->
                <div class="mdl-cell mdl-cell--7-col-desktop mdl-cell--7-col-tablet mdl-cell--4-col-phone">
                    <div class="mdl-card mdl-shadow--2dp line-chart">
                        <div class="mdl-card__title">
                            <h2 class="mdl-card__title-text">Startup Financing Cycle</h2>
                        </div>
                        <div class="mdl-card__supporting-text">
                            <div class="line-chart__container">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Table-->
                

            <div class="mdl-grid mdl-cell mdl-cell--3-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone mdl-cell--top">
                
                <!-- ToDo_widget-->
                

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
