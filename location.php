<?php
include "header.php" ;


if(!empty($_SESSION['alert']))
{
?>

<div class="alert alert-success" role="alert" >
 <?php echo $_SESSION['alert'] ;
 unset($_SESSION['alert']) ; ?>
 </div>

<?php
}


?>
<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="container text-center">

  <div class="row">
  	 <div class="col"> <h2> Nos Locations </h2></div>

			 </div>
		 <div class="row">

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
          <a id='mywish' href='ajout_panier.php?ajout=<?=$location->id?>' class='btn btn-danger'>Ajouter au <i class='fas fa-cart-plus'></i></a>
        </div>
      </div>
    </div>
    <?php
      $count++;
    }
    ?>
  </div>
</div>

	
		include "footer.php" ;
		?>
	
