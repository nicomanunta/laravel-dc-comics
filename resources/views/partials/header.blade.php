<header>
    <div class="container">
        <div class="row">
            <div class="col-3 text-center">
                <img src="{{ Vite::asset('resources/img/dc-logo.png')}}" alt="DC ">
            </div>
            <div class="col-9 d-flex align-items-center justify-content-start">
                <nav class="navbar-nav container navbar-light">
                    <ul class="list-unstyled d-flex justify-content-end">
                        <li class="nav-item"><a class="active" href="">CHARACTERS</a></li>
                        <li class="nav-item "><a class="active {{Route::currentRouteName()=== 'comics' ? 'current-route' : '' }}" href="{{ route('comic.index')}}">COMICS</a></li>
                        <li class="nav-item "><a class="active" href="">MOVIES</a></li>
                        <li class="nav-item "><a class="active" href="">TV</a></li>
                        <li class="nav-item "><a class="active" href="">GAMES</a></li>
                        <li class="nav-item "><a class="active" href="">COLLECTIBLES</a></li>
                        <li class="nav-item "><a class="active" href="">VIDEOS</a></li>
                        <li class="nav-item "><a class="active" href="">FANS</a></li>
                        <li class="nav-item "><a class="active" href="">NEWS</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-item dropdown-toggle active" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              SHOP
                            </a>
                            <ul class="dropdown-menu inset">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                       
                  
                         
                 
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
