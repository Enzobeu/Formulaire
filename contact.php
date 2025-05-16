<?php
session_start();
require 'users.php';

function nettoyer($donnee) {
    return htmlspecialchars(trim($donnee), ENT_QUOTES, 'UTF-8');
}

$pseudo = nettoyer($_POST['pseudo'] ?? '');
$mdp = $_POST['mdp'] ?? '';

if (isset($comptesUtilisateurs[$pseudo]) && password_verify($mdp, $comptesUtilisateurs[$pseudo])) {
    $_SESSION['user'] = $pseudo;
    header('Location: home.php');
    exit;
} else {
    echo "<div class='text-white text-center vh-100 d-flex flex-column justify-content-center' style='background-color: #9A616D; font-family: Roboto, sans-serif'>
        <h1>Erreur d’authentification</h1>
        <p>Redirection en cours vers la page de connexion…</p>
        <script>
            setTimeout(function() {
                window.location.href = 'index.php';
            }, 5000);
        </script>
    </div>";
}
