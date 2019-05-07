<?php


    include_once './inc/Database.inc.php';

        $id1 = rand(1, 8);
        $id2 = rand(1, 8);
        $id3 = rand(1, 8);
        $id4 = rand(1, 8);
        $id5 = rand(1, 8);
        $id6 = rand(1, 8);




        /**Random Cijfer 1 $id1**/
        if ($id1 == $id2){$id1 = rand(1, 8);}
        if ($id1 == $id3){$id1 = rand(1, 8);}
        if ($id1 == $id4){$id1 = rand(1, 8);}
        if ($id4 == $id1){$id4 = rand(1, 8);}
        if ($id1 == $id5){$id1 = rand(1, 8);}
        if ($id1 == $id6){$id1 = rand(1, 8);}

        /**Random Cijfer 2 $id2**/
        if ($id2 == $id3){$id2 = rand(1, 8);}
        if ($id2 == $id4){$id2 = rand(1, 8);}
        if ($id2 == $id5){$id2 = rand(1, 8);}
        if ($id2 == $id6){$id2 = rand(1, 8);}

        /**Random Cijfer 3 $id3**/
        if ($id3 == $id4){$id3 = rand(1, 8);}
        if ($id3 == $id5){$id3 = rand(1, 8);}
        if ($id3 == $id6){$id3 = rand(1, 8);}

        /**Random Cijfer 4 $id4**/
        if ($id4 == $id5){$id4 = rand(1, 8);}
        if ($id4 == $id6){$id4 = rand(1, 8);}

        /**Random Cijfer 5 $id5**/
        if ($id5 == $id6){$id5 = rand(1, 8);}

        /**Radom Cijfer 1**/
        $randuser1 = "SELECT voornaam, achternaam FROM spelers WHERE id='$id1'"; $Result1 = mysqli_query($conn, $randuser1);
        while($row1 = mysqli_fetch_assoc($Result1)){echo $_SESSION['speler1'] = $row1['voornaam'] . " " . $row1['achternaam'] . "<br/>";}
        /**Radom Cijfer 2**/
        $randuser2 = "SELECT voornaam, achternaam FROM spelers WHERE id='$id2'"; $Result2 = mysqli_query($conn, $randuser2);
        while($row2 = mysqli_fetch_assoc($Result2)){echo  $_SESSION['speler2'] = $row2['voornaam'] . " " . $row2['achternaam'] . "<br/>"; }
        /**Radom Cijfer 3**/
        $randuser3 = "SELECT voornaam, achternaam FROM spelers WHERE id='$id3'"; $Result3 = mysqli_query($conn, $randuser3);
        while($row3 = mysqli_fetch_assoc($Result3)){echo $_SESSION['speler3'] = $row3['voornaam'] . " " . $row3['achternaam'] . "<br/>";}
        /**Radom Cijfer 4**/
        $randuser4 = "SELECT voornaam, achternaam FROM spelers WHERE id='$id4'"; $Result4 = mysqli_query($conn, $randuser4);
        while($row4 = mysqli_fetch_assoc($Result4)){echo  $_SESSION['speler4'] = $row4['voornaam'] . " " . $row4['achternaam'] . "<br/>"; }
        /**Radom Cijfer 5**/
        $randuser5 = "SELECT voornaam, achternaam FROM spelers WHERE id='$id5'"; $Result5 = mysqli_query($conn, $randuser5);
        while($row5 = mysqli_fetch_assoc($Result5)){echo $_SESSION['speler5'] = $row5['voornaam'] . " " . $row5['achternaam'] . "<br/>";}
        /**Radom Cijfer 6**/
        $randuser6 = "SELECT voornaam, achternaam FROM spelers WHERE id='$id6'"; $Result6 = mysqli_query($conn, $randuser6);
        while($row6 = mysqli_fetch_assoc($Result6)){echo  $_SESSION['speler6'] = $row6['voornaam'] . " " . $row6['achternaam'] . "<br/>"; }
        //Random Cijfer 7




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
            <div class="ronde ronde-een">
                <ul class="wedstrijd">
                    <p class="ronde-details" style="margin-top: -20px; font-weight: bold;" >Ronde 1</p>
                    <li class="speler speler-top"><?= $_SESSION['speler1']?><span class="score"></span></li>
                    <li class="speler speler-bottom"><?= $_SESSION['speler2']?><span class="score"></span></li>
                </ul>
                <ul class="wedstrijd">
                    <li class="speler speler-top"><?= $_SESSION['speler3']?><span class="score"></span></li>
                    <li class="speler speler-bottom"><?= $_SESSION['speler4']?><span class="score"></span></li>
                </ul>
                <ul class="wedstrijd">
                    <li class="speler speler-top"><?= $_SESSION['speler5']?><span class="score"></span></li>
                    <li class="speler speler-bottom"><?= $_SESSION['speler6']?><span class="score"></span></li>
                </ul>
                <ul class="wedstrijd">
                    <li class="speler speler-top"><?= $_SESSION['speler']?><span class="score"></span></li>
                    <li class="speler speler-bottom"><?= $_SESSION['speler8']?><span class="score"></span></li>
                </ul>
                <ul class="wedstrijd">
                    <li class="speler speler-top"><?= $_SESSION['speler9']?><span class="score"></span></li>
                    <li class="speler speler-bottom"><?= $_SESSION['speler10']?><span class="score"></span></li>
                </ul>
                <ul class="wedstrijd">
                    <li class="speler speler-top"><?= $_SESSION['speler11']?><span class="score"></span></li>
                    <li class="speler speler-bottom"><?= $_SESSION['speler12']?><span class="score"></span></li>
                </ul>
                <ul class="wedstrijd">
                    <li class="speler speler-top"><?= $_SESSION['speler13']?><span class="score"></span></li>
                    <li class="speler speler-bottom"><?= $_SESSION['speler14']?><span class="score"></span></li>
                </ul>
                <ul class="wedstrijd">
                    <li class="speler speler-top"><?= $_SESSION['speler15']?><span class="score"></span></li>
                    <li class="speler speler-bottom"><?= $_SESSION['speler16']?><span class="score"></span></li>
                </ul>
            </div>  <!-- END ROUND ONE -->

            <div class="ronde ronde-twee">
                <ul class="wedstrijd">
                    <p class="ronde-details" style="margin-top: -30px; font-weight: bold">Ronde 2</p>
                    <li class="speler speler-top"><?= $_SESSION['message17']?><span class="score"></span></li>
                    <li class="speler speler-bottom"><?= $_SESSION['message18']?><span class="score"></span></li>
                </ul>
                <ul class="wedstrijd" style="margin-top: 10px;">
                    <li class="speler speler-top"><?= $_SESSION['message19']?><span class="score"></span></li>
                    <li class="speler speler-bottom"><?= $_SESSION['message20']?><span class="score"></span></li>
                </ul>
                <ul class="wedstrijd" style="margin-top: -20px;">
                    <li class="speler speler-top"><?= $_SESSION['message21']?><span class="score"></span></li>
                    <li class="speler speler-bottom"><?= $_SESSION['message22']?><span class="score"></span></li>
                </ul>
                <ul class="wedstrijd" style="margin-top: 25px;">
                    <li class="speler speler-top"><?= $_SESSION['message23']?><span class="score"></span></li>
                    <li class="speler speler-bottom"><?= $_SESSION['message24']?><span class="score"></span></li>
                </ul>
            </div>  <!-- END ROUND TWO -->

            <div class="ronde ronde-drie">
                <ul class="wedstrijd" style="margin-left: 220px;">
                    <p class="ronde-details" style="margin-top: -22px; font-weight: bold">Ronde 3</p>
                    <li class="speler speler-top"><?= $_SESSION['message2']?><span class="score"></span></li>
                    <li class="speler speler-bottom"><?= $_SESSION['message2']?><span class="score"></span></li>
                </ul>
                <ul class="wedstrijd" style="margin-left: 220px;">
                    <li class="speler speler-top"><?= $_SESSION['message2']?><span class="score"></span></li>
                    <li class="speler speler-bottom"><?= $_SESSION['message2']?><span class="score"></span></li>
                </ul>
            </div>  <!-- END ROUND THREE -->
        </div>

        <div class="champion" style="margin-top: -70px; margin-left: 100px ">
            <div class="final">
                <i class="fa fa-trophy"></i>
                <div class="ronde-details">Finale</div>
                <ul class ="wedstrijd championship">
                    <li class="speler speler-top"><span class="score"></span></li>
                    <li class="speler speler-bottom"><span class="score"></span></li>
                </ul>
            </div>
        </div>
</section>

</html>
