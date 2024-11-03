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

<style>
    .bg-label-success {
  background-color: #e8fadf !important;
  color: #71dd37 !important;
  font-size: 14px; 
}
.bg-label-danger {
  background-color: #ffe0db !important;
  color: #ff3e1d !important;
  font-size: 14px; 

}
</style>
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
                        <a class="nav-link active" href="{{'/voitures'}}">
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
                        <a class="nav-link " href="{{'/users'}}">
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
                        <h5 class="mb-0 text-capitalize">Voitures Details</h5>
                    </div>
                    <div class="col-sm-2 text-right">
    <button type="button" class="btn btn-primary m-1" data-bs-toggle="modal" data-bs-target="#newCarModal">Ajouter une Voiture</button>
</div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <input type="text" id="searchInput" class="form-control" placeholder="Rechercher par nom de voiture...">
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
                                <th style="width: 250px;">Nom Complet et N</th>
                                <th style="width: 100px;">Numéro de Matricule</th>
                                <th style="width: 60px;">Couleur</th>
                                <th style="width: 60px;">année de production</th>
                                <th style="width: 60px;">Date de l'Impôt</th>
                                <th style="width: 60px;">Date d'Assurance de Voiture</th>
                                <th style="width: 10px;">Prix Jour</th>
                                <th style="width: 50px;">Status</th>
                                <th style="width: 50px;">Action</th>
                            </tr>
                        </thead>
                        <tbody id="voitureTableBody">
                            @foreach($voitures as $voiture)
                            <tr>
                                <td>{{$voiture->idVoiture}}</td>
                                <td>{{$voiture->marque}}</td>
                                <td>{{$voiture->plaque}}</td>
                                <td>{{$voiture->couleur}}</td>
                                <td>{{$voiture->annee}}</td>
                                <td>{{$voiture->date_impot}}</td>
                                <td>{{$voiture->date_assurance}}</td>
                                <td>{{$voiture->prixJour}}</td>
                                <td>
                                    @if($voiture->statut === 'disponible')
                                    <span class="badge bg-label-success me-1">{{$voiture->statut}}</span>
                                    @else
                                    <span class="badge bg-label-danger me-1">{{$voiture->statut}}</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <button class="btn btn-outline-primary me-2">
                                            <a href="{{ isset($voiture) ? route('editVoiture.edit', ['id' => $voiture->idVoiture]) : '#' }}" class="text-decoration-none">
                                                <i class="far fa-edit"></i>
                                            </a>
                                        </button>
                                        <form action="{{ route('voitures.destroy', $voiture->idVoiture) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette voiture ?')">
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
                            <ul class="pagination justify-content-center" style="margin :10px ;">
                                {{ $voitures->links() }}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="newCarModal" tabindex="-1" aria-labelledby="newCarModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newCarModalLabel">Nouvelle Voiture </h5>
                <div class="logo-container" style="padding-left:10px;">
                    <img src="./assets/images/voiture.png" alt="Logo" class="modal-logo">
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('voitures.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label text-secondary text-capitalize">Nom</label>
                        <input type="text" name="nom" class="form-control" id="name" placeholder="Entrer le nom" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-secondary text-capitalize">Numéro de Matricule</label>
                        <input type="text" name="plaque" class="form-control" id="exampleInputEmail1" placeholder="Entrer le Numéro de Matricule" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label text-secondary text-capitalize">Couleur</label>
                        <input type="text" name="couleur" class="form-control" id="exampleInputPassword1" placeholder="Entrer le Couleur" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputurl1" class="form-label text-secondary text-capitalize">année de production</label>
                        <input type="text" name="annee" class="form-control" id="exampleInputurl1" placeholder="Entrer Année De Production" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label text-secondary text-capitalize">Date de l'impot</label>
                        <input type="date" name="date_impot" class="form-control" id="exampleInputPassword1" placeholder="Entrer le date de l'impot" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label text-secondary text-capitalize">Date de l'assurance</label>
                        <input type="date" name="date_assurance" class="form-control" id="exampleInputPassword1" placeholder="Entrer le date de l'assurance" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label text-secondary text-capitalize">Prix Jour</label>
                        <input type="number" name="prixJour" class="form-control" id="exampleInputPassword1" placeholder="Entrer le prix" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-secondary text-capitalize">Status</label>
                        <input type="text" name="statut" class="form-control" placeholder="Status" required/>
                    </div>

                    <!-- Modal footer with buttons -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</div>


            <script>
    // Sélectionner les éléments DOM
    const searchInput = document.getElementById('searchInput');
    const voitureTableBody = document.getElementById('voitureTableBody');
    const voitures = JSON.parse('{!! json_encode($voitures) !!}');
    console.log(voitures)

    // Fonction de filtrage des voitures
    function filterVoitures(searchTerm) {
        // Filtrer les voitures en fonction du terme de recherche
        const filteredVoitures = voitures.data.filter(voiture => {
            return voiture.marque.toLowerCase().includes(searchTerm.toLowerCase());
        });

        // Générer le HTML des voitures filtrées
        const filteredVoituresHtml = filteredVoitures.map(voiture => {
            return `
                <tr>
                    <td>${voiture.idVoiture}</td>
                    <td>${voiture.marque}</td>
                    <td>${voiture.plaque}</td>
                    <td>${voiture.couleur}</td>
                    <td>${voiture.annee}</td>
                    <td>${voiture.date_impot}</td>
                    <td>${voiture.date_assurance}</td>
                    <td>${voiture.prixJour}</td>
                    <td>
                        <span class="${voiture.statut === 'disponible' ? 'badge bg-label-success me-1' : 'badge bg-label-danger me-1'}">${voiture.statut}</span>
                    </td>
                    <td>
    <div class="d-flex">
        <button class="btn btn-outline-primary me-2">
            <a href="{{ url('/editVoiture') }}/${voiture.idVoiture}/edit" class="text-decoration-none text-primary">
                <i class="far fa-edit"></i>
            </a>
        </button>
        <form action="{{ url('/voiture') }}/${voiture.idVoiture}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette voiture ?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-danger">
                <i class="far fa-times-circle text-danger"></i>
            </button>
        </form>
    </div>
</td>

                </tr>
            `;
        }).join('');

        // Afficher les voitures filtrées dans le tableau
        voitureTableBody.innerHTML = filteredVoituresHtml;
    }

    // Écouter les événements de saisie dans le champ de recherche
    searchInput.addEventListener('input', function() {
        filterVoitures(this.value);
    });

    // Afficher toutes les voitures au chargement de la page
    filterVoitures('');
</script>

</body>
</html>