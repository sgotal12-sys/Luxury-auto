<?php include('controller/membre/listAllMembre.php');?>

<div>
    <h1> page Membre</h1>
</div>

<div>
  <a href="index.php?page=ajouterMembre">Ajouter Membre</a>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Genre</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Email</th>
      <th scope="col">Telephone</th>
      <th scope="col">Adresse</th>
       <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($allMembres as $membre){ ?> <!--boucle pour afficher tous les membres de la base de données le $allMembres est un tableau qui contient tous les membres de la base de données et le $membre est une variable qui contient les informations d'un membre à la foi. foreach veut dire  !-->
    <tr>
      <th scope="row"><?php echo $membre['id']; ?></th> <!--affichage de l'id du membre -->
      <td><?php echo $membre['genre']; ?></td>
      <td><?php echo $membre['nom']; ?></td>
      <td><?php echo $membre['prenom']; ?></td>
      <td><?php echo $membre['email']; ?></td>
      <td><?php echo $membre['telephone']; ?></td>
      <td><?php echo $membre['adresse']; ?></td>
       <td><a href="index.php?page=detailMembre&id=<?php echo $membre['id']; ?>">detail</a></td>
    </tr>
    <?php }?>
  </tbody>
</table>