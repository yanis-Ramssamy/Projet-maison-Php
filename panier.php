<?php 
include "header.php" ;
if(isset($_SESSION["panier"]))
{
?>

<?php
require 'config.php';
$bdd= connect();
  
$total =0;
$frais=5;
$totalttc = 0;


 ?>
 <div class="container">
	  <div class="row">
	  <div class="col-md-12">
 <h2 >Votre Panier </h2>
 </div>
 </div>
 <div class="row">
 <div class="col-md-12">
         <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col" >Produit</th>
			
            <th scope="col">Prix Unit.</th>
            <th scope="col">Quantité</th>
            <th scope="col">Montant</th>
           </tr>
        </thead>
        <tbody>

           <?php 
			   foreach($_SESSION['panier'] as $id=>$quantite )
			{
		$sql="select * from location where id=$id" ;
		$resultat = $bdd->query($sql) ;
		$produits =$resultat->fetch(PDO::FETCH_ASSOC) ;
				  
			?>
            <tr>           
              <td ><?php echo $produits['nom'] ;?></td>
			  <td ><?php echo number_format($produits['prix'],2,',',' ');?> €</td>
            <td > 
              <?php echo $quantite; ?>
            </td>
            <td > <?php echo number_format($produits['prix']* $quantite,2,',',' ');?>€</td>
			<td > <a href='ajouter2_panier.php?ajout=<?php echo $produits['id'] ?>' /><i class="bi bi-bag-plus-fill"></i> </a></td>
			<td > <a href='retrait_panier.php?retrait=<?php echo $produits['id'] ?>' /><i class="bi bi-bag-dash-fill"></i></a></td>
          </tr>
          <?php $total += $produits['prix']*$quantite;?>
           <?php } ?>
       

        </tbody>
      </table>
	  </div>
	  </div>
	   <div class="row">
	  <div class='col-md-6'> </div>
	  <div class="col-md-6">
	  <table class= "table table-dark">
       <tr><th> Total HT  </th> <td> <em><?php echo number_format($total,2,',',' ') ?> €</em></td> </tr>
        <tr> <th> TVA(19.6 %) </th> <td>		<em>  <?php echo number_format($totalttc =$total*0.196,2,',',' ') ?> €</em></td></tr>
		<tr> <th>Frais de port </th> <td> <em> <?php echo $frais ?> €</em></td></tr>
        <tr> <th> TOTAL TTC </th> <td> <em> <?php echo number_format($total+$frais+$totalttc,2,',',' ') ?> €</em></td> </tr>
  		</table>
		 </div>
		 </div>
		 <div class="row">
		 	  <div class='col-md-6'> </div>
		 <div class="col-md-6">
             <a href="index.php" class="btn btn-dark">Continuer mes achats</a> <br> <br>

         <a href="" class="btn btn-dark" >Payer</a> <br> <br>
		
		<a href="vider.php" class="btn btn-dark">Vider le panier</a>
             </div>     
     
	 </div>
<?php
	 }
else
{
echo " <table style='width: 100%; height: 100%';>
<tr>
    <td align='center' valign='middle'>
        <a href='vider.php' class='btn btn-dark'>Vider le panier</a>
    </td>
</tr>
</table>" ;
echo "
<a href='index.php' class='btn btn-info'> reprendre les achats  </a> " ;

}
?>
</body>
</html>