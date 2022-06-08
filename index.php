
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <script src="script/script.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planning</title>
</head>
<body>

<!-- Création d'un formlaire -->
<form method="POST" action="verification.php">
<!-- bloc qui gère le background-->
    <div class="main-login">
        <!-- bloc qui gère l'affichage de gauche  -->
        <div class="left-login">
            <h1>Connectez-vous pour consulter le planning<br>de réservation</h1>
            <!-- affichage de l'image de la voiture -->
             <img src="images/voiture.svg" class="voiture" alt="voiture">
        </div>
        <!-- bloc qui gère l'affichage de droite -->
        <div class="right-login">
            <!-- bloc qui gère le carré dans lequel le formulaire se situe -->
            <div class="card-login">
                <h1>Connexion</h1>
                <div class="textfield" data-validate = "Un nom d'utilisateurs est récquis">
                    <!-- Texte qui affiche le nom au dessus de la case concerné -->
                    <label for="mail">Adresse Mail</label>
                    <!-- Case ou l'utilisateur doit renseigner son adresse mail -->
                    <input type="text" name="username"  placeholder="Adresse Mail" required>
                </div>
                <div class="textfield" data-validate = "Un mot de passe est récquis">
                    <label for="password">Mot de passe</label>
                    <!-- Case ou l'utilisateur doit renseigner son adresse mail son mot de passe -->
                    <input type="password" name="password"  placeholder="Mot de passe" required>
                </div>
                <!-- Case ou l'utilisateur doit cliquer pour se connecter -->
                <input class="btn-login" type="submit" id='submit_underline' value='Connexion'>

                <?php
                //si il y a 'erreur' dans l'url
                if(isset($_GET['erreur'])){
                //on déclare une variable qui prend la valeur 'erreur'
                $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
            }
                ?>
             
            </div>  
            
        </div>
     
    </div>

</form> 
    
</body>
</html>