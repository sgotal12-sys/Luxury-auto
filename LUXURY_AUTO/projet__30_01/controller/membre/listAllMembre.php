<?php
include('BDD/bdd.php');
$req = $bdd->prepare("SELECT * FROM membres");
$req->execute();

$allMembres = $req->fetchAll();


?>