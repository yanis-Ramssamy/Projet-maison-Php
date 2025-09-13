<?php
include "entete_admin.php" ;
if($_SESSION["autorisation"]=="OK")
{
?>
<div class="container text-center">

		 <div class="row mt-5">
<?php
extract($_POST) ;

$nom=$_POST["nom"];
$prix=$_POST["prix"]
$description=$_POST["description"];
$localisation=$_POST["localisation"]
$nom_image = basename($_FILES["image"]['name']);
$chemin_destination = 'images/' . $nom_image;
$resultat = move_uploaded_file($_FILES['image']['tmp_name'], $chemin_destination);


//connexion à la BDD
			require "config.php" ;
			$bdd=connect() ;
			
		
			//requête	insertion
		
		$sql="insert into location(nom, prix, description ,localisation, photo) values('$nom', $prix,$description, $localisation, 'Images/$nom_image')";
	
			//execution de la requête
			$resultat=$bdd->exec($sql) ;

echo "<div class='alert alert-danger' role='alert'>
 Le produit a été ajouté :)
</div> </div>" ;


	//requête	affichage
			$req="select * from location order by id desc limit 0,1" ;
		
			//execution de la requête
			$resultat=$bdd->query($req) ;
			
			//affichage des resultats dans un objet
			while($location = $resultat->fetch(PDO::FETCH_OBJ))
			{
				?>

			  <div class='card text-center' style='width: 15rem;'>
						<img class='card-img-top' src="<?=$location->photo?>"  >
						<div class='card-body'>
							<h5 class='card-title'><?=$location->nom?></h5>
							<p class='card-text '> <strong><?=$location->prix ?></strong> €</p></br>
							<p class='card-text'> <?=$location->localisation?></p></br>
							<p class='card-text'> <?=$location->description?></p></br>
							
						</div>
					</div>

	<?php
			}


?>


</div>
</div>
<?php
	include "footer.php" ;
}
	?>