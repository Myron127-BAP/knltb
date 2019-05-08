<?php

    include_once './inc/Database.inc.php';

    $_SESSION['message'] = '';


    if ($_SERVER['REQUEST_METHOD']== 'POST')
    {

        //Dit voorkomt dat er niet de zelfde personen toegevoegd worden in de database, Dit is uit gecommit aangezien er mensen zijn met de zelfde namen

        //$Voornaam = $_POST['Voornaam_Register'];

        //$query = "SELECT * FROM spelers WHERE voornaam= '".$Voornaam."'";

        //$check = mysqli_query($conn, $query);

        //if (mysqli_num_rows($check) >= 1)
        //{
        //    $_SESSION['message'] = "$Voornaam bestaat al";
        //}
        //else
        //{

        //Het toevoegen van personen in de Database
            $Voornaam = $conn->real_escape_string($_POST['Voornaam_Register']);
            $Achternaam = $conn->real_escape_string($_POST['Achternaam_Register']);
            $School = ($_POST['School_Register']);

            $sql = "INSERT INTO spelers(voornaam, achternaam, school)" . "VALUES ('$Voornaam', '$Achternaam', '$School')";

            if (mysqli_query($conn, $sql))
            {
                $_SESSION['message'] = "$Voornaam $Achternaam van $School is toegevoegd";
            }
            else
                {
                    $_SESSION['message'] = "Speler is niet toegevoegd";
                }
        //}
    }

?>

<!doctype html>
<html lang="en">
<head>

    <link rel="stylesheet" as="style" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Spelers Toevoegen</title>

</head>

<body>
<header>
    <?php
    include_once'./inc/Header.php';
    ?>
</header>

<main style="background-color: #2a6797">
    <br>
    <br>
    <form class="text-center p-5 col-md-4 offset-md-4 bg-light rounded position-relative" action="SpelersToevoegen.php" method="post" enctype="multipart/form-data">
        <p class="FormText mb-4">Voeg hier de gegevens van de speler in:</p>
        <p class="FormText mb-4"><?= $_SESSION['message']?></p>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <input type="text" name="Voornaam_Register" class="form-control" placeholder="Voornaam" required>
            </div>
            <div class="col-md-8 offset-md-2" style="margin-top: 10px">
                <input type="text" name="Achternaam_Register" class="form-control mb-4" placeholder="Achternaam" required>
            </div>
            <div class="col-md-8 offset-md-2" style="margin-top: 10px">
                <select class="form-control" name="School_Register">
                    <option>Albeda College</option>
                    <option>Da Vinci College</option>
                    <option>Drenthe College</option>
                    <option>Graafschap College</option>
                    <option>Katholiek Onderwijs Vlaanderen</option>
                    <option>Koning Willem I College</option>
                    <option>Rijn Ijssel College</option>
                    <option>ROC Horizon College</option>
                    <option>ROC de Leijgraaf</option>
                    <option>ROC ID College</option>
                    <option>ROC Midden Nederland</option>
                    <option>ROC TOP</option>
                    <option>ROC A12</option>
                    <option>ROC van Amsterdam</option>
                    <option>Summa college</option>
                </select>
            </div>
        </div>
        <button class="btn btn-info my-4 btn-block col-md-8 offset-md-2" type="submit" name="Submit_Speler">Speler toevoegen</button>
    </form>

</main>

<footer>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
