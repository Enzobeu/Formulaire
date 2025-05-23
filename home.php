<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light text-center d-flex flex-column justify-content-center align-items-center vh-100">
    <h1>Bienvenue, <?= htmlspecialchars($_SESSION['user']); ?> !</h1>
    <a href="logout.php" class="btn btn-danger mt-3">Se déconnecter</a>
</body>
</html>
