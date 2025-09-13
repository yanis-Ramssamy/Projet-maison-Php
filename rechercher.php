<?php
include("header.php") ;
?>

 

  

		<?php
			$recherche=$_POST["recherche"] ;
			$recherche=strtolower($recherche) ;
			echo "	
		          <div class='alert alert-warning' role='alert'>
Votre recherche : $recherche 
</div> </div>
				   
            
            ";
			
			
			//connexion à la BDD
			require "config.php" ;
			$bdd=connect() ;
			
			
			//requête	
			$sql="select * from location where lower(nom) like'%$recherche%' " ;
		
			//execution de la requête
			$resultat=$bdd->query($sql) ;
			
			//affichage des resultats dans un objet
			echo "<h3> Nous vous proposons : </h3>"; 
				
			while($location = $resultat->fetch(PDO::FETCH_OBJ))
				{
					?>

				  <div class='card text-center' style='width: 15rem;'>
							<img class='card-img-top' src="<?=$location->photo?>"  >
							<div class='card-body'>
								<h5 class='card-title'><?=$location->nom?></h5>
								<p class='card-text'> <?=$location->prix ?>" €</p></br>
                                <p class='card-text'> <?=$location->localisation?></p></br>
                                <p class='card-text'> <?=$location->description?></p></br>
								<a id='mywish' href='ajout_panier.php?ajout="<?=$location->id?>"' class='btn btn-danger'>Ajouter au <i class='fas fa-cart-plus'></i></a>
							</div>
						</div>
	
<div class="container text-center">
    <div class="row mt-5">
        <form action="rechercher.php" method="POST" class="form-inline mx-auto">
            <div class="form-group">
                <label for="recherche" class="sr-only">Recherche</label>
                <input type="text" name="tri" id="recherche" class="form-control" placeholder="Entrez votre prix maximum">
            </div>
            <button type="submit" class="btn btn-primary">Rechercher</button>
        </form>
    </div>
		<?php




				}

				$tri=$_POST["tri"] ;
				$tri=strtolower($tri) ;
				echo "	
					  <div class='alert alert-warning' role='alert'>
	Votre recherche : $tri
	</div> </div>
					   
				
				";
				
				
				//connexion à la BDD
				require "config.php" ;
				$bdd=connect() ;
				
				
				//requête	
				$sql="select * from location where prix =<'$tri' " ;
			
				//execution de la requête
				$resultat=$bdd->query($sql) ;
					//affichage des resultats dans un objet
			echo "<h3> Nous vous proposons : </h3>"; 
				
			while($location = $resultat->fetch(PDO::FETCH_OBJ))
				{
					?>

				  <div class='card text-center' style='width: 15rem;'>
							<img class='card-img-top' src="<?=$location->photo?>"  >
							<div class='card-body'>
								<h5 class='card-title'><?=$location->nom?></h5>
								<p class='card-text'> <?=$location->prix ?>" €</p></br>
                                <p class='card-text'> <?=$location->localisation?></p></br>
                                <p class='card-text'> <?=$location->description?></p></br>
								<a id='mywish' href='ajout_panier.php?ajout="<?=$location->id?>"' class='btn btn-danger'>Ajouter au <i class='fas fa-cart-plus'></i></a>
							</div>
						</div>
	
		<?php




				}
	include "footer.php" ;
		?>
				
		
	