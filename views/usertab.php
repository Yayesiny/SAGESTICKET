<?php
  include_once('./baselogin.php');
             $query = $pdo->query("SELECT * FROM `users` ");
           $users= $query->fetchAll();
          // var_dump($users) ;

         ?>
         
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
      <h1>Gestion des utilisateurs</h1>
        <table>
          <thead>
            <tr>
              <th>Nom</th>
              <th>Prénom</th>
              <th>Profil</th>
              <th>Login</th>
            </tr>
          </thead>
          <tbody>
          <?php 
                    foreach ($users as $key => $user) {
                   
                ?>
                    <tr>
                       <td><?php echo $user['nom'];?></td>
                       <td><?php echo $user['prenom'];?></td>
                       <td><?php echo $user['profil'];?></td>
                       <td><?php echo $user['login'];?></td>
                       
                    </tr>
                <?php
                     
                    }
                 ?>
       
            </tr>
          </tbody>
        </table>
      </main>  
      </main>  
  </div>
  
</div>
<?php
        include("include/footer.php");      /* partie footer*/
?>
