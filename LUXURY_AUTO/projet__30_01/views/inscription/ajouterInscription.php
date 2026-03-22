<?php
    include ('controller/inscription/listInscription.php');

    ?>
<div>
    <h1>
        s'inscrire
    </h1>

    <form action="controller/inscription/ajouterInscription.php" method="POST">
    <p>Membre :</p> <input type="numbre" name="membre">
       <p>sport :</p> <input type="numbre" name="sport">
        <input type="submit" name="inscrire" name="inscrire">


    </form>