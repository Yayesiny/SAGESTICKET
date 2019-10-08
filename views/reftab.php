<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GesTick show session</title>
    <link rel="stylesheet" href="../public/css/menustyle.css" media="screen" type="text/css" />

</head>
<body>
   
<?php
             include_once('./basesession.php');
             $query = $pdo->query("SELECT * FROM `basesession` ");
           $users= $query->fetchAll();
          // var_dump($users) ;

         ?>
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
      <h1>Liste des Référentiels</h1>
        <table>
          <thead>
            <tr>
              <th>Nom</th>
              <th>Action</th> 
            </tr>
          </thead>
         <tbody>
             <tr>
              <td>lorem</td>
              <td> <button class="button">Modifier</button>
              <button class="button">Supprimer</button>
              </td>
            </tr>
            <tr>
              <td>lorem</td>
              <td> <button class="button">Modifier</button> 
              <button class="button">Supprimer</button>

              </td>
            </tr>
          </tbody>        
        </table>
      </main>
      
    </main>
    
  </div>
  
</div>
</body>
</html>