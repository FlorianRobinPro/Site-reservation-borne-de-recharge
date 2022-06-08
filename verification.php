<?php
session_start();
//on récupère le "username" et "password" renseigné par l'utilisateur
if(isset($_POST['username']) && isset($_POST['password']))
{
    // connexion à la base de données
    $db_username = 'root';
    $db_password = NULL;
    $db_name     = 'borne';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');
    
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $username = mysqli_real_escape_string($db,htmlspecialchars($_POST['username'])); 
    $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));
    
    //Si "username" et "password" ne sont pas vide
    if($username !== "" && $password !== "")
    {
      // cette requete selectionne tout de la table utilisateur où le mail et le mot de passe sont identiques
      // à ceux renseigné par l'utilisateur 
        $requete = "SELECT count(*) FROM utilisateurs where mail = '".$username."' and password = '".$password."' ";
      // on execute la requete
        $exec_requete = mysqli_query($db,$requete);
        $reponse = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        //si le nom d'utilisateur et mot de passe correctes
        if($count!=0) 
        {
           $_SESSION['username'] = $username;
           //on redirige l'utilisateur vers la page du planning en affichat son nom dans l'url
           header("Location: planning.php?username=".$username."");
        }
        else
        {
           header('Location: index.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: index.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: index.php');
}
mysqli_close($db); // fermer la connexion
?>