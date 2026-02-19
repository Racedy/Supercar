<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - SUPERCAR</title>
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons (Local) -->
    <link rel="stylesheet" href="assets/css/bootstrap-icons.css">
    <!-- CSS personnalisé -->
    <link rel="stylesheet" href="assets/css/connexion.css">
</head>
<body>
    <div class="container-fluid vh-100 d-flex align-items-center justify-content-center">
        <div class="connexion-card">
            <h1 class="text-center mb-2">Connexion</h1>
            <p class="text-center text-muted mb-4">Accédez à votre espace client</p>
            
            <form method="POST" action="">
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
                
                <!-- Mot de passe -->
                <div class="mb-3">
                    <label for="password" class="form-label">Mot de passe</label>
                    <div class="password-wrapper">
                        <input 
                            type="password" 
                            class="form-control" 
                            id="password" 
                            name="password" 
                            placeholder="Veuillez entrer votre mot de passe"
                            required
                        >
                        <i class="bi bi-eye password-icon"></i>
                    </div>
                </div>
                
                <!-- Options -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="form-check">
                        <input 
                            class="form-check-input" 
                            type="checkbox" 
                            id="remember" 
                            name="remember"
                        >
                        <label class="form-check-label" for="remember">
                            Se souvenir de moi
                        </label>
                    </div>
                    <a href="#" class="forgot-password">Mot de passe oublié ?</a>
                </div>
                
                <!-- Bouton de connexion -->
                <button type="submit" class="btn btn-connexion w-100 mb-4">
                    Se connecter
                </button>
                
                <!-- Séparateur -->
                <div class="separator mb-4">
                    <span>ou</span>
                </div>
                
                <!-- Lien création de compte -->
                <p class="text-center account-text">
                    Vous n'avez pas de compte ? 
                    <a href="inscription.php" class="create-account">Créer un compte</a>
                </p>
            </form>
        </div>
    </div>
</body>
</html>