<div class="top_nav">
    <div class="nav_menu">
        <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>
        <nav class="nav navbar-nav">
            <ul class=" navbar-right">
                @auth
                    <li class="nav-item dropdown open" style="padding-left: 15px;">
                        <a href="#" class="user-profile dropdown-toggle" role="button" aria-haspopup="true"
                            id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <img class="rounded-circle" width="32" height="32"
                                    src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            @else
                                {{ Auth::user()->name }}
                            @endif

                        </a>
                        <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('profile.show') }}"> Perfil</a>
                            <a class="dropdown-item"
                                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                                href="{{ route('logout') }}"><i class="fa fa-sign-out pull-right"></i>Salir</a>
                            <form method="POST" id="logout-form" action="{{ route('logout') }}">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endauth
            </ul>
        </nav>
    </div>
</div>