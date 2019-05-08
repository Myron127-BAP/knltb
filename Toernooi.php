<?php

    include_once "./inc/ToernooiUitslagWinst.php";




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

    <title>Tennistoernooi</title>
</head>
<body>
<header>
    <?php
    include_once'./inc/Header.php';
    ?>
</header>

<section id="toernooi">
    <div class="container">
        <div class="split split-one">
            <!--Begin Ronde Een-->
            <div class="ronde ronde-een">
                <ul class="wedstrijd">
                    <p class="ronde-details" style="margin-top: -20px; font-weight: bold;" >Ronde 1</p>
                    <li class="speler speler-top"><?= $_SESSION['speler1']?><span class="score"><?= $uitslag1 ?></span></li>
                    <li class="speler speler-bottom"><?= $_SESSION['speler2']?><span class="score"><?= $uitslag2 ?></span></li>
                </ul>
                <ul class="wedstrijd">
                    <li class="speler speler-top"><?= $_SESSION['speler3']?><span class="score"><?= $uitslag3 ?></span></li>
                    <li class="speler speler-bottom"><?= $_SESSION['speler4']?><span class="score"><?= $uitslag4 ?></span></li>
                </ul>
                <ul class="wedstrijd">
                    <li class="speler speler-top"><?= $_SESSION['speler5']?><span class="score"><?= $uitslag5 ?></span></li>
                    <li class="speler speler-bottom"><?= $_SESSION['speler6']?><span class="score"><?= $uitslag6 ?></span></li>
                </ul>
                <ul class="wedstrijd">
                    <li class="speler speler-top"><?= $_SESSION['speler7']?><span class="score"><?= $uitslag7 ?></span></li>
                    <li class="speler speler-bottom"><?= $_SESSION['speler8']?><span class="score"><?= $uitslag8 ?></span></li>
                </ul>
                <ul class="wedstrijd">
                    <li class="speler speler-top"><?= $_SESSION['speler9']?><span class="score"><?= $uitslag9 ?></span></li>
                    <li class="speler speler-bottom"><?= $_SESSION['speler10']?><span class="score"><?= $uitslag10 ?></span></li>
                </ul>
                <ul class="wedstrijd">
                    <li class="speler speler-top"><?= $_SESSION['speler11']?><span class="score"><?= $uitslag11 ?></span></li>
                    <li class="speler speler-bottom"><?= $_SESSION['speler12']?><span class="score"><?= $uitslag12 ?></span></li>
                </ul>
                <ul class="wedstrijd">
                    <li class="speler speler-top"><?= $_SESSION['speler13']?><span class="score"><?= $uitslag13 ?></span></li>
                    <li class="speler speler-bottom"><?= $_SESSION['speler14']?><span class="score"><?= $uitslag14 ?></span></li>
                </ul>
                <ul class="wedstrijd">
                    <li class="speler speler-top"><?= $_SESSION['speler15']?><span class="score"><?= $uitslag15 ?></span></li>
                    <li class="speler speler-bottom"><?= $_SESSION['speler16']?><span class="score"><?= $uitslag16 ?></span></li>
                </ul>
            </div>
            <!-- Einde Ronde Een-->
            <!--Begin Ronde Twee-->
            <div class="ronde ronde-twee">
                <ul class="wedstrijd">
                    <p class="ronde-details" style="margin-top: -30px; font-weight: bold">Ronde 2</p>
                    <li class="speler speler-top"><?= $_SESSION['ronde2speler1-2']?><span class="score"><?= $uitslag1ronde2?></span></li>
                    <li class="speler speler-bottom"><?= $_SESSION['ronde2speler3-4']?><span class="score"><?= $uitslag2ronde2?></span></li>
                </ul>
                <ul class="wedstrijd" style="margin-top: 10px;">
                    <li class="speler speler-top"><?= $_SESSION['ronde2speler5-6']?><span class="score"><?= $uitslag3ronde2?></span></li>
                    <li class="speler speler-bottom"><?= $_SESSION['ronde2speler7-8']?><span class="score"><?= $uitslag4ronde2?></span></li>
                </ul>
                <ul class="wedstrijd" style="margin-top: -20px;">
                    <li class="speler speler-top"><?= $_SESSION['ronde2speler9-10']?><span class="score"><?= $uitslag5ronde2?></span></li>
                    <li class="speler speler-bottom"><?= $_SESSION['ronde2speler11-12']?><span class="score"><?= $uitslag6ronde2?></span></li>
                </ul>
                <ul class="wedstrijd" style="margin-top: 25px;">
                    <li class="speler speler-top"><?= $_SESSION['ronde2speler13-14']?><span class="score"><?= $uitslag7ronde2?></span></li>
                    <li class="speler speler-bottom"><?= $_SESSION['ronde2speler15-16']?><span class="score"><?= $uitslag8ronde2?></span></li>
                </ul>
            </div>
            <!--Einde Ronde Twee-->
            <!--Begin Ronde Drie-->
            <div class="ronde ronde-drie">
                <ul class="wedstrijd" style="margin-left: 220px;">
                    <p class="ronde-details" style="margin-top: -22px; font-weight: bold">Ronde 3</p>
                    <li class="speler speler-top"><?= $_SESSION['ronde3speler1-2']?><span class="score"><?= $uitslag1ronde3?></span></li>
                    <li class="speler speler-bottom"><?= $_SESSION['ronde3speler3-4']?><span class="score"><?= $uitslag2ronde3?></span></li>
                </ul>
                <ul class="wedstrijd" style="margin-left: 220px;">
                    <li class="speler speler-top"><?= $_SESSION['ronde3speler5-6']?><span class="score"><?= $uitslag3ronde3?></span></li>
                    <li class="speler speler-bottom"><?= $_SESSION['ronde3speler7-8']?><span class="score"><?= $uitslag4ronde3?></span></li>
                </ul>
            </div>
        </div>
        <!--Einde Ronde Drie -->
        <!--Begin Finale Ronde-->
        <div class="champion" style="margin-top: -70px; margin-left: 100px ">
            <div class="final">
                <i class="fa fa-trophy"></i>
                <div class="ronde-details">Finale</div>
                <ul class ="wedstrijd championship">
                    <li class="speler speler-top"><?= $_SESSION['ronde4speler1-2']?><span class="score"><?= $uitslag1ronde4?></span></li>
                    <li class="speler speler-bottom"><?= $_SESSION['ronde4speler3-4']?><span class="score"><?= $uitslag2ronde4?></span></li>
                </ul>
            </div>
        </div>
</section>

</html>
