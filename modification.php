  
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

                //lundi
                switch ($jour) {
                    case "lundi":
                        $datelundiS1 = date('Y-m-d');
                        break;
                    case "mardi":
                        $datelundiS1 = date('Y-m-d', strtotime('-1 days'));
                        break;
                    case "mercredi":
                        $datelundiS1 = date('Y-m-d', strtotime('-2 days'));
                        break;
                    case "jeudi":
                        $datelundiS1 = date('Y-m-d', strtotime('-3 days'));
                        break;
                    case "vendredi":
                        $datelundiS1 = date('Y-m-d', strtotime('-4 days'));
                        break;
                    case "samedi":
                        $datelundiS1 = date('Y-m-d', strtotime('-5 days'));
                        break;
                    case "dimanche":
                        $datelundiS1 = date('Y-m-d',strtotime('-6 days'));
                        break;
                }

                //mardi
                switch ($jour) {
                    case "lundi":
                        $datemardiS1 =  date('Y-m-d',strtotime('+1 days'));
                        break;
                    case "mardi":
                        $datemardiS1 = date('Y-m-d');
                        break;
                    case "mercredi":
                        $datemardiS1 = date('Y-m-d',strtotime('-1 days'));
                        break;
                    case "jeudi":
                        $datemardiS1 = date('Y-m-d',strtotime('-2 days'));
                        break;
                    case "vendredi":
                        $datemardiS1 = date('Y-m-d',strtotime('-3 days'));
                        break;
                    case "samedi":
                        $datemardiS1 = date('Y-m-d',strtotime('-4 days'));
                        break;
                    case "dimanche":
                        $datemardiS1 = date('Y-m-d',strtotime('-5 days'));
                        break;
                }
                
                //mercredi
                switch ($jour) {
                    case "lundi":
                        $datemercrediS1 = date('Y-m-d',strtotime('+2 days'));
                        break;
                    case "mardi":
                        $datemercrediS1 = date('Y-m-d',strtotime('+1 days'));
                        break;
                    case "mercredi":
                        $datemercrediS1 = date('Y-m-d');
                        break;
                    case "jeudi":
                        $datemercrediS1 = date('Y-m-d',strtotime('-1 days'));
                        break;
                    case "vendredi":
                        $datemercrediS1 = date('Y-m-d',strtotime('-2 days'));
                        break;
                    case "samedi":
                        $datemercrediS1 = date('Y-m-d',strtotime('-3 days'));
                        break;
                    case "dimanche":
                        $datemercrediS1 = date('Y-m-d',strtotime('-4 days'));
                        break;
                }

                //jeudi
                switch ($jour) {
                    case "lundi":
                        $datejeudiS1 = date('Y-m-d',strtotime('+3 days'));
                        break;
                    case "mardi":
                        $datejeudiS1 = date('Y-m-d',strtotime('+2 days'));
                        break;
                    case "mercredi":
                        $datejeudiS1 = date('Y-m-d',strtotime('+1 days'));
                        break;
                    case "jeudi":
                        $datejeudiS1 = date('Y-m-d');
                        break;
                    case "vendredi":
                        $datejeudiS1 = date('Y-m-d',strtotime('-1 days'));
                        break;
                    case "samedi":
                        $datejeudiS1 = date('Y-m-d',strtotime('-2 days'));
                        break;
                    case "dimanche":
                        $datejeudiS1 = date('Y-m-d',strtotime('-3 days'));
                        break;
                }

                //vendredi
                switch ($jour) {
                    case "lundi":
                        $datevendrediS1 = date('Y-m-d',strtotime('+4 days'));
                        break;
                    case "mardi":
                        $datevendrediS1 = date('Y-m-d',strtotime('+3 days'));
                        break;
                    case "mercredi":
                        $datevendrediS1 = date('Y-m-d',strtotime('+2 days'));
                        break;
                    case "jeudi":
                        $datevendrediS1 = date('Y-m-d',strtotime('+1 days'));
                        break;
                    case "vendredi":
                        $datevendrediS1 = date('Y-m-d');
                        break;
                    case "samedi":
                        $datevendrediS1 = date('Y-m-d',strtotime('-1 days'));
                        break;
                    case "dimanche":
                        $datevendrediS1 = date('Y-m-d',strtotime('-2 days'));
                        break;
                }

               //lundiS2
               switch ($jour) {
                case "lundi":
                    $datelundiS2 = date('Y-m-d',strtotime('+7 days'));
                    break;
                case "mardi":
                    $datelundiS2 = date('Y-m-d', strtotime('+6 days'));
                    break;
                case "mercredi":
                    $datelundiS2 = date('Y-m-d', strtotime('+5 days'));
                    break;
                case "jeudi":
                    $datelundiS2 = date('Y-m-d', strtotime('+4 days'));
                    break;
                case "vendredi":
                    $datelundiS2 = date('Y-m-d', strtotime('+3 days'));
                    break;
                case "samedi":
                    $datelundiS2 = date('Y-m-d', strtotime('+2 days'));
                    break;
                case "dimanche":
                    $datelundiS1 = date('Y-m-d',strtotime('+1 days'));
                    break;
            }

            //mardiS2
            switch ($jour) {
                case "lundi":
                    $datemardiS2 =  date('Y-m-d',strtotime('+8 days'));
                    break;
                case "mardi":
                    $datemardiS2 = date('Y-m-d',strtotime('+7 days'));
                    break;
                case "mercredi":
                    $datemardiS2 = date('Y-m-d',strtotime('+6 days'));
                    break;
                case "jeudi":
                    $datemardiS2 = date('Y-m-d',strtotime('+5 days'));
                    break;
                case "vendredi":
                    $datemardiS2 = date('Y-m-d',strtotime('+4 days'));
                    break;
                case "samedi":
                    $datemardiS2 = date('Y-m-d',strtotime('+3 days'));
                    break;
                case "dimanche":
                    $datemardiS2 = date('Y-m-d',strtotime('+2 days'));
                    break;
            }
            
            //mercrediS2
            switch ($jour) {
                case "lundi":
                    $datemercrediS2 = date('Y-m-d',strtotime('+9 days'));
                    break;
                case "mardi":
                    $datemercrediS2 = date('Y-m-d',strtotime('+8 days'));
                    break;
                case "mercredi":
                    $datemercrediS2 = date('Y-m-d',strtotime('+7 days'));
                    break;
                case "jeudi":
                    $datemercrediS2 = date('Y-m-d',strtotime('+6 days'));
                    break;
                case "vendredi":
                    $datemercrediS2 = date('Y-m-d',strtotime('+5 days'));
                    break;
                case "samedi":
                    $datemercrediS2 = date('Y-m-d',strtotime('+4 days'));
                    break;
                case "dimanche":
                    $datemercrediS2 = date('Y-m-d',strtotime('+3 days'));
                    break;
            }

            //jeudiS2
            switch ($jour) {
                case "lundi":
                    $datejeudiS2 = date('Y-m-d',strtotime('+10 days'));
                    break;
                case "mardi":
                    $datejeudiS2 = date('Y-m-d',strtotime('+9 days'));
                    break;
                case "mercredi":
                    $datejeudiS2 = date('Y-m-d',strtotime('+8 days'));
                    break;
                case "jeudi":
                    $datejeudiS2 = date('Y-m-d',strtotime('+7 days'));
                    break;
                case "vendredi":
                    $datejeudiS2 = date('Y-m-d',strtotime('+6 days'));
                    break;
                case "samedi":
                    $datejeudiS2 = date('Y-m-d',strtotime('+5 days'));
                    break;
                case "dimanche":
                    $datejeudiS2 = date('Y-m-d',strtotime('+4 days'));
                    break;
            }

            //vendrediS2
            switch ($jour) {
                case "lundi":
                    $datevendrediS2 = date('Y-m-d',strtotime('+11 days'));
                    break;
                case "mardi":
                    $datevendrediS2 = date('Y-m-d',strtotime('+10 days'));
                    break;
                case "mercredi":
                    $datevendrediS2 = date('Y-m-d',strtotime('+9 days'));
                    break;
                case "jeudi":
                    $datevendrediS2 = date('Y-m-d',strtotime('+8 days'));
                    break;
                case "vendredi":
                    $datevendrediS2 = date('Y-m-d',strtotime('+7 days'));
                    break;
                case "samedi":
                    $datevendrediS2 = date('Y-m-d',strtotime('+6 days'));
                    break;
                case "dimanche":
                    $datevendrediS2 = date('Y-m-d',strtotime('+5 days'));
                    break;
            }


             
        $reqlundiCR1 = "SELECT reserver FROM creneau WHERE jour='".$datelundiS1."' AND nom_creneau = 'creneau1'";
        $reqlundiCR2 = "SELECT reserver FROM creneau WHERE jour='".$datelundiS1."' AND nom_creneau = 'creneau2'";
        $reqlundiCR3 = "SELECT reserver FROM creneau WHERE jour='".$datelundiS1."' AND nom_creneau = 'creneau3'";
        $reqlundiCR4 = "SELECT reserver FROM creneau WHERE jour='".$datelundiS1."' AND nom_creneau = 'creneau4'";

        $reqmardiCR1 = "SELECT reserver FROM creneau WHERE jour='".$datemardiS1."' AND nom_creneau = 'creneau1'";
        $reqmardiCR2 = "SELECT reserver FROM creneau WHERE jour='".$datemardiS1."' AND nom_creneau = 'creneau2'";
        $reqmardiCR3 = "SELECT reserver FROM creneau WHERE jour='".$datemardiS1."' AND nom_creneau = 'creneau3'";
        $reqmardiCR4 = "SELECT reserver FROM creneau WHERE jour='".$datemardiS1."' AND nom_creneau = 'creneau4'";

        $reqmercrediCR1 = "SELECT reserver FROM creneau WHERE jour='".$datemercrediS1."' AND nom_creneau = 'creneau1'";
        $reqmercrediCR2 = "SELECT reserver FROM creneau WHERE jour='".$datemercrediS1."' AND nom_creneau = 'creneau2'";
        $reqmercrediCR3 = "SELECT reserver FROM creneau WHERE jour='".$datemercrediS1."' AND nom_creneau = 'creneau3'";
        $reqmercrediCR4 = "SELECT reserver FROM creneau WHERE jour='".$datemercrediS1."' AND nom_creneau = 'creneau4'";

        $reqjeudiCR1 = "SELECT reserver FROM creneau WHERE jour='".$datejeudiS1."' AND nom_creneau = 'creneau1'";
        $reqjeudiCR2 = "SELECT reserver FROM creneau WHERE jour='".$datejeudiS1."' AND nom_creneau = 'creneau2'";
        $reqjeudiCR3 = "SELECT reserver FROM creneau WHERE jour='".$datejeudiS1."' AND nom_creneau = 'creneau3'";
        $reqjeudiCR4 = "SELECT reserver FROM creneau WHERE jour='".$datejeudiS1."' AND nom_creneau = 'creneau4'";

        $reqvendrediCR1 = "SELECT reserver FROM creneau WHERE jour='".$datevendrediS1."' AND nom_creneau = 'creneau1'";
        $reqvendrediCR2 = "SELECT reserver FROM creneau WHERE jour='".$datevendrediS1."' AND nom_creneau = 'creneau2'";
        $reqvendrediCR3 = "SELECT reserver FROM creneau WHERE jour='".$datevendrediS1."' AND nom_creneau = 'creneau3'";
        $reqvendrediCR4 = "SELECT reserver FROM creneau WHERE jour='".$datevendrediS1."' AND nom_creneau = 'creneau4'";

        $reqlundiSVCR1 = "SELECT reserver FROM creneau WHERE jour='".$datelundiS2."' AND nom_creneau = 'creneau1'";
        $reqlundiSVCR2 = "SELECT reserver FROM creneau WHERE jour='".$datelundiS2."' AND nom_creneau = 'creneau2'";
        $reqlundiSVCR3 = "SELECT reserver FROM creneau WHERE jour='".$datelundiS2."' AND nom_creneau = 'creneau3'";
        $reqlundiSVCR4 = "SELECT reserver FROM creneau WHERE jour='".$datelundiS2."' AND nom_creneau = 'creneau4'";

        $reqmardiSVCR1 = "SELECT reserver FROM creneau WHERE jour='".$datemardiS2."' AND nom_creneau = 'creneau1'";
        $reqmardiSVCR2 = "SELECT reserver FROM creneau WHERE jour='".$datemardiS2."' AND nom_creneau = 'creneau2'";
        $reqmardiSVCR3 = "SELECT reserver FROM creneau WHERE jour='".$datemardiS2."' AND nom_creneau = 'creneau3'";
        $reqmardiSVCR4 = "SELECT reserver FROM creneau WHERE jour='".$datemardiS2."' AND nom_creneau = 'creneau4'";

        $reqmercrediSVCR1 = "SELECT reserver FROM creneau WHERE jour='".$datemercrediS2."' AND nom_creneau = 'creneau1'";
        $reqmercrediSVCR2 = "SELECT reserver FROM creneau WHERE jour='".$datemercrediS2."' AND nom_creneau = 'creneau2'";
        $reqmercrediSVCR3 = "SELECT reserver FROM creneau WHERE jour='".$datemercrediS2."' AND nom_creneau = 'creneau3'";
        $reqmercrediSVCR4 = "SELECT reserver FROM creneau WHERE jour='".$datemercrediS2."' AND nom_creneau = 'creneau4'";

        $reqjeudiSVCR1 = "SELECT reserver FROM creneau WHERE jour='".$datejeudiS2."' AND nom_creneau = 'creneau1'";
        $reqjeudiSVCR2 = "SELECT reserver FROM creneau WHERE jour='".$datejeudiS2."' AND nom_creneau = 'creneau2'";
        $reqjeudiSVCR3 = "SELECT reserver FROM creneau WHERE jour='".$datejeudiS2."' AND nom_creneau = 'creneau3'";
        $reqjeudiSVCR4 = "SELECT reserver FROM creneau WHERE jour='".$datejeudiS2."' AND nom_creneau = 'creneau4'";

        $reqvendrediSVCR1 = "SELECT reserver FROM creneau WHERE jour='".$datevendrediS2."' AND nom_creneau = 'creneau1'";
        $reqvendrediSVCR2 = "SELECT reserver FROM creneau WHERE jour='".$datevendrediS2."' AND nom_creneau = 'creneau2'";
        $reqvendrediSVCR3 = "SELECT reserver FROM creneau WHERE jour='".$datevendrediS2."' AND nom_creneau = 'creneau3'";
        $reqvendrediSVCR4 = "SELECT reserver FROM creneau WHERE jour='".$datevendrediS2."' AND nom_creneau = 'creneau4'";


        $resultreqlundiCR1 = mysqli_query($db, $reqlundiCR1);
        $resultreqlundiCR2 = mysqli_query($db, $reqlundiCR2);
        $resultreqlundiCR3 = mysqli_query($db, $reqlundiCR3);
        $resultreqlundiCR4 = mysqli_query($db, $reqlundiCR4);

        $resultreqmardiCR1 = mysqli_query($db, $reqmardiCR1);
        $resultreqmardiCR2 = mysqli_query($db, $reqmardiCR2);
        $resultreqmardiCR3 = mysqli_query($db, $reqmardiCR3);
        $resultreqmardiCR4 = mysqli_query($db, $reqmardiCR4);

        $resultreqmercrediCR1 = mysqli_query($db, $reqmercrediCR1);
        $resultreqmercrediCR2 = mysqli_query($db, $reqmercrediCR2);
        $resultreqmercrediCR3 = mysqli_query($db, $reqmercrediCR3);
        $resultreqmercrediCR4 = mysqli_query($db, $reqmercrediCR4);

        $resultreqjeudiCR1 = mysqli_query($db, $reqjeudiCR1);
        $resultreqjeudiCR2 = mysqli_query($db, $reqjeudiCR2);
        $resultreqjeudiCR3 = mysqli_query($db, $reqjeudiCR3);
        $resultreqjeudiCR4 = mysqli_query($db, $reqjeudiCR4);

        $resultreqvendrediCR1 = mysqli_query($db, $reqvendrediCR1);
        $resultreqvendrediCR2 = mysqli_query($db, $reqvendrediCR2);
        $resultreqvendrediCR3 = mysqli_query($db, $reqvendrediCR3);
        $resultreqvendrediCR4 = mysqli_query($db, $reqvendrediCR4);

        $resultreqlundiSVCR1 = mysqli_query($db, $reqlundiSVCR1);
        $resultreqlundiSVCR2 = mysqli_query($db, $reqlundiSVCR2);
        $resultreqlundiSVCR3 = mysqli_query($db, $reqlundiSVCR3);
        $resultreqlundiSVCR4 = mysqli_query($db, $reqlundiSVCR4);

        $resultreqmardiSVCR1 = mysqli_query($db, $reqmardiSVCR1);
        $resultreqmardiSVCR2 = mysqli_query($db, $reqmardiSVCR2);
        $resultreqmardiSVCR3 = mysqli_query($db, $reqmardiSVCR3);
        $resultreqmardiSVCR4 = mysqli_query($db, $reqmardiSVCR4);

        $resultreqmercrediSVCR1 = mysqli_query($db, $reqmercrediSVCR1);
        $resultreqmercrediSVCR2 = mysqli_query($db, $reqmercrediSVCR2);
        $resultreqmercrediSVCR3 = mysqli_query($db, $reqmercrediSVCR3);
        $resultreqmercrediSVCR4 = mysqli_query($db, $reqmercrediSVCR4);

        $resultreqjeudiSVCR1 = mysqli_query($db, $reqjeudiSVCR1);
        $resultreqjeudiSVCR2 = mysqli_query($db, $reqjeudiSVCR2);
        $resultreqjeudiSVCR3 = mysqli_query($db, $reqjeudiSVCR3);
        $resultreqjeudiSVCR4 = mysqli_query($db, $reqjeudiSVCR4);

        $resultreqvendrediSVCR1 = mysqli_query($db, $reqvendrediSVCR1);
        $resultreqvendrediSVCR2 = mysqli_query($db, $reqvendrediSVCR2);
        $resultreqvendrediSVCR3 = mysqli_query($db, $reqvendrediSVCR3);
        $resultreqvendrediSVCR4 = mysqli_query($db, $reqvendrediSVCR4);

        $creneau1 = 'creneau1';
        $creneau2 = 'creneau2';
        $creneau3 = 'creneau3';
        $creneau4 = 'creneau4';

        $semaine1 = 'compteurS1';
        $semaine2 = 'compteurS2';

       $heure = date("H:i",strtotime('+2 Hour'));

       $date = date("Y-m-d");
       
       $heureCR1 = date("07:00");
       $heureCR2 = date("10:00");
       $heureCR3 = date("13:00");
       $heureCR4 = date("16:00");

       $username = $_GET['username'];

       $creneauprix = "SELECT res_utili FROM creneau WHERE nom_creneau='".$creneau1."' AND jour='".$datelundiS1."'";
       $resultcreneauprix = $db->query($creneauprix);
       $data = $resultcreneauprix -> fetch_assoc();
       
       echo $data['res_utili']; 

    ?>

<body>
    <nav>
    <?php include("include/nav.php"); ?>
    </nav>

    <main>

    

    <table id="tabsemaine">

<tr>
    <td id="vide"> <input type="submit" value=">" onclick="switchStyle('style.css')"></td>
    <td>Lundi
    <?php 

    //lundi
    switch ($jour) {
        case "lundi":
            echo strftime('%d %B');
            break;
        case "mardi":
            echo strftime('%d %B',strtotime('-1 days'));
            break;
        case "mercredi":
            echo strftime('%d %B',strtotime('-2 days'));
            break;
        case "jeudi":
                echo strftime('%d %B',strtotime('-3 days'));
            break;
        case "vendredi":
                echo strftime('%d %B',strtotime('-4 days'));
            break;
        case "samedi":
                echo strftime('%d %B',strtotime('-5 days'));
            break;
        case "dimanche":
                echo strftime('%d %B',strtotime('-6 days'));
            break;
    }
    ?>
    </td>
    <td>Mardi
    <?php 
    switch ($jour) {
        case "lundi":
            echo strftime('%d %B',strtotime('+1 days'));
            break;
        case "mardi":
            echo strftime('%d %B');
            break;
        case "mercredi":
            echo strftime('%d %B',strtotime('-1 days'));
            break;
        case "jeudi":
                echo strftime('%d %B',strtotime('-2 days'));
            break;
        case "vendredi":
                echo strftime('%d %B',strtotime('-3 days'));
            break;
        case "samedi":
                echo strftime('%d %B',strtotime('-4 days'));
            break;
        case "dimanche":
                echo strftime('%d %B',strtotime('-5 days'));
            break;
    }
    ?>
    </td>
    <td>Mercredi 
    <?php
    switch ($jour) {
        case "lundi":
            echo strftime('%d %B',strtotime('+2 days'));
            break;
        case "mardi":
            echo strftime('%d %B',strtotime('+1 days'));
            break;
        case "mercredi":
            echo strftime('%d %B');
            break;
        case "jeudi":
                echo strftime('%d %B',strtotime('-1 days'));
            break;
        case "vendredi":
                echo strftime('%d %B',strtotime('-2 days'));
            break;
        case "samedi":
                echo strftime('%d %B',strtotime('-3 days'));
            break;
        case "dimanche":
                echo strftime('%d %B',strtotime('-4 days'));
            break;
    }
    ?>
    </td>
    <td>Jeudi  
    <?php
    switch ($jour) {
        case "lundi":
            echo strftime('%d %B',strtotime('+3 days'));
            break;
        case "mardi":
            echo strftime('%d %B',strtotime('+2 days'));
            break;
        case "mercredi":
            echo strftime('%d %B',strtotime('+1 days'));
            break;
        case "jeudi":
                echo strftime('%d %B');
            break;
        case "vendredi":
                echo strftime('%d %B',strtotime('-1 days'));
            break;
        case "samedi":
                echo strftime('%d %B',strtotime('-2 days'));
            break;
        case "dimanche":
                echo strftime('%d %B',strtotime('-3 days'));
            break;
    }
    ?></td>
    <td>Vendredi 
        <?php 
    switch ($jour) {
        case "lundi":
            echo strftime('%d %B',strtotime('+4 days'));
            break;
        case "mardi":
            echo strftime('%d %B',strtotime('+3 days'));
            break;
        case "mercredi":
            echo strftime('%d %B',strtotime('+2 days'));
            break;
        case "jeudi":
                echo strftime('%d %B',strtotime('+1 days'));
            break;
        case "vendredi":
                echo strftime('%d %B');
            break;
        case "samedi":
                echo strftime('%d %B',strtotime('-1 days'));
            break;
        case "dimanche":
                echo strftime('%d %B',strtotime('-2 days'));
            break;
    }
    ?>
 
    </td>
</tr>
<tr>
    <td>7h à 10h</td>
    <?php

        $creneau1;

         $reqlundiCR1;
        
         $resultreqlundiCR1 = mysqli_query($db, $reqlundiCR1);
      
         if($data = mysqli_fetch_array($resultreqlundiCR1) == FALSE){
            
          if ($heure > $heureCR1 && $date == $datelundiS1){
              echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
          }
          else if ($date > $datelundiS1){
              echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
          }
          else{
            echo "<td name='creneau1' id='creneau'> <a> Libre </a> </td>";
         }
        }
        else{
            $creneauprix = "SELECT res_utili FROM creneau WHERE nom_creneau='".$creneau1."' AND jour='".$datelundiS1."'";
            $resultcreneauprix = $db->query($creneauprix);
            $data = $resultcreneauprix -> fetch_assoc();

           if($data['res_utili'] == $username){
               echo "<td style='background-color:green; text-decoration: none;'><a style='text-decoration: none; color:black;' href='modifier.php?jour=".$datelundiS1."&creneau=".$creneau1."&username=".$username."&heure=".$heureCR1."'?>Réservé</a></td>";
               }
               else{
                   echo "<td style='background-color:red;'><a>Réservé</a></td>";
            }
        }
        ?>
    <?php 

        $creneau1;

         $reqmardiCR1;

         $resultreqmardiCR1 = mysqli_query($db, $reqmardiCR1);
         

      
         if($data = mysqli_fetch_array($resultreqmardiCR1) == FALSE){
            if ($heure > $heureCR1 && $datemardiS1 == $date){
             echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
             }
             else if ($datemardiS1 < $date){
             echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
             }
            else{
            echo "<td name='creneau1' id='creneau'> <a> Libre </a> </td>";
           }
        }
        else{
            $creneauprix = "SELECT res_utili FROM creneau WHERE nom_creneau='".$creneau1."' AND jour='".$datemardiS1."'";
            $resultcreneauprix = $db->query($creneauprix);
            $data = $resultcreneauprix -> fetch_assoc();

           if($data['res_utili'] == $username){
               echo "<td style='background-color:green; text-decoration: none;'><a style='text-decoration: none; color:black;' href='modifier.php?jour=".$datemardiS1."&creneau=".$creneau1."&username=".$username."&heure=".$heureCR1."'?>Réservé</a></td>";
               }
               else{
                   echo "<td style='background-color:red;'><a>Réservé</a></td>";
            }
        }
        ?>
    <?php 

        $creneau1;

         $reqmercrediCR1;

         $resultreqmercrediCR1 = mysqli_query($db, $reqmercrediCR1);
         

      
         if($data = mysqli_fetch_array($resultreqmercrediCR1) == FALSE){
            if ($heure > $heureCR1 && $datemercrediS1 == $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else if ($datemercrediS1 < $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else{
            echo "<td name='creneau1' id='creneau'> <a> Libre </a> </td>";
            }
        }
        else{
            $creneauprix = "SELECT res_utili FROM creneau WHERE nom_creneau='".$creneau1."' AND jour='".$datemercrediS1."'";
            $resultcreneauprix = $db->query($creneauprix);
            $data = $resultcreneauprix -> fetch_assoc();

           if($data['res_utili'] == $username){
               echo "<td style='background-color:green; text-decoration: none;'><a style='text-decoration: none; color:black;' href='modifier.php?jour=".$datemercrediS1."&creneau=".$creneau1."&username=".$username."&heure=".$heureCR1."'?>Réservé</a></td>";
               }
               else{
                   echo "<td style='background-color:red;'><a>Réservé</a></td>";
            }
        }
        ?>
    <?php 

        $creneau1;

         $reqjeudiCR1;

         $resultreqjeudiCR1 = mysqli_query($db, $reqjeudiCR1);
         

      
         if($data = mysqli_fetch_array($resultreqjeudiCR1) == FALSE){
            if ($heure > $heureCR1 && $datejeudiS1 == $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else if ($datejeudiS1 < $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else{
            echo "<td name='creneau1' id='creneau'> <a> Libre </a> </td>";
            }
        }
        else{
            $creneauprix = "SELECT res_utili FROM creneau WHERE nom_creneau='".$creneau1."' AND jour='".$datejeudiS1."'";
            $resultcreneauprix = $db->query($creneauprix);
            $data = $resultcreneauprix -> fetch_assoc();

           if($data['res_utili'] == $username){
               echo "<td style='background-color:green; text-decoration: none;'><a style='text-decoration: none; color:black;' href='modifier.php?jour=".$datejeudiS1."&creneau=".$creneau1."&username=".$username."&heure=".$heureCR1."'?>Réservé</a></td>";
               }
               else{
                   echo "<td style='background-color:red;'><a>Réservé</a></td>";
            }
        }
        ?>
        <?php

        $creneau1;

         $reqvendrediCR1;

         $resultreqvendrediCR1 = mysqli_query($db, $reqvendrediCR1);
         

      
         if($data = mysqli_fetch_array($resultreqvendrediCR1 ) == FALSE){
            if ($heure > $heureCR1 && $datevendrediS1 == $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else if ($datevendrediS1 < $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else{
            echo "<td name='creneau1' id='creneau'> <a> Libre </a> </td>";
            }
        }
        else{
            $creneauprix = "SELECT res_utili FROM creneau WHERE nom_creneau='".$creneau1."' AND jour='".$datevendrediS1."'";
            $resultcreneauprix = $db->query($creneauprix);
            $data = $resultcreneauprix -> fetch_assoc();

           if($data['res_utili'] == $username){
               echo "<td style='background-color:green; text-decoration: none;'><a style='text-decoration: none; color:black;' href='modifier.php?jour=".$datevendrediS1."&creneau=".$creneau1."&username=".$username."&heure=".$heureCR1."'?>Réservé</a></td>";
               }
               else{
                   echo "<td style='background-color:red;'><a>Réservé</a></td>";
            }
        }
        ?>
</tr>
<tr>
    <td>10h à 13h</td>
        <?php 

        $creneau2;

         $reqlundiCR2;

         $resultreqlundiCR2 = mysqli_query($db, $reqlundiCR2);
         

    
         if($data = mysqli_fetch_array($resultreqlundiCR2) == FALSE){
            if ($heure > $heureCR2 && $datelundiS1 == $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
                else if ($datelundiS1 < $date){
                    echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
                }
                else{
            echo "<td name='creneau2' id='creneau'> <a> Libre </a> </td>";
            }
        }
        else{
            $creneauprix = "SELECT res_utili FROM creneau WHERE nom_creneau='".$creneau2."' AND jour='".$datelundiS1."'";
            $resultcreneauprix = $db->query($creneauprix);
            $data = $resultcreneauprix -> fetch_assoc();

           if($data['res_utili'] == $username){
               echo "<td style='background-color:green; text-decoration: none;'><a style='text-decoration: none; color:black;' href='modifier.php?jour=".$datelundiS1."&creneau=".$creneau2."&username=".$username."&heure=".$heureCR2."'?>Réservé</a></td>";
               }
               else{
                   echo "<td style='background-color:red;'><a>Réservé</a></td>";
            }
        }
        ?>
    <?php 

        $creneau2;

         $reqmardiCR2;

         $resultreqmardiCR2 = mysqli_query($db, $reqmardiCR2);
         

    
         if($data = mysqli_fetch_array($resultreqmardiCR2) == FALSE){
            if ($heure > $heureCR2 && $datemardiS1 == $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else if ($datemardiS1 < $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else{
            echo "<td name='creneau2' id='creneau'> <a> Libre </a> </td>";
            }
        }
        else{
            $creneauprix = "SELECT res_utili FROM creneau WHERE nom_creneau='".$creneau2."' AND jour='".$datemardiS1."'";
            $resultcreneauprix = $db->query($creneauprix);
            $data = $resultcreneauprix -> fetch_assoc();

           if($data['res_utili'] == $username){
               echo "<td style='background-color:green; text-decoration: none;'><a style='text-decoration: none; color:black;' href='modifier.php?jour=".$datemardiS1."&creneau=".$creneau2."&username=".$username."&heure=".$heureCR2."'?>Réservé</a></td>";
               }
               else{
                   echo "<td style='background-color:red;'><a>Réservé</a></td>";
            }
        }
        ?>
    <?php 

        $creneau2;

         $reqmercrediCR2;

         $resultreqmercrediCR2 = mysqli_query($db, $reqmercrediCR2);
         

    
         if($data = mysqli_fetch_array($resultreqmercrediCR2) == FALSE){
            if ($heure > $heureCR2 && $datemercrediS1 == $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else if ($datemercrediS1 < $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else{
            echo "<td name='creneau2' id='creneau'> <a> Libre </a> </td>";
            }
        }
        else{
            $creneauprix = "SELECT res_utili FROM creneau WHERE nom_creneau='".$creneau2."' AND jour='".$datemercrediS1."'";
            $resultcreneauprix = $db->query($creneauprix);
            $data = $resultcreneauprix -> fetch_assoc();

           if($data['res_utili'] == $username){
               echo "<td style='background-color:green; text-decoration: none;'><a style='text-decoration: none; color:black;' href='modifier.php?jour=".$datemercrediS1."&creneau=".$creneau2."&username=".$username."&heure=".$heureCR2."'?>Réservé</a></td>";
               }
               else{
                   echo "<td style='background-color:red;'><a>Réservé</a></td>";
            }
        }
        ?>
    <?php 

        $creneau2;

         $reqjeudiCR2;

         $resultreqjeudiCR2 = mysqli_query($db, $reqjeudiCR2);
         

    
         if($data = mysqli_fetch_array($resultreqjeudiCR2) == FALSE){
            if ($heure > $heureCR2 && $datejeudiS1 == $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else if ($datejeudiS1 < $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else{
            echo "<td name='creneau2' id='creneau'> <a> Libre </a> </td>";
            }
        }
        else{
            $creneauprix = "SELECT res_utili FROM creneau WHERE nom_creneau='".$creneau2."' AND jour='".$datejeudiS1."'";
            $resultcreneauprix = $db->query($creneauprix);
            $data = $resultcreneauprix -> fetch_assoc();

           if($data['res_utili'] == $username){
               echo "<td style='background-color:green; text-decoration: none;'><a style='text-decoration: none; color:black;' href='modifier.php?jour=".$datejeudiS1."&creneau=".$creneau2."&username=".$username."&heure=".$heureCR2."'?>Réservé</a></td>";
               }
               else{
                   echo "<td style='background-color:red;'><a>Réservé</a></td>";
            }
        }
        ?>
    <?php

$creneau2;

         $reqvendrediCR2;

         $resultreqvendrediCR2 = mysqli_query($db, $reqvendrediCR2);
         

    
         if($data = mysqli_fetch_array($resultreqvendrediCR2) == FALSE){
            if ($heure > $heureCR2 && $datevendrediS1 == $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else if ($datevendrediS1 < $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else{
            echo "<td name='creneau2' id='creneau'> <a> Libre </a> </td>";
            }
        }
        else{
            $creneauprix = "SELECT res_utili FROM creneau WHERE nom_creneau='".$creneau2."' AND jour='".$datevendrediS1."'";
            $resultcreneauprix = $db->query($creneauprix);
            $data = $resultcreneauprix -> fetch_assoc();

           if($data['res_utili'] == $username){
               echo "<td style='background-color:green; text-decoration: none;'><a style='text-decoration: none; color:black;' href='modifier.php?jour=".$datevendrediS1."&creneau=".$creneau2."&username=".$username."&heure=".$heureCR2."'?>Réservé</a></td>";
               }
               else{
                   echo "<td style='background-color:red;'><a>Réservé</a></td>";
            }
        }
        ?>
</tr>
<tr>
    <td>13h à 16h</td>
    <?php 

$creneau3;

         $reqlundiCR3;

         $resultreqlundiCR3 = mysqli_query($db, $reqlundiCR3);
         

       
         if($data = mysqli_fetch_array($resultreqlundiCR3) == FALSE){
            if ($heure > $heureCR3 && $datelundiS1 == $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else if ($datelundiS1 < $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else{
            echo "<td name='creneau3' id='creneau'> <a> Libre </a> </td>";
            }
        }
        else{
            $creneauprix = "SELECT res_utili FROM creneau WHERE nom_creneau='".$creneau3."' AND jour='".$datelundiS1."'";
            $resultcreneauprix = $db->query($creneauprix);
            $data = $resultcreneauprix -> fetch_assoc();

           if($data['res_utili'] == $username){
               echo "<td style='background-color:green; text-decoration: none;'><a style='text-decoration: none; color:black;' href='modifier.php?jour=".$datelundiS1."&creneau=".$creneau3."&username=".$username."&heure=".$heureCR3."'?>Réservé</a></td>";
               }
               else{
                   echo "<td style='background-color:red;'><a>Réservé</a></td>";
            }
        }
        ?>
    </td>
    <?php 
    $creneau3;
         $reqmardiCR3;

         $resultreqmardiCR3 = mysqli_query($db, $reqmardiCR3);
         

       
         if($data = mysqli_fetch_array($resultreqmardiCR3) == FALSE){
            if ($heure > $heureCR3 && $datemardiS1 == $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else if ($datemardiS1 < $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            
            else{
            echo "<td name='creneau3' id='creneau'> <a> Libre </a> </td>";
            }
        }
        else{
            $creneauprix = "SELECT res_utili FROM creneau WHERE nom_creneau='".$creneau3."' AND jour='".$datemardiS1."'";
            $resultcreneauprix = $db->query($creneauprix);
            $data = $resultcreneauprix -> fetch_assoc();

           if($data['res_utili'] == $username){
               echo "<td style='background-color:green; text-decoration: none;'><a style='text-decoration: none; color:black;' href='modifier.php?jour=".$datemardiS1."&creneau=".$creneau3."&username=".$username."&heure=".$heureCR3."'?>Réservé</a></td>";
               }
               else{
                   echo "<td style='background-color:red;'><a>Réservé</a></td>";
            }
        }
        ?>
    <?php 
    $creneau3;
         $reqmercrediCR3;

         $resultreqmercrediCR3 = mysqli_query($db, $reqmercrediCR3);
         

       
         if($data = mysqli_fetch_array($resultreqmercrediCR3) == FALSE){
            if ($heure > $heureCR3 && $datemercrediS1 == $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else if ($datemercrediS1 < $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else{
            echo "<td name='creneau3' id='creneau'> <a> Libre </a> </td>";
            }
        }
        else{
            $creneauprix = "SELECT res_utili FROM creneau WHERE nom_creneau='".$creneau3."' AND jour='".$datemercrediS1."'";
            $resultcreneauprix = $db->query($creneauprix);
            $data = $resultcreneauprix -> fetch_assoc();

           if($data['res_utili'] == $username){
               echo "<td style='background-color:green; text-decoration: none;'><a style='text-decoration: none; color:black;' href='modifier.php?jour=".$datemercrediS1."&creneau=".$creneau3."&username=".$username."&heure=".$heureCR3."'?>Réservé</a></td>";
               }
               else{
                   echo "<td style='background-color:red;'><a>Réservé</a></td>";
            }
        }
        ?>
    <?php 
    $creneau3;
         $reqjeudiCR3;

         $resultreqjeudiCR3 = mysqli_query($db, $reqjeudiCR3);
         

       
         if($data = mysqli_fetch_array($resultreqjeudiCR3) == FALSE){
            if ($heure > $heureCR3 && $datejeudiS1 == $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else if ($datejeudiS1 < $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else{
            echo "<td name='creneau3' id='creneau'> <a> Libre </a> </td>";
            }
        }
        else{
            $creneauprix = "SELECT res_utili FROM creneau WHERE nom_creneau='".$creneau3."' AND jour='".$datejeudiS1."'";
            $resultcreneauprix = $db->query($creneauprix);
            $data = $resultcreneauprix -> fetch_assoc();

           if($data['res_utili'] == $username){
               echo "<td style='background-color:green; text-decoration: none;'><a style='text-decoration: none; color:black;' href='modifier.php?jour=".$datejeudiS1."&creneau=".$creneau3."&username=".$username."&heure=".$heureCR3."'?>Réservé</a></td>";
               }
               else{
                   echo "<td style='background-color:red;'><a>Réservé</a></td>";
            }
        }
        ?>
    <?php 
    $creneau3;
         $reqvendrediCR3;

         $resultreqvendrediCR3 = mysqli_query($db, $reqvendrediCR3);
         

       
         if($data = mysqli_fetch_array($resultreqvendrediCR3) == FALSE){
            if ($heure > $heureCR3 && $datevendrediS1 == $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else if ($datevendrediS1 < $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else{
            echo "<td name='creneau3' id='creneau'> <a> Libre </a> </td>";
            }
        }
        else{
            $creneauprix = "SELECT res_utili FROM creneau WHERE nom_creneau='".$creneau3."' AND jour='".$datevendrediS1."'";
            $resultcreneauprix = $db->query($creneauprix);
            $data = $resultcreneauprix -> fetch_assoc();

           if($data['res_utili'] == $username){
               echo "<td style='background-color:green; text-decoration: none;'><a style='text-decoration: none; color:black;' href='modifier.php?jour=".$datevendrediS1."&creneau=".$creneau3."&username=".$username."&heure=".$heureCR3."'?>Réservé</a></td>";
               }
               else{
                   echo "<td style='background-color:red;'><a>Réservé</a></td>";
            }
        }
        ?>
</tr>
<tr>
    <td>16h à 19h</td>
        <?php 
        $creneau4;
         $reqlundiCR4;

         $resultreqlundiCR4 = mysqli_query($db, $reqlundiCR4);

        if($data = mysqli_fetch_array($resultreqlundiCR4) == FALSE){
            if ($heure > $heureCR4 && $datelundiS1 == $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else if ($datelundiS1 < $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else{
            echo "<td name='creneau4' id='creneau'> <a> Libre </a> </td>";
            }
        }
        else{
            $creneauprix = "SELECT res_utili FROM creneau WHERE nom_creneau='".$creneau4."' AND jour='".$datelundiS1."'";
            $resultcreneauprix = $db->query($creneauprix);
            $data = $resultcreneauprix -> fetch_assoc();

           if($data['res_utili'] == $username){
               echo "<td style='background-color:green; text-decoration: none;'><a style='text-decoration: none; color:black;' href='modifier.php?jour=".$datelundiS1."&creneau=".$creneau4."&username=".$username."&heure=".$heureCR4."'?>Réservé</a></td>";
               }
               else{
                   echo "<td style='background-color:red;'><a>Réservé</a></td>";
            }
        }
        ?>
    <?php 
    $creneau4;
         $reqmardiCR4;

         $resultreqmardiCR4 = mysqli_query($db, $reqmardiCR4);

        if($data = mysqli_fetch_array($resultreqmardiCR4) == FALSE){
            if ($heure > $heureCR4 && $datemardiS1 == $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else if ($datemardiS1 < $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else{
            echo "<td name='creneau4' id='creneau'> <a> Libre </a> </td>";
            }
        }
        else{
            $creneauprix = "SELECT res_utili FROM creneau WHERE nom_creneau='".$creneau4."' AND jour='".$datemardiS1."'";
            $resultcreneauprix = $db->query($creneauprix);
            $data = $resultcreneauprix -> fetch_assoc();

           if($data['res_utili'] == $username){
               echo "<td style='background-color:green; text-decoration: none;'><a style='text-decoration: none; color:black;' href='modifier.php?jour=".$datemardiS1."&creneau=".$creneau4."&username=".$username."&heure=".$heureCR4."'?>Réservé</a></td>";
               }
               else{
                   echo "<td style='background-color:red;'><a>Réservé</a></td>";
            }
        }
        ?>
    <?php 
    $creneau4;
         $reqmercrediCR4;

         $resultreqmercrediCR4 = mysqli_query($db, $reqmercrediCR4);

        if($data = mysqli_fetch_array($resultreqmercrediCR4) == FALSE){
            if ($heure > $heureCR4 && $datemercrediS1 == $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else if ($datemercrediS1 < $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else{
            echo "<td name='creneau4' id='creneau'> <a> Libre </a> </td>";
            }
        }
        else{
            $creneauprix = "SELECT res_utili FROM creneau WHERE nom_creneau='".$creneau4."' AND jour='".$datemercrediS1."'";
            $resultcreneauprix = $db->query($creneauprix);
            $data = $resultcreneauprix -> fetch_assoc();

           if($data['res_utili'] == $username){
               echo "<td style='background-color:green; text-decoration: none;'><a style='text-decoration: none; color:black;' href='modifier.php?jour=".$datemercrediS1."&creneau=".$creneau4."&username=".$username."&heure=".$heureCR4."'?>Réservé</a></td>";
               }
               else{
                   echo "<td style='background-color:red;'><a>Réservé</a></td>";
            }
        }
        ?>
    <?php 
    $creneau4;
         $reqjeudiCR4;

         $resultreqjeudiCR4 = mysqli_query($db, $reqjeudiCR4);

        if($data = mysqli_fetch_array($resultreqjeudiCR4) == FALSE){
            if ($heure > $heureCR4 && $datejeudiS1 == $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else if ($datejeudiS1 < $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else{
            echo "<td name='creneau4' id='creneau'> <a> Libre </a> </td>";
            }
        }
        else{
            $creneauprix = "SELECT res_utili FROM creneau WHERE nom_creneau='".$creneau4."' AND jour='".$datejeudiS1."'";
            $resultcreneauprix = $db->query($creneauprix);
            $data = $resultcreneauprix -> fetch_assoc();

           if($data['res_utili'] == $username){
               echo "<td style='background-color:green; text-decoration: none;'><a style='text-decoration: none; color:black;' href='modifier.php?jour=".$datejeudiS1."&creneau=".$creneau4."&username=".$username."&heure=".$heureCR4."'?>Réservé</a></td>";
               }
               else{
                   echo "<td style='background-color:red;'><a>Réservé</a></td>";
            }
        }
        ?>
    <?php 
    $creneau4;
         $reqvendrediCR4;

         $resultreqcendrediCR4 = mysqli_query($db, $reqvendrediCR4);

        if($data = mysqli_fetch_array($resultreqvendrediCR4) == FALSE){
            if ($heure > $heureCR4 && $datevendrediS1 == $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else if ($datevendrediS1 < $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else{
            echo "<td name='creneau4' id='creneau'> <a> Libre </a> </td>";
            }
        }
        else{
            $creneauprix = "SELECT res_utili FROM creneau WHERE nom_creneau='".$creneau4."' AND jour='".$datevendrediS1."'";
            $resultcreneauprix = $db->query($creneauprix);
            $data = $resultcreneauprix -> fetch_assoc();

           if($data['res_utili'] == $username){
               echo "<td style='background-color:green; text-decoration: none;'><a style='text-decoration: none; color:black;' href='modifier.php?jour=".$datevendrediS1."&creneau=".$creneau4."&username=".$username."&heure=".$heureCR4."'?>Réservé</a></td>";
               }
               else{
                   echo "<td style='background-color:red;'><a>Réservé</a></td>";
             }
         }
        ?>
</tr>

</table>

      
<table id="tabsemainesuivante">

<tr>
    <td id="vide"> <input type="submit" value="<" onclick="switchStyle('style2.css')"></td>
    <td>Lundi
    <?php
    switch ($jour) {
        case "lundi":
            echo strftime('%d %B',strtotime('+7 days'));
            break;
        case "mardi":
            echo strftime('%d %B',strtotime('+6 days'));
            break;
        case "mercredi":
            echo strftime('%d %B',strtotime('+5 days'));
            break;
        case "jeudi":
                echo strftime('%d %B',strtotime('+4 days'));
            break;
        case "vendredi":
                echo strftime('%d %B',strtotime('+3 days'));
            break;
        case "samedi":
                echo strftime('%d %B',strtotime('+2 days'));
            break;
        case "dimanche":
                echo strftime('%d %B',strtotime('+1 days'));
            break;
    }
    ?>
    </td>
    <td>Mardi
    <?php
    switch ($jour) {
        case "lundi":
            echo strftime('%d %B',strtotime('+8 days'));
            break;
        case "mardi":
            echo strftime('%d %B',strtotime('+7 days'));
            break;
        case "mercredi":
            echo strftime('%d %B',strtotime('+6 days'));
            break;
        case "jeudi":
                echo strftime('%d %B',strtotime('+5 days'));
            break;
        case "vendredi":
                echo strftime('%d %B',strtotime('+4 days'));
            break;
        case "samedi":
                echo strftime('%d %B',strtotime('+3 days'));
            break;
        case "dimanche":
                echo strftime('%d %B',strtotime('+2 days'));
            break;
    }
    ?>
    </td>
    <td>Mercredi 
    <?php
    switch ($jour) {
        case "lundi":
            echo strftime('%d %B',strtotime('+9 days'));
            break;
        case "mardi":
            echo strftime('%d %B',strtotime('+8 days'));
            break;
        case "mercredi":
            echo strftime('%d %B',strtotime('+7 days'));
            break;
        case "jeudi":
                echo strftime('%d %B',strtotime('+6 days'));
            break;
        case "vendredi":
                echo strftime('%d %B',strtotime('+5 days'));
            break;
        case "samedi":
                echo strftime('%d %B',strtotime('+4 days'));
            break;
        case "dimanche":
                echo strftime('%d %B',strtotime('+3 days'));
            break;
    }
    ?>
    </td>
    <td>Jeudi  
    <?php
    switch ($jour) {
        case "lundi":
            echo strftime('%d %B',strtotime('+10 days'));
            break;
        case "mardi":
            echo strftime('%d %B',strtotime('+9 days'));
            break;
        case "mercredi":
            echo strftime('%d %B',strtotime('+8 days'));
            break;
        case "jeudi":
                echo strftime('%d %B',strtotime('+7 days'));
            break;
        case "vendredi":
                echo strftime('%d %B',strtotime('+6 days'));
            break;
        case "samedi":
                echo strftime('%d %B',strtotime('+5 days'));
            break;
        case "dimanche":
                echo strftime('%d %B',strtotime('+4 days'));
            break;
    }
    ?></td>
    <td>Vendredi 
        <?php
    switch ($jour) {
        case "lundi":
            echo strftime('%d %B',strtotime('+11 days'));
            break;
        case "mardi":
            echo strftime('%d %B',strtotime('+10 days'));
            break;
        case "mercredi":
            echo strftime('%d %B',strtotime('+9 days'));
            break;
        case "jeudi":
                echo strftime('%d %B',strtotime('+8 days'));
            break;
        case "vendredi":
                echo strftime('%d %B',strtotime('+7 days'));
            break;
        case "samedi":
                echo strftime('%d %B',strtotime('+6 days'));
            break;
        case "dimanche":
                echo strftime('%d %B',strtotime('+5 days'));
            break;
    }
    ?>
</tr>
<tr>
    <td>7h à 10h</td>
    <?php 
         $reqlundiSVCR1;

         $resultreqlundiCR1 = mysqli_query($db, $reqlundiSVCR1);
         

        if($data = mysqli_fetch_array($resultreqlundiSVCR1) == FALSE){
            if ($heure > $heureCR1 && $datelundiS2 == $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else if ($datelundiS2 < $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else{
            echo "<td name='creneau4' id='creneau'> <a> Libre </a> </td>";
            }
        }
        else{
            $creneauprix = "SELECT res_utili FROM creneau WHERE nom_creneau='".$creneau1."' AND jour='".$datelundiS2."'";
            $resultcreneauprix = $db->query($creneauprix);
            $data = $resultcreneauprix -> fetch_assoc();

           if($data['res_utili'] == $username){
               echo "<td style='background-color:green; text-decoration: none;'><a style='text-decoration: none; color:black;' href='modifier.php?jour=".$datelundiS2."&creneau=".$creneau1."&username=".$username."&heure=".$heureCR1."'?>Réservé</a></td>";
               }
               else{
                   echo "<td style='background-color:red;'><a>Réservé</a></td>";
             }
         }
        ?>
        <?php

        $reqmardiSVCR1;

        $resultreqmardiCR1 = mysqli_query($db, $reqmardiSVCR1);

       if($data = mysqli_fetch_array($resultreqmardiSVCR1) == FALSE){
            if ($heure > $heureCR1 && $datemardiS2 == $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else if ($datemardiS2 < $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else{
            echo "<td name='creneau4' id='creneau'> <a> Libre </a> </td>";
            }
        }
        else{
            $creneauprix = "SELECT res_utili FROM creneau WHERE nom_creneau='".$creneau1."' AND jour='".$datemardiS2."'";
            $resultcreneauprix = $db->query($creneauprix);
            $data = $resultcreneauprix -> fetch_assoc();

           if($data['res_utili'] == $username){
               echo "<td style='background-color:green; text-decoration: none;'><a style='text-decoration: none; color:black;' href='modifier.php?jour=".$datemardiS2."&creneau=".$creneau1."&username=".$username."&heure=".$heureCR1."'?>Réservé</a></td>";
               }
               else{
                   echo "<td style='background-color:red;'><a>Réservé</a></td>";
             }
         }        
         
         ?>
    <?php 
         $reqmercrediSVCR1;

         $resultreqmercrediSVCR1 = mysqli_query($db, $reqmercrediSVCR1);

         if($data = mysqli_fetch_array($resultreqmercrediSVCR1) == FALSE){
            if ($heure > $heureCR1 && $datemercrediS2 == $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else if ($datemercrediS2 < $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else{
            echo "<td name='creneau4' id='creneau'> <a> Libre </a> </td>";
            }
        }
        else{
            $creneauprix = "SELECT res_utili FROM creneau WHERE nom_creneau='".$creneau1."' AND jour='".$datemercrediS2."'";
            $resultcreneauprix = $db->query($creneauprix);
            $data = $resultcreneauprix -> fetch_assoc();

           if($data['res_utili'] == $username){
               echo "<td style='background-color:green; text-decoration: none;'><a style='text-decoration: none; color:black;' href='modifier.php?jour=".$datemercrediS2."&creneau=".$creneau1."&username=".$username."&heure=".$heureCR1."'?>Réservé</a></td>";
               }
               else{
                   echo "<td style='background-color:red;'><a>Réservé</a></td>";
             }
         }        

        ?>
            <?php 
         $reqjeudiSVCR1;

         $resultreqjeudiSVCR1 = mysqli_query($db, $reqjeudiSVCR1);

         if($data = mysqli_fetch_array($resultreqjeudiSVCR1) == FALSE){
            if ($heure > $heureCR1 && $datejeudiS2 == $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else if ($datejeudiS2 < $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else{
            echo "<td name='creneau4' id='creneau'> <a> Libre </a> </td>";
            }
        }
        else{
            $creneauprix = "SELECT res_utili FROM creneau WHERE nom_creneau='".$creneau1."' AND jour='".$datejeudiS2."'";
            $resultcreneauprix = $db->query($creneauprix);
            $data = $resultcreneauprix -> fetch_assoc();

           if($data['res_utili'] == $username){
               echo "<td style='background-color:green; text-decoration: none;'><a style='text-decoration: none; color:black;' href='modifier.php?jour=".$datejeudiS2."&creneau=".$creneau1."&username=".$username."&heure=".$heureCR1."'?>Réservé</a></td>";
               }
               else{
                   echo "<td style='background-color:red;'><a>Réservé</a></td>";
             }
         }        

        ?>
    <?php 
         $reqvendrediSVCR1;

         $resultreqvendrediSVCR1 = mysqli_query($db, $reqvendrediSVCR1);

         if($data = mysqli_fetch_array($resultreqvendrediSVCR1) == FALSE){
            if ($heure > $heureCR1 && $datevendrediS2 == $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else if ($datevendrediS2 < $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else{
            echo "<td name='creneau4' id='creneau'> <a> Libre </a> </td>";
            }
        }
        else{
            $creneauprix = "SELECT res_utili FROM creneau WHERE nom_creneau='".$creneau1."' AND jour='".$datevendrediS2."'";
            $resultcreneauprix = $db->query($creneauprix);
            $data = $resultcreneauprix -> fetch_assoc();

           if($data['res_utili'] == $username){
               echo "<td style='background-color:green; text-decoration: none;'><a style='text-decoration: none; color:black;' href='modifier.php?jour=".$datevendrediS2."&creneau=".$creneau1."&username=".$username."&heure=".$heureCR1."'?>Réservé</a></td>";
               }
               else{
                   echo "<td style='background-color:red;'><a>Réservé</a></td>";
             }
         }    
        ?>
</tr>
<tr>
    <td>10h à 13h</td>
    <?php 
         $reqlundiSVCR2;

         $resultreqlundiSVCR2 = mysqli_query($db, $reqlundiSVCR2);

         if($data = mysqli_fetch_array($resultreqlundiSVCR2) == FALSE){
            if ($heure > $heureCR2 && $datelundiS2 == $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else if ($datelundiS2 < $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else{
            echo "<td name='creneau4' id='creneau'> <a> Libre </a> </td>";
            }
        }
        else{
            $creneauprix = "SELECT res_utili FROM creneau WHERE nom_creneau='".$creneau2."' AND jour='".$datelundiS2."'";
            $resultcreneauprix = $db->query($creneauprix);
            $data = $resultcreneauprix -> fetch_assoc();

           if($data['res_utili'] == $username){
               echo "<td style='background-color:green; text-decoration: none;'><a style='text-decoration: none; color:black;' href='modifier.php?jour=".$datelundiS2."&creneau=".$creneau2."&username=".$username."&heure=".$heureCR2."'?>Réservé</a></td>";
               }
               else{
                   echo "<td style='background-color:red;'><a>Réservé</a></td>";
             }
         }
        ?>
    <?php 
         $reqmardiSVCR2;

         $resultreqmardiSVCR2 = mysqli_query($db, $reqmardiSVCR2);
         

         if($data = mysqli_fetch_array($resultreqmardiSVCR2) == FALSE){
            if ($heure > $heureCR2 && $datemardiS2 == $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else if ($datemardiS2 < $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else{
            echo "<td name='creneau4' id='creneau'> <a> Libre </a> </td>";
            }
        }
        else{
            $creneauprix = "SELECT res_utili FROM creneau WHERE nom_creneau='".$creneau2."' AND jour='".$datemardiS2."'";
            $resultcreneauprix = $db->query($creneauprix);
            $data = $resultcreneauprix -> fetch_assoc();

           if($data['res_utili'] == $username){
               echo "<td style='background-color:green; text-decoration: none;'><a style='text-decoration: none; color:black;' href='modifier.php?jour=".$datemardiS2."&creneau=".$creneau2."&username=".$username."&heure=".$heureCR2."'?>Réservé</a></td>";
               }
               else{
                   echo "<td style='background-color:red;'><a>Réservé</a></td>";
             }
         }        
         
        ?>
    <?php 
         $reqmercrediSVCR2;

         $resultreqmercrediSVCR2 = mysqli_query($db, $reqmercrediSVCR2);
         
         if($data = mysqli_fetch_array($resultreqmercrediSVCR2) == FALSE){
            if ($heure > $heureCR2 && $datemercrediS2 == $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else if ($datemercrediS2 < $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else{
            echo "<td name='creneau4' id='creneau'> <a> Libre </a> </td>";
            }
        }
        else{
            $creneauprix = "SELECT res_utili FROM creneau WHERE nom_creneau='".$creneau2."' AND jour='".$datemercrediS2."'";
            $resultcreneauprix = $db->query($creneauprix);
            $data = $resultcreneauprix -> fetch_assoc();

           if($data['res_utili'] == $username){
               echo "<td style='background-color:green; text-decoration: none;'><a style='text-decoration: none; color:black;' href='modifier.php?jour=".$datemercrediS2."&creneau=".$creneau2."&username=".$username."&heure=".$heureCR2."'?>Réservé</a></td>";
               }
               else{
                   echo "<td style='background-color:red;'><a>Réservé</a></td>";
             }
         }        
        ?> 
    <?php 
         $reqjeudiSVCR2;

         $resultreqjeudiSVCR2 = mysqli_query($db, $reqjeudiSVCR2);
         
         if($data = mysqli_fetch_array($resultreqjeudiSVCR2) == FALSE){
            if ($heure > $heureCR2 && $datejeudiS2 == $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else if ($datejeudiS2 < $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else{
            echo "<td name='creneau4' id='creneau'> <a> Libre </a> </td>";
            }
        }
        else{
            $creneauprix = "SELECT res_utili FROM creneau WHERE nom_creneau='".$creneau2."' AND jour='".$datejeudiS2."'";
            $resultcreneauprix = $db->query($creneauprix);
            $data = $resultcreneauprix -> fetch_assoc();

           if($data['res_utili'] == $username){
               echo "<td style='background-color:green; text-decoration: none;'><a style='text-decoration: none; color:black;' href='modifier.php?jour=".$datejeudiS2."&creneau=".$creneau2."&username=".$username."&heure=".$heureCR2."'?>Réservé</a></td>";
               }
               else{
                   echo "<td style='background-color:red;'><a>Réservé</a></td>";
             }
         }        
        ?>
    <?php 
         $reqvendrediSVCR2;

         $resultreqvendrediSVCR2 = mysqli_query($db, $reqvendrediSVCR2);
         
         if($data = mysqli_fetch_array($resultreqvendrediSVCR2) == FALSE){
            if ($heure > $heureCR2 && $datevendrediS2 == $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else if ($datevendrediS2 < $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else{
            echo "<td name='creneau4' id='creneau'> <a> Libre </a> </td>";
            }
        }
        else{
            $creneauprix = "SELECT res_utili FROM creneau WHERE nom_creneau='".$creneau2."' AND jour='".$datevendrediS2."'";
            $resultcreneauprix = $db->query($creneauprix);
            $data = $resultcreneauprix -> fetch_assoc();

           if($data['res_utili'] == $username){
               echo "<td style='background-color:green; text-decoration: none;'><a style='text-decoration: none; color:black;' href='modifier.php?jour=".$datevendrediS2."&creneau=".$creneau2."&username=".$username."&heure=".$heureCR2."'?>Réservé</a></td>";
               }
               else{
                   echo "<td style='background-color:red;'><a>Réservé</a></td>";
             }
         }    
        ?>

</tr>
<tr>
    <td>13h à 16h</td>
    <?php 
         $reqlundiSVCR3;

         $resultreqlundiSVCR3 = mysqli_query($db, $reqlundiSVCR3);

         if($data = mysqli_fetch_array($resultreqlundiSVCR3) == FALSE){
            if ($heure > $heureCR3 && $datelundiS2 == $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else if ($datelundiS2 < $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else{
            echo "<td name='creneau4' id='creneau'> <a> Libre </a> </td>";
            }
        }
        else{
            $creneauprix = "SELECT res_utili FROM creneau WHERE nom_creneau='".$creneau3."' AND jour='".$datelundiS2."'";
            $resultcreneauprix = $db->query($creneauprix);
            $data = $resultcreneauprix -> fetch_assoc();

           if($data['res_utili'] == $username){
               echo "<td style='background-color:green; text-decoration: none;'><a style='text-decoration: none; color:black;' href='modifier.php?jour=".$datelundiS2."&creneau=".$creneau3."&username=".$username."&heure=".$heureCR3."'?>Réservé</a></td>";
               }
               else{
                   echo "<td style='background-color:red;'><a>Réservé</a></td>";
             }
         }
        ?>
    <?php 
         $reqmardiSVCR3;

         $resultreqmardiSVCR3 = mysqli_query($db, $reqmardiSVCR3);

         if($data = mysqli_fetch_array($resultreqmardiSVCR3) == FALSE){
            if ($heure > $heureCR3 && $datemardiS2 == $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else if ($datemardiS2 < $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else{
            echo "<td name='creneau4' id='creneau'> <a> Libre </a> </td>";
            }
        }
        else{
            $creneauprix = "SELECT res_utili FROM creneau WHERE nom_creneau='".$creneau3."' AND jour='".$datemardiS2."'";
            $resultcreneauprix = $db->query($creneauprix);
            $data = $resultcreneauprix -> fetch_assoc();

           if($data['res_utili'] == $username){
               echo "<td style='background-color:green; text-decoration: none;'><a style='text-decoration: none; color:black;' href='modifier.php?jour=".$datemardiS2."&creneau=".$creneau3."&username=".$username."&heure=".$heureCR3."'?>Réservé</a></td>";
               }
               else{
                   echo "<td style='background-color:red;'><a>Réservé</a></td>";
             }
         }        
         
        ?>

    <?php 
         $reqmercrediSVCR3;

         $resultreqmercrediSVCR3 = mysqli_query($db, $reqmercrediSVCR3);
         
         if($data = mysqli_fetch_array($resultreqmercrediSVCR3) == FALSE){
            if ($heure > $heureCR3 && $datemercrediS2 == $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else if ($datemercrediS2 < $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else{
            echo "<td name='creneau4' id='creneau'> <a> Libre </a> </td>";
            }
        }
        else{
            $creneauprix = "SELECT res_utili FROM creneau WHERE nom_creneau='".$creneau3."' AND jour='".$datemercrediS2."'";
            $resultcreneauprix = $db->query($creneauprix);
            $data = $resultcreneauprix -> fetch_assoc();

           if($data['res_utili'] == $username){
               echo "<td style='background-color:green; text-decoration: none;'><a style='text-decoration: none; color:black;' href='modifier.php?jour=".$datemercrediS2."&creneau=".$creneau3."&username=".$username."&heure=".$heureCR3."'?>Réservé</a></td>";
               }
               else{
                   echo "<td style='background-color:red;'><a>Réservé</a></td>";
             }
         }        
        ?>
    
    <?php 
         $reqjeudiSVCR3;

         $resultreqjeudiSVCR3 = mysqli_query($db, $reqjeudiSVCR3);
         
         if($data = mysqli_fetch_array($resultreqjeudiSVCR3) == FALSE){
            if ($heure > $heureCR3 && $datejeudiS2 == $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else if ($datejeudiS2 < $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else{
            echo "<td name='creneau4' id='creneau'> <a> Libre </a> </td>";
            }
        }
        else{
            $creneauprix = "SELECT res_utili FROM creneau WHERE nom_creneau='".$creneau3."' AND jour='".$datejeudiS2."'";
            $resultcreneauprix = $db->query($creneauprix);
            $data = $resultcreneauprix -> fetch_assoc();

           if($data['res_utili'] == $username){
               echo "<td style='background-color:green; text-decoration: none;'><a style='text-decoration: none; color:black;' href='modifier.php?jour=".$datejeudiS2."&creneau=".$creneau3."&username=".$username."&heure=".$heureCR3."'?>Réservé</a></td>";
               }
               else{
                   echo "<td style='background-color:red;'><a>Réservé</a></td>";
             }
         }        
        ?>
    
    <?php 
         $reqvendrediSVCR3;

         $resultreqvendrediSVCR3 = mysqli_query($db, $reqvendrediSVCR3);
         
         if($data = mysqli_fetch_array($resultreqvendrediSVCR3) == FALSE){
            if ($heure > $heureCR3 && $datevendrediS2 == $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else if ($datevendrediS2 < $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else{
            echo "<td name='creneau4' id='creneau'> <a> Libre </a> </td>";
            }
        }
        else{
            $creneauprix = "SELECT res_utili FROM creneau WHERE nom_creneau='".$creneau3."' AND jour='".$datevendrediS2."'";
            $resultcreneauprix = $db->query($creneauprix);
            $data = $resultcreneauprix -> fetch_assoc();

           if($data['res_utili'] == $username){
               echo "<td style='background-color:green; text-decoration: none;'><a style='text-decoration: none; color:black;' href='modifier.php?jour=".$datevendrediS2."&creneau=".$creneau3."&username=".$username."&heure=".$heureCR3."'?>Réservé</a></td>";
               }
               else{
                   echo "<td style='background-color:red;'><a>Réservé</a></td>";
             }
         }    
        ?>
</tr>
<tr>
    <td>16h à 19h</td>
    <?php 
         $reqlundiSVCR4;

         $resultreqlundiSVCR4 = mysqli_query($db, $reqlundiSVCR4);

         if($data = mysqli_fetch_array($resultreqlundiSVCR4) == FALSE){
            if ($heure > $heureCR4 && $datelundiS2 == $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else if ($datelundiS2 < $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else{
            echo "<td name='creneau4' id='creneau'> <a> Libre </a> </td>";
            }
        }
        else{
            $creneauprix = "SELECT res_utili FROM creneau WHERE nom_creneau='".$creneau4."' AND jour='".$datelundiS2."'";
            $resultcreneauprix = $db->query($creneauprix);
            $data = $resultcreneauprix -> fetch_assoc();

           if($data['res_utili'] == $username){
               echo "<td style='background-color:green; text-decoration: none;'><a style='text-decoration: none; color:black;' href='modifier.php?jour=".$datelundiS2."&creneau=".$creneau4."&username=".$username."&heure=".$heureCR4."'?>Réservé</a></td>";
               }
               else{
                   echo "<td style='background-color:red;'><a>Réservé</a></td>";
             }
         }
        ?>
    <?php 
         $reqmardiSVCR4;

         $resultreqmardiSVCR4 = mysqli_query($db, $reqmardiSVCR4);
         
         if($data = mysqli_fetch_array($resultreqmardiSVCR4) == FALSE){
            if ($heure > $heureCR4 && $datemardiS2 == $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else if ($datemardiS2 < $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else{
            echo "<td name='creneau4' id='creneau'> <a> Libre </a> </td>";
            }
        }
        else{
            $creneauprix = "SELECT res_utili FROM creneau WHERE nom_creneau='".$creneau4."' AND jour='".$datemardiS2."'";
            $resultcreneauprix = $db->query($creneauprix);
            $data = $resultcreneauprix -> fetch_assoc();

           if($data['res_utili'] == $username){
               echo "<td style='background-color:green; text-decoration: none;'><a style='text-decoration: none; color:black;' href='modifier.php?jour=".$datemardiS2."&creneau=".$creneau4."&username=".$username."&heure=".$heureCR4."'?>Réservé</a></td>";
               }
               else{
                   echo "<td style='background-color:red;'><a>Réservé</a></td>";
             }
         }        
         
        ?>

    
    <?php 
         $reqmercrediSVCR4;

         $resultreqmercrediSVCR4 = mysqli_query($db, $reqmercrediSVCR4);
         
         if($data = mysqli_fetch_array($resultreqmercrediSVCR4) == FALSE){
            if ($heure > $heureCR4 && $datemercrediS2 == $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else if ($datemercrediS2 < $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else{
            echo "<td name='creneau4' id='creneau'> <a> Libre </a> </td>";
            }
        }
        else{
            $creneauprix = "SELECT res_utili FROM creneau WHERE nom_creneau='".$creneau4."' AND jour='".$datemercrediS2."'";
            $resultcreneauprix = $db->query($creneauprix);
            $data = $resultcreneauprix -> fetch_assoc();

           if($data['res_utili'] == $username){
               echo "<td style='background-color:green; text-decoration: none;'><a style='text-decoration: none; color:black;' href='modifier.php?jour=".$datemercrediS2."&creneau=".$creneau4."&username=".$username."&heure=".$heureCR4."'?>Réservé</a></td>";
               }
               else{
                   echo "<td style='background-color:red;'><a>Réservé</a></td>";
             }
         }        
        ?>
    </td>

    <?php 
         $reqjeudiSVCR4;

         $resultreqjeudiSVCR4 = mysqli_query($db, $reqjeudiSVCR4);
         
         if($data = mysqli_fetch_array($resultreqjeudiSVCR4) == FALSE){
            if ($heure > $heureCR4 && $datejeudiS2 == $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else if ($datejeudiS2 < $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else{
            echo "<td name='creneau4' id='creneau'> <a> Libre </a> </td>";
            }
        }
        else{
            $creneauprix = "SELECT res_utili FROM creneau WHERE nom_creneau='".$creneau4."' AND jour='".$datejeudiS2."'";
            $resultcreneauprix = $db->query($creneauprix);
            $data = $resultcreneauprix -> fetch_assoc();

           if($data['res_utili'] == $username){
               echo "<td style='background-color:green; text-decoration: none;'><a style='text-decoration: none; color:black;' href='modifier.php?jour=".$datejeudiS2."&creneau=".$creneau4."&username=".$username."&heure=".$heureCR4."'?>Réservé</a></td>";
               }
               else{
                   echo "<td style='background-color:red;'><a>Réservé</a></td>";
             }
         }        
        ?>

    <?php 
         $reqvendrediSVCR4;

         $resultreqvendrediSVCR4 = mysqli_query($db, $reqvendrediSVCR4);

         if($data = mysqli_fetch_array($resultreqvendrediSVCR4) == FALSE){
            if ($heure > $heureCR4 && $datevendrediS2 == $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else if ($datevendrediS2 < $date){
                echo "<td style='background-color:grey;'><div>Plus Réservable</div></td>";
            }
            else{
            echo "<td name='creneau4' id='creneau'> <a> Libre </a> </td>";
            }
        }
        else{
            $creneauprix = "SELECT res_utili FROM creneau WHERE nom_creneau='".$creneau4."' AND jour='".$datevendrediS2."'";
            $resultcreneauprix = $db->query($creneauprix);
            $data = $resultcreneauprix -> fetch_assoc();

           if($data['res_utili'] == $username){
               echo "<td style='background-color:green; text-decoration: none;'><a style='text-decoration: none; color:black;' href='modifier.php?jour=".$datevendrediS2."&creneau=".$creneau4."&username=".$username."&heure=".$heureCR4."'?>Réservé</a></td>";
               }
               else{
                   echo "<td style='background-color:red;'><a>Réservé</a></td>";
             }
         }    
    }

        ?>

    
</tr>

</table>

    </main>

    <footer>

    <footer>
        
<!-- <?php include("include/footer.php"); ?> -->
        
    </footer>
</body>


</html>