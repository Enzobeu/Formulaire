<div class="container">
    <div class="row justify-content-center align-items-center vh-100">
        <div class="col-md-8">
            <div class="card rounded-4 overflow-hidden shadow-lg">
                <div class="row g-0">
                    <!-- Image à gauche sur écran large -->
                    <div class="col-md-6 d-none d-md-block">
                        <div style="height: 100%; width: 100%; overflow: hidden;">
                           <img src="assets/Chat.png" alt="Connexion" class="w-100 h-100" style="object-fit: cover; object-position: center;">
                        </div>
                     </div>

                    <!-- Formulaire à droite -->
                    <div class="col-md-6 bg-white p-4 d-flex flex-column justify-content-center">
                        <div class="text-center mb-4">
                            <div class="d-flex align-items-center justify-content-center mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#FF6219" class="bi bi-box" viewBox="0 0 16 16">
                                    <path d="M8 0a2 2 0 0 0-2 2H2.5A1.5 1.5 0 0 0 1 3.5v9A1.5 1.5 0 0 0 2.5 14H6a2 2 0 0 0 4 0h3.5a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 13.5 2H10a2 2 0 0 0-2-2z"/>
                                </svg>
                                <h3 class="ms-2 fw-bold">IUT de Caen</h3>
                            </div>
                            <p class="mb-0">Accès à votre compte</p>
                        </div>
                        <form action="contact.php" method="POST">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="pseudo" id="pseudo" placeholder="Pseudo" required>
                                <label for="pseudo">Pseudo</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" name="mdp" id="mdp" placeholder="Mot de passe" required>
                                <label for="mdp">Mot de Passe</label>
                            </div>
                            <button type="submit" class="btn btn-dark w-100">Se connecter</button>
                        </form>
                        <div class="mt-3 text-center">
                            <a href="#" class="text-muted small text-decoration-none">Mentions légales</a> ·
                            <a href="#" class="text-muted small text-decoration-none">Politique de confidentialité</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
