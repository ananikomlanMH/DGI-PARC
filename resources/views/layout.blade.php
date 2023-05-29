<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DGI PARC | @yield('title', date('Y'))</title>
    <link rel="shortcut icon" type="image/png" href="/assets/images/logos/logo.png"/>
    <link rel="stylesheet" href="/assets/css/styles.css"/>
    <link rel="stylesheet" href="/assets/css/jquery-confirm.min.min.css"/>
    <link rel="stylesheet" href="/assets/css/tom-select.min.css"/>
</head>

<body>
<!--  Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
     data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div>
            <div class="brand-logo d-flex align-items-center justify-content-between">
                <a href="{{ route('home.index') }}" class="text-nowrap logo-img">
                    <img src="/assets/images/logos/logo_black.png" width="210" alt=""/>
                </a>
                <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                    <i class="ti ti-x fs-8"></i>
                </div>
            </div>
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                <ul id="sidebarnav">
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Home</span>
                    </li>
                    <li class="sidebar-item">
                        <a @class(['sidebar-link ', 'active' => \Illuminate\Support\Facades\Route::currentRouteName() == 'home.index']) href="{{ route('home.index') }}"
                           aria-expanded="false">
                        <span>
                          <i class="ti ti-layout-dashboard"></i>
                        </span>
                            <span class="hide-menu">Dashboard</span>
                        </a>
                    </li>

                    {{--  Maintenance --}}
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Maintenances</span>
                    </li>

                    <li class="sidebar-item">
                        <a @class(['sidebar-link','active' => str_starts_with(\Illuminate\Support\Facades\Route::currentRouteName(), 'maintenance')]) href="{{ route('maintenance.index') }}"
                           aria-expanded="false">
                            <span>
                              <i class="ti ti-tools"></i>
                            </span>
                            <span class="hide-menu">Maintenances</span>
                        </a>
                    </li>

                    {{--  Inventaires --}}
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Inventaires</span>
                    </li>

                    <li class="sidebar-item">
                        <a @class(['sidebar-link','active' => str_starts_with(\Illuminate\Support\Facades\Route::currentRouteName(), 'inventaire')]) href="{{ route('inventaire.index') }}"
                           aria-expanded="false">
                            <span>
                              <i class="ti ti-list-check"></i>
                            </span>
                            <span class="hide-menu">Inventaires</span>
                        </a>
                    </li>

                    {{--  Settings --}}
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Paramètres</span>
                    </li>

                    <li class="sidebar-item">
                        <a @class(['sidebar-link','active' => str_starts_with(\Illuminate\Support\Facades\Route::currentRouteName(), 'materiel')]) href="{{ route('materiel.index') }}"
                           aria-expanded="false">
                            <span>
                              <i class="ti ti-package"></i>
                            </span>
                            <span class="hide-menu">Matériels</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a @class(['sidebar-link','active' => str_starts_with(\Illuminate\Support\Facades\Route::currentRouteName(), 'service')]) href="{{ route('service.index') }}"
                           aria-expanded="false">
                            <span>
                              <i class="ti ti-building"></i>
                            </span>
                            <span class="hide-menu">Services</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a @class(['sidebar-link','active' => str_starts_with(\Illuminate\Support\Facades\Route::currentRouteName(), 'agent')]) href="{{ route('agent.index') }}"
                           aria-expanded="false">
                            <span>
                              <i class="ti ti-user"></i>
                            </span>
                            <span class="hide-menu">Agents</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a @class(['sidebar-link','active' => str_starts_with(\Illuminate\Support\Facades\Route::currentRouteName(), 'fournisseur')]) href="{{ route('fournisseur.index') }}"
                           aria-expanded="false">
                            <span>
                              <i class="ti ti-network"></i>
                            </span>
                            <span class="hide-menu">Fournisseurs</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a @class(['sidebar-link','active' => str_starts_with(\Illuminate\Support\Facades\Route::currentRouteName(), 'type_materiel')]) href="{{ route('type_materiel.index') }}"
                           aria-expanded="false">
                            <span>
                              <i class="ti ti-article"></i>
                            </span>
                            <span class="hide-menu">Types Matériel</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a @class(['sidebar-link','active' => str_starts_with(\Illuminate\Support\Facades\Route::currentRouteName(), 'etat_materiel')]) href="{{ route('etat_materiel.index') }}"
                           aria-expanded="false">
                            <span>
                              <i class="ti ti-article"></i>
                            </span>
                            <span class="hide-menu">Etats Matériel</span>
                        </a>
                    </li>


                </ul>
                <div class="unlimited-access hide-menu bg-light-primary position-relative mb-7 mt-5 rounded">
                    <div class="d-flex">
                        <div class="unlimited-access-title me-3">
                            <h6 class="fw-semibold fs-4 mb-6 text-dark w-85">Upgrade to pro</h6>
                            <a href="https://adminmart.com/product/modernize-bootstrap-5-admin-template/"
                               target="_blank" class="btn btn-primary fs-2 fw-semibold lh-sm">Buy Pro</a>
                        </div>
                        <div class="unlimited-access-img">
                            <img src="../assets/images/backgrounds/rocket.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
        <!--  Header Start -->
        <header class="app-header">
            <nav class="navbar navbar-expand-lg navbar-light">
                <ul class="navbar-nav">
                    <li class="nav-item d-block d-xl-none">
                        <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                            <i class="ti ti-menu-2"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                            <i class="ti ti-bell-ringing"></i>
                            <div class="notification bg-primary rounded-circle"></div>
                        </a>
                    </li>
                </ul>
                <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                    <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">

                        <li class="nav-item dropdown">
                            <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                               data-bs-toggle="dropdown"
                               aria-expanded="false">
                                <img src="../assets/images/profile/user-1.jpg" alt="" width="35" height="35"
                                     class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                 aria-labelledby="drop2">
                                <div class="message-body">
                                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                        <i class="ti ti-user fs-6"></i>
                                        <p class="mb-0 fs-3">Mon Profile</p>
                                    </a>
                                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                        <i class="ti ti-mail fs-6"></i>
                                        <p class="mb-0 fs-3">Mon Compte</p>
                                    </a>
                                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                        <i class="ti ti-list-check fs-6"></i>
                                        <p class="mb-0 fs-3">Mes Tâches</p>
                                    </a>
                                    <a href="{{ route('login') }}"
                                       class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!--  Header End -->
        <div class="container-fluid">
            @if(session('notification'))
                <div class="alert alert-{{ session('notification')['type'] }} alert-dismissible fade show" role="alert">
                    {{ session('notification')['message'] }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @yield('content')

        </div>

    </div>
</div>

<script src="/assets/libs/jquery/dist/jquery.min.js"></script>
<script src="/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/sidebarmenu.js"></script>
<script src="/assets/js/app.min.js"></script>
<script src="/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
<script src="/assets/libs/simplebar/dist/simplebar.js"></script>
<script src="/assets/js/dashboard.js"></script>
<script src="/assets/js/jquery-confirm.min.js"></script>
<script src="/assets/js/tom-select.complete.js"></script>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()

    let delete_form = document.querySelectorAll(".delete_form");
    delete_form.forEach((item) => {
        item.addEventListener("submit", (e) => {
            e.preventDefault();
            $.confirm({
                icon: 'fa fa-question',
                title: 'Confirmation',
                content: 'Voulez-vous supprimer cet enregistrement ? <br> Ce processus ne peut pas être annulé.',
                useBootstrap: false,
                boxWidth: '500px',
                // autoClose: 'Annuler|10000',
                theme: 'modern',
                closeIcon: true,
                animation: 'zoom',
                type: 'red',
                buttons: {
                    Supprimer: {
                        btnClass: 'btn__confirm__delete',
                        action: function () {
                            item.submit()
                        }
                    },
                    Annuler: function () {
                    }
                }
            });
        })
    })

</script>
</body>

</html>
