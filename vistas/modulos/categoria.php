<<<<<<< HEAD
<div class="content-wrapper">
  <section class="content-header">
    <h1> Administrar categorías </h1>
    <ol class="breadcrumb">
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      <li class="active">Administrar categorías</li>
    </ol>
  </section>

  <section class="content">
    <div class="box">
      <div class="box-header with-border">
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCategoria">
          Agregar categoría
        </button>
      </div>

      <div class="box-body">
       <table id="tablaCategorias" class="table table-bordered table-striped dt-responsive tablas">
        <thead>
         <tr>
           <th style="width:10px">#</th>
           <th>Nombre Categoria</th>
           <th>Estado</th>
           <th>Fecha</th>
           <th>Acciones</th>
         </tr> 
        </thead>

        <tbody>
          <?php
            $item = null;
            $valor = null;
            $categorias = ControladorCategoria::ctrMostrarCategoria($item, $valor);
            foreach ($categorias as $key => $value) {
                $estadoColor = $value["estado"] == 1 ? "green" : "red";
                $estadoTexto = $value["estado"] == 1 ? "Activo" : "Inactivo";
                
                echo '<tr>
                    <td>'.($key+1).'</td>
                    <td class="text-uppercase">'.$value["nombre"].'</td>
                    <td><span class="estado-bolita" style="background-color: '.$estadoColor.';"></span> '.$estadoTexto.'</td>
                    <td>'.$value["fecha"].'</td>
                    <td>
                      <div class="btn-group">
                        <button class="btn btn-warning btnEditarCategoria" idCategoria="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarCategoria"><i class="fa fa-pencil"></i></button>
                        <a href="index.php?ruta=categoria&idCategoria='.$value["id"].'" class="btn btn-danger btnEliminarCategoria"><i class="fa fa-times"></i></a>
                      </div>
                    </td>
                </tr>';
            }
          ?>
        </tbody>
       </table>
      </div>
    </div>
  </section>
</div>

<!-- MODAL AGREGAR CATEGORIA -->
<div id="modalAgregarCategoria" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <form role="form" method="post">
        <div class="modal-header" style="background:#3c8dbc; color:white">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Agregar categoría</h4>
        </div>
        <div class="modal-body">
          <div class="box-body">
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 
                <input type="text" class="form-control input-lg" name="nuevaCategoria" placeholder="Ingresar categoría" required>
              </div>
            </div>
            <div class="form-group">
             
            </div>
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
                <input type="date" class="form-control input-lg" name="fechaCategoria" required>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
          <button type="submit" class="btn btn-primary">Guardar categoría</button>
        </div>
        <?php 
          $crearCategoria = new ControladorCategoria();
          $crearCategoria->ctrCrearCategoria();
        ?>
      </form>
    </div>
  </div>
</div>

<!-- MODAL EDITAR CATEGORIA -->
<div id="modalEditarCategoria" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <form role="form" method="post">
        <div class="modal-header" style="background:#3c8dbc; color:white">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Editar categoría</h4>
        </div>
        <div class="modal-body">
          <div class="box-body">
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 
                <input type="text" class="form-control input-lg" name="editarCategoria" id="editarCategoria" placeholder="Editar categoría" required>
                <input type="hidden" name="idCategoria" id="idCategoria" required>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-toggle-on"></i></span> 
                <select class="form-control input-lg" name="estadoCategoria" id="estadoCategoria" required>
                  <option value="1">Activo</option>
                  <option value="0">Inactivo</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
                <input type="date" class="form-control input-lg" name="fechaCategoria" id="fechaCategoria" required>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
          <button type="submit" class="btn btn-primary">Guardar cambios</button>
        </div>
        <?php
          $editarCategoria = new ControladorCategoria();
          $editarCategoria->ctrEditarCategoria();
        ?>
      </form>
    </div>
  </div>
</div>

<?php
   $eliminarCategoria = new ControladorCategoria();
   $eliminarCategoria->ctrEliminarCategoria();
?>

<style>
  body, .content-wrapper, .modal-content {
    background-color: #f4f6f9;
    color: #333;
  }

  .content-wrapper {
    min-height: 100vh;
    padding: 80px;
  }

  .table {
    background-color: #ffffff;
  }

  .btn-primary, .btn-warning, .btn-danger {
    color: #fff;
  }

  .btn-primary {
    background-color: #007bff;
    border-color: #007bff;
  }

  .btn-warning {
    background-color: #ffc107;
    border-color: #ffc107;
  }

  .btn-danger {
    background-color: #dc3545;
    border-color: #dc3545;
  }
  .estado-bolita {
    display: inline-block;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    margin-right: 5px;
  }
</style>
=======

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
    <title>Categorias</title>

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
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
            <div class="mdl-layout-spacer"></div>
            <!-- Search-->
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
                    <i class="material-icons">search</i>
                </label>

                <div class="mdl-textfield__expandable-holder">
                    <input class="mdl-textfield__input" type="text" id="search"/>
                    <label class="mdl-textfield__label" for="search">Enter your query...</label>
                </div>
            </div>

            <div class="material-icons mdl-badge mdl-badge--overlap mdl-button--icon notification" id="notification"
                 data-badge="23">
                notifications_none
            </div>
            <!-- Notifications dropdown-->
            <ul class="mdl-menu mdl-list mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right mdl-shadow--2dp notifications-dropdown"
                for="notification">
                <li class="mdl-list__item">
                    You have 23 new notifications!
                </li>
                <li class="mdl-menu__item mdl-list__item list__item--border-top">
                    <span class="mdl-list__item-primary-content">
                        <span class="mdl-list__item-avatar background-color--primary">
                            <i class="material-icons">plus_one</i>
                        </span>
                        <span>You have 3 new orders.</span>
                    </span>
                    <span class="mdl-list__item-secondary-content">
                      <span class="label">just now</span>
                    </span>
                </li>
                <li class="mdl-menu__item mdl-list__item list__item--border-top">
                    <span class="mdl-list__item-primary-content">
                        <span class="mdl-list__item-avatar background-color--secondary">
                            <i class="material-icons">error_outline</i>
                        </span>
                      <span>Database error</span>
                    </span>
                    <span class="mdl-list__item-secondary-content">
                      <span class="label">1 min</span>
                    </span>
                </li>
                <li class="mdl-menu__item mdl-list__item list__item--border-top">
                    <span class="mdl-list__item-primary-content">
                        <span class="mdl-list__item-avatar background-color--primary">
                            <i class="material-icons">new_releases</i>
                        </span>
                      <span>The Death Star is built!</span>
                    </span>
                    <span class="mdl-list__item-secondary-content">
                      <span class="label">2 hours</span>
                    </span>
                </li>
                <li class="mdl-menu__item mdl-list__item list__item--border-top">
                    <span class="mdl-list__item-primary-content">
                        <span class="mdl-list__item-avatar background-color--primary">
                            <i class="material-icons">mail_outline</i>
                        </span>
                      <span>You have 4 new mails.</span>
                    </span>
                    <span class="mdl-list__item-secondary-content">
                      <span class="label">5 days</span>
                    </span>
                </li>
                <li class="mdl-list__item list__item--border-top">
                    <button href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect">ALL NOTIFICATIONS</button>
                </li>
            </ul>

            <div class="material-icons mdl-badge mdl-badge--overlap mdl-button--icon message" id="inbox" data-badge="4">
                mail_outline
            </div>
            <!-- Messages dropdown-->
            <ul class="mdl-menu mdl-list mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right mdl-shadow--2dp messages-dropdown"
                for="inbox">
                <li class="mdl-list__item">
                    You have 4 new messages!
                </li>
                <li class="mdl-menu__item mdl-list__item mdl-list__item--two-line list__item--border-top">
                    <span class="mdl-list__item-primary-content">
                        <span class="mdl-list__item-avatar background-color--primary">
                            <text>A</text>
                        </span>
                        <span>Alice</span>
                        <span class="mdl-list__item-sub-title">Birthday Party</span>
                    </span>
                    <span class="mdl-list__item-secondary-content">
                      <span class="label label--transparent">just now</span>
                    </span>
                </li>
                <li class="mdl-menu__item mdl-list__item mdl-list__item--two-line list__item--border-top">
                    <span class="mdl-list__item-primary-content">
                        <span class="mdl-list__item-avatar background-color--baby-blue">
                            <text>M</text>
                        </span>
                        <span>Mike</span>
                        <span class="mdl-list__item-sub-title">No theme</span>
                    </span>
                    <span class="mdl-list__item-secondary-content">
                      <span class="label label--transparent">5 min</span>
                    </span>
                </li>
                <li class="mdl-menu__item mdl-list__item mdl-list__item--two-line list__item--border-top">
                    <span class="mdl-list__item-primary-content">
                        <span class="mdl-list__item-avatar background-color--cerulean">
                            <text>D</text>
                        </span>
                        <span>Darth</span>
                        <span class="mdl-list__item-sub-title">Suggestion</span>
                    </span>
                    <span class="mdl-list__item-secondary-content">
                      <span class="label label--transparent">23 hours</span>
                    </span>
                </li>
                <li class="mdl-menu__item mdl-list__item mdl-list__item--two-line list__item--border-top">
                    <span class="mdl-list__item-primary-content">
                        <span class="mdl-list__item-avatar background-color--mint">
                            <text>D</text>
                        </span>
                        <span>Don McDuket</span>
                        <span class="mdl-list__item-sub-title">NEWS</span>
                    </span>
                    <span class="mdl-list__item-secondary-content">
                      <span class="label label--transparent">30 Nov</span>
                    </span>
                </li>
                <li class="mdl-list__item list__item--border-top">
                    <button href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect">SHOW ALL MESSAGES</button>
                </li>
            </ul>

            <div class="avatar-dropdown" id="icon">
                <span>Luke</span>
                <img src="images/Icon_header.png">
            </div>
            <!-- Account dropdawn-->
            <ul class="mdl-menu mdl-list mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect mdl-shadow--2dp account-dropdown"
                for="icon">
                <li class="mdl-list__item mdl-list__item--two-line">
                    <span class="mdl-list__item-primary-content">
                        <span class="material-icons mdl-list__item-avatar"></span>
                        <span>Luke</span>
                        <span class="mdl-list__item-sub-title">Luke@skywalker.com</span>
                    </span>
                </li>
                <li class="list__item--border-top"></li>
                <li class="mdl-menu__item mdl-list__item">
                    <span class="mdl-list__item-primary-content">
                        <i class="material-icons mdl-list__item-icon">account_circle</i>
                        My account
                    </span>
                </li>
                <li class="mdl-menu__item mdl-list__item">
                    <span class="mdl-list__item-primary-content">
                        <i class="material-icons mdl-list__item-icon">check_box</i>
                        My tasks
                    </span>
                    <span class="mdl-list__item-secondary-content">
                      <span class="label background-color--primary">3 new</span>
                    </span>
                </li>
                <li class="mdl-menu__item mdl-list__item">
                    <span class="mdl-list__item-primary-content">
                        <i class="material-icons mdl-list__item-icon">perm_contact_calendar</i>
                        My events
                    </span>
                </li>
                <li class="list__item--border-top"></li>
                <li class="mdl-menu__item mdl-list__item">
                    <span class="mdl-list__item-primary-content">
                        <i class="material-icons mdl-list__item-icon">settings</i>
                        Settings
                    </span>
                </li>
                <a href="login.html">
                    <li class="mdl-menu__item mdl-list__item">
                        <span class="mdl-list__item-primary-content">
                            <i class="material-icons mdl-list__item-icon text-color--secondary">exit_to_app</i>
                            Log out
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
                    Settings
                </li>
                <a class="mdl-menu__item" href="https://github.com/CreativeIT/getmdl-dashboard/issues">
                    Support
                </a>
                <li class="mdl-menu__item">
                    F.A.Q.
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
                        <a class="mdl-navigation__link" href="index.html">
                            <i class="material-icons" role="presentation">dashboard</i>
                            Dashboard
                        </a>
                        <div class="sub-navigation sub-navigation--show">
                            <a class="mdl-navigation__link mdl-navigation__link--current">
                                <i class="material-icons">view_comfy</i>
                                UI
                                <i class="material-icons">keyboard_arrow_down</i>
                            </a>
                            <div class="mdl-navigation">
                                <a class="mdl-navigation__link mdl-navigation__link--current" href="ui-buttons.html">
                                    Buttons
                                </a>
                                <a class="mdl-navigation__link" href="ui-cards.html">
                                    Cards
                                </a>
                                <a class="mdl-navigation__link" href="ui-colors.html">
                                    Colors
                                </a>
                                <a class="mdl-navigation__link" href="ui-form-components.html">
                                    Forms
                                </a>
                                <a class="mdl-navigation__link" href="ui-icons.html">
                                    Icons
                                </a>
                                <a class="mdl-navigation__link" href="ui-typography.html">
                                    Typography
                                </a>
                                <a class="mdl-navigation__link" href="ui-tables.html">
                                    Tables
                                </a>
                            </div>
                        </div>
                        <a class="mdl-navigation__link" href="ui-components.html">
                            <i class="material-icons">developer_board</i>
                            Components
                        </a>
                        <a class="mdl-navigation__link" href="forms.html">
                            <i class="material-icons" role="presentation">person</i>
                            Account
                        </a>
                        <a class="mdl-navigation__link" href="maps.html">
                            <i class="material-icons" role="presentation">map</i>
                            Maps
                        </a>
                        <a class="mdl-navigation__link" href="charts.html">
                            <i class="material-icons">multiline_chart</i>
                            Charts
                        </a>
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
                                    404
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
        <div class="mdl-grid ui-buttons">

            <!-- UI Buttons-->

            <div class="mdl-cell mdl-cell--3-col-desktop mdl-cell--4-col-tablet mdl-cell--2-col-phone buttons-basic">
                <div class="mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">Basic buttons</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <ul class="mdl-list pull-left">
                            <li class="mdl-list__item">
                                <span class="text-color--gray">Normal</span>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-light-blue">
                                    Button
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-teal">
                                    Button
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-orange">
                                    Button
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-red">
                                    Button
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-green">
                                    Button
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-purple">
                                    Button
                                </button>
                            </li>
                        </ul>
                        <ul class="mdl-list pull-left">
                                <li class="mdl-list__item">
                                    <span class="text-color--gray">Disabled</span>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button mdl-button--raised button--colored-light-blue"
                                            disabled>
                                        Button
                                    </button>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button mdl-button--raised button--colored-teal"
                                            disabled>
                                        Button
                                    </button>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button mdl-button--raised button--colored-orange"
                                            disabled>
                                        Button
                                    </button>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button mdl-button--raised button--colored-red"
                                            disabled>
                                        Button
                                    </button>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-green"
                                            disabled>
                                        Button
                                    </button>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button mdl-button--raised button--colored-purple"
                                            disabled>
                                        Button
                                    </button>
                                </li>
                            </ul>
                    </div>
                </div>
            </div>

            <div class="mdl-cell mdl-cell--3-col-desktop mdl-cell--4-col-tablet mdl-cell--2-col-phone buttons-with-icons">
                <div class="mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">Buttons with icons</h2>
                    </div>

                    <div class="mdl-card__supporting-text">
                        <ul class="mdl-list pull-left">
                            <li class="mdl-list__item">
                                <span class="text-color--gray">Normal</span>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-light-blue">
                                    <i class="material-icons">assignment_returned</i>
                                    Archive
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-teal">
                                    <i class="material-icons">create</i>
                                    Create
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-orange">
                                    <i class="material-icons">drafts</i>
                                    Drafts
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-red">
                                    <i class="material-icons">forward</i>
                                    Forward
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-green">
                                    <i class="material-icons">attach_file</i>
                                    Attach
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-purple">
                                    <i class="material-icons">reply</i>
                                    Reply
                                </button>
                            </li>
                        </ul>
                        <ul class="mdl-list pull-left">
                                <li class="mdl-list__item">
                                    <span class="text-color--gray">Disabled</span>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button mdl-button--raised button--colored-light-blue"
                                            disabled>
                                        <i class="material-icons">assignment_returned</i>
                                        Archive
                                    </button>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button mdl-button--raised button--colored-teal"
                                            disabled>
                                        <i class="material-icons">create</i>
                                        Create
                                    </button>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button mdl-button--raised button--colored-orange"
                                            disabled>
                                        <i class="material-icons">drafts</i>
                                        Drafts
                                    </button>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button mdl-button--raised button--colored-red"
                                            disabled>
                                        <i class="material-icons">forward</i>
                                        Forward
                                    </button>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-green"
                                            disabled>
                                        <i class="material-icons">attach_file</i>
                                        Attach
                                    </button>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button mdl-button--raised button--colored-purple"
                                            disabled>
                                        <i class="material-icons">reply</i>
                                        Reply
                                    </button>
                                </li>
                            </ul>
                    </div>

                </div>
            </div>

            <div class="mdl-cell mdl-cell--3-col-desktop mdl-cell--4-col-tablet mdl-cell--2-col-phone buttons-social">
                <div class="mdl-card mdl-shadow--2dp ">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">Social buttons</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <ul class="mdl-list pull-left">
                            <li class="mdl-list__item">
                                <span class="text-color--gray">Normal</span>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--facebook">
                                    <i class="material-icons"></i>
                                    Facebook
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--twitter">
                                    <i class="material-icons"></i>
                                    Twitter
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--dribbble">
                                    <i class="material-icons"></i>
                                    Dribbble
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--behance">
                                    <i class="material-icons"></i>
                                    Behance
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--linkedin">
                                    <i class="material-icons"></i>
                                    Linkedin
                                </button>
                            </li>
                            <li class="mdl-list__item pull-left">
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--github">
                                    <i class="material-icons"></i>
                                    Github
                                </button>
                            </li>
                        </ul>
                        <ul class="mdl-list pull-left">
                                <li class="mdl-list__item">
                                    <span class="text-color--gray">Disabled</span>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button mdl-button--raised button--facebook"
                                            disabled>
                                        <i class="material-icons"></i>
                                        Facebook
                                    </button>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button mdl-button--raised button--twitter"
                                            disabled>
                                        <i class="material-icons"></i>
                                        Twitter
                                    </button>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button mdl-button--raised button--dribbble"
                                            disabled>
                                        <i class="material-icons"></i>
                                        Dribbble
                                    </button>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button mdl-button--raised button--behance"
                                            disabled>
                                        <i class="material-icons"></i>
                                        Behance
                                    </button>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button mdl-button--raised button--linkedin"
                                            disabled>
                                        <i class="material-icons"></i>
                                        Linkedin
                                    </button>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button mdl-button--raised button--github" disabled>
                                        <i class="material-icons"></i>
                                        Github
                                    </button>
                                </li>
                            </ul>
                    </div>
                </div>
            </div>

            <div class="mdl-cell mdl-cell--3-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone buttons-icons">
                <div class="mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">Icon buttons</h2>
                    </div>

                    <div class="mdl-card__supporting-text">
                        <ul class="mdl-list pull-left">
                            <li class="mdl-list__item">
                                <span class="text-color--gray">Normal</span>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect button--colored-light-blue">
                                    <i class="material-icons">assignment_returned</i>
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect button--colored-teal">
                                    <i class="material-icons">create</i>
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect button--colored-orange">
                                    <i class="material-icons">drafts</i>
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect button--colored-red">
                                    <i class="material-icons">forward</i>
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect button--colored-purple">
                                    <i class="material-icons">reply</i>
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                                    <i class="material-icons">send</i>
                                </button>
                            </li>
                        </ul>

                        <ul class="mdl-list pull-left">
                            <li class="mdl-list__item">
                                <span class="text-color--gray">Social</span>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect button--facebook">
                                    <i class="material-icons"></i>
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect button--twitter">
                                    <i class="material-icons"></i>
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect button--dribbble">
                                    <i class="material-icons"></i>
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect button--behance">
                                    <i class="material-icons"></i>
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect button--linkedin">
                                    <i class="material-icons"></i>
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect button--github">
                                    <i class="material-icons"></i>
                                </button>
                            </li>
                        </ul>
                        <!--icon disabled-->
                        <ul class="mdl-list pull-left">
                            <li class="mdl-list__item">
                                <span class="text-color--gray">Disabled</span>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--icon button--colored-light-blue"
                                        disabled>
                                    <i class="material-icons">assignment_returned</i>
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--icon button--colored-teal"
                                        disabled>
                                    <i class="material-icons">create</i>
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--icon button--colored-orange"
                                        disabled>
                                    <i class="material-icons">drafts</i>
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--icon button--colored-red"
                                        disabled>
                                    <i class="material-icons">forward</i>
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--icon button--colored-purple"
                                        disabled>
                                    <i class="material-icons">reply</i>
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--icon" disabled>
                                    <i class="material-icons">send</i>
                                </button>
                            </li>
                        </ul>
                        <ul class="mdl-list pull-left">
                            <li class="mdl-list__item">
                                <span class="text-color--gray"></span>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--icon button--facebook"
                                        disabled>
                                    <i class="material-icons"></i>
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--icon button--twitter"
                                        disabled>
                                    <i class="material-icons"></i>
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--icon button--dribbble"
                                        disabled>
                                    <i class="material-icons"></i>
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--icon button--behance"
                                        disabled>
                                    <i class="material-icons"></i>
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--icon button--linkedin"
                                        disabled>
                                    <i class="material-icons"></i>
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--icon button--github"
                                        disabled>
                                    <i class="material-icons"></i>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="mdl-cell mdl-cell--3-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone buttons-icons">
                <div class="mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text"> Raised Icon buttons</h2>
                    </div>

                    <div class="mdl-card__supporting-text">
                        <ul class="mdl-list pull-left">
                            <li class="mdl-list__item">
                                <span class="text-color--gray">Normal</span>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--raised mdl-js-ripple-effect button--colored-light-blue">
                                    <i class="material-icons">assignment_returned</i>
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--raised mdl-js-ripple-effect button--colored-teal">
                                    <i class="material-icons">create</i>
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--raised mdl-js-ripple-effect button--colored-orange">
                                    <i class="material-icons">drafts</i>
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--raised mdl-js-ripple-effect button--colored-red">
                                    <i class="material-icons">forward</i>
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--raised mdl-js-ripple-effect button--colored-purple">
                                    <i class="material-icons">reply</i>
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--raised mdl-js-ripple-effect">
                                    <i class="material-icons">send</i>
                                </button>
                            </li>
                        </ul>

                        <ul class="mdl-list pull-left">
                            <li class="mdl-list__item">
                                <span class="text-color--gray">Social</span>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--raised mdl-js-ripple-effect button--facebook">
                                    <i class="material-icons"></i>
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--raised mdl-js-ripple-effect button--twitter">
                                    <i class="material-icons"></i>
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--raised mdl-js-ripple-effect button--dribbble">
                                    <i class="material-icons"></i>
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--raised mdl-js-ripple-effect button--behance">
                                    <i class="material-icons"></i>
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--raised mdl-js-ripple-effect button--linkedin">
                                    <i class="material-icons"></i>
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--raised mdl-js-ripple-effect button--github">
                                    <i class="material-icons"></i>
                                </button>
                            </li>
                        </ul>
                        <!--icon disabled-->
                        <ul class="mdl-list pull-left">
                            <li class="mdl-list__item">
                                <span class="text-color--gray">Disabled</span>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--raised button--colored-light-blue"
                                        disabled>
                                    <i class="material-icons">assignment_returned</i>
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--raised button--colored-teal"
                                        disabled>
                                    <i class="material-icons">create</i>
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--raised button--colored-orange"
                                        disabled>
                                    <i class="material-icons">drafts</i>
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--raised button--colored-red"
                                        disabled>
                                    <i class="material-icons">forward</i>
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--raised button--colored-purple"
                                        disabled>
                                    <i class="material-icons">reply</i>
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--raised" disabled>
                                    <i class="material-icons">send</i>
                                </button>
                            </li>
                        </ul>
                        <ul class="mdl-list pull-left">
                            <li class="mdl-list__item">
                                <span class="text-color--gray"></span>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--raised mdl-js-ripple-effect button--facebook"
                                        disabled>
                                    <i class="material-icons"></i>
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--raised mdl-js-ripple-effect button--twitter"
                                        disabled>
                                    <i class="material-icons"></i>
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--raised mdl-js-ripple-effect button--dribbble"
                                        disabled>
                                    <i class="material-icons"></i>
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--raised mdl-js-ripple-effect button--behance"
                                        disabled>
                                    <i class="material-icons"></i>
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--raised mdl-js-ripple-effect button--linkedin"
                                        disabled>
                                    <i class="material-icons"></i>
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--raised mdl-js-ripple-effect button--github"
                                        disabled>
                                    <i class="material-icons"></i>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="mdl-cell mdl-cell--4-col-desktop mdl-cell--7-col-tablet mdl-cell--4-col-phone">
                <div class="mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">Buttons without background</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <!--BB-->
                        <ul class="mdl-list pull-left">
                            <li class="mdl-list__item">
                                <span class="text-color--gray">Basic button</span>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect color-text--light-blue">
                                    Button
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect color-text--teal">
                                    Button
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect color-text--orange">
                                    Button
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect color-text--red">
                                    Button
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect color-text--green">
                                    Button
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect button--colored-purple">
                                    Button
                                </button>
                            </li>
                        </ul>
                        <!--disabled-->
                        <ul class="mdl-list pull-left">
                            <li class="mdl-list__item">
                                <span class="text-color--gray">Disabled</span>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button button--colored-light-blue"
                                        disabled>
                                    Button
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button button--colored--teal"
                                        disabled>
                                    Button
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button button--colored-orange"
                                        disabled>
                                    Button
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button button--colored-red"
                                        disabled>
                                    Button
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button button--colored-green"
                                        disabled>
                                    Button
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button button--colored-purple"
                                        disabled>
                                    Button
                                </button>
                            </li>
                        </ul>
                        <!--BWI-->
                        <ul class="mdl-list pull-left">
                            <li class="mdl-list__item">
                                <span class="text-color--gray">Button with icon</span>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect button--colored-light-blue">
                                    <i class="material-icons">assignment_returned</i>
                                    Archive
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect button--colored-teal">
                                    <i class="material-icons">create</i>
                                    Create
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect button--colored-orange">
                                    <i class="material-icons">drafts</i>
                                    Drafts
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect button--colored-red">
                                    <i class="material-icons">forward</i>
                                    Forward
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect button--colored-green">
                                    <i class="material-icons">attach_file</i>
                                    Attach
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect button--colored-purple">
                                    <i class="material-icons">reply</i>
                                    Reply
                                </button>
                            </li>
                        </ul>
                        <!--SB-->
                        <ul class="mdl-list pull-left">
                            <li class="mdl-list__item">
                                <span class="text-color--gray">Social</span>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect button--facebook">
                                    <i class="material-icons"></i>
                                    Facebook
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect button--twitter">
                                    <i class="material-icons"></i>
                                    Twitter
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect button--dribbble">
                                    <i class="material-icons"></i>
                                    Dribbble
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect button--behance">
                                    <i class="material-icons"></i>
                                    Behance
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect button--linkedin">
                                    <i class="material-icons"></i>
                                    Linkedin
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect button--github">
                                    <i class="material-icons"></i>
                                    Github
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!--FAB BUTTONS-->
            <div class="mdl-cell mdl-cell--3-col-desktop mdl-cell--5-col-tablet mdl-cell--4-col-phone buttons-fab">
                <div class="mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">Fab button</h2>
                    </div>
                    <div class="mdl-card__supporting-text">

                        <ul class="mdl-list pull-left">
                            <li class="mdl-list__item">
                                <span class="text-color--gray">Colored FAB</span>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
                                    <i class="material-icons">add</i>
                                </button>
                            </li>
                        </ul>
                        <ul class="mdl-list pull-left">
                            <li class="mdl-list__item">
                                <span class="text-color--gray">With ripple</span>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
                                    <i class="material-icons">add</i>
                                </button>
                            </li>
                        </ul>
                        <ul class="mdl-list pull-left">
                            <li class="mdl-list__item">
                                <span class="text-color--gray">Disable</span>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored" disabled>
                                    <i class="material-icons">add</i>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--HOW TO USE-->
            <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone">
                <div class="mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">How to use</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <p>
                            To use button with color background, you need to use CSS class naming as the
                            corresponding color in lowercase with prefix <code><b>button--colored-</b></code>.<br>
                            If the color name is composed of more than one world, the words are separated by a dash "-".<br>
                            You can see the names of the colors <a href="ui-colors.html">here</a>.
                            <br><br>
                            <i class="color-text--teal">Example: You want to use colored button with color naming "Teal". CSS class for this case is <code><b>.button--colored-teal</b></code></i>
                            <br><br><br>
                            To use social button, you need to use CSS class naming as the
                            corresponding social network in lowercase with prefix <code><b>button--</b></code>.
                            <br><br>
                            <i class="color-text--teal">Example: You want to use Facebook button. CSS class for this case is <code><b>.button--facebook</b></code></i>
                        </p>
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
>>>>>>> b3a55e8fc6b2f52f9f04dc91e6f949eb8e8f2bc3
