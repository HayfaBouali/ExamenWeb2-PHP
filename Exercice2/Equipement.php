<?php
class Equipement {

    private $nom;
    private $type;
    private $etat;
    private $prix;
    
  
    public function __construct($nom, $type, $etat, $prix) {
        $this->nom = $nom;
        $this->type = $type;
        $this->etat = $etat;
        $this->prix = $prix;
    }
    
    
    public function ajouterEquipement() {
        
        $conn = new mysqli("localhost", "root", "", "geniecivil");
        
       
        if($conn->connect_error) {
            die("Erreur de connexion: " . $conn->connect_error);
        }
        
        
        $sql = "INSERT INTO Equipement (nomEquipement, typeEquipement, etat, prixLocation) 
                VALUES ('$this->nom', '$this->type', '$this->etat', '$this->prix')";
        
        
        if($conn->query($sql) === TRUE) {
            $conn->close();
            return true;
        } else {
            $conn->close();
            return false;
        }
    }
}
?>