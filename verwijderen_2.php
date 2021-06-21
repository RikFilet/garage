<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>verwijderen</title>
</head>
<body>

<h1>wilt u dit huis verrwijderen</h1>



<?php

$huisid = $_POST["id_vak"];

require_once '../PDO.php';

$huizen = $conn->prepare('select * from huizen where idhuizen = :huisid');


$huizen->execute(["huisid" => $huisid]);


echo "<ul>";
foreach ($huizen as $huis){


    echo "<li>" . "huisid = " . $huis["idhuizen"];
    echo "<li>" . "aantal verdiepingen = " . $huis["aantal_verdieping"];
    echo "<li>". "aantal kamers = " . $huis["aantal_kamers"];
    echo "<li>". "huisbreedte in meters = " . $huis["huis_breedte"];
    echo "<li>". "huislengte in meters = " . $huis["huis_lengte"];
    echo "<li>". "huishoogte in meters = " . $huis["huis_hoogte"];
    echo "<li>". "huis status = "  . $huis["huis_status"];
    echo "<li>" . "huis nummer = "  . $huis["huis_nummer"];
    echo "<li>" . "huis soort = "   . $huis["huis_soort"];
    echo "<li>". "woonwijk = "   . $huis["huis_woonwijk"];



    echo "</ul>";

}

echo "<form action='verwijderen_3.php' method='post'>";

echo "<input type='hidden' value='$huisid' name='huis_id'>";
echo "<input type='submit' value='ja'>";

echo "</form>";





echo "<a href='../index.php'> terug naar menu </a>"



?>



</body>
</html>