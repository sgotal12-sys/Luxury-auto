<?php
// ajouterSport.php est le fichier qui va gérer l'ajout d'un sport dans la base de données. C'est lui qui va recevoir les données du formulaire d'ajout de sport et les insérer dans la base de données.
include('../../BDD/bdd.php');
    var_dump($_POST); // var_dump est une fonction qui permet d'afficher le contenu d'une variable. Ici, on affiche le contenu de la variable $_POST qui contient les données du formulaire d'ajout de sport. C'est utile pour vérifier que les données sont bien reçues par le fichier ajouterSport.php

    if (isset($_POST['valider'])) { // isset est une fonction qui permet de vérifier si une variable est définie et n'est pas nulle. Ici, on vérifie si la variable $_POST['valider'] est définie et n'est pas nulle, ce qui signifie que le formulaire d'ajout de sport a été soumis. Si c'est le cas, on exécute le code qui suit pour ajouter le sport dans la base de données. 
        # code ....
        $libelle = $_POST['libelle']; // On récupère la valeur du champ 'libelle' du formulaire d'ajout de sport et on l'affecte à la variable $libelle. C'est cette variable qui va être utilisée pour insérer le sport dans la base de données.

        $req = $bdd->prepare('INSERT INTO sport (libelle) values (:libelle)'); // On prépare la requête SQL d'insertion du sport dans la base de données. La requête utilise une variable nommée :libelle qui va être remplacée par la valeur de la variable $libelle lors de l'exécution de la requête. C'est une bonne pratique d'utiliser des variables dans les requêtes SQL pour éviter les injections SQL, qui sont des attaques visant à insérer du code malveillant dans la base de données.

        $req ->bindParam(':libelle',$libelle);  // On lie la variable $libelle à la variable :libelle de la requête SQL. Cela signifie que lorsque la requête SQL sera exécutée, la valeur de la variable $libelle sera utilisée pour remplacer la variable :libelle dans la requête SQL. C'est une étape nécessaire pour que la requête SQL puisse être exécutée correctement.

        $req->execute(); // On exécute la requête SQL d'insertion du sport dans la base de données. C'est à ce moment que le sport est réellement ajouté dans la base de données. Si la requête SQL est exécutée avec succès, cela signifie que le sport a été ajouté dans la base de données. Si la requête SQL échoue, cela signifie qu'il y a eu une erreur lors de l'ajout du sport dans la base de données, et il faudra vérifier les erreurs pour comprendre ce qui s'est passé.



    }
?>
