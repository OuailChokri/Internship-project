<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('assets/images/logo/logo-sm.png') }}" type="image/gif" sizes="16x16">
    <title>Dashboard</title>
    <meta name="og:description" content="Unveiling the DataMents Free Bootstrap Admin Dashboard Template, your ultimate solution to a seamless web management experience! This is more than just a template; it's your partner in crafting a digital masterpiece.">
    <meta name="robots" content="index, follow">
    <meta name="og:title" property="og:title" content="DataMents - Free Bootstrap Admin Dashboard Template">
    <meta property="og:image" content="https://www.designtocodes.com/wp-content/uploads/2023/08/DataMents-Free-Bootstrap-Admin-Dashboard-Template.jpg">
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="{{ asset('lib/bootstrap_5/bootstrap.min.css') }}">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="{{ asset('lib/fontawesome/css/all.min.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('assets/css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

</head>


<body>
    <div class="d2c_wrapper">
        <!-- sidebar -->
        <div class="d2c_sidebar d2c_home rounded-4 px-4 py-4 py-md-4 m-4 me-0" id="sidebar">
            <div class="d-flex flex-column h-100">
                <a href="{{'/'}}" class="mb-0 brand-icon">
                    <img class="navbar-brand w-100" src="{{ asset('assets/images/logo/logo.png') }}" alt="logo">
                </a>
                <hr class="divider">
                <ul class="navbar-nav flex-grow-1" id="d2c_Sidebar">
                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{'/'}}">
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
                        <a class="nav-link active" href="{{'/factures'}}">
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

                    
                    <!-- Menu Item -->

                </ul>

                <hr class="divider">

                <!-- Sidebar: Profile -->
                <div class="sidebar-mini-btn text-light">
                    <div class="dropdown">
                        <a class="dropdown-closer" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                             <img class="img-profile rounded-circle object-fit-cover border border-2 border-white me-2"
                                src="{{asset('/assets/images/avatar/man-4.png')}}" alt="avatar" width="30" height="30">
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




            
            <!-- Main Content -->
<div class="body">
    <h5 class="text-info">Components</h5>
    <!-- Breadcrumb item -->
    <nav class="mb-3" aria-label="breadcrumb">
        <ol class="breadcrumb d2c_global_breadcrumbs">
            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i></a></li>
            <li class="breadcrumb-item active" aria-current="page">Ajouter une Facture</li>
        </ol>
    </nav>

    <!-- Form to add a new Facture -->
    <div class="col-lg-12 d-flex justify-content-center">
        <div class="card" style="width: 100%;">
            <div class="card-header">
                <h5 class="mb-0 text-capitalize">Nouvelle Facture</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('factures.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="client" class="form-label text-secondary text-capitalize">Client</label>
                        <select class="form-control" name="idClient" id="client" required>
                            @foreach($clients as $client)
                            <option value="{{ $client->idClient }}">{{ $client->nomClient }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="transaction" class="form-label text-secondary text-capitalize">Transaction</label>
                        <select class="form-control" name="idTransaction" id="transaction" required>
                            @foreach($transactions as $transaction)
                            <option value="{{ $transaction->idTransaction }}">{{ $transaction->idTransaction }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="date_facture" class="form-label text-secondary text-capitalize">Date de Facture</label>
                        <input type="date" class="form-control" name="dateFacture" id="date_facture" required>
                    </div>
                    <div class="mb-3">
                        <label for="montant_total" class="form-label text-secondary text-capitalize">Montant Total</label>
                        <input type="number" step="0.01" class="form-control" name="montantTotal" id="montant_total" placeholder="Entrer le montant total" required>
                    </div>
                    <div class="mb-3">
                        <label for="statut" class="form-label text-secondary text-capitalize">Statut</label>
                        <select class="form-control" name="statut" id="statut" required>
                            <option value="payé">Payé</option>
                            <option value="impayé">Impayé</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                    <a href="{{ route('factures.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>


</body>
</html>