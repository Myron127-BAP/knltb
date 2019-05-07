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

    /**if ($conn)
    {
        $getuser = "SELECT voornaam, achternaam FROM spelers";
        $Result = mysqli_query($conn, $getuser);

        if (mysqli_num_rows($Result) > 0)
        {
            while ($row = mysqli_fetch_assoc($Result))
            {
                echo $row['voornaam'] . " " . $row['achternaam'] . "<br>" . "<br>";
            }
        }
        else
        {
            echo "Toernooien  gevonden";
        }
    }
    else
    {
        die("Er is iets fout gegaan" .mysqli_connect_error());
    }

     */

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

        /**Random Cijfer 6 $id6
        if ($id6 == $id2){$id2 = rand(1, 8);}
        if ($id6 == $id3){$id6 = rand(1, 8);}
        if ($id6 == $id4){$id6 = rand(1, 8);}
        if ($id6 == $id5){$id6 = rand(1, 8);}
         **/


        /**Radom Cijfer 1**/
        $randuser1 = "SELECT voornaam, achternaam FROM spelers WHERE id='$id1'"; $Result1 = mysqli_query($conn, $randuser1);
        while($row1 = mysqli_fetch_assoc($Result1)){echo $_SESSION['message1'] = $row1['voornaam'] . " " . $row1['achternaam'] . "<br/>";}
        /**Radom Cijfer 2**/
        $randuser2 = "SELECT voornaam, achternaam FROM spelers WHERE id='$id2'"; $Result2 = mysqli_query($conn, $randuser2);
        while($row2 = mysqli_fetch_assoc($Result2)){echo  $_SESSION['message2'] = $row2['voornaam'] . " " . $row2['achternaam'] . "<br/>"; }
        /**Radom Cijfer 3**/
        $randuser3 = "SELECT voornaam, achternaam FROM spelers WHERE id='$id3'"; $Result3 = mysqli_query($conn, $randuser3);
        while($row3 = mysqli_fetch_assoc($Result3)){echo $_SESSION['message3'] = $row3['voornaam'] . " " . $row3['achternaam'] . "<br/>";}
        /**Radom Cijfer 4**/
        $randuser4 = "SELECT voornaam, achternaam FROM spelers WHERE id='$id4'"; $Result4 = mysqli_query($conn, $randuser4);
        while($row4 = mysqli_fetch_assoc($Result4)){echo  $_SESSION['message4'] = $row4['voornaam'] . " " . $row4['achternaam'] . "<br/>"; }
        /**Radom Cijfer 5**/
        $randuser5 = "SELECT voornaam, achternaam FROM spelers WHERE id='$id5'"; $Result5 = mysqli_query($conn, $randuser5);
        while($row5 = mysqli_fetch_assoc($Result5)){echo $_SESSION['message5'] = $row5['voornaam'] . " " . $row5['achternaam'] . "<br/>";}
        /**Radom Cijfer 6**/
        $randuser6 = "SELECT voornaam, achternaam FROM spelers WHERE id='$id6'"; $Result6 = mysqli_query($conn, $randuser6);
        while($row6 = mysqli_fetch_assoc($Result6)){echo  $_SESSION['message6'] = $row6['voornaam'] . " " . $row6['achternaam'] . "<br/>"; }




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
                <ul class="matchup">
                    <li class="team team-top"><?= $_SESSION['message1']?><span class="score"></span></li>
                    <li class="team team-bottom"><?= $_SESSION['message2']?><span class="score"></span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?= $_SESSION['message3']?><span class="score"></span></li>
                    <li class="team team-bottom"><?= $_SESSION['message4']?><span class="score"></span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?= $_SESSION['message5']?><span class="score"></span></li>
                    <li class="team team-bottom"><?= $_SESSION['message6']?><span class="score"></span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?= $_SESSION['message7']?><span class="score"></span></li>
                    <li class="team team-bottom"><?= $_SESSION['message8']?><span class="score"></span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?= $_SESSION['message9']?><span class="score"></span></li>
                    <li class="team team-bottom"><?= $_SESSION['message10']?><span class="score"></span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?= $_SESSION['message11']?><span class="score"></span></li>
                    <li class="team team-bottom"><?= $_SESSION['message12']?><span class="score"></span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?= $_SESSION['message13']?><span class="score"></span></li>
                    <li class="team team-bottom"><?= $_SESSION['message14']?><span class="score"></span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?= $_SESSION['message15']?><span class="score"></span></li>
                    <li class="team team-bottom"><?= $_SESSION['message16']?><span class="score"></span></li>
                </ul>
            </div>  <!-- END ROUND ONE -->

            <div class="round round-two">
                <ul class="matchup">
                    <li class="team team-top"><?= $_SESSION['message17']?><span class="score"></span></li>
                    <li class="team team-bottom"><?= $_SESSION['message18']?><span class="score"></span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?= $_SESSION['message19']?><span class="score"></span></li>
                    <li class="team team-bottom"><?= $_SESSION['message20']?><span class="score"></span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?= $_SESSION['message21']?><span class="score"></span></li>
                    <li class="team team-bottom"><?= $_SESSION['message22']?><span class="score"></span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><?= $_SESSION['message23']?><span class="score"></span></li>
                    <li class="team team-bottom"><?= $_SESSION['message24']?><span class="score"></span></li>
                </ul>
            </div>  <!-- END ROUND TWO -->

            <div class="round round-three">
                <ul class="matchup">
                    <li class="team team-top"><span class="score"></span></li>
                    <li class="team team-bottom"><span class="score"></span></li>
                </ul>
                <ul class="matchup">
                    <li class="team team-top"><span class="score"></span></li>
                    <li class="team team-bottom"><span class="score"></span></li>
                </ul>
            </div>  <!-- END ROUND THREE -->
        </div>

        <div class="champion">
            <div class="final">
                <!--<i class="fa fa-trophy"></i>-->
                <div class="round-details">Finale<br/></div>
                <ul class ="matchup championship">
                    <li class="team team-top"><span class="score"></span></li>
                    <li class="team team-bottom"><span class="score"></span></li>
                </ul>
            </div>
        </div>
</section>

</html>
