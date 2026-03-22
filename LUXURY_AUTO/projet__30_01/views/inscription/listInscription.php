<?php
    include ('controller/inscription/listInscription.php');

    ?>
<div>
    <h1>
        liste Inscription
    </h1>
    <a href="index.php?page=ajouterInscription">S'inscrire</a>
</div>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nom Membre</th>
        <th scope="col">Prenom Membre</th>
        <th scope="col">Sport Libelle</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($allInscrit as $inscrit){ ?>
    <tr>
        <th scope="row"><?php echo $inscrit['id']; ?></th>
        <td><?php echo $inscrit['nom']; ?></td>
        <td><?php echo $inscrit['prenom']; ?></td>
        <td><?php echo $inscrit['libelle']; ?></td>
    </tr>
    <?php } ?>
    </tbody>
</table>