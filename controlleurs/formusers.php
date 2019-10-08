<?php
//Recuperation et validation des donnees
if(!empty($_POST['nom']) and 
   !empty($_POST['prenom']) and 
   !empty ($_POST['profil']) and
   !empty ($_POST['login']) and
   !empty ($_POST['password']) and
   !empty ($_POST['confirm_password'])){

             if($_POST['password']==$_POST['confirm_password']){
                 //Traitement = ajouter l'utilisateur dans la BD
                 include_once('../views/baselogin.php');
                 $nom=$_POST['nom'];
                 $prenom=$_POST['prenom'];
                 $profil=$_POST['profil'];
                 $login=$_POST['login'];
                 $password=$_POST['password'];

                 $requete="INSERT INTO `users` ( `nom`, `prenom`, `profil`, `password`, `login`) 
                                               VALUES (?, ?, ?, ?, ?);";
                $stmt= $pdo->prepare($requete);
                $stmt->execute([$nom, $prenom, $profil, $password, $login]);
                header('location:../views/usertab.php');
             }
             else{
                header('location:../views/addusers.php?error=Mot de Passe pas conforme');
             }

   }else{
       header('location:../views/addusers.php?error=Les champs sont obligatoires ');
   }
?>