<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Profil - SuperCar</title>
    
    <!-- Bootstrap CSS (Local) -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons (Local) -->
    <link rel="stylesheet" href="assets/css/bootstrap-icons.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/profil.css">
</head>
<body>
    
    <?php include('include/header.html'); ?>
    
    <!-- Container principal -->
    <div class="profile-container">
        
        <!-- 1. HEADER SECTION -->
        <div class="profile-header-section pt-4">
            
            <div class="profile-info-section mt-0">
                
                <!-- Avatar avec Initiales -->
                <div class="profile-avatar-container border-0 p-0">
                    <div class="profile-avatar-initials">
                        JD
                    </div>
                </div>
                
                <!-- Nom et Stats -->
                <div class="profile-details">
                    <h1 class="profile-name">Jean Dupont</h1>
                    <div class="profile-stats">
                        <span>3 demandes d'essai</span>
                    </div>
                </div>
                
                <!-- Actions -->
                <div class="profile-actions">
                    <!-- <button class="btn-action-primary" data-bs-toggle="tab" data-bs-target="#infos" type="button" role="tab" aria-controls="infos">
                        <i class="bi bi-pencil-fill"></i>
                        Modifier mon profil
                    </button> -->
                    <a href="login.php" class="btn-action-secondary text-danger">
                        <i class="bi bi-box-arrow-right"></i>
                        Déconnexion
                    </a>
                </div>
            </div>
            
            <!-- Navigation -->
            <div class="profile-nav mt-3">
                <ul class="nav nav-tabs" id="profileTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="demandes-tab" data-bs-toggle="tab" data-bs-target="#demandes" type="button" role="tab" aria-controls="demandes" aria-selected="true">Mes demandes</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="infos-tab" data-bs-toggle="tab" data-bs-target="#infos" type="button" role="tab" aria-controls="infos" aria-selected="false">Mes informations</button>
                    </li>
                </ul>
            </div>
        </div>
        
        <!-- 2. CONTENU DES ONGLETS -->
        <div class="mt-4 pb-5">
            <div class="tab-content" id="profileTabsContent">
                
                <!-- ONGLET 1: MES DEMANDES -->
                <div class="tab-pane fade show active" id="demandes" role="tabpanel" aria-labelledby="demandes-tab">
                    <div class="row justify-content-center">
                        <div class="col-12"> <!-- Pleine largeur -->
                            
                            <!-- POST 1 -->
                            <div class="feed-post card border-0 shadow-sm mb-4">
                                <div class="card-body p-0">
                                    <div class="post-header border-bottom-0">
                                        <!-- Mini Avatar Initiale -->
                                        <div class="rounded-circle bg-orange text-white d-flex align-items-center justify-content-center fw-bold" style="width: 40px; height: 40px;">JD</div>
                                        <div class="post-info">
                                            <h3>Jean Dupont</h3>
                                            <span>15 février 2024 • <i class="bi bi-calendar-event"></i> Demande d'essai</span>
                                        </div>
                                    </div>
                                    <div class="post-content pt-0 pb-3">
                                        <p class="mb-2">Demande d'essai pour la <strong>Porsche 911 GT3 RS</strong>.</p>
                                        <div class="status-badge mb-3">
                                            <span class="badge bg-primary text-white rounded-pill px-3 py-2">
                                                <i class="bi bi-hourglass-split me-1"></i> En cours de traitement
                                            </span>
                                        </div>
                                    </div>
                                    
                                    <div class="post-photos-grid px-3 pb-3">
                                        <div style="flex: 1 1 100%;">
                                            <img src="assets/images/porsche/porsche-gt3-rs-rouge.jpg" class="img-fluid rounded w-100" style="height: 400px; object-fit: cover;">
                                        </div>
                                        <div style="flex: 1 1 32%;">
                                            <img src="assets/images/porsche/porsche-interior.jpeg" class="img-fluid rounded w-100" style="height: 150px; object-fit: cover;">
                                        </div>
                                        <div style="flex: 1 1 32%;">
                                            <img src="assets/images/porsche/porsche-siege.jpeg" class="img-fluid rounded w-100" style="height: 150px; object-fit: cover;">
                                        </div>
                                        <div style="flex: 1 1 32%;">
                                            <img src="assets/images/porsche/porsche-pneu.jpeg" class="img-fluid rounded w-100" style="height: 150px; object-fit: cover;">
                                        </div>
                                    </div>
                                    
                                    <div class="d-flex justify-content-between py-3 border-top mx-3 mt-2 px-2 align-items-center">
                                         <span class="text-muted small">Ref: #4582</span>
                                         <a href="details.php" class="btn btn-sm btn-outline-orange">Voir le véhicule</a>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Ajouter d'autres posts ici si nécessaire -->
                            
                        </div>
                    </div>
                </div>

                <!-- ONGLET 2: MES INFORMATIONS -->
                <div class="tab-pane fade" id="infos" role="tabpanel" aria-labelledby="infos-tab">
                    <div class="row justify-content-center">
                        <div class="col-12"> <!-- Pleine largeur -->
                            <div class="fb-card p-4">
                                <h2 class="fb-card-title mb-4 border-bottom pb-3 d-flex justify-content-between align-items-center">
                                    Mes coordonnées
                                    <button class="btn btn-outline-orange btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#edit-infos" aria-expanded="false" aria-controls="edit-infos">
                                        <i class="bi bi-pencil me-1"></i> Modifier
                                    </button>
                                </h2>
                                
                                <!-- Affichage des infos -->
                                <div id="display-infos">
                                    <div class="intro-item mb-4 display-6 fs-5">
                                        <i class="bi bi-person-fill intro-icon me-3 fs-4 text-orange"></i>
                                        <span><strong>Nom :</strong> Dupont</span>
                                    </div>

                                    <div class="intro-item mb-4 display-6 fs-5">
                                        <i class="bi bi-person-vcard-fill intro-icon me-3 fs-4 text-orange"></i>
                                        <span><strong>Prénom :</strong> Jean</span>
                                    </div>

                                    <div class="intro-item mb-4 display-6 fs-5">
                                        <i class="bi bi-envelope-fill intro-icon me-3 fs-4 text-orange"></i>
                                        <span><strong>Email :</strong> jean.dupont@email.com</span>
                                    </div>
                                    
                                    <div class="intro-item mb-4 display-6 fs-5">
                                        <i class="bi bi-telephone-fill intro-icon me-3 fs-4 text-orange"></i>
                                        <span><strong>Téléphone :</strong> +33 6 12 34 56 78</span>
                                    </div>
                                    
                                    <div class="intro-item mb-4 display-6 fs-5">
                                        <i class="bi bi-geo-alt-fill intro-icon me-3 fs-4 text-orange"></i>
                                        <span><strong>Adresse :</strong> 15 Rue de la République, 75001 Paris</span>
                                    </div>
                                </div>
                                
                                <!-- Formulaire d'édition (Masqué par défaut) -->
                                <div id="edit-infos" class="edit-form-card collapse">
                                    <form action="#" method="POST">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Nom</label>
                                                <input type="text" class="form-control" value="Dupont">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Prénom</label>
                                                <input type="text" class="form-control" value="Jean">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control" value="jean.dupont@email.com">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Téléphone</label>
                                            <input type="tel" class="form-control" value="+33 6 12 34 56 78">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Adresse</label>
                                            <input type="text" class="form-control" value="15 Rue de la République, 75001 Paris">
                                        </div>
                                        <div class="d-flex gap-2 justify-content-end">
                                            <button type="button" class="btn btn-secondary" data-bs-toggle="collapse" data-bs-target="#edit-infos" aria-expanded="false" aria-controls="edit-infos">Annuler</button>
                                            <button type="submit" class="btn btn-orange">Enregistrer</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        
    </div>
    
    <?php include('include/footer.html'); ?>
    
    <!-- Bootstrap JS (Local) -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    

</body>
</html>
