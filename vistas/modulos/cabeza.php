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

    </div>
</header>
