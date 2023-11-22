<<<<<<< HEAD
<html>
<head><title>Kinocenter</title></head>
<body>
<?php
//Initialisierungen
$preis_erwachsene=11.00;
$preis_kinder=8.00;

//Gesamtpreis berechnen
$gesamtpreis=$_GET['erwachsene']*$preis_erwachsene+$_GET['kinder']*$preis_kinder;

//Ergebnisse im Browser ausgeben
echo "<b>Tickets</b><br><br>";
echo "Anzahl Erwachsene: {$_GET['erwachsene']}<br>";
echo "Anzahl Kinder: {$_GET['kinder']}<br>";
echo "Gesamtpreis: $gesamtpreis EUR";
?>

</body>

</html>
=======
<?php
$preis_erwachsene=11.00;
$preis_kinder=8.00;

$gesamtpreis=$_GET['erwachsene'] * $preis_erwachsene + $_GET['kinder'] * $preis_kinder;

echo"<b>Ticketpreise:</b><br><br>";
echo"Gewählte Anzahl Erwachsene: {$_GET['erwachsene']}<br>";
echo"Gewählte Anzahl Kinder: {$_GET['kinder']}<br>";
echo"Gesamtpreis der Tickets: $gesamtpreis EUR";
>>>>>>> origin/master
