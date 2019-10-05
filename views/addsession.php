<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GesTick add-session</title>
    <link rel="stylesheet" href="../public/css/addstyle.css" media="screen" type="text/css" />

</head>
<body>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>

<div class="app-container">
  
  <nav class="nav">
    <a href="#" class="nav__logo">
      LOGO
    </a>
    <ul class="nav__list">
      <li class="nav__list-item">
        <a href="#" class="nav__item-link">Dashboard</a>
      </li>
      <li class="nav__list-item">
        <a href="#" class="nav__item-link">Session</a>
      </li>
      <li class="nav__list-item">
        <a href="#" class="nav__item-link">Utilisateur</a>
      </li>
      <li class="nav__list-item">
        <a href="#" class="nav__item-link">Administration</a>
      </li>
      <li class="nav__list-item">
        <a href="#" class="nav__item-link">Lorem</a>
      </li>
      <li class="nav__list-item">
        <a href="#" class="nav__item-link">Lorem</a>
      </li>
      <li class="nav__list-item">
        <a href="#" class="nav__item-link">Déconnexion</a>
      </li>
    </ul>
  </nav>
  
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
      <h1>Gestion des sessions</h1>
      <div class="testbox">
        <h1>Ajouter une session</h1>
      
        <form action="/">
         
        <input type="text" name="name" id="name" placeholder="Nom" required/>
        <input type="text" name="name" id="name" placeholder="Année" required/>
        <label class="control-label" for="start-date-add"></label>
        <input type="date" min="2017-01-01" name="Date de début">
        <input type="date" name="Date de fin">
        <input type="password" name="name"  placeholder="Effectif total" required/>        
         <a href="#" class="button">Créer</a>

        </form>
      </div>
    </main>
    
  </div>
  
</div>
</body>
</html>