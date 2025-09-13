<?php
session_start() ;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Comme chez soi </title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="icon" type="image/jpg" href="Image/logo.jpg" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-secondary sticky-top">

    
  <a class="navbar-brand" href="index.php"><i class="bi bi-house" style="color:$pink-500;"></i></a>

  <form class="form-inline my-2 my-lg-0" method="POST" action="rechercher.php">
      <input class="form-control mr-sm-2" type="search" placeholder="Rechercher" aria-label="Search" name="recherche">
      <button class="btn btn-outline-dark my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
    </form>
    
    

<a class="nav-link bs-dark-text-emphasis" href="location.php ">LOCATIONS</a>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
        <a class="nav-link" href="panier.php"><i class="fas fa-shopping-cart fa-2x" style="color:#2125293;" ></i></a>
      </li>
    <li class="nav-item">
          <a class="nav-link" href="admin.php">Espace admin</a>
        </li>
        
    

     
	</ul>
</div>
</nav>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
