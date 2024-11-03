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
    <!-- Select2 CSS -->

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Select2 JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.1/js/select2.min.js"></script>

    
    <!-- Bootstrap CSS -->
<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
.select2-container {
            opacity: 0;
            pointer-events: none;
            position: absolute;
        }
        .logo-container {
        display: flex;
        align-items: center;
        margin-right: auto; /* Ajuste la position du logo à droite */
    }

    .modal-logo {
        height: auto; /* Permet le redimensionnement proportionnel */
        margin-right: 20%; /* Espacement entre le titre et le logo */
    }
    /* Style pour le label */
.form-label {
    font-weight: bold;
}

/* Style pour le select2 */
.select2-container {
    width: 100%; /* Largeur complète du conteneur */
    max-width: 100%; /* Ajustement à la largeur parente si nécessaire */
}

.select2-selection {
    border-color: #ced4da; /* Couleur de la bordure */
    height: auto; /* Hauteur automatique pour s'ajuster au contenu */
    padding: .375rem .75rem; /* Espacement interne */
    font-size: 1rem; /* Taille de la police */
    line-height: 1.5; /* Hauteur de ligne */
}

.select2-selection--multiple {
    min-height: 38px; /* Hauteur minimale pour la sélection multiple */
}

.select2-selection__choice {
    background-color: #007bff; /* Couleur de fond pour les choix sélectionnés */
    color: #fff; /* Couleur du texte pour les choix sélectionnés */
    padding: 0 10px; /* Espacement interne des choix sélectionnés */
    margin-right: 5px; /* Marge à droite des choix sélectionnés */
}

.select2-selection__choice__remove {
    margin-left: 5px; /* Marge à gauche du bouton de suppression des choix */
    color: #fff; /* Couleur du texte pour le bouton de suppression des choix */
}

.select2-container--default .select2-selection--multiple .select2-selection__rendered {
    margin: 0; /* Ajustement de la marge pour la sélection rendue */
    padding-top: 2px; /* Espacement interne en haut de la sélection rendue */
    padding-bottom: 2px; /* Espacement interne en bas de la sélection rendue */
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
                        <a class="nav-link " href="{{'/clients'}}">
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
            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i></a></li>
            <li class="breadcrumb-item active" aria-current="page">Table</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-12">
            <!-- Advanced table -->
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-sm-10">
                            <h5 class="mb-0 text-capitalize">Factures Details</h5>
                        </div>
                        <div class="col-sm-2 text-right">
                            <button type="button" class="btn btn-primary m-1" data-toggle="modal" data-target="#addFactureModal">Ajouter une Facture</button>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <input type="text" id="searchInput" class="form-control" placeholder="Rechercher par nom de client...">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th style="width: 40px;">#</th>
                                    <th style="width: 200px;">Client</th>
                                    <th style="width: 600px;">Transaction</th>
                                    <th style="width: 100px;">Date de Facture</th>
                                    <th style="width: 100px;">Montant Total</th>
                                    <th style="width: 100px;">Statut</th>
                                    <th style="width: 50px;">Action</th>
                                </tr>
                            </thead>
                            <tbody id="factureTableBody">
                                @foreach($factures as $facture)
                                <tr id="facture-{{ $facture->idFacture }}">
                                    <td>{{ $facture->idFacture }}</td>
                                    <td>{{ $facture->client }}</td>
                                    <td>
                                        <div class="row">
                                            @foreach($facture->transactions as $transaction)
                                            <div class="col-md-6 col-lg-4">
                                                <div class="card mb-3 shadow-sm">
                                                    <div class="card-body">
                                                        <h6 class="card-title font-weight-bold" style="font-size: 14px;">ID: {{ $transaction->idTransaction }}</h6>
                                                        <p class="card-text" style="font-size: 15px;">
                                                            <span class="text-primary">{{ $transaction->voiture }}<br></span>
                                                            <span class="text-success">{{ $transaction->prix }} DH</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </td>
                                    <td>{{ $facture->dateFacture }}</td>
                                    <td>{{ $facture->montantTotal }}</td>
                                    <td>{{ $facture->statut }}</td>
                                    <td>
                                        <div class="d-flex btn-group">
                                            <a href="{{ route('factures.edit', $facture->idFacture) }}" class="btn btn-outline-primary me-2">
                                                <i class="far fa-edit"></i>
                                            </a>
                                            <form action="{{ route('factures.destroy', $facture->idFacture) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette facture ?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger me-2">
                                                    <i class="far fa-times-circle"></i>
                                                </button>
                                            </form>
                                            <button type="button" class="btn btn-print btn-sm" data-id="{{ $facture->idFacture }}">
                                                <i class="fas fa-print"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center" style="margin: 10px;">
                            {{ $factures->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="modal fade" id="addFactureModal" tabindex="-1" role="dialog" aria-labelledby="addFactureModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addFactureModalLabel">Nouvelle Facture</h5>
                <div class="logo-container" style="padding-left:10px;">
                    <img src="./assets/images/facture.png" alt="Logo" class="modal-logo">
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('factures.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="client" class="form-label text-secondary text-capitalize">Client</label>
                        <select class="form-control select2" name="client" id="client" required>
                            <option>Choisir un Client</option>
                            @foreach($clients as $client)
                                <option value="{{ $client->nomClient }}">{{ $client->nomClient }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
    <label for="transaction" class="form-label text-secondary text-capitalize">Transactions</label>
    <select class="form-control select2" name="idTransaction[]" id="transaction" multiple required>
        <option>Choisir ce Transaction</option>
        <!-- Options will be populated dynamically based on client selection -->
    </select>
</div>

                    <div class="mb-3">
                        <label for="dateFacture" class="form-label text-secondary text-capitalize">Date de Facture</label>
                        <input type="date" class="form-control" name="dateFacture" id="dateFacture" required>
                    </div>
                    <div class="mb-3">
                        <label for="montantTotal" class="form-label text-secondary text-capitalize">Montant Total</label>
                        <input type="number" step="0.01" class="form-control" name="montantTotal" id="montantTotal" placeholder="Entrer le montant total" disabled required>
                    </div>
                    <div class="mb-3">
                        <label for="statut" class="form-label text-secondary text-capitalize">Statut</label>
                        <select class="form-control" name="statut" id="statut" required>
                            <option value="payé">Payé</option>
                            <option value="impayé">Impayé</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>




<!-- Inclure jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Inclure Select2 JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.1/js/select2.min.js"></script>

<!-- Inclure DataTables -->
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">




<script>
    
    $(document).ready(function() {
        // Initialize Select2 for client and transaction selects
        $('#client').select2();
        $('#transaction').select2();

        // Change event for client select
        $('#client').change(function() {
            var nomClient = $(this).val(); // Get the selected client ID or identifier
            var transactionSelect = $('#transaction');

            // Disable the transaction select and clear any existing options
            transactionSelect.prop('disabled', true).empty();

            // AJAX request to fetch transactions for selected client
            if (nomClient) {
                $.ajax({
                    url: '/api/transactions/' + nomClient, // 
                    type: 'GET',
                    success: function(data) {
                        if (data.transactions && data.transactions.length > 0) {
                            // Populate transaction select options
                            $.each(data.transactions, function(index, transaction) {
                                var option = new Option(transaction.idTransaction, transaction.idTransaction);
                                transactionSelect.append(option);
                            });
                            transactionSelect.prop('disabled', false).trigger('change'); // Trigger change event to update Select2
                        } else {
                            console.log('No transactions found for client');
                        }
                    },
                    error: function(error) {
                        console.error('Error fetching transactions:', error); // Log the error for debugging
                    }
                });
            }
        });
    });
    document.addEventListener('DOMContentLoaded', function () {
        const searchInput = document.getElementById('searchInput');
        const tableBody = document.getElementById('factureTableBody');

        searchInput.addEventListener('input', function () {
            const searchTerm = searchInput.value.toLowerCase();
            const rows = tableBody.getElementsByTagName('tr');

            Array.from(rows).forEach(row => {
                const clientName = row.cells[1].textContent.toLowerCase();
                if (clientName.includes(searchTerm)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    });
    $(document).ready(function() {
    // Initialize DataTables with export and print buttons
    $('#factureTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', {
                extend: 'print',
                text: '<i class="fas fa-print"></i> Imprimer',
                titleAttr: 'Imprimer les Factures',
                className: 'btn btn-danger',
                customize: function(win) {
                    $(win.document.body)
                        .css('font-family', 'Arial, sans-serif')
                        .prepend(
                            '<h1 style="text-align: center; color: #4CAF50; margin-bottom: 20px;">FFM Super Cars</h1>'
                        )
                        .prepend(
                            '<h2 style="text-align: center; color: #4CAF50; margin-bottom: 20px;">Facture</h2>'
                        );

                    $(win.document.body).find('table')
                        .addClass('table table-bordered')
                        .css({
                            'font-size': '12px',
                            'width': '100%',
                            'margin-bottom': '20px'
                        });

                    $(win.document.body).find('th, td')
                        .addClass('text-center')
                        .css({
                            'border': '1px solid #dee2e6',
                            'padding': '8px'
                        });

                    $(win.document.body).find('th')
                        .css({
                            'background-color': '#4CAF50',
                            'color': 'white'
                        });
                }
            }
        ]
    });

    // Handle specific print on button click
    $(document).on('click', '.btn-print', function() {
        var id = $(this).data('id');
        console.log("Selected invoice ID:", id);
        printInvoice(id);
    });
});

// Function to print invoice details
function printInvoice(id) {
    var row = $('#facture-' + id);

    if (row.length > 0) {
        var invoiceNumber = row.find('td:eq(0)').text();
        var clientName = row.find('td:eq(1)').text();
        var transactions = row.find('td:eq(2)').html();
        var invoiceDate = row.find('td:eq(3)').text();
        var totalAmount = row.find('td:eq(4)').text();

        var content = `
    <div style="font-family: Arial, sans-serif; padding: 20px;">
        <div style="text-align: center; margin-bottom: 20px;">
            <h1 style="color: #007bff;">FFM Super Cars</h1>
            <h4 style="color: #007bff;">Facture N° ${invoiceNumber}</h4>
        </div>
        <div style="margin-bottom: 20px;">
            <p style="font-size: 16px;"><strong>Client:</strong> ${clientName}</p>
            <p style="font-size: 16px;"><strong>Date de Facture:</strong> ${invoiceDate}</p>
        </div>
        <div style="margin-bottom: 20px;">
            <h5 style="color: #007bff; text-align: left;">Transactions:</h5>
            <div style="display: flex; flex-wrap: wrap;">
                ${transactions.replace(/<\/?[^>]+(>|$)/g, "")}
            </div>
        </div>
        <div style="margin-bottom: 20px;">
            <p style="font-size: 16px;"><strong style="color :#28a745;">Montant Total:</strong> ${totalAmount}</p>
        </div>
    </div>
`;


        var printWindow = window.open('', '_blank');
        printWindow.document.open();
        printWindow.document.write('<html><head><title>Facture</title></head><body style="background-color: #f4f4f4;">');
        printWindow.document.write(content);
        printWindow.document.write('</body></html>');
        printWindow.document.close();
        printWindow.print();
    } else {
        alert('La facture avec l\'ID spécifié n\'a pas été trouvée.');
    }
}

</script>

</body>
</html>