else 
             	{
             		/// pour adresse mail valide 
             		$atom   = '[-a-z0-9!#$%&\'*+\\/=?^_`{|}~]';   // caractères autorisés avant l'arobase
					$domain = '([a-z0-9]([-a-z0-9]*[a-z0-9]+)?)'; // caractères autorisés après l'arobase (nom de domaine)
                               
					$regex = '/^' . $atom . '+' .   // Une ou plusieurs fois les caractères autorisés avant l'arobase
					'(\.' . $atom . '+)*' .         // Suivis par zéro point ou plus
					                                // séparés par des caractères autorisés avant l'arobase
					'@' .                           // Suivis d'un arobase
					'(' . $domain . '{1,63}\.)+' .  // Suivis par 1 à 63 caractères autorisés pour le nom de domaine
					                                // séparés par des points
					$domain . '{2,63}$/i';          // Suivi de 2 à 63 caractères autorisés pour le nom de domaine

					// test de l'adresse e-mail
					if (preg_match($regex, $_POST['email'])) {
					    echo "L'adresse e-mail est valide";
					} else {
					    echo "L'adresse e-mail n'est pas valide";}
					}


					//  formulaire connexion
					/*'<form action="connexion.php" method="post">
                E-mail: <input type="text" name="email"><br>
                Mot de passe: <input type="password" name="password"><br>
                <input type="submit" value="Submit">
               	 </form>';*/





               	   /* $query=$db->prepare('SELECT membre_mdp, membre_id, membre_rang, membre_pseudo
			        FROM forum_membres WHERE membre_pseudo = :pseudo');
			        $query->bindValue(':pseudo',$_POST['pseudo'], PDO::PARAM_STR);
			        $query->execute();*/
			       // $data=$query->fetch();
				/*if ($data['membre_mdp'] == md5($_POST['password'])) // Acces OK !
				{
				    $_SESSION['pseudo'] = $data['membre_pseudo'];
				    $_SESSION['level'] = $data['membre_rang'];
				    $_SESSION['id'] = $data['membre_id'];
				    $message = '<p>Bienvenue '.$data['membre_pseudo'].', 
						vous êtes maintenant connecté!</p>
						<p>Cliquez <a href="./index.php">ici</a> 
						pour revenir à la page d accueil</p>';  
				}
				else // Acces pas OK !
				{
				    $message = '<p>Une erreur s\'est produite 
				    pendant votre identification.<br /> Le mot de passe ou le pseudo 
			            entré n\'est pas correcte.</p><p>Cliquez <a href="./connexion.php">ici</a> 
				    pour revenir à la page précédente
				    <br /><br />Cliquez <a href="./index.php">ici</a> 
				    pour revenir à la page d accueil</p>';
				}
			    $query->CloseCursor();
			    }
			    echo $message.'</div></body></html>';*/

			    // on doit verifier que le mot de passe correspond a un mail de la base sinon msg d erreur







/* adresse mail valide
if (isset($_POST['mail']))
{
    $_POST['mail'] = htmlspecialchars($_POST['mail']); // On rend inoffensives les balises HTML que le visiteur a pu rentrer

    if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['mail']))
    {
        echo 'L\'adresse ' . $_POST['mail'] . ' est <strong>valide</strong> !';
    }
    else
    {
        echo 'L\'adresse ' . $_POST['mail'] . ' n\'est pas valide, recommencez !';
    }
}*/





//On reprend la suite du code
/*else
{
    $message='';
    if (empty($_POST['pseudo']) || empty($_POST['password']) ) //Oublie d'un champ
    {
        $message = '<p>une erreur s\'est produite pendant votre identification.
	Vous devez remplir tous les champs</p>
	<p>Cliquez <a href="./connexion.php">ici</a> pour revenir</p>';
    }
    else //On check le mot de passe
    {
        $query=$db->prepare('SELECT membre_mdp, membre_id, membre_rang, membre_pseudo
        FROM forum_membres WHERE membre_pseudo = :pseudo');
        $query->bindValue(':pseudo',$_POST['pseudo'], PDO::PARAM_STR);
        $query->execute();
        $data=$query->fetch();
	if ($data['membre_mdp'] == md5($_POST['password'])) // Acces OK !
	{
	    $_SESSION['pseudo'] = $data['membre_pseudo'];
	    $_SESSION['level'] = $data['membre_rang'];
	    $_SESSION['id'] = $data['membre_id'];
	    $message = '<p>Bienvenue '.$data['membre_pseudo'].', 
			vous êtes maintenant connecté!</p>
			<p>Cliquez <a href="./index.php">ici</a> 
			pour revenir à la page d accueil</p>';  
	}
	else // Acces pas OK !
	{
	    $message = '<p>Une erreur s\'est produite 
	    pendant votre identification.<br /> Le mot de passe ou le pseudo 
            entré n\'est pas correcte.</p><p>Cliquez <a href="./connexion.php">ici</a> 
	    pour revenir à la page précédente
	    <br /><br />Cliquez <a href="./index.php">ici</a> 
	    pour revenir à la page d accueil</p>';
	}
    $query->CloseCursor();
    }
    echo $message.'</div></body></html>';

}*/



<!-- '<form action="creerCompte.php" method="post">
Nom: <input type="text" name="nom"><br>
Prenom: <input type="text" name="prenom"><br>
Age: <input type="text" name="age"><br>
Genre:
<input type="radio" name="genre" value="femme">Femme
<input type="radio" name="genre" value="homme">Homme<br>
mail: <input type="email" name="mail"><br>
mot de passe : <input type="text" name="password"><br>
Telephone: <input type="text" name="telephone"><br>
Pays: <input type="text" name="pays"><br>
Ville: <input type="text" name="ville"><br>
<input type="submit" value="Submit">
</form>';*/




						$row =$reponse->fetch(PDO::FETCH_ASSOC);
					    // utilisateur trouvé, maintenant on va créer les cookies (si il n'existe pas)
					    if(!isset($_COOKIE["id_client"])) 
					    {
					     $tokenValue=uniqid(rand());   // création d'un nouveau token
					      $id=$row["id_client"];
					      setcookie("id",$id,time()+(3600),"/");  //création des cookies avec les valeurs $id et $tokenvalue
					      setcookie("token",$tokenValue,time()+(3600),"/");
					      mysql_query("UPDATE client SET token = '$tokenValue' WHERE id = '$id' "); //on MAJ la BD
   						 }