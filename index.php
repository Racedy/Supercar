<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperCar - Votre partenaire de confiance pour les voitures neuves</title>
    
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="assets/css/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/accueil.css">
  
</head>
<body>
    
    <!-- Header Navigation -->
    <?php include('include/header.html'); ?>
    
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1 class="hero-title">Votre partenaire de confiance pour les voitures neuves<br>depuis 2009</h1>
            <a href="catalogue.php" class="btn-orange-hero">Consulter le catalogue</a>
        </div>
    </section>
    
    <!-- Section À propos -->
    <section class="about-section">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="section-title">À propos de SuperCar</h2>
                <p class="section-description">Depuis 2009, SuperCar est votre partenaire de confiance dans l'acquisition de voitures neuves.<br>
                Nous importons des véhicules de qualité supérieure en provenance des plus grands marchés<br>automobiles mondiaux.</p>
            </div>
            
            <div class="row g-4 justify-content-center">
                <!-- Card 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="info-card">
                        <h3 class="info-card-title">Importation mondiale</h3>
                        <p class="info-card-text">Véhicules neufs en provenance<br>du Japon, Singapour, Afrique du<br>Sud, États-Unis, Chine,<br>Allemagne et France</p>
                    </div>
                </div>
                
                <!-- Card 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="info-card">
                        <h3 class="info-card-title">4 Entrepôts</h3>
                        <p class="info-card-text">Nos 4 entrepôts stratégiquement<br>placés nous permettent de<br>stocker un large inventaire et<br>d'assurer des livraisons rapides.</p>
                    </div>
                </div>
                
                <!-- Card 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="info-card">
                        <h3 class="info-card-title">Siège Social</h3>
                        <p class="info-card-text">Essayez tous nos modèles dans<br>notre showroom principal</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Section Notre Processus -->
    <section class="process-section">
        <div class="container py-5">
            <h2 class="section-title text-center mb-5">Notre Processus</h2>
            
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <!-- Step 1 -->
                    <div class="process-step">
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <h3 class="step-title">Découverte</h3>
                            <p class="step-text">Explorez notre catalogue et sélectionnez le modèle qui vous intéresse</p>
                        </div>
                    </div>
                    
                    <!-- Step 2 -->
                    <div class="process-step">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <h3 class="step-title">Essai au Siège Social</h3>
                            <p class="step-text">Testez une voiture d'essai de chaque modèle dans notre showroom</p>
                        </div>
                    </div>
                    
                    <!-- Step 3 -->
                    <div class="process-step">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <h3 class="step-title">Livraison</h3>
                            <p class="step-text">Recevez un véhicule neuf identique, livré directement depuis nos entrepôts</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="footer-section"><?php include('include/footer.html'); ?>
    
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
