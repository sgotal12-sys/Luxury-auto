<?php
include('BDD/bdd.php');
$id = $_GET['id'];
$req = $bdd->prepare("SELECT * FROM membres where id = ?");

$req->execute([$id]);

$detailMembre = $req->fetch();


?>