
 <header> 
      


            <h1> MALISHOP</h1>

         <!-- <a href="#" ><span class="glyphicon glyphicon-search"></span></a> -->

        


        </header> 

 
        <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            
            <div>
              <ul class="nav navbar-nav">
                <li class="active"><a href="accueil.php">Accueil</a></li>
          

                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="accueil.php">Produits <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                 
                        <?php 
                          $reponse=$dbh->query('SELECT lib_categorie FROM categorie');
                          while($donne=$reponse->fetch())
                            {
                        ?>
                            <li ><a href="Masque.php?a=<?php echo $donne['lib_categorie'];?>">
                            <?php echo $donne['lib_categorie'];?>
                            
                            </a></li>
                      
                       

                          <?php 
                            }

                            ?>
                            </ul>
                          </li>


                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">INFOS Supplementaires<span class="caret"></span></a>
                          </ul>
                        </li>

                      </ul>

                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="creerCompte.php"><span class="glyphicon glyphicon-user"></span> Creer Un compte</a></li>

                        <li><a href="connexion.php"><span class="glyphicon glyphicon-log-in"></span> Connexion</a></li>
                        <li>  <a href="#"><span class="glyphicon glyphicon-shopping-cart"></span></a> </li>

                      </ul>
                    </div>
                  </div>
                </nav>


<!--                                                                                               
// permet de faire des sous memu



 <ul class="nav nav-tabs">
  <li class="active"><a href="#">Home</a></li>
  <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu 1
    <span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a href="#">Submenu 1-1</a></li>
      <li><a href="#">Submenu 1-2</a></li>
      <li><a href="#">Submenu 1-3</a></li> 
    </ul>
  </li>
 <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu 2
   <span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a href="#">Submenu 2-1</a></li>
      <li><a href="#">Submenu 2-2</a></li>
      <li><a href="#">Submenu 2-3</a></li> 
    </ul>
 <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu 3
   <span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a href="#">Submenu 3-1</a></li>
      <li><a href="#">Submenu 3-2</a></li>
      <li><a href="#">Submenu 3-3</a></li> 
    </ul>
</ul>
-->