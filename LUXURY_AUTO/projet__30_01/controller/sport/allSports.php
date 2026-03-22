<?php
include("BDD/bdd.php");

$req = $bdd->prepare("SELECT * FROM sport");
$req->execute();

$allsport = $req->fetchAll();  // fetchAll() permet de récupérer toutes les lignes de la table sport et de les stocker dans un tableau associatif $allsport


?>