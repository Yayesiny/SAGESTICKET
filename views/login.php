<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GesTick Login</title>

     <!-- importer le fichier de style -->
    <link rel="stylesheet" href="../public/css/loginstyle.css" media="screen" type="text/css" />
</head>
    <body>
        <div class="content">
            <div id="container">
                
                <!-- zone de connexion -->
                <form action="" method="POST">
                    <h1>Saisissez vos identifiants</h1>
                    
                    <label><b>Identifiant</b></label>
                    <input type="text" placeholder="Entrer votre identifiant" name="username" required>

                    <label><b>Mot de passe</b></label>
                    <input type="password" placeholder="Entrer le mot de passe" name="password" required>
                  
                    <input type="submit" id='submit' name="submit" value='LOGIN' >
                
                </form>
            </div>
       </div>
       <?php
//print_r($_POST);
//1-Recupération des Infos provenant du formulaire
 //2-validation des données
if(isset($_POST['submit'])){

    if(!empty($_POST['username']) and !empty($_POST['password'])  ){
        $login= $_POST['username'];
        $password=$_POST['password'];
       //3-Traitement => Connexion dans une BD
             include_once('./baselogin.php');
             $query = $pdo->query("SELECT * FROM `baselogin` WHERE login='$login' and password='$password'");
             //d) Recuperer resultat
             $resultat = $query->fetch();
             if(isset($resultat['id'])){
                header("Location: usertab.php");  
             }else{
                header("Location: login.php?erreur=Login ou Mot de passe Incorrect"); 
             }
    
    }else{
        header("Location: login.php?erreur=Login ou Mot de passe Obligatoire");  
    }
    
    
}
?>
    </body>
    
</html>