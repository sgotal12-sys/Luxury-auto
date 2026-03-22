
<?php 
// index.php est le point d'entrée de l'application. C'est lui qui va gérer les différentes pages du site en fonction de la valeur de la variable $_GET['page'].

    include ('views/commun/header.php');

    $page = isset($_GET['page']) ?$_GET['page'] : 'accueil'; // Si la variable $_GET['page'] existe, on l'affecte à $page, sinon on affecte 'accueil' à $page

    switch ($page) { // En fonction de la valeur de $page, on inclut le fichier correspondant
        case 'accueil' :
                    include ('views/accueil/accueil.php'); // Si $page vaut 'accueil', on inclut le fichier 'views/accueil/accueil.php'
            break;

        case 'sport' :
                    include ('views/sport/sport.php'); // Si $page vaut 'sport', on inclut le fichier 'views/sport/sport.php'
            break;
        
        case 'membre' : 
                include ('views/membre/membre.php'); // Si $page vaut 'membre', on inclut le fichier 'views/membre/membre.php'
            break;

        case 'coach':
                include ('views/coach/coach.php'); // Si $page vaut 'coach', on inclut le fichier 'views/coach/coach.php'
            break;


        case 'detailMembre':
                include ('views/membre/detailMembre.php');
            break;
        
        case 'ajouterMembre':
                include ('views/membre/ajouterMembre.php');
            break;
        
            case 'detailSport':
                include ('views/sport/detailSport.php');
            break;
        case 'ajouterSport':
                include ('views/sport/ajouterSport.php');
            break; // break veut dire que si $page vaut 'ajouterSport', on inclut le fichier 'views/sport/ajouterSport.php' et on sort du switch
        case 'listInscription':
            include ("views/inscription/listInscription.php");
            break;
        case "ajouterInscription":
            include ("views/inscription/ajouterInscription.php");
            break;
        
        default: // Si $page ne correspond à aucun des cas précédents, on inclut le fichier 'views/accueil/accueil.php'
            include ('views/accueil/accueil.php');
            break; // break n'est pas nécessaire ici, mais il est bon de le mettre pour éviter des erreurs si on ajoute d'autres cas à l'avenir
    }

 
    include ('views/commun/footer.php'); // On inclut le fichier 'views/commun/footer.php' qui contient le pied de page du site
    ?>