<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GesTick show user</title>
    <link rel="stylesheet" href="../public/css/menustyle.css" media="screen" type="text/css" />

</head>
<?php
             include_once('./baselogin.php');
             $query = $pdo->query("SELECT * FROM `users` ");
           $users= $query->fetchAll();
          // var_dump($users) ;

         ?>
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
         <li><a href="#">Session</a>
           <ul>
              <li><a href="#" class="lien" id='creer'>Créer</a></li>
              <li><a href="#">Lister</a></li>
           </ul>
        </li>
        <li><a href="#">Utilisateurs</a>
          <ul>
              <li><a href="#">Créer</a></li>
              <li><a href="#">Lister</a></li>
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
      <h1>Gestion des utilisateurs</h1>
        <table>
          <thead>
            <tr>
              <th>Identifiant</th>
              <th>Nom</th>
              <th>Prénom</th>
              <th>Adresse mail</th>
              <th>Téléphone</th>
              <th>Profil</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
          <?php 
                    foreach ($users as $key => $user) {
                   
                ?>
                    <tr>
                       <td><?php echo $user['identifiant'];?></td>
                       <td><?php echo $user['nom'];?></td>
                       <td><?php echo $user['prenom'];?></td>
                       <td><?php echo $user['mail'];?></td>
                       <td><?php echo $user['telephone'];?></td>
                       <td><?php echo $user['profil'];?></td>
                       
                    </tr>
                <?php
                     
                    }
                 ?>
            <tr>
              <td>
                <a href="#">007</a>
              </td>
              <td>Lorem</td>
              <td>Ipsum</td>
              <td>nom@mail.com</td>
              <td>781234567</td>
              <td>Lorem</td>
              <td>
                <button class="btn">Edit</button>
                <button class="btn btn-delete">Delete</button>
              </td>
            </tr>
            <tr>
              <td>
                <a href="#">008</a>
              </td>
              <td>Lorem</td>
              <td>Ipsum</td>
              <td>nom@mail.com</td>
              <td>781234567</td>
              <td>Lorem</td>
              <td>
                <button class="btn">Edit</button>
                <button class="btn btn-delete">Delete</button>
              </td>
            </tr>
            <tr>
              <td>
                <a href="#">009</a>
              </td>
              <td>Lorem</td>
              <td>Ipsum</td>
              <td>nom@mail.com</td>
              <td>781234567</td>
              <td>Lorem</td>
              <td>
                <button class="btn">Edit</button>
                <button class="btn btn-delete">Delete</button>
              </td>
            </tr>
          </tbody>
        </table>
      </main>
    </main>
    
  </div>
  
  
</div>
<?php
//print_r($_POST);
//1-Recupération des Infos provenant du formulaire
 //2-validation des données
if(isset($_POST['creer'])){

             include_once('./userbase.php');
             //d) Recuperer resultat
             $resultat = $query->fetch();
    
    
}
?>
</body>
</html>