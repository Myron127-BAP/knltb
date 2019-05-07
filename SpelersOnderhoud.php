<?php

    include_once './inc/Database.inc.php';

    if ($conn)
    {
        $getuser = "SELECT voornaam, achternaam, school FROM spelers";
        $Result = mysqli_query($conn, $getuser);

        if (mysqli_num_rows($Result) > 0)
        {
            while ($row = mysqli_fetch_assoc($Result))
            {
                echo $_SESSION["message"] = $row['voornaam'] . "<br>" . $row['achternaam'] . "<br>" . $row['school'] . "<br>" . "<br>";
            }
        }
        else
            {
                echo "Er zitten geen spelers in de database";
            }
    }
    else
    {
        die("Er is iets fout gegaan" .mysqli_connect_error());
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

    <title>Spelers Onderhouden</title>

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
        <p class="FormText mb-4">Lijst met alle spelers</p>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <p class="FormText mb-4"><?= $_SESSION['message']?></p>
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
