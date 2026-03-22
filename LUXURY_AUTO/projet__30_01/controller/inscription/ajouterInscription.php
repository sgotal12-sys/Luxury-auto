<?php
include('../../BDD/bdd.php');

    if (isset($_POST['inscrire'])) {
        # code ....
        $membre = $_POST['membre'];
        $sport = $_POST['sport'];

        $req = $bdd->prepare('INSERT INTO inscription (membre, sport) values (:membre, :sport)');

        $req ->bindParam(':membre',$membre); 
        $req ->bindParam(':sport',$sport); 
        $req->execute();



    }
?>

