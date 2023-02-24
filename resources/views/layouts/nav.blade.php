

    <!-- Navbar Dark -->
    <!-- Navbar Dark -->
@section("navbar")
    <nav  class="navbar navbar-expand-lg navbar-dark bg-dark z-index-3 py-3">
        <div class="container">cc
            <a class="navbar-brand text-white" href="" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" >
                Bieres
            </a>

            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon mt-2">
        <span class="navbar-toggler-bar bar1"></span>
        <span class="navbar-toggler-bar bar2"></span>
        <span class="navbar-toggler-bar bar3"></span>
      </span>
            </button>
            <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
                <ul class="navbar-nav navbar-nav-hover mx-auto">
                    <li class="nav-item mx-2">
                        <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center text-light" role="button" href="{{url("/accueil")}}">
                            lister
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center text-light" role="button" href="{{url("/accueil")}}">
                            Accueil
                        </a>
                    </li>

                    <li class="nav-item mx-2">
                        <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center text-light" role="button" href="{{url("/contact")}}">
                            Contact
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center text-light" role="button" href="{{url("/apropos")}}">
                            A propos
                        </a>
                    </li>
                </ul>


            </div>
        </div>
    </nav>
    @endsection
    <!-- End Navbar -->





