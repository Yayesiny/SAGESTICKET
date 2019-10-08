
    <?php
        include("include/header.php");          /* partie header*/
    ?>

<div class="app-container">
  
    <?php
        include("include/menu-vertical.php");   /* partie vertical*/

    ?>
  
  <div class="app-view">
    

  <?php
        include("include/menu-horizontal.php");  /* partie horizontal*/
    ?>
  
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
        <input type="text" name="login" id="name" placeholder="Identifiant" required/>
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
<?php
        include("include/footer.php");      /* partie footer*/
        ?>
    ?>