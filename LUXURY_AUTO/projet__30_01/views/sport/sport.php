<?php include('controller/sport/allSports.php');?>
<div>
    <h1> page Sport</h1>
</div>

<div>
    <a href="index.php?page=ajouterSport"> Ajouter Sport</a>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">libelle</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($allsport as $sport){ ?>
    <tr>
      <th scope="row"><?php echo $sport['id']; ?></th> 
      <td><?php echo $sport['libelle']; ?></td>
       <td><a href="index.php?page=detailSport&id=<?php echo $sport['id']; ?>">detail</a></td>
    </tr>
    <?php }
    ?>
  </tbody>
</table>