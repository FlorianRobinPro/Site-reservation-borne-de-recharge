  
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style2.css" id="mycss" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planning</title>
    <script src='fullcalendar/main.js'></script>
    <script src="script.js"></script>
</head>

<?php setlocale(LC_TIME, 'fra_fra'); 
$jour = strftime('%A'); ?>

<?php    
        // connexion à la base de données
        $db_username = 'root';
        $db_password = NULL;
        $db_name     = 'borne';
        $db_host     = 'localhost';
        $db = mysqli_connect($db_host, $db_username, $db_password,$db_name);

        

               if(!$db){
                die('Connexion impossible à la base de données');
               }

               else{

                $jourselectionne= $_GET['jour'];
                $creneauselectionne= $_GET['creneau'];
                $username=$_GET['username'];
                $heure=$_GET['heure'];

               }


               ?>

<body>
    <nav>
    <?php include("include/nav.php"); ?>
    </nav>

    <main>

    <div id="reserver">
       <?php echo "<p>Êtes vous sur de vouloir réserver le ".$creneauselectionne." du ".$jourselectionne." ?</p>"; ?>
       <form method="post">
       <input type="submit" name="btn_oui" value="Oui">
        <input type="submit" name="btn_non" value="Non">
        </form>
     
    </div>

    <?php
       if(isset($_POST['btn_oui'])){
        $req = "INSERT INTO creneau (jour, nom_creneau, reserver, res_utili, heure) VALUES ('".$jourselectionne."', '".$creneauselectionne."',TRUE,'".$username."','".$heure."')";
        $req2 = "INSERT INTO utilisateurs ('".$semaine1."') VALUES (1)";
        $resultreq = mysqli_query($db, $req);
        echo "<script>window.location.replace(\"planning.php?username=".$username."\")</script>";
       }

       if(isset($_POST['btn_non'])){
        echo "<script>window.location.replace(\"planning.php?username=".$username."\")</script>";

       }
       ?>

    </main>

    <footer>

    <footer>
        
<!-- <?php include("include/footer.php"); ?> -->
        
    </footer>
</body>


</html>