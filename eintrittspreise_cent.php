<html>
<head>
    <title>Kinocenter</title>
</head>
<body>
<?php
//Initialisierungen
$preis=11.00; //in Euro
$rabatt_kundenkarte=10.00; //in Prozent

//Berechnung des Preises mit Kinokarte
$preis_kinokarte=$preis-$rabatt_kundenkarte/100.0*$preis;

//Browserausgabe
echo"<b>Eintrittspreise</b><br><br>";
echo"Preis: ";
echo number_format($preis,2,',',' ');
echo" EUR<br>";
echo"mit Kinokarte: ";
echo number_format($preis_kinokarte, 2,',',' ');
echo" EUR";

?>
</body>
</html>