<?php
include "entete_admin.php" ;
if($_SESSION["autorisation"]=="OK")
{


?>
<div class="container text-center">

  <div class="row">
  	 <div class="col"> <h2> Bien modifié</h2></div>
 
			 </div>
		 <div class="row">
		 <?php

			require "config.php" ;
			$bdd=connect() ;
			
			
		extract($_POST) ;
		
		
		
			$sql="update location set nom= '$nom', prix=$prix, photo='$photo', localisation = '$localisation' , description ='$description' where id=$id" ;
			
			$resultat=$bdd->exec($sql) ;
			
			
			
			echo "<div class='alert alert-danger' role='alert'>
 Le produit a été modifié :)
</div> </div>" ;


	
			$req="select * from location where id=$id " ;
		
		
			$resultat=$bdd->query($req) ;
			
			
			while($location = $resultat->fetch(PDO::FETCH_OBJ))
				{
				 
				  echo "<div class='card text-center' style='width: 15rem;'>
							<img class='card-img-top' src='images/".$location->photo ."' >
							<div class='card-body'>
								<h5 class='card-title'>".$location->nom ."</h5>
								<p class='card-text'> " .$location->prix ." €</p>
								<p class='card-text'> " .$location->localisation ." </p>
								<p class='card-text'> " .$location->description ." </p>
								<a id='mywish' href='ajout_panier.php?ajout=".$location->id ."' class='btn btn-danger'>Ajouter au <i class='fas fa-cart-plus'></i></a>
							</div>
						</div>" ;
	
		
				}

?>


</div>
</div>
<?php
	include "footer.php" ;
}
	?>

