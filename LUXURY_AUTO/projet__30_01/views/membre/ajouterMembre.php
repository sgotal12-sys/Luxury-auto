<h1>Ajouter un membre</h1>


<form action="controller/membre/ajouterMembre.php" method="POST">
<div>
genre : 
        homme: <input type="radio" value="0" name="genre">
        femme: <input type="radio" value="1" name="genre">
</div>

    Nom : <input type="text" name="nom">
    Prenom :  <input type="text" name="prenom">
    Email :  <input type="email" name="email">
    mdp : <input type="password" name="mdp">
    téléphone : <input type="text" name="telephone">
    adresse : <input type="text" name="adresse">
    <input type="submit" value="ajouter" name= "valider">
</form>