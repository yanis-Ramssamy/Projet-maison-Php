<?php

include "entete_admin.php";

if($_SESSION["autorisation"]=="OK")
{
  ?>

 
<div class="container">
<div class="row center mt-5">
<div class="col-md-6">
<form method="POST" action="ajout_ok.php" enctype='multipart/form-data'>
  <div class="form-group">
    <label for="formGroupExampleInput">Nom du produit</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="nom du bien" name="nom">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Prix du produit</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="prix du bien" name="prix">
	<br>
    <label for="formGroupExampleInput2">description du produit</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="description  du bien" name="description">
	<br>
    <label for="formGroupExampleInput2">localisation du produit</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="localisation du bien" name="localisation">
	<br>
	<label for="formGroupExampleInput2">Image du produit</label>
    <input type="file" name="image" accept="image/png, image/jpg">
	<br> <br>
	<button type="submit" class="btn btn-primary">Enregistrer</button>
  </div>
</form>
</div>
</div>
</div>
<?php
}
?>