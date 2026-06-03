<?php

require_once "Equipement.php";


$nom = $_POST['nomEquipement'];
$type = $_POST['typeEquipement'];
$etat = $_POST['etat'];
$prix = $_POST['prixLocation'];


$eq = new Equipement($nom, $type, $etat, $prix);


if($eq->ajouterEquipement()) {
    echo "<h3 style='color:green'>Insertion réussie !</h3>";
} else {
    echo "<h3 style='color:red'>Échec de l'insertion !</h3>";
}


echo "<br><a href='ajoutEquipement.html'>Retour au formulaire</a>";
?>