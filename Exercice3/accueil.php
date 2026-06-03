<?php

session_start();

if(!isset($_SESSION['login'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Accueil</title>
</head>
<body>
    <h2>Bienvenue <?php echo $_SESSION['login']; ?> dans l'espace d'administration.</h2>
    
    <p>
    
        <a href="logout.php">Se déconnecter</a>
    </p>
</body>
</html>