<!DOCTYPE html>
<html lang="en">

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input {
  display: none;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:checked + .slider:before {
  transform: translateX(26px);
}

.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}

.label-text {
  display: inline-block;
  margin-left: 10px;
  vertical-align: middle;
}
</style>

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
                        <a class="nav-link active" href="{{'/clients'}}">
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




            
            <!-- Main Content -->
<div class="body">
    <h5 class="text-info">Components</h5>
    <!-- Breadcrumb item -->
    <nav class="mb-3" aria-label="breadcrumb">
        <ol class="breadcrumb d2c_global_breadcrumbs">
            <li class="breadcrumb-item"><a href="{{'/'}}"><i class="fas fa-home"></i></a></li>
            <li class="breadcrumb-item active" aria-current="page">Table</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-12">
            <!-- Advanced table -->
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-10">
                            <h5 class="mb-0 text-capitalize">Clients Details</h5>
                        </div>
                        <div class="col-sm-2 text-right">
    <button type="button" class="btn btn-primary m-1" data-bs-toggle="modal" data-bs-target="#newClientModal">Ajouter un Client</button>
</div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input type="text" id="searchInput" class="form-control" placeholder="Rechercher par nom de client...">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th style="width: 40px;">#</th>
                                    <th style="width: 250px;">Nom Complet</th>
                                    <th style="width: 100px;">Genre</th>
                                    <th style="width: 60px;">Contact/ID carte</th>
                                    <th style="width: 60px;">Adresse</th>
                                    <th style="width: 50px;">Action</th>
                                </tr>
                            </thead>
                            <tbody id="clientTableBody">
                                @foreach($clients as $client)
                                <tr>
                                    <td>{{$client->idClient}}</td>
                                    <td>{{$client->nomClient}}</td>
                                    <td>{{$client->genre}}</td>
                                    <td>{{$client->telephone}}/{{$client->numeroCin}}</td>
                                    <td>{{$client->adresse}}</td>
                                    <td>
                                        <div class="d-flex">
                                            @if($clients)
                                            <button class="btn btn-outline-primary me-2">
                                                <a href="{{ isset($client) ? route('editClient.edit', ['id' => $client->idClient]) : '#' }}" class="text-decoration-none">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                            </button>
                                            @endif
                                            <form action="{{ route('clients.destroy', ['id' => $client->idClient]) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce client ?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger">
                                                    <i class="far fa-times-circle"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="card-footer">
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-center" style="margin: 10px;">
                                    {{ $clients->links() }}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal pour Nouveau Client -->
<div class="modal fade" id="newClientModal" tabindex="-1" aria-labelledby="newClientModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newClientModalLabel">Nouveau Client</h5>
                <div class="logo-container">
                    <img src="./assets/images/client.png" alt="Logo" class="modal-logo">
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('clients.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nomClient" class="form-label text-secondary text-capitalize">Nom Complet</label>
                        <input type="text" class="form-control" id="nomClient" name="nom" placeholder="Entrer le nom" required>
                    </div>
                    <div class="mb-3">
                        <label for="adresseClient" class="form-label text-secondary text-capitalize">Adresse</label>
                        <input type="text" class="form-control" id="adresseClient" name="adresse" placeholder="Entrer l'adresse" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-secondary text-capitalize">Genre</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="genre" id="genreMale" value="male" required>
                            <label class="form-check-label" for="genreMale">Male</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="genre" id="genreFemale" value="female" required>
                            <label class="form-check-label" for="genreFemale">Female</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="telephoneClient" class="form-label text-secondary text-capitalize">Numéro de téléphone</label>
                        <input type="tel" class="form-control" id="telephoneClient" name="telephone" placeholder="Entrer le numéro de téléphone" required>
                    </div>
                    <div class="mb-3">
                        <label for="cinClient" class="form-label text-secondary text-capitalize">Carte d'identité</label>
                        <input type="text" class="form-control" id="cinClient" name="cin" placeholder="Entrer le numéro de carte d'identité" required>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    const searchInput = document.getElementById('searchInput');
    const clientTableBody = document.getElementById('clientTableBody');
    const clients = JSON.parse('{!! json_encode($clients) !!}');

    // Fonction de filtrage des clients
    function filterClients(searchTerm) {
        // Filtrer les clients en fonction du terme de recherche
        const filteredClients = clients.data.filter(client => {
            return client.nomClient.toLowerCase().includes(searchTerm.toLowerCase());
        });

        // Générer le HTML des clients filtrés
        const filteredClientsHtml = filteredClients.map(client => `
            <tr>
                <td>${client.idClient}</td>
                <td>${client.nomClient}</td>
                <td>${client.genre}</td>
                <td>${client.telephone}/${client.numeroCin}</td>
                <td>${client.adresse}</td>
                <td>
                    <div class="d-flex">
                    <button class="btn btn-outline-primary me-2">
                        <a href="{{ url('/editClient') }}/${client.idClient}/edit" class="text-decoration-none text-primary">
                        <i class="far fa-edit"></i>
                        </a>
                    </button>
                    <form action="{{ url('/client') }}/${client.idClient}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce client ?')">
                    @csrf
                    @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger">
                            <i class="far fa-times-circle text-danger"></i>
                        </button>
                        </form>

                    </div>
                </td>
            </tr>
        `).join('');

        // Afficher les clients filtrés dans le tableau
        clientTableBody.innerHTML = filteredClientsHtml;
    }

    // Écouter les événements de saisie dans le champ de recherche
    searchInput.addEventListener('input', function() {
        filterClients(this.value);
    });
</script>

</body>
</html>