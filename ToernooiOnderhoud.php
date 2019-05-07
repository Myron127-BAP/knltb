<?php


    include_once './inc/Database.inc.php';


    //$Speler1 = 5;
    //$Speler2 = 2;

    //if ($Speler1 > $Speler2)
    //{
    //    Echo "Speler 1 heeft gewonnen";
    //}
    //else
    //{
    //    echo "Speler 2 heeft gewonnen";
    //}

//Gebruikers randomize. Gebruikers plaatsen vanuit de database


?>

<!doctype html>
<html lang="en">
<head>

    <link rel="stylesheet" as="style" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script|Herr+Von+Muellerhoff' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Istok+Web|Roboto+Condensed:700' rel='stylesheet' type='text/css'>

    <title>Tennistoernooi</title>
</head>
<body>
<header>
    <?php
    include_once'./inc/Header.php';
    ?>
</header>

<section id="bracket">
    <div class="container">
        <div class="split split-one">
            <div class="round round-one current">
                <div class="round-details">Ronde 1<br/></div>
                <ul class="matchup">
                    <li class="team team-top">Speler1<span class="score">
                            <input name="score1" type="number" style="width: 30px">
                            <input name="score2" type="number" style="width: 30px">
                            <input name="score3" type="number" style="width: 30px"></span></li>
                    <li class="team team-bottom">Speler2<span class="score">
                            <input name="score1" type="number" style="width: 30px">
                            <input name="score2" type="number" style="width: 30px">
                            <input name="score3" type="number" style="width: 30px"></span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top">Speler3<span class="score">
                            <input name="score1" type="number" style="width: 30px">
                            <input name="score2" type="number" style="width: 30px">
                            <input name="score3" type="number" style="width: 30px"></span></li>
                    <li class="team team-bottom">Speler4<span class="score">
                            <input name="score1" type="number" style="width: 30px">
                            <input name="score2" type="number" style="width: 30px">
                            <input name="score3" type="number" style="width: 30px"></span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top">Speler5<span class="score">
                            <input name="score1" type="number" style="width: 30px">
                            <input name="score2" type="number" style="width: 30px">
                            <input name="score3" type="number" style="width: 30px"></span></li>
                    <li class="team team-bottom">Speler6<span class="score">
                            <input name="score1" type="number" style="width: 30px">
                            <input name="score2" type="number" style="width: 30px">
                            <input name="score3" type="number" style="width: 30px"></span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top">Speler7<span class="score">
                            <input name="score1" type="number" style="width: 30px">
                            <input name="score2" type="number" style="width: 30px">
                            <input name="score3" type="number" style="width: 30px"></span></li>
                    <li class="team team-bottom">Speler8<span class="score">
                            <input name="score1" type="number" style="width: 30px">
                            <input name="score2" type="number" style="width: 30px">
                            <input name="score3" type="number" style="width: 30px"></span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top">Speler9<span class="score">
                            <input name="score1" type="number" style="width: 30px">
                            <input name="score2" type="number" style="width: 30px">
                            <input name="score3" type="number" style="width: 30px"></span></li>
                    <li class="team team-bottom">Speler10<span class="score">
                            <input name="score1" type="number" style="width: 30px">
                            <input name="score2" type="number" style="width: 30px">
                            <input name="score3" type="number" style="width: 30px"></span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top">Speler11<span class="score">
                            <input name="score1" type="number" style="width: 30px">
                            <input name="score2" type="number" style="width: 30px">
                            <input name="score3" type="number" style="width: 30px"></span></li>
                    <li class="team team-bottom">Speler12<span class="score">
                            <input name="score1" type="number" style="width: 30px">
                            <input name="score2" type="number" style="width: 30px">
                            <input name="score3" type="number" style="width: 30px"></span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top">Speler13<span class="score">
                            <input name="score1" type="number" style="width: 30px">
                            <input name="score2" type="number" style="width: 30px">
                            <input name="score3" type="number" style="width: 30px"></span></li>
                    <li class="team team-bottom">Speler14<span class="score">
                            <input name="score1" type="number" style="width: 30px">
                            <input name="score2" type="number" style="width: 30px">
                            <input name="score3" type="number" style="width: 30px"></span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top">Speler15<span class="score">
                            <input name="score1" type="number" style="width: 30px">
                            <input name="score2" type="number" style="width: 30px">
                            <input name="score3" type="number" style="width: 30px"></span></li>
                    <li class="team team-bottom">Speler16<span class="score">
                            <input name="score1" type="number" style="width: 30px">
                            <input name="score2" type="number" style="width: 30px">
                            <input name="score3" type="number" style="width: 30px"></span></li>
                </ul>
            </div>  <!-- END ROUND ONE -->

            <div class="round round-two">
                <div class="round-details">Ronde 2<br/></div>
                <ul class="matchup">
                    <li class="team team-top"><span class="score">
                            <input name="score1" type="number" style="width: 30px">
                            <input name="score2" type="number" style="width: 30px">
                            <input name="score3" type="number" style="width: 30px"></span></li>
                    <li class="team team-bottom"><span class="score">
                            <input name="score1" type="number" style="width: 30px">
                            <input name="score2" type="number" style="width: 30px">
                            <input name="score3" type="number" style="width: 30px"></span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><span class="score">
                            <input name="score1" type="number" style="width: 30px">
                            <input name="score2" type="number" style="width: 30px">
                            <input name="score3" type="number" style="width: 30px"></span></li>
                    <li class="team team-bottom"><span class="score">
                            <input name="score1" type="number" style="width: 30px">
                            <input name="score2" type="number" style="width: 30px">
                            <input name="score3" type="number" style="width: 30px"></span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><span class="score">
                            <input name="score1" type="number" style="width: 30px">
                            <input name="score2" type="number" style="width: 30px">
                            <input name="score3" type="number" style="width: 30px"></span></li>
                    <li class="team team-bottom"><span class="score">
                            <input name="score1" type="number" style="width: 30px">
                            <input name="score2" type="number" style="width: 30px">
                            <input name="score3" type="number" style="width: 30px"></span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><span class="score">
                            <input name="score1" type="number" style="width: 30px">
                            <input name="score2" type="number" style="width: 30px">
                            <input name="score3" type="number" style="width: 30px"></span></li>
                    <li class="team team-bottom"><span class="score">
                            <input name="score1" type="number" style="width: 30px">
                            <input name="score2" type="number" style="width: 30px">
                            <input name="score3" type="number" style="width: 30px"></span></li>
                </ul>
            </div>  <!-- END ROUND TWO -->

            <div class="round round-three">
                <div class="round-details">Ronde 3<br/></div>
                <ul class="matchup">
                    <li class="team team-top"><span class="score">
                            <input name="score1" type="number" style="width: 30px">
                            <input name="score2" type="number" style="width: 30px">
                            <input name="score3" type="number" style="width: 30px"></span></li>
                    <li class="team team-bottom"><span class="score">
                            <input name="score1" type="number" style="width: 30px">
                            <input name="score2" type="number" style="width: 30px">
                            <input name="score3" type="number" style="width: 30px"></span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><span class="score">
                            <input name="score1" type="number" style="width: 30px">
                            <input name="score2" type="number" style="width: 30px">
                            <input name="score3" type="number" style="width: 30px"></span></li>
                    <li class="team team-bottom"><span class="score">
                            <input name="score1" type="number" style="width: 30px">
                            <input name="score2" type="number" style="width: 30px">
                            <input name="score3" type="number" style="width: 30px"></span></li>
                </ul>
            </div>  <!-- END ROUND THREE -->
        </div>

        <div class="champion">
            <div class="final">
                <!--<i class="fa fa-trophy"></i>-->
                <div class="round-details">Finale<br/></div>
                <ul class ="matchup championship">
                    <li class="team team-top"><span class="score">
                            <input name="score1" type="number" style="width: 30px">
                            <input name="score2" type="number" style="width: 30px">
                            <input name="score3" type="number" style="width: 30px"></span></li>
                    <li class="team team-bottom"><span class="score">
                            <input name="score1" type="number" style="width: 30px">
                            <input name="score2" type="number" style="width: 30px">
                            <input name="score3" type="number" style="width: 30px"></span></li>
                </ul>
            </div>
        </div>
</section>

</html>
