<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>toevoegen verwerken...</title>
</head>
<body>

<h1>hier worden de gegevens verstuurd naar de database</h1>


<?php

$ID = NULL;
$verdiepingen = $_POST["huis_aantal_verdiepingen"];
$kamers = $_POST["huis_aantal_kamers"];
$breedte = $_POST["huis_breedte"];
$lengte = $_POST["huis_lengte"];
$hoogte = $_POST["huis_hoogte"];
$status = $_POST["huis_status"];
$nummer = $_POST["huis_nummer"];
$soort = $_POST["huis_soort"];
$woonwijk = $_POST["huis_woonwijk"];


require_once'../PDO.php';


$sql = $conn-> prepare( "insert into huizen values ( :idhuizen, :aantal_verdieping, :aantal_kamers, :huis_breedte, :huis_lengte, :huis_hoogte, :huis_status, :huis_nummer, :huis_soort, :huis_woonwijk )");

$sql ->bindParam(":idhuizen", $ID);
$sql ->bindParam(":aantal_verdieping", $verdiepingen);
$sql ->bindParam(":aantal_kamers", $kamers);
$sql ->bindParam(":huis_breedte", $breedte);
$sql ->bindParam(":huis_lengte", $lengte);
$sql ->bindParam(":huis_hoogte", $hoogte);
$sql ->bindParam(":huis_status", $status);
$sql ->bindParam(":huis_nummer", $nummer);
$sql ->bindParam(":huis_soort", $soort);
$sql ->bindParam(":huis_woonwijk", $woonwijk);


$sql ->execute();

echo "het huis is toegevoegd <br />";
echo "<a href='../index.php'> terug naar het menu </a>";




?>


</body>
</html>


