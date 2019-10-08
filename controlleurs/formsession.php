<?php
//Recuperation et validation des donnees
if(!empty($_POST['nom']) and 
   !empty($_POST['annee']) and 
   !empty ($_POST['date_debut']) and
   !empty ($_POST['date_fin']) and
   !empty ($_POST['effectif'])){

            $nom=$_POST['nom'];
            $annee=$_POST['annee'];
            $date_debut=$_POST['date_debut'];
            $date_fin=$_POST['date_fin'];
            $effectif=$_POST['effectif'];
         //   var_dump($_POST);

        //Traitement = ajouter l'utilisateur dans la BD
        include_once('../views/basesession.php');
       // echo("INSERT INTO `basesession` VALUES ('$presentation','$texte', '$nombre', '$nombref', '$ref', '$presentatione')");
      //  

        $requete=$pdo-> exec("INSERT INTO `basesession` (`id`, `nom`, `annee`, `debut`, `fin`, `total`) VALUES (NULL, '$nom', '$annee', '$date_debut', '$date_fin', '$effectif');");

                                    header('location:../views/sessiontab.php');
                                    
}else{
                                       header('location:../views/addsession.php?error=Les champs sont obligatoires ');
                                   }
 ?>