<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/images/logo/logo-sm.png" type="image/gif" sizes="16x16">
    <title>Dashboard</title>
    <meta name="og:description" content="Unveiling the DataMents Free Bootstrap Admin Dashboard Template, your ultimate solution to a seamless web management experience! This is more than just a template; it's your partner in crafting a digital masterpiece.">
    <meta name="robots" content="index, follow">
    <meta name="og:title" property="og:title" content="DataMents - Free Bootstrap Admin Dashboard Template">
    <meta property="og:image" content="https://www.designtocodes.com/wp-content/uploads/2023/08/DataMents-Free-Bootstrap-Admin-Dashboard-Template.jpg">
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="./lib/bootstrap_5/bootstrap.min.css">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="./lib/fontawesome/css/all.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="./assets/css/global.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="./assets/css/responsive.css">
</head>

<body>
    <div class="d2c_wrapper">
        <!-- sidebar -->
        <div class="d2c_sidebar d2c_home rounded-4 px-4 py-4 py-md-4 m-4 me-0" id="sidebar">
            <div class="d-flex flex-column h-100">
                <a href="{{'/'}}" class="mb-0 brand-icon">
                    <img class="navbar-brand w-100" src="./assets/images/logo/logo.png" alt="logo">
                </a>
                <hr class="divider">
                <ul class="navbar-nav flex-grow-1" id="d2c_Sidebar">
                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link active" href="{{'/'}}">
                            <i class="fas fa-home me-2"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{'/transactions'}}">
                            <i class="fas fa-credit-card"></i>
                            <span>Transactions</span>
                        </a>
                    </li>
                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{'/voitures'}}">
                            <i class="fas fa-cog"></i>
                            <span>Section Automobile</span>
                        </a>
                    </li>
                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{'/clients'}}">
                            <i class="fas fa-users"></i>
                            <span>Section Clients</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{'/factures'}}">
                            <i class="fas fa-user-tie"></i>
                            <span>Section Factures</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{'/users'}}">
                            <i class="fas fa-user-tie"></i>
                            <span>Section Users</span>
                        </a>
                    </li>
                </ul>

                <hr class="divider">

                <!-- Sidebar: Profile -->
                <div class="sidebar-mini-btn text-light">
                    <div class="dropdown">
                        <a class="dropdown-closer" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                             <img class="img-profile rounded-circle object-fit-cover border border-2 border-white me-2"
                                src="./assets/images/avatar/man-4.png" alt="avatar" width="30" height="30">
                             <span>{{ Auth::user()->name }}</span>
                        </a>
                        <!-- Dropdown -->
                        <div class="dropdown-menu shadow border-0 end-0 start rounded-3">
    @if (Auth::check())
        <a class="dropdown-item" href="{{ route('profile.edit') }}">
            <i class="fas fa-user fa-fw me-2 text-gray-400"></i>
            Profil
        </a>
        <div class="dropdown-divider"></div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="dropdown-item">
                <i class="fas fa-sign-out-alt fa-fw me-2 text-gray-400"></i>
                Déconnexion
            </button>
        </form>
    @else
        <a class="dropdown-item" href="{{ route('login') }}">
            <i class="fas fa-sign-in-alt fa-fw me-2 text-gray-400"></i>
            Connexion
        </a>
        @if (Route::has('register'))
            <a class="dropdown-item" href="{{ route('register') }}">
                <i class="fas fa-user-plus fa-fw me-2 text-gray-400"></i>
                S'enregistrer
            </a>
        @endif
    @endif
    <div class="dropdown-arrow bg-info"></div>
</div>

                    </div>
                </div>
                <!-- Sidebar: Profile -->
            </div>
        </div>

        <!-- main body area -->
        <div class="d2c_main px-lg-4 px-md-4 px-3">
            <!-- Top Nav -->
            <nav
                class="navbar navbar-expand navbar-light sticky-top bg-white shadow py-2 px-3 rounded-4 d2c_top_navbar my-4">
                <!-- Sidebar toggler -->
                <button type="button" id="sidebarCollapse"
                    class="btn btn-transparent text-info d2c_sidebar_collapse me-1">
                    <i class="fas fa-bars"></i>
                </button>
                <!-- Sidebar toggler -->
                <div>
                    <!-- Search Form -->
                    <form class="form d2c_nav_form me-3 d-none d-md-flex" role="search">
                        <div class="input-group">
                            <button class="btn btn-outline-info rounded-end rounded-pill border-end-0" type="submit">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                            <input class="form-control border-start-0 rounded-start rounded-pill" type="search"
                                placeholder="Search..." aria-label="Search" required>
                        </div>
                    </form>
                    <!-- Search Form: Nav Item -->
                    <div class="d-flex d-md-none">
                        <!-- Search Box: Nav Item -->
                        <a class="nav-link text-info" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="fas fa-search fa-sm"></i>
                        </a>

                        <ul class="dropdown-menu p-0 mt-0 border-0 rounded-pill">
                            <li>
                                <form class="form d2c_nav_form" role="search">
                                    <div class="input-group">
                                        <button class="btn btn-outline-info rounded-end rounded-pill border-end-0"
                                            type="submit">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                        <input class="form-control border-start-0 rounded-start rounded-pill"
                                            type="search" placeholder="Search..." aria-label="Search" required>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Search Form: Nav Item -->

                <ul class="navbar-nav align-items-center mb-lg-0 ms-auto">
                    <!-- Notification: Nav Item -->
                    <li class="nav-item d2c_dropdown_right dropdown me-3">
                        <a class="nav-link text-info p-0" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="fas fa-bell fa-fw"></i>
                            <span
                                class="position-absolute top-0 start-100 translate-middle p-1 bg-secondary border rounded-circle"></span>
                        </a>
                    </li>
                    <!-- Notification: Nav Item -->

                    <!-- MailBox: Nav Item -->
                    <li class="nav-item d2c_dropdown_right dropdown me-3">
                        <a class="nav-link position-relative text-info p-0" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-envelope-open-text"></i>
                            <span
                                class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle"></span>
                        </a>
                    </li>
                    <!-- MailBox: Nav Item -->
                </ul>
            </nav>
            <!-- Top Nav -->

            <!-- Body: Body -->
            <div class="body">

                <div class="row d2c_home_balance_card">
                    <!-- wallet balance card -->
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <div class="d2c_icon bg-primary rounded-circle text-white">
                                        <i class="fas fa-car"></i>
                                    </div>
                                    <div class="d2c_status_btn border-0 text-success fw-bold"> <i class="fas fa-upload ms-1"></i></div>
                                </div>
                                <p class="small text-muted mb-1">Voiture disponible</p>
                                <h5 class="mb-1 fw-bold text-dark">{{$voituresDisponible}}/{{$countVoitures}}</h5>
                                <p class="small text-muted mb-0">véhicules</p>
                            </div>
                        </div>
                    </div>

                    <!-- Personal Balance card   -->
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <div class="d2c_icon bg-dark rounded-circle text-white">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <div class="d2c_status_btn d2c_danger border-0 text-danger fw-bold"> <i class="fas fa-download"></i></div>
                                </div>
                                <p class="small text-muted mb-1">Clients</p>
                                <h5 class="mb-1 fw-bold text-dark">{{$countClients}}</h5>
                                <p class="small text-muted mb-0">personnes</p>
                            </div>
                        </div>
                    </div>

                    <!-- Cash in Tone Wallet card -->
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <div class="d2c_icon bg-success rounded-circle text-white">
                                        <i class="fas fa-money-bill"></i>
                                    </div>
                                    <div class="d2c_status_btn border-0 text-success fw-bold"> <i class="fas fa-upload ms-1"></i></div>
                                </div>
                                <p class="small text-muted mb-1">Transactions</p>
                                <h5 class="mb-1 fw-bold text-dark">{{$totalTransactions}} DH</h5>
                                <p class="small text-muted mb-0">réalisées</p>
                            </div>
                        </div>
                    </div>


                    <!-- Money Received card -->
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <div class="d2c_icon bg-warning rounded-circle text-white">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="d2c_status_btn border-0 text-success fw-bold"> <i class="fas fa-upload ms-1"></i></div>
                                </div>
                                <p class="small text-muted mb-1">Location terminée</p>
                                <h5 class="mb-1 fw-bold text-dark">{{$transationTermine}}</h5>
                                <p class="small text-muted mb-0">réservations</p>
                            </div>
                        </div>
                    </div>

                </div>

                <!--basic 2 table-->
                <div class="container">
    <div class="row">
        <div class="col-lg-6">
            <!-- First table -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 text-capitalize">Nouvelles voitures</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0 table-borderless">
                            <tbody>
                            @foreach($dernieresVoitures as $derniereVoiture)
                                <tr>
                                    <td><i class="fas fa-car me-2"></i>
                                    <span class="me-2">{{$derniereVoiture->marque}}</span>
                                    @if($derniereVoiture->statut == 'disponible')
                                    <span class="text-success">  {{$derniereVoiture->statut}}</span>
                                    @else
                                    <span class="text-danger">  {{$derniereVoiture->statut}}</span>
                                    @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <!-- First table -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 text-capitalize">Nouvelles Clients</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0 table-borderless">
                        <tbody>
                        @foreach($dernieresClients as $derniereClient)
                        <tr>
                            <td><i class="fas fa-user me-2"></i><span class="me-2">{{$derniereClient->nomClient}}</span><i class="fas fa-male"></i></td>
                        </tr>  
                        @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
</div>

                <!-- Table 1 -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 text-capitalize">Transaction récente</h5>
                            </div>
                            <div class="d2c_dataTable table-responsive">
                                <table id="table_id_1" class="w-100">
                                    <thead>
                                        <tr>
                                            <th style="min-width: 120px;">Date de la transaction</th>
                                            <th style="min-width: 120px;">Client</th>
                                            <th style="min-width: 120px;">Voiture</th>
                                            <th style="min-width: 120px;">Date de début</th>
                                            <th style="min-width: 120px;">Date de retour</th>
                                            <th style="min-width: 120px;">Total</th>
                                            <th style="min-width: 120px;">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($recentTransactions as $recentTransaction)
                                        <tr>
                                            <td>{{$recentTransaction->dateTransaction}}</td>
                                            <td>{{$recentTransaction->client}}</td>
                                            <td>{{$recentTransaction->voiture}}</td>
                                            <td>{{$recentTransaction->dateLocation}}</td>
                                            <td>{{$recentTransaction->dateRetour}}</td>
                                            <td>{{$recentTransaction->prix}} DH</td>
                                            <td><i class="fas fa-check text-success"></i> Fini</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="card-footer">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-center" style="margin :10px ;">
                                    {{ $recentTransactions->links() }}
                                    </ul>
                                </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                       


    <!-- Initial  Javascript -->
    <script src="./lib/jQuery/jquery-3.5.1.min.js"></script>
    <script src="./lib/bootstrap_5/bootstrap.bundle.min.js"></script>

    <!-- custom js -->
    <script src="./assets/js/main.js"></script>

    <!-- apex chart -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <!-- dashboard chart js-->
    <script src="./assets/js/dashboard_chart.js"></script>
</body>

</html>
