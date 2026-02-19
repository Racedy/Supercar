<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - SUPERCAR</title>
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons (Local) -->
    <link rel="stylesheet" href="assets/css/bootstrap-icons.css">
    <!-- CSS personnalisé -->
    <link rel="stylesheet" href="assets/css/inscription.css">
</head>
<body>
    <div class="container-fluid vh-100 d-flex align-items-center justify-content-center">
        <div class="inscription-card">
            <h1 class="text-center mb-2">Créer un compte</h1>
            <p class="text-center text-muted mb-4">Rejoignez SUPERCAR pour accéder à nos offres exclusives</p>
            
            <form method="POST" action="">
                <!-- Prénom et Nom -->
                <div class="row mb-3">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label for="prenom" class="form-label">Prénom</label>
                        <input 
                            type="text" 
                            class="form-control" 
                            id="prenom" 
                            name="prenom" 
                            placeholder="Veuillez entrer votre prénom"
                            required
                        >
                    </div>
                    <div class="col-md-6">
                        <label for="nom" class="form-label">Nom</label>
                        <input 
                            type="text" 
                            class="form-control" 
                            id="nom" 
                            name="nom" 
                            placeholder="Veuillez entrer votre nom"
                            required
                        >
                    </div>
                </div>
                
                <!-- Adresse e-mail -->
                <div class="mb-3">
                    <label for="email" class="form-label">Adresse e-mail</label>
                    <input 
                        type="email" 
                        class="form-control" 
                        id="email" 
                        name="email" 
                        placeholder="Veuillez entrer votre adresse email"
                        required
                    >
                </div>
                
                <!-- Téléphone -->
                <div class="mb-3">
                    <label for="telephone" class="form-label">Téléphone</label>
                    <input 
                        type="tel" 
                        class="form-control" 
                        id="telephone" 
                        name="telephone" 
                        placeholder="+33 6 12 34 56 89"
                        required
                    >
                </div>
                
                <!-- Mot de passe et Confirmation -->
                <div class="row mb-3">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label for="password" class="form-label">Mot de passe</label>
                        <div class="password-wrapper">
                            <input 
                                type="password" 
                                class="form-control" 
                                id="password" 
                                name="password" 
                                placeholder="• • • • • • • • •"
                                required
                            >
                            <i class="bi bi-eye password-icon"></i>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="confirm_password" class="form-label">Confirmer le mot de passe</label>
                        <div class="password-wrapper">
                            <input 
                                type="password" 
                                class="form-control" 
                                id="confirm_password" 
                                name="confirm_password" 
                                placeholder="• • • • • • • • •"
                                required
                            >
                            <i class="bi bi-eye password-icon"></i>
                        </div>
                    </div>
                </div>
                
                <!-- Acceptation des conditions -->
                <div class="mb-4">
                    <div class="form-check">
                        <input 
                            class="form-check-input" 
                            type="checkbox" 
                            id="conditions" 
                            name="conditions"
                            required
                        >
                        <label class="form-check-label" for="conditions">
                            J'accepte les <a href="#" class="link-conditions">conditions d'utilisations</a> et la <a href="#" class="link-confidentialite">politique de confidentialité</a>
                        </label>
                    </div>
                </div>
                
                <!-- Bouton d'inscription -->
                <button type="submit" class="btn btn-inscription w-100 mb-4">
                    Créer mon compte
                </button>
                
                <!-- Séparateur -->
                <div class="separator mb-4">
                    <span>ou</span>
                </div>
                
                <!-- Lien connexion -->
                <p class="text-center account-text">
                    Vous avez déjà un compte ? 
                    <a href="login.php" class="login-link">Se connecter</a>
                </p>
            </form>
        </div>
    </div>
</body>
</html>