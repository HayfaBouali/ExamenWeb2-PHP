<?php

session_start();


$login = $_POST['login'];
$password = $_POST['password'];


if($login == "Chef" && $password == "gc2026") {
   
    $_SESSION['login'] = $login;
    

    header("Location: accueil.php");
    exit();
}
else {
    
    echo "<h3>Login ou mot de passe incorrect</h3>";
    echo "<a href='login.html'>Retour</a>";
}
?>