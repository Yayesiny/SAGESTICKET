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
      <div class="testbox">
        <h1>Ajouter une session</h1>
      
        <form action="" method="POST">
         
        <div><label>
                    Nom &nbsp; &nbsp; </label>
                    <input type="text" name="presentation">
        </div>
    <div>
                    <label>Année &nbsp; &nbsp;</label>
                    <input type="text" name="texte">
                   </div>
                   <div>
                    <label style="margin-right:50px;
                    margin-left:50px">Date début &nbsp; &nbsp; </label>
                    <input type="date" name="nombre" placeholder="">
                    <div>
                    <label style="margin-right:50px;
                    margin-left:50px">Date fin &nbsp; &nbsp; </label>
                    <input type="date" name="nombre" placeholder="">
    </div>
    <!-- div4 !-->
    <div>
                    <form method="post"></form>
                    <label>Réferentiel &nbsp; &nbsp;
                    </label>
                    <select name="ref">
                      <option value="Reférent digital">Référent Digital</option>
                      <option value="Dev Web">Developpement Web</option>
                      <option value="Data Artisan">Data Artisan</option>
                    </select>
    </div>
    <div><label>
                    <br> Effectif &nbsp; &nbsp; </label>
                    <input type="text" name="presentation">
    </div>

      <input type="submit" value="valider" id='submit' style="margin-left:90px">
      
      <input type="submit" value="annuler" id='cancel' style="margin-left:90px">
     

      </form>
      <?php
//print_r($_POST);
//1-Recupération des Infos provenant du formulaire
 //2-validation des données
if(isset($_POST['submit']))
$nom= $_POST['nom'];
$annee=$_POST['annee'];
$debut= $_POST['debut'];
$fin=$_POST['fin'];
$total= $_POST['total'];
 //3-Traitement => Connexion dans une BD
 include_once('./sessiontab.php');
 $query = $pdo->query("SELECT * FROM `basesession` WHERE nom='$nom' and annee='$annee' and debut='$debut' and debut='debut' and fin='fin' and effectif='effectif'");
  //d) Recuperer resultat
  $resultat = $query->fetch();
  if(isset($resultat['id'])){
     header("Location: sessiontab.php");  
  
?>
      </div>
    </main>
    
  </div>
 

</div>
</body>
</html>