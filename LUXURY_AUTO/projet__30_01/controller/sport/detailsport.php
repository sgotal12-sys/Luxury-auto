<?php
include('BDD/bdd.php');
$id = $_GET['id']; //récupération de l'id du membre à partir de l'url index.php?page=detailMembre&id=1 le id est égal à 1 dans ce cas. le $_GET est une superglobale qui permet de récupérer les données envoyées en get dans l'url. le $_GET['id'] permet de récupérer la valeur de l'id envoyé en get dans l'url.
$req = $bdd->prepare("SELECT * FROM sport where id = ?");

$req->execute([$id]);

$detailSport = $req->fetch();


?>