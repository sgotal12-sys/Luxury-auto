<?php
include('../../BDD/bdd.php');
    var_dump($_POST);

    if (isset($_POST['valider'])) {
        # code ....
        $genre = $_POST['genre'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $mdp = $_POST['mdp'];
        $telephone = $_POST['telephone'];
        $adresse = $_POST['adresse'];

        $req = $bdd->prepare('INSERT INTO membres (genre, nom, prenom, email, mdp, telephone, adresse) values (:genre, :nom, :prenom, :email, :mdp, :telephone, :adresse)');

        $req ->bindParam(':genre',$genre); 
        $req ->bindParam(':nom',$nom); 
        $req ->bindParam(':prenom',$prenom); 
        $req ->bindParam(':email',$email); 
        $req ->bindParam(':mdp',$mdp); 
        $req ->bindParam(':telephone',$telephone); 
        $req ->bindParam(':adresse',$adresse); 

        $req->execute();



    }
?>

