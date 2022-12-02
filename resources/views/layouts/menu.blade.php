<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="/" class="ps-3 d-lg-none d-md-block"><img width="30" src="{{ asset('img/icono.png') }} "
                    alt=""> </a>
            <a href="/" class="ps-3 d-none d-lg-block"><img width="200"
                    src="{{ asset('img/logo-ransa.png') }} " alt=""> </a>
        </div>

        <div class="clearfix"></div>

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-whmcs"></i> Administración <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            @can('adm.activities.index')
                                <li><a href="{{ route('adm.activities.index') }}">Procesos</a></li>
                            @endcan
                            @can('adm.positions.index')
                                <li><a href="{{ route('adm.positions.index') }}">Cargos Laborales</a></li>
                            @endcan
                            @can('adm.users.index')
                                <li><a href="{{ route('adm.users.index') }}">Usuarios</a></li>
                            @endcan
                            @can('adm.countries.index')
                                <li><a href="{{ route('adm.countries.index') }}">Paises</a></li>
                            @endcan
                            @can('adm.cities.index')
                                <li><a href="{{ route('adm.cities.index') }}">Ciudades</a></li>
                            @endcan
                            @can('adm.warehouses.index')
                                <li><a href="{{ route('adm.warehouses.index') }}">Almacenes</a></li>
                            @endcan
                            @can('adm.dissatisfaction_services.index')
                                <li><a>M. Servicio No Conforme<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li class="sub_menu"><a
                                                href="{{ route('adm.dissatisfaction_services.index') }}">Servicios No
                                                Conforme</a>
                                        </li>
                                        <li><a href="{{ route('adm.actions.index') }}">Acciones</a>
                                        </li>
                                    </ul>
                                </li>
                            @endcan
                            @can('adm.departaments.index')
                                <li><a href="{{ route('adm.departaments.index') }}">Departamentos</a></li>
                           @endcan
                            @can('adm.clients.index')
                                <li><a href="{{ route('adm.clients.index') }}">Clientes</a></li>
                            @endcan
                            @can('adm.suppliers.index')
                                <li><a href="{{ route('adm.suppliers.index') }}">Proveedores</a></li>
                            @endcan

                            @can('adm.employees.index')
                                <li><a href="{{ route('adm.employees.index') }}">Empleados</a></li>
                            @endcan
                            @can('adm.roles.index')
                                <li><a href="{{ route('adm.roles.index') }}">Roles</a></li>
                            @endcan
                            @can('adm.permissions.index')
                                <li><a href="{{ route('adm.permissions.index') }}">Permisos</a></li>
                            @endcan
                        </ul>
                    </li>
                    <li><a><i class="fa fa-edit"></i> Gestión Calidad <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            {{--@can('notifications.index')--}}
                                <li><a href="{{ route('notifications.index') }}">Servicio No Conforme Cliente</a></li>
                            {{--@endcan--}}
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>