  
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link href='fullcalendar/main.css' rel='stylesheet' />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planning</title>
    <script src='fullcalendar/main.js'></script>
    <script src="script.js"></script>
</head>


<body>
    <nav>
    <?php include("include/nav.php"); ?>
    </nav>

    <main>


        <table>

            <tr>
                <td id="vide"> <input type="submit" value="<" onclick="window.location.href = 'planning.php'"><input type="submit" value=">"></td>
                <td>Lundi
                <?php setlocale(LC_TIME, 'fra_fra'); 
                $jour = strftime('%A');
                switch ($jour) {
                    case "lundi":
                        echo strftime('%d %B',strtotime('+7 days'));
                        break;
                    case "mardi":
                        echo strftime('%d %B',strtotime('+8 days'));
                        break;
                    case "mercredi":
                        echo strftime('%d %B',strtotime('+9 days'));
                        break;
                    case "jeudi":
                            echo strftime('%d %B',strtotime('+10 days'));
                        break;
                    case "vendredi":
                            echo strftime('%d %B',strtotime('+11 days'));
                        break;
                }
                ?>
                </td>
                <td>Mardi
                <?php setlocale(LC_TIME, 'fra_fra'); 
                $jour = strftime('%A');
                switch ($jour) {
                    case "lundi":
                        echo strftime('%d %B',strtotime('+8 days'));
                        break;
                    case "mardi":
                        echo strftime('%d %B',strtotime('+7 days'));
                        break;
                    case "mercredi":
                        echo strftime('%d %B',strtotime('+8 days'));
                        break;
                    case "jeudi":
                            echo strftime('%d %B',strtotime('+9 days'));
                        break;
                    case "vendredi":
                            echo strftime('%d %B',strtotime('+10 days'));
                        break;
                }
                ?>
                </td>
                <td>Mercredi 
                <?php setlocale(LC_TIME, 'fra_fra'); 
                $jour = strftime('%A');
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
                }
                ?>
                </td>
                <td>Jeudi  
                <?php setlocale(LC_TIME, 'fra_fra'); 
                $jour = strftime('%A');
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
                            echo strftime('%d %B',strtotime('+6days'));
                        break;
                }
                ?></td>
                <td>Vendredi 
                    <?php setlocale(LC_TIME, 'fra_fra'); 
                $jour = strftime('%A');
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
                }
                ?>
                </td>
            </tr>
            <tr>
                <td>7h à 10h</td>
                <td name="creneau1lundi" id="creneau" onclick="validation()">créneau 1</td>
                <td name="creneau1mardi" id="creneau" onclick="validation()">créneau 1</td>
                <td name="creneau1mercredi" id="creneau" onclick="validation()">créneau 1</td>
                <td name="creneau1jeudi" id="creneau" onclick="validation()">créneau 1</td>
                <td name="creneau1vendredi" name="creneau1"id="creneau" onclick="validation()">créneau 1</td>
            </tr>
            <tr>
                <td>10h à 13h</td>
                <td name="creneau2lundi" id="creneau" onclick="validation()">créneau 2</td>
                <td name="creneau2mardi" id="creneau" onclick="validation()">créneau 2</td>
                <td name="creneau2mercredi" id="creneau" onclick="validation()">créneau 2</td>
                <td name="creneau2jeudi" id="creneau" onclick="validation()">créneau 2</td>
                <td name="creneau2vendredi" id="creneau" onclick="validation()">créneau 2</td>
            </tr>
            <tr>
                <td>13h à 16h</td>
                <td name="creneau3lundi" id="creneau" onclick="validation()">créneau 3</td>
                <td name="creneau3mardi" id="creneau" onclick="validation()">créneau 3</td>
                <td name="creneau3mercredi" id="creneau" onclick="validation()">créneau 3</td>
                <td name="creneau3jeudi" id="creneau" onclick="validation()">créneau 3</td>
                <td name="creneau3vendredi" id="creneau" onclick="validation()">créneau 3</td>
            </tr>
            <tr>
                <td>16h à 19h</td>
                <td name="creneau4lundi" id="creneau" onclick="validation()">créneau 4</td>
                <td name="creneau4mardi" id="creneau" onclick="validation()">créneau 4</td>
                <td name="creneau4mercredi" id="creneau" onclick="validation()">créneau 4</td>
                <td name="creneau4jeudi" id="creneau" onclick="validation()">créneau 4</td>
                <td name="creneau4vendredi" id="creneau" onclick="validation()">créneau 4</td>
            </tr>

        </table>
        
    </main>

    <footer>

    <footer>
        
<!-- <?php include("include/footer.php"); ?> -->
        
    </footer>
</body>


</html>