<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>updaten</title>
</head>
<body>

<?php


require_once '../PDO.php';

$id = $_POST["huisid"];
$verdiepingen = $_POST["huis_verdiepingen"];
$kamers = $_POST["huis_kamers"];
$breedte = $_POST['huis_breedte'];
$lengte = $_POST['huis_lengte'];
$hoogte = $_POST["huis_hoogte"];
$status = $_POST["huis_status"];
$nummer = $_POST["huis_nummer"];
$soort = $_POST["huis_soort"];
$woonwijk = $_POST["huis_woonwijk"];



$sql = $conn-> prepare( "update huizen set aantal_verdieping =:aantal_verdieping, aantal_kamers = :aantal_kamers, huis_breedte = :huis_breedte, huis_lengte = :huis_lengte, huis_hoogte = :huis_hoogte, huis_status = :huis_status, huis_nummer = :huis_nummer, huis_soort = :huis_soort, huis_woonwijk = :huis_woonwijk where idhuizen = :idhuizen");


$sql ->bindParam(":aantal_verdieping", $verdiepingen);
$sql ->bindParam(":aantal_kamers", $kamers);
$sql ->bindParam(":huis_breedte", $breedte);
$sql ->bindParam(":huis_lengte", $lengte);
$sql ->bindParam(":huis_hoogte", $hoogte);
$sql ->bindParam(":huis_status", $status);
$sql ->bindParam(":huis_nummer", $nummer);
$sql ->bindParam(":huis_soort", $soort);
$sql ->bindParam(":huis_woonwijk", $woonwijk);
$sql ->bindParam(":idhuizen", $id);

$sql->execute();



echo "het huis is gewijzigt";
echo "<a href='../index.php'>terug naar het menu</a> ";






?>

</body>
</html>
