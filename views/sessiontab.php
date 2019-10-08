<?php
             include_once('./baselogin.php');
             $query = $pdo->query("SELECT * FROM `basesession` ");
           $users= $query->fetchAll();
          // var_dump($users) ;

         ?>
         
         <?php
        include("include/header.php");
        
    ?>
<div class="app-container">
  
<?php
        include("include/menu-vertical.php");
    ?>
  
  <div class="app-view">
    
    <?php
        include("include/menu-horizontal.php");
    ?>
    
    <main class="content">
      <h1>Gestion des sessions</h1>
        <table>
          <thead> <!-- En-tête du tableau -->
            <tr>
              <th>Nom</th>
              <th>Année</th>
              <th>Date début</th>
              <th>Date fin</th>
              <th>Effectif</th>
            </tr>
          </thead>
          <tbody> <!-- Corps du tableau -->
          <?php 
                    foreach ($users as $key => $user) {
                   
                ?>
                    <tr>
                       <td><?php echo $user['nom'];?></td>
                       <td><?php echo $user['annee'];?></td>
                       <td><?php echo $user['debut'];?></td>
                       <td><?php echo $user['fin'];?></td>
                       <td><?php echo $user['total'];?></td>
                       
                    </tr>
                <?php
                     
                    }
                 ?>
          </tbody>
        </table>
      </main>
          
  </div>
  
</div>
</body>
</html>
