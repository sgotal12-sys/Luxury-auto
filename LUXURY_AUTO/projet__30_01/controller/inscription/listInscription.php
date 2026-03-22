<?php
    include("BDD/bdd.php");
    $req = $bdd->prepare("SELECT sport.libelle, membres.nom, membres.prenom, inscription.id 
FROM inscription, sport, membres 
WHERE inscription.sport = sport.id 
AND   inscription.membre = membres.id");
    $req->execute();

    $allInscrit = $req->fetchall();

    ?>