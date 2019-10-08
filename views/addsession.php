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
      <h1>Gestion des sessions</h1>
      <div class="testbox">
        <h1>Ajouter une session</h1>
      
        <form action="../controlleurs/formsession.php" method="post">
        <div><label>
                    Nom &nbsp; &nbsp; </label>
                    <input type="text" name="nom">
         </div>
         <div>
                    <label>Année &nbsp; &nbsp;</label>
                    <input type="text" name="annee">
                   </div>
                   <div>
                    <label style="margin-right:50px;
                    margin-left:50px">Date début &nbsp; &nbsp; </label>
                    <input type="date" name="date_debut" placeholder="">
                    <div>
                    <label style="margin-right:50px;
                    margin-left:50px">Date fin &nbsp; &nbsp; </label>
                    <input type="date" name="date_fin" placeholder="">
         </div>
      
       
         <div><label>
                    <br> Effectif &nbsp; &nbsp; </label>
                    <input type="text" name="effectif">
         </div>
    
         <button type="submit" class="button" name="cancel" >Annuler</button>
         <button type="submit" class="button" name="creer" >Créer</button>

        </form>
      </div>
    </main>
    
  </div>
  
</div>
 <?php
        include("include/footer.php");      /* partie footer*/
        ?>
