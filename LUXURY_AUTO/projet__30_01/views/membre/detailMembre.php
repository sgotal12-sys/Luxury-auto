<div>
    <h1> detail Membre</h1>
</div>

<?php include('controller/membre/detailMembre.php');?>
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
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $detailMembre['id']; ?></th> 
      <td><?php echo $detailMembre['genre']; ?></td>
      <td><?php echo $detailMembre['nom']; ?></td>
      <td><?php echo $detailMembre['prenom']; ?></td>
      <td><?php echo $detailMembre['email']; ?></td>
      <td><?php echo $detailMembre['telephone']; ?></td>
      <td><?php echo $detailMembre['adresse']; ?></td>
    </tr>
  </tbody>
</table>