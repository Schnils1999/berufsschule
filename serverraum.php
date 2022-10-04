<html>
<head>
    <title>Bruttokosten des Serverraums</title>
</head>
<body>
<?php
$stromverbrauch=18000.00; //in kWh
$arbeitspreis=18.50; //in Cent/kWh
$grundpreis=24.95; //in EUR pro Monat

$bruttokosten = 12*$grundpreis;
$bruttokosten = (($stromverbrauch*$arbeitspreis)/100)+$bruttokosten;

echo "Die Jahreskosten betragen: $bruttokosten EUR";

?>
</body>
</html>