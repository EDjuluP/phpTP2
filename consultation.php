<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BASE DE DONNEE</title>
    
    
<?php

try {

    $ipserver ="192.168.65.204";
    $nomBase = "Medecin";
    $loginPrivilege ="SiteWeb";
    $passPrivilege ="SiteWeb";

    $GLOBALS["pdo"] = new PDO('mysql:host=' . $ipserver . ';dbname=' . $nomBase . '', $loginPrivilege, $passPrivilege);

    $requete = "select * from Medecin";
    $resultat = $GLOBALS["pdo"]->query($requete);
    //resultat est du coup un objet de type PDOStatement
    $tabMedecins = $resultat->fetchALL();
    ?>

    <form action="" method="post">
            <select name="idMedecin">
                <?php
                foreach ($tabMedecins as $Medecin) {
                    ?>
                    <option value="<?=$Medecin["id"]?>"><?=$Medecin["nom"]." ".$Medecin["prenom"]?>s</option>
                    <?php
                }
                ?>
            </select>
            <select name="idPatient">
                <?php
                foreach ($tabPatients as $Patient) {
                    ?>
                    <option value="<?=$Patient["id"]?>"><?=$Patient["nom"]." ".$Patient["prenom"]?>s</option>
                    <?php
                }
                ?>
            </select>
            <input type="datetime-local" name="laDate">
            <input type="submit" value="Saisir une consultation" name="Valider">
    </form>

            
            

    <?php
    } 

catch (Exception  $error) {
    echo "error est : ".$error->getMessage();
}
?>
