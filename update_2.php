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

<h1>welke gegevens wilt u aanpassen</h1>

<?php
$huisid = $_POST["idhuizen"];

require_once '../PDO.php';

$huizenid= $conn-> prepare(" select * from huizen where idhuizen = :idhuizen" );

$huizenid->execute([":idhuizen" => $huisid]);



foreach ($huizenid as $huis){

    echo "<form action='update_3.php' method='post'>";
    echo "huisid: " .$huis["idhuizen"];
    echo "<input type='hidden' name='huisid'";
    echo "value= '" . $huis["idhuizen"] . " '> <br /> " ;

    echo "aantal verdiepingen: " ;
    echo "<input type='text' name='huis_verdiepingen'";
    echo "value= '" . $huis["aantal_verdieping"] . " '> <br /> " ;

    echo "aantal kamers: ";
    echo "<input type='text' name='huis_kamers'";
    echo "value= '" . $huis["aantal_kamers"] . " '> <br /> " ;

    echo "huis breedte: ";
    echo "<input type='text' name='huis_breedte'";
    echo "value= '" . $huis["huis_breedte"] . " '> <br /> " ;

    echo "huis lengte: " ;
    echo "<input type='text' name='huis_lengte'";
    echo "value= '" . $huis["huis_lengte"] . " '> <br /> " ;

    echo "huis hoogte: " ;
    echo "<input type='text' name='huis_hoogte'";
    echo "value= '" . $huis["huis_hoogte"] . " '> <br /> " ;

    echo "huis status: " ;
    echo "<input type='text' name='huis_status'";
    echo "value= '" . $huis["huis_status"] . " '> <br /> " ;

    echo "huis nummer: " ;
    echo "<input type='text' name='huis_nummer'";
    echo "value= '" . $huis["huis_nummer"] . " '> <br /> " ;

    echo "huis soorrt: ";
    echo "<input type='text' name='huis_soort'";
    echo "value= '" . $huis["huis_soort"] . " '> <br /> " ;

    echo "huis woonwijk: " ;
    echo "<input type='text' name='huis_woonwijk'";
    echo "value= '" . $huis["huis_woonwijk"] . " '> <br /> " ;

    echo "<input type='submit'>";
    echo "</form>";


}


    



?>

</body>
</html>