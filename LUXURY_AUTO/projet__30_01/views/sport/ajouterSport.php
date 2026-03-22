<h1>Ajouter un sport</h1>


<form action="controller/sport/ajouterSport.php" method="POST"> <!-- action : le fichier qui va traiter les données du formulaire, method : la méthode d'envoi des données (POST ou GET) -->

    sport : <input type="text" name="libelle">
    <input type="submit" value="ajouter" name= "valider">
    
</form>