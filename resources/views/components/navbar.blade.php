<nav class="navbar navbar-expand-lg sticky-top bg-cipria text-uppercase fs-6 px-1 py-2 border-bottom align-items-center">
    <div class="container-fluid">
        <div class="row justify-content-between align-items-center w-100">
            <div class="col-auto">
                <a class="navbar-brand text-white" href="{{ route('homepageRoute') }}">
                    <img src="\immagini\logo-senza-sfondo-bianco.png" alt="" height="60px">
                </a>
            </div>
            <div class="col-auto">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas bg-carne offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title title-nav-toggler" id="offcanvasNavbarLabel">AD BeautyLab</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 gap-1 gap-md-4 pe-3">
                            <li class="nav-item">
                                <a class="nav-link" href="#chi-sono">Chi sono?</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Il mio negozio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('treatmentsRoute') }}">Trattamenti</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('contactsRoute') }}">Contatti</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

