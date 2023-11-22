<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Serverraum</title>
</head>
<body>
<?php
$stromverbrauch=18000.00; //in kWh
$arbeitspreis=18.50; //in Cent/kWh
$grundpreis=24.95; //in EUR pro Monat

$bruttokosten = (($stromverbrauch*$arbeitspreis)/100)+12*$grundpreis;
$bruttokosten = number_format($bruttokosten,2,',', " ");

echo "Die Jahreskosten betragen: $bruttokosten EUR";

?>
</body>
</html>