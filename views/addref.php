<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GesTick add-session</title>
    <link rel="stylesheet" href="../public/css/menustyle.css" media="screen" type="text/css" />

</head>
<body>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>

    <div class="app-container">
  <div>  
    <div class="logo">
    <a href="#" class="nav__logo">
      LOGO
    </a>
    </div>

    <ul id="menu-accordeon">
        <li><a href="#">Tableau de bord</a>
        </li>
         <li><?php echo'<a href="sessiontab.php">Session</a>';?>
           <ul>
              <li><?php echo'<a href="addsession.php">Créer</a>';?></li>
              <li><?php echo'<a href="sessiontab.php">Lister</a>';?></li>

           </ul>
        </li>
        <li><?php echo'<a href="usertab.php">Utilisateurs</a>';?>
          <ul>
           <li><?php echo'<a href="addusers.php">Créer</a>';?></li>
           <li><?php echo'<a href="usertab.php">Lister</a>';?>

          </ul>
        </li>
        <li><?php echo'<a href="reftab.php">Référentiels</a>';?>
          <ul>
           <li><?php echo'<a href="addref.php">Ajouter</a>';?></li>
           <li><?php echo'<a href="reftab.php">Lister</a>';?>

          </ul>
        </li>
        <li><a href="#">Administration</a>
        <li><a href="#">Déconnexion</a>
     </ul>
  </div>
  <div class="app-view">
    
    <nav class="utility-bar">
      <div class="utility-bar__inner">
        <a href="#" class="utility-bar__account">
          <span class="utility-bar__account-avatar"></span>
          <span class="utility-bar__account-name">Assistant Dir</span>
        </a>
      </div>
    </nav>
    <main class="content">
    <?php
          if (isset($_GET['error']) ){
                echo $_GET['error'];
          }
       ?>
  
      <div class="testbox">
        <h1>Ajouter un Référentiel</h1>
      
        <form action="../controlleurs/formsession.php" method="post">    
         
         <div><label>
                    Nom &nbsp; &nbsp; </label>
                    <input type="text" name="nom">
         </div>
         <div>
                    <label>Année &nbsp; &nbsp;</label>
                    <input type="text" name="annee">
                   </div>
                   <button type="submit" class="button" name="cancel" >Annuler</button>
                   <button type="submit" class="button" name="creer" >Créer</button>
                   
         </div>
        </form>
     </div>
    </main>
  </div>
</div>

</body>
</html>