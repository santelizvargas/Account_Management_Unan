<!-- navbar start -->
<nav class="navbar navbar-expand-sm p-0 ">
    <div class="container-fluid px-4">
        <h3 class="navbar-brand title-bar">
            <img src="{{ asset('img/logos/Logo.png')}}" class="logo-style" alt="logo"/>
        </h3>

        <span class="vertical-line"></span>
        <h2 class="text-title">{{$title}}</h2>

        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto ms-auto mb-2 mb-lg-0">
                <li class="nav-item navbar-option" style="height: 100%">
                    <a class="nav-link" aria-current="true" href="{{route('home')}}">
                        <i class="bi bi-house"></i>
                        Inicio
                    </a>
                </li>

                @if(auth()->user()->isAdmin() || auth()->user()->authorize('cajero'))
                    <!-- Records option -->
                    <li class="nav-item dropdown navbar-option">
                        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-list-check"></i>
                            Registros
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="{{route('payments.index')}}">
                                    <i class="bi bi-credit-card-2-front"></i>
                                    Recibos de pagos
                                </a>
                            </li>

                            @if(auth()->user()->isAdmin())
                                <li>
                                    <a class="dropdown-item" href="{{route('roles.index')}}">
                                        <i class="bi bi-ui-radios"></i>
                                        Roles
                                    </a>
                                </li>
                            @endif

                            <li>
                                <a class="dropdown-item" aria-current="true" href="{{route('users.index')}}">
                                    <i class="bi bi-person-circle"></i>
                                    Usuarios
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="{{route('concepts.index') }}">
                                    <i class="bi bi-card-text"></i>
                                    Conceptos
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="{{route('currencies.index') }}">
                                    <i class="bi bi-coin"></i>
                                    Monedas
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif

                <!-- Tools option -->
                <li class="nav-item dropdown navbar-option">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-list-check"></i>
                        Herramientas
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="{{route('password.request')}}">
                                <i class="bi bi-lock-fill"></i>
                                Cambiar contraseña
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Option 3 dropdown -->
                <li class="nav-item me-2 ms-2">
                    <div class="session-user nav-link text-white px-2">
                        <i class="bi bi-person-fill"></i>
                        {{auth()->user()->names}}
                        <span class="mx-2">|</span>
                        <a class="fw-bold text-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="bi bi-box-arrow-right"></i>
                            Salir
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
