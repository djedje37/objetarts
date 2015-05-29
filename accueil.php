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
/*$reponse=$dbh->query('SELECT * FROM client');
while($donne=$reponse->fetch())
{

  echo '<p>'.$donne['nom'].'</p>';
}
*/


/* $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $age=$_POST['age'];
        $sexe="femme";
        $mail=$_POST['mail'];
        $password=$_POST['password'];
        $telephone=$_POST['telephone'];
        $pays=$_POST['pays'];
        $ville=$_POST['ville'];


          // conditions a verifier 

        //requete preparee  si tt va bien 
       $req=$dbh->prepare('INSERT INTO client(nom, prenom,age,sexe,tel,mail,pays,ville,motDePasse)
    VALUES ( :nom,:prenom,:age,:sexe,:tel,:mail,:pays,:ville,:motDePasse)');
       $req->execute(array(
        'nom' => $nom,
        'prenom' =>$prenom,
        'age' =>$age,
        'sexe'=>$sexe,
        'tel' => $telephone,
        'mail' =>$mail,
        'pays' =>$pays,
        'ville' =>$ville,
        'motDePasse' =>$password
  ));

      
      ?>






       
      <?php


      /* requete d'insertion*/
 /*$dbh->exec('INSERT INTO client(nom, prenom,age,sexe,tel,mail,pays,ville,motDePasse)
    VALUES ( "KANE","papi",19,"homme",0674005504, "papi@example.com","Maroc","Tanger","service")');*/


// Initialize variables to null.
/*$nameError ="";
$emailError ="";
$genderError ="";
$websiteError ="";
// On submitting form below function will execute.
if(isset($_POST['submit'])){
if (empty($_POST["name"])) {
$nameError = "Name is required";
} else {
$name = test_input($_POST["name"]);
// check name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
$nameError = "Only letters and white space allowed";
}
}
if (empty($_POST["email"])) {
$emailError = "Email is required";
} else {
$email = test_input($_POST["email"]);
// check if e-mail address syntax is valid or not
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
$emailError = "Invalid email format";
}
}
/*if (empty($_POST["website"])) {
$website = "";
} else {
$website = test_input($_POST["website"]);
// check address syntax is valid or not(this regular expression also allows dashes in the URL)
if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
$websiteError = "Invalid URL";
}
}*/
/*if (empty($_POST["comment"])) {
$comment = "";
} else {
$comment = test_input($_POST["comment"]);
}*/
/*if (empty($_POST["gender"])) {
$genderError = "Gender is required";
} else {
$gender = test_input($_POST["gender"]);
}
}
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}*/
//php code ends here
?>
        <section id="content">
           

         <?php

//          echo $_POST["email"];?>
 

   


        </section>


    </body>









    <footer>
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </footer>
</html>