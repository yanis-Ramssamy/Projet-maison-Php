<?php
include "entete_admin.php" ;
if($_SESSION["autorisation"]=="OK")
{


?>

<div class="container text-center">

  <div class="row mt-3">
  	 <div class="col"> <h2> Quel bonbon voulez-vous supprimer ?</h2></div>
 
			 </div>
		 <div class="row">

<table class="table-bordered">
		<?php
			//connexion à la BDD
			require "config.php" ;
			$bdd=connect() ;
			
		
			//requête	
			$sql="select * from location " ;
		
			//execution de la requête
			$resultat=$bdd->query($sql) ;
			
			//affichage des resultats dans un objet
			
			?>
			<div class="container">
			<div class="row">
			  <?php
			  $count = 0;
			  while ($location = $resultat->fetch(PDO::FETCH_OBJ)) {
				if ($count % 3 == 0) {
				  echo '</div><div class="row">';
				}
			  ?>
			  <div class="col-md-4 mb-3">
				<div class='card text-center'>
				  <img class='card-img-top' src="<?=$location->photo?>"  >
				  <div class='card-body'>
					<h5 class='card-title'><?=$location->nom?></h5>
					<p class='card-text'><strong><?=$location->prix?></strong> €</p>
					<p class='card-text'><?=$location->localisation?></p>
					<p class='card-text'><?=$location->description?></p>
					<a id='mywish' class='btn btn-danger' href='supprimer_OK.php?supp=<?php echo $location->id ;?>' onClick='return confirm("Voulez vous supprimer le bonbon <?php echo $location->nom  ?>")'>Supprimer</a>
				  </div>
				</div>
			  </div>
			  <?php
				$count++;
			  }
		?>
		</table>
<?php
	include "footer.php" ;
}
else
// {
// 		echo "page interdite" ;
// }
// 	?>