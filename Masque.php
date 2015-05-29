<?php
$dsn = 'mysql:host=localhost;dbname=objetarts';
$user = 'root';
$password = '';

try {
    $dbh = new PDO('mysql:host=localhost;dbname=objetarts', 'root', '');
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}

?>
<!DOCTYPE html>
<html lang="fr">
<meta charset="utf-8">


    <head>
        <title>Accueil</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <!-- Font-Awesome -->
        <link href="Font-Awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- My style -->
        <link href="css/style.css" rel="stylesheet" media="screen">
    <link href= "accueil.css" rel="stylesheet"  >

    </head>




    <body>

        <?php
     include 'barnav.php';




if ($_GET['a']=="Masque")
{

$reponse=$dbh->query('SELECT * FROM produit p 
	INNER JOIN categorie c ON c.lib_categorie="Masque" and p.id_categorie=c.id_categorie ');
while($donne=$reponse->fetch())
{

  echo '<p>'.$donne['nom'].'</p>';
?>
  <div class="container">
  <h2>Masque</h2>      
  <table class="table">
    <thead>
      <tr>
        <th>nom</th>
        <th>prixU</th>
        <th>QuantiteStock</th>
        <th>Image</th>
        <th>description</th>
        <th>Ajouter Un produit</th>
      </tr>
    </thead>
    <tbody>
    
      <tr>
        <td><?php echo $donne['nom']?></td>
        <td><?php echo $donne['prixU']?></td>
        <td><?php echo $donne['qteStock']?></td>
        <td><img src=<?php echo $donne['url']?> alt="some_text" > </td>
        <td><?php echo $donne['description']?></td>
        <td><a href="accueil.php"><button type="button" class="btn btn-success">Ajouter</button></a></td>
      </tr>
    </tbody>
  </table>
</div>

<?php
}


}



if ($_GET['a']=="Statue en bois")
{

$reponse=$dbh->query('SELECT * FROM produit p 
	INNER JOIN categorie c ON c.lib_categorie="Statue en bois" and p.id_categorie=c.id_categorie ');

?>
 <div class="container">
  <h2>Statue en bois</h2>      
  <table class="table">
    <thead>
      <tr>
        <th>nom</th>
        <th>prixU</th>
        <th>QuantiteStock</th>
        <th>Image</th>
        <th>description</th>
        <th>Ajouter Un produit</th>
      </tr>
    </thead>
    <tbody>
    <?php
while($donne=$reponse->fetch())
{

 
  ?>
 
       
      <tr>
        <td><?php echo $donne['nom']?></td>
        <td><?php echo $donne['prixU']?></td>
        <td><?php echo $donne['qteStock']?></td>
        <td><img src=<?php echo $donne['url']?> alt="some_text" > </td>
        <td><?php echo $donne['description']?></td>
        <td><button type="button" class="btn btn-success">Ajouter</button></td>

        

      </tr>
  
<?php
}

 ?> </tbody>
  </table>
</div>
<?php

}



  ?>

<?php

if ($_GET['a']=="Statue en bronze")
{

$reponse=$dbh->query('SELECT * FROM produit p 
	INNER JOIN categorie c ON c.lib_categorie="Statue en bronze" and p.id_categorie=c.id_categorie ');

?>
 <div class="container">
  <h2>Statue en bronze</h2>      
  <table class="table">
    <thead>
      <tr>
        <th>nom</th>
        <th>prixU</th>
        <th>QuantiteStock</th>
        <th>Image</th>
        <th>description</th>
      </tr>
    </thead>
    <tbody>
    <?php
while($donne=$reponse->fetch())
{

 
  ?>
 
       
      <tr>
        <td><?php echo $donne['nom']?></td>
        <td><?php echo $donne['prixU']?></td>
        <td><?php echo $donne['qteStock']?></td>
        <td><img src=<?php echo $donne['url']?> alt="some_text" > </td>
        <td><?php echo $donne['description']?></td>
      </tr>
  
<?php
}

 ?> </tbody>
  </table>
</div>
<?php

}



  ?>

<?php

if ($_GET['a']=="Bijoux")
{

$reponse=$dbh->query('SELECT * FROM produit p 
	INNER JOIN categorie c ON c.lib_categorie="Bijoux" and p.id_categorie=c.id_categorie ');

?>
 <div class="container">
  <h2>Bijoux</h2>      
  <table class="table">
    <thead>
      <tr>
        <th>nom</th>
        <th>prixU</th>
        <th>QuantiteStock</th>
        <th>Image</th>
        <th>description</th>
      </tr>
    </thead>
    <tbody>
    <?php
while($donne=$reponse->fetch())
{

 
  ?>
 
       
      <tr>
        <td><?php echo $donne['nom']?></td>
        <td><?php echo $donne['prixU']?></td>
        <td><?php echo $donne['qteStock']?></td>
        <td><img src=<?php echo $donne['url']?> alt="some_text" > </td>
        <td><?php echo $donne['description']?></td>
      </tr>
  
<?php
}

 ?> </tbody>
  </table>
</div>
<?php

}



  ?>

<?php
if ($_GET['a']=="Tableaux")
{

$reponse=$dbh->query('SELECT * FROM produit p 
	INNER JOIN categorie c ON c.lib_categorie="Tableaux" and p.id_categorie=c.id_categorie ');

?>
 <div class="container">
  <h2>Tableaux</h2>      
  <table class="table">
    <thead>
      <tr>
        <th>nom</th>
        <th>prixU</th>
        <th>QuantiteStock</th>
        <th>Image</th>
        <th>description</th>
      </tr>
    </thead>
    <tbody>
    <?php
while($donne=$reponse->fetch())
{

 
  ?>
 
       
      <tr>
        <td><?php echo $donne['nom']?></td>
        <td><?php echo $donne['prixU']?></td>
        <td><?php echo $donne['qteStock']?></td>
        <td><img src=<?php echo $donne['url']?> alt="some_text" > </td>
        <td><?php echo $donne['description']?></td>
      </tr>
  
<?php
}

 ?> </tbody>
  </table>
</div>
<?php

}



  ?>

<?php


if ($_GET['a']=="Tissus")
{

$reponse=$dbh->query('SELECT * FROM produit p 
	INNER JOIN categorie c ON c.lib_categorie="Tissus" and p.id_categorie=c.id_categorie ');

?>
 <div class="container">
  <h2>Tissus</h2>      
  <table class="table">
    <thead>
      <tr>
        <th>nom</th>
        <th>prixU</th>
        <th>QuantiteStock</th>
        <th>Image</th>
        <th>description</th>
      </tr>
    </thead>
    <tbody>
    <?php
while($donne=$reponse->fetch())
{

 
  ?>
 
       
      <tr>
        <td><?php echo $donne['nom']?></td>
        <td><?php echo $donne['prixU']?></td>
        <td><?php echo $donne['qteStock']?></td>
        <td><img src=<?php echo $donne['url']?> alt="some_text" > </td>
        <td><?php echo $donne['description']?></td>
      </tr>
  
<?php
}

 ?> </tbody>
  </table>
</div>
<?php

}



  ?>

<?php
if ($_GET['a']=="Divers")
{

$reponse=$dbh->query('SELECT * FROM produit p 
	INNER JOIN categorie c ON c.lib_categorie="Divers" and p.id_categorie=c.id_categorie ');
?>
 <div class="container">
  <h2>Divers</h2>      
  <table class="table">
    <thead>
      <tr>
        <th>nom</th>
        <th>prixU</th>
        <th>QuantiteStock</th>
        <th>Image</th>
        <th>description</th>
      </tr>
    </thead>
    <tbody>
    <?php
while($donne=$reponse->fetch())
{

 
  ?>
 
       
      <tr>
        <td><?php echo $donne['nom']?></td>
        <td><?php echo $donne['prixU']?></td>
        <td><?php echo $donne['qteStock']?></td>
        <td><img src=<?php echo $donne['url']?> alt="some_text" > </td>
        <td><?php echo $donne['description']?></td>
      </tr>
  
<?php
}

 ?> </tbody>
  </table>
</div>
<?php

}



	?>
