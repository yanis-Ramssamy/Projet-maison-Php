
<?php
include "entete_admin.php" ;
if($_SESSION["autorisation"]=="OK")
{

//connexion à la BDD
require "config.php" ;
$bdd=connect() ;


		$modif = $_GET['modif'];
		$_SESSION['modif']= $modif  ;
		
	
	$sql = "select * from location where id='$modif'" ;
	$resultat = $bdd->query($sql) ;
	
	
	?>
	<div class="container">
<div class="row center mt-5">
<div class="col">
	<form method="POST" action="modifier_OK.php">
	<?php
      while ($location = $resultat->fetch(PDO::FETCH_OBJ)) {
        echo "<div class='mb-3 row'>";
        echo "<label for='nom' class='col-sm-3 col-form-label ' span class='badge text-bg-dark'>Nom</label>";
        echo "<div class='col-sm-9'>";
        echo "<input type='text' name='nom' class='form-control' value='" . $location->nom . "'>";
        echo "</div>";
        echo "</div>";

        echo "<div class='mb-3 row'>";
		echo"<label for='nom' class='col-sm-3 col-form-label ' span class='badge text-bg-dark'>Prix</label>";
        echo "<div class='col-sm-9'>";
        echo "<input type='text' name='prix' class='form-control' value='" . $location->prix . "'>";
        echo "</div>";
        echo "</div>";

        echo "<div class='mb-3 row'>";
		echo"<label for='nom' class='col-sm-3 col-form-label  ' span class='badge text-bg-dark'>Photo</label>";
        echo "<div class='col-sm-9'>";
        echo "<input type='text' name='photo' class='form-control' value='" . $location->photo . "'>";
        echo "</div>";
        echo "</div>";

        echo "<div class='mb-3 row'>";
        echo"<label for='nom' class='col-sm-3 col-form-label ' span class='badge text-bg-dark'>Localisation</label>";
        echo "<div class='col-sm-9'>";
        echo "<input type='text' name='localisation' class='form-control' value='" . $location->localisation . "'>";
        echo "</div>";
        echo "</div>";

		echo "<div class='mb-3 row'>";
		echo"<label for='nom' class='col-sm-3 col-form-label ' span class='badge text-bg-dark'>Description</label>";;
        echo "<div class='col-sm-9'>";
        echo "<input type='text' name='description' class='form-control' value='" . $location->description . "'>";
        echo "</div>";
        echo "</div>";

        echo "<input type='hidden' name='id' value='" . $location->id . "'>";
      }
      ?>
	</table>
	 <br />
	 <br />
	 
	 <input type=submit value='Validez les modifications' class="btn btn-primary">
	
	 </form>
	 </div>
	 </div>
	 </div>

<?php
include "footer.php" ;
}
?>