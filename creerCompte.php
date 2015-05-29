<?php
$dsn = 'mysql:host=localhost;dbname=objetarts';
$user = 'root';
$password = '';

try {
    $dbh = new PDO('mysql:host=localhost;dbname=objetarts', 'root', '');
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}

// enlever style.css
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
     <?php
         include 'barnav.php';
        ?>




<section id="content">



<?php 
if (!isset($_POST['nom'])) //On est dans la page de formulaire
                {
echo
'<div class="container">
                      <h2>VEUILLEZ VOUS INSCRIRE </h2>
                     <form action="creerCompte.php" method="post" >
                      <div class="form-group">
                          <label for="nom">Nom:</label>
                          <input type="text" required class="form-control" id="nom" name="nom" placeholder="Entrez votre nom">
                        </div>
                        <div class="form-group">
                          <label for="prenom">Prenom:</label>
                          <input type="text" required class="form-control" id="prenom" name="prenom" placeholder="Entrez votre prenom">
                        </div>

                          <div class="form-group">
                          <label for="Age">Age:</label>
                          <input type="number" min="0" required class="form-control" id="age" name="age" placeholder="Entrez votre age">
                        </div>

                          <div class="form-group">
                          <label for="Genre">Genre:</label>
                            <input type="radio" name="genre" value="femme">Femme
                            <input type="radio" name="genre" value="homme">Homme<br>
                          
                        </div>

                        <div class="form-group">
                          <label for="email">Email:</label>
                          <input type="email" required class="form-control" id="email" name="email" placeholder="Enter email">
                        </div>

                         <div class="form-group">
                          <label for="pwd">Password:</label>
                          <input type="password" required class="form-control" id="password"  name="password" placeholder="Enter password">
                        </div>

                        <div class="form-group">
                          <label for="telephone">Telephone:</label>
                          <input type="tel" required class="form-control" id="telephone" name="telephone" placeholder="Entrez votre numero de telephone">
                        </div>
                        <div class="form-group">
                          <label for="pays">Pays:</label>
                          <input type="text" pattern="[A-Za-z]*" required class="form-control" id="pays"  name="pays" placeholder="Entrez votre pays">
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox"> Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>';}
/*if(isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['age']) and isset($_POST['genre']) and  isset($_POST['email']) and  isset($_POST['password']) and isset($_POST['telephone']) and isset($_POST['pays']))*/
if(isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['age']) and isset($_POST['password'])and isset($_POST['telephone']) and isset($_POST['pays'])  and  isset($_POST['genre']) and  isset($_POST['email']))
    {

            $nom=$_POST['nom'];
            $prenom=$_POST['prenom'];
            $age=$_POST['age'];
            $genre=$_POST['genre'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $telephone=$_POST['telephone'];
            $pays=$_POST['pays'];

            $req=$dbh->prepare('INSERT INTO client(nom, prenom,age,sexe,tel,mail,pays,motDePasse)
    VALUES ( :nom,:prenom,:age,:sexe,:tel,:mail,:pays,:motDePasse)');
       $req->execute(array(
        'nom' => $nom,
        'prenom' =>$prenom,
        'age' =>$age,
        'sexe'=>$genre,
        'tel' => $telephone,
        'mail' =>$email,
        'pays' =>$pays,
        'motDePasse' =>$password ));

       header('location:connexion.php');
       
    
}

       
 

      


?>


</section>
