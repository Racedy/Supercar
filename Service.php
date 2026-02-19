<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperCar</title>
    <!-- Fichiers CSS Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Icônes Bootstrap (en local) -->
    <!-- Icônes Bootstrap (en local) -->
    <link rel="stylesheet" href="assets/css/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/service.css">
</head>
<body>
    <header>
    <?php include ('include/header.html'); ?>
    </header>


    <main>

    <!-- Image principale en haut de la page -->
    <div class="hero-img position-relative">
        <img src="assets/images/background/background-service.jpg" class="img-fluid rounded">
        <div class="hero-text">
            <h1>Nos Services d'Excellence</h1>
            <p>Entretien et réparation de véhicules haut de gamme par des experts passionnés</p>
        </div>
    </div>

    <section class="section-processus py-5">
    <div class="container text-center">
        <!-- fw-bold c'est de mettre en gras, mb c'est espace en dessous-->
        <h2 class="fw-bold mb-5">Notre Processus d'Entretien</h2>
        
        <div class="row">
        <!-- col-md-4 : la colonne prend 4/12 de la largeur-->
            <div class="col-md-11 mb-6">
                <div class="process-card mb-4">
                    <div class="row align-items-center bg-light p-3 rounded-3 shadow-sm mx-0 ms-5" style="cursor: pointer;" onclick="this.nextElementSibling.classList.toggle('show')">
                        <div class="col-6 text-start">
                            <h4 class="fw-bold mb-0">Reparation moteur</h4>
                        </div>
                        <div class="col-6 text-end">
                            <button class="btn-toggle-plus">
                            <i class="bi bi-plus-lg"></i>
                            </button>
                        </div>
                    </div>

                    <div class="process-detail">
                        <div class="d-flex align-items-center py-4">
                            <div class="barre-verticale me-4"></div>
            
                                <div class="row w-100 align-items-center">
                                    <div class="col-md-8">
                                        <p class="mb-0 text-muted">
                        Nous réalisons un diagnostic précis et une réparation rapide de votre moteur. 
                        Avec notre expertise, nous identifions la panne et rétablissons les 
                        performances de votre véhicule avec un travail fiable et soigné.
                                        </p>
                                    </div>
                                    <div class="col-md-4 text-end">
                                        <img src="assets/images/background/Car_service.webp" class="img-fluid rounded" alt="Moteur">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

        </div>
    </div>
</section>

    </main>


    <footer>
    <?php include ('include/footer.html'); ?>
    </footer>
    
    <!-- Bootstrap JS (Local) -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>