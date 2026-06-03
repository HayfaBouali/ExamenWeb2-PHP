<!DOCTYPE html>
<html>
<head>
    <title>Liste des Matériaux</title>
</head>
<body>
    <h2>Liste des matériaux du chantier</h2>

    <?php
    
    $materiaux = array(
        array("nom" => "Ciment", "quantite" => 50, "prix" => 18),
        array("nom" => "Sable", "quantite" => 120, "prix" => 7),
        array("nom" => "Brique", "quantite" => 300, "prix" => 1.2),
        array("nom" => "Acier", "quantite" => 40, "prix" => 95)
    );


    $totalGeneral = 0;
    ?>

 
    <table border="1" cellpadding="8" cellspacing="0">
        <tr style="background-color: #ddd;">
            <th>Nom du matériau</th>
            <th>Quantité</th>
            <th>Prix unitaire (DT)</th>
            <th>Coût total (DT)</th> 
        </tr>

        <?php
     
        foreach($materiaux as $mat) {
            
            $cout = $mat['quantite'] * $mat['prix'];
            
           
            $totalGeneral = $totalGeneral + $cout;
        ?>
            <tr>
                <td><?php echo $mat['nom']; ?></td>
                <td><?php echo $mat['quantite']; ?></td>
                <td><?php echo $mat['prix']; ?></td>
                <td><?php echo $cout; ?></td>
            </tr>
        <?php
        } 
        ?>

        
        <tr style="font-weight: bold; background-color: #eee;">
            <td colspan="3" align="right">Coût total général :</td>
            <td><?php echo $totalGeneral; ?> DT</td>
        </tr>
    </table>

</body>
</html>