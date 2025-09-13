<?php
session_start();

// Vérifier si l'administrateur est déjà connecté
if(isset($_SESSION['admin']) && $_SESSION['admin'] === true) {
    // L'administrateur est déjà connecté, rediriger vers la page d'accueil de l'admin
    header("Location: acceuilAdmin.php");
    exit;
}
session_start() ;	

	// Récupération des données saisies dans le formulaire d’identification
$login=$_POST["login"] ;
$mdp=$_POST["mdp"] ;
// Connexion au serveur de BDD
require "config.php" ;
$bdd=connect() ;
			
// Requête de recherche du mot de passe de l’admin à partir de l’identifiant saisi
$sql="select * from admin where login='$login' and mdp='$mdp'" ;
			
// Execution de la requête
$resultat=$bdd->query($sql) ;
//on compte le nombre d elignes renvoyé par la requête
$nb_lignes= $resultat->rowCount() ;
//stockage du resultat dans un objet
$rep = $resultat->fetch(PDO::FETCH_OBJ) ;

// La requête ne renvoie aucun résultat, l'identifiant est inconnu et/ou le mot de passe est incorrect (on ne distingue pas les deux cas)
if ($nb_lignes==0) 

		{
		header("Location: echecrechercher.php");
		}
		else
// La requête renvoie au plus un résultat (l’admin recherché)
		{
			//on cree 2 variables de session
		$_SESSION["admin"]= $rep->login ;
		$_SESSION["autorisation"]="OK" ;
		
		header("Location: acceuilAdmin.php");
		
		
		}	
		



	
	
?>


