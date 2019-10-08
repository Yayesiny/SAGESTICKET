<nav class="nav">
    <a href="#" class="nav__logo">
      LOGO
    </a>
    <ul id="menu-accordeon">
        <li><a href="#">Dashboard</a></li>

         <li><?php echo'<a href="sessiontab.php">Session</a>';?>
           <ul>
              <li><?php echo'<a href="addsession.php">Ajouter</a>';?></li>
              <li><?php echo'<a href="sessiontab.php">Liste</a>';?></li>
          </ul>
        </li>
        
        <li><?php echo'<a href="usertab.php">Utilisateur</a>';?>
           <ul>
              <li><?php echo'<a href="addusers.php">Ajouter</a>';?></li>
              <li><?php echo'<a href="usertab.php">Liste</a>';?></li>
           </ul>
        </li>
        <a href=""><input type="button" value="Déconnexion"></a> 
  </nav>