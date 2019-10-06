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
      <div class="testbox">
        <h1>Ajouter un utilisateur</h1>
      
        <form action="/">
         
        <label><i class="icon-envelope "></i></label>
        <input type="text" name="name" id="name" placeholder="Nom" required/>
        <label><i class="icon-user"></i></label>
        <input type="text" name="name" id="name" placeholder="Prénom" required/>
        <label><i class="icon-shield"></i></label>
        <input type="text" name="name" id="name" placeholder="Profil" required/>
        <label><i class="icon-shield"></i></label>
        <input type="text" name="name" id="name" placeholder="Identifiant" required/>
        <label><i class="icon-shield"></i></label>
        <input type="password" name="name" id="name" placeholder="Mot de passe" required/>
        <label><i class="icon-shield"></i></label>
        <input type="password" name="name" id="name" placeholder="Confirmer mot de passe" required/>
        
         <a href="#" class="button">Créer</a>

        </form>
      </div>
    </main>
    
  </div>
  
</div>
</body>
</html>