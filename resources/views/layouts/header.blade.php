<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <a href="/"><img class="logo-image" src="https://laravel.com/img/logotype.min.svg"></a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('users') }}">Users</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ route('service') }}">Service</a></li>
                            <li><a class="dropdown-item" href="{{ route('serviceParam', '1') }}">Service 1</a></li>
                            <li><a class="dropdown-item" href="{{ route('serviceParam', '2') }}">Service 2</a></li>
                            <li><a class="dropdown-item" href="{{ route('serviceParam', '3') }}">Service 3</a></li>
                            <li><a class="dropdown-item" href="{{ route('serviceParam', '4') }}">Service 4</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>