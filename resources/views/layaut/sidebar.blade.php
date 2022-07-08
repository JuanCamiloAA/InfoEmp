
        <nav class="navbar navbar-light bg-img fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('info.index')}}">
                    <img src="../img/Logo.png" width="80rem" alt="">
                </a>
                <button class="navbar-toggler text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header bg-img">
                    <h5 class="offcanvas-title text-white" id="offcanvasNavbarLabel">Menú</h5>
                    <button type="button" class="btn text-reset" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fas fa-times-circle text-white"></i></button>
                </div>
                <div class="offcanvas-body" style="background-image: url('../img/fondologin.jpg');">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item hov_menu my-2">
                            <a class="nav-link text-dark px-3" aria-current="page" href="/npersonal"><i class="fas fa-user-edit"></i> Personal</a>
                        </li>
                        <li class="nav-item hov_menu my-2">
                            <a class="nav-link text-dark px-3" href="/ndir"><i class="fas fa-map-marked-alt"></i> Direcciones</a>
                        </li>
                        <li class="nav-item hov_menu my-2">
                            <a class="nav-link text-dark px-3" href="/ncont"><i class="fas fa-address-book"></i> Contactos</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item hov_menu my-2">
                            <a class="nav-link text-dark px-3" aria-current="page" href="/"><i class="fas fa-search-plus"></i> Nueva consulta</a>
                        </li>
                    </ul>
                </div>
                </div>
            </div>
        </nav>