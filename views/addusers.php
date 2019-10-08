<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GesTick add-user</title>
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
        <li><a href="#">Administration</a>
        <li><a href="#">Déconnexion</a>
     </ul>
  </div>
    <main class="content">
       <?php
          if (isset($_GET['error']) ){
                echo $_GET['error'];
          }
       ?>
      <h1>Gestion des utilisateurs</h1>
      <div class="testbox">
        <h1>Ajouter un utilisateur</h1>   
        <form action="../controlleurs/formusers.php" method="post">    
        <label><i class="icon-envelope "></i></label>
        <input type="text" name="nom" id="name" placeholder="Nom" required/>
        <label><i class="icon-user"></i></label>
        <input type="text" name="prenom" id="name" placeholder="Prénom" required/>
        <label><i class="icon-shield"></i></label>
        <input type="text" name="profil" id="name" placeholder="Profil" required/>
        <label><i class="icon-shield"></i></label>
        <input type="text" name="login" id="name" placeholder="login"/>
        <label><i class="icon-shield"></i></label>
        <input type="password" name="password" id="name" placeholder="Mot de passe" required/>
        <label><i class="icon-shield"></i></label>
        <input type="password" name="confirm_password" id="name" placeholder="Confirmer mot de passe" required/>
        <label><i class="icon-shield"></i></label>
                 <button type="submit" class="button" name="creer" >Créer</button>
        </form>
      </div>
    </main>
  </div>
</div>



</body>
</html>