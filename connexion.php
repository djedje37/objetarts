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
      <?php
 		 include 'barnav.php';
  		?>

  

<?php

?>


		 <section id="content">
		 	<?php 
		 	if (!isset($_POST['email'])) // isset renvoie vraie si email est  defini (ie different de vide)
				{
             echo '<div class="container">
					  <h2>VEUILLEZ VOUS CONNECTER </h2>
					 <form action="connexion.php" method="post">
					    <div class="form-group">
					      <label for="email">Email:</label>
					      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
					    </div>
					    <div class="form-group">
					      <label for="pwd">Password:</label>
					      <input type="password" class="form-control" id="password"  name="password" placeholder="Enter password">
					    </div>
					    <div class="checkbox">
					      <label><input type="checkbox"> Remember me</label>
					    </div>
					    <button type="submit" class="btn btn-default">Submit</button>
					  </form>
					</div>';

               	 }
             else 
             {
             	$message='';
             	if(empty($_POST['email'])|| empty($_POST['password']))
			    {
					 $message = '<p>une erreur s\'est produite pendant votre identification.
						Vous devez remplir tous les champs</p>
						<p>Cliquez <a href="./connexion.php">ici</a> pour revenir</p>';
						echo $message;

             	}

             
			 //On check le mot de passe
			    
             	else 
             	{
							//$email=trim($_POST['email']);     
					 $reponse=$dbh->prepare('SELECT id_client
									FROM client WHERE mail=? and motDePasse=?');
					 $reponse->execute(array($_POST['email'],$_POST['password']));
					 

					 	$reponse2=$reponse->rowCount();  // compte le nombre de ligne retourne par le select 
					 	//echo $reponse;
					 
						
					if ($reponse2 ==0)  //  pas de ligne retournée
					{

						echo 'Email ou Mot de passe incorrecte';
						echo '<p>Cliquez <a href="./connexion.php">ici</a> pour revenir</p>';

					}
					//header('location:'.$_SERVER["HTTP_REFERER"]);
					else // utilisateur trouvee 
					{
                             $row =$reponse->fetch();

                            // utilisateur trouvé, maintenant on va créer les cookies (s'il n'existe pas)
                            if(!isset($_COOKIE["id_client"]) and !isset($_COOKIE["token"])) 
                            {echo "oui";
                              $tokenValue=uniqid(rand());   // création d'un nouveau token
                              $id=$row["id_client"];
                              setcookie("id_client",$id,time()+(3600),"/");  //création des cookies avec les valeurs $id et $tokenvalue
                              setcookie("token",$tokenValue,time()+(3600),"/");
                              $maj=$dbh->query("UPDATE client SET token ='$tokenValue' WHERE id_client = '$id' "); //on MAJ la BD
                             
                             header('location:accueil.php');
                             
                            }
            
			              else{
			                  echo"no";
			              		}
          			}

					
				}


			}
             
               	 ?>



        </section>



