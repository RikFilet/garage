<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style.css">
    <title>huis toevoegen</title>
</head>
<body>
<h1>hie kunt u huizen toevoegen</h1>

<form action="toevoegen_verwerking.php" method="post">
    <ul>

        <li> aantal verdiepingen: <input type="number" name="huis_aantal_verdiepingen"></li>
        <li> aantal kamers: <input type="number" name="huis_aantal_kamers"></li>
        <li>huis breede (meters): <input type="number" name="huis_breedte"></li>
        <li>huis lengte (meters): <input type="number" name="huis_lengte"></li>
        <li>huis hoogte (meters): <input type="number" name="huis_hoogte"></li>
        <li>huis status: <input type="text" name="huis_status" placeholder="beschiekbaar/verkocht"></li>
        <li>huis nummer: <input type="number" name="huis_nummer"></li>
        <li>huis soort: <input type="text" name="huis_soort" placeholder="huur of koop"></li>
        <li>huis woonwijk: <input type="text" name="huis_woonwijk"></li>


    </ul>

    <input type="submit" value="toegoegen">

</form>


</body>
</html>