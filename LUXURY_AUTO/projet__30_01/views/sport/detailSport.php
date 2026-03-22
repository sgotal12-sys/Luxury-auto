<div>
    <h1> detail Membre</h1>
</div>

<?php include('controller/sport/detailsport.php');?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">libelle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $detailSport['id']; ?></th> 
      <td><?php echo $detailSport['libelle']; ?></td>
    </tr>
  </tbody>
</table>