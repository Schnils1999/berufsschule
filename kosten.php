<?php
$leistung=$_GET['leistung'];
$zeit=$_GET['betriebszeit'];
$preis=$_GET['arbeitspreis'];

$arbeit= $leistung*$zeit;
$gesamtpreis=($preis*$arbeit)/100;

echo"<b>Arbeitsleistung:</b> $arbeit kWh<br><br>";
echo"<b>Preis:</b> $gesamtpreis EUR";