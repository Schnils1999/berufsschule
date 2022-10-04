<html>
<head>
    <title>Kinocenter</title>
</head>
<body>
<?php
$preis=11.00;
$rabatt_kundenkarte=10.00;

$preis_kinokarte=$preis-$rabatt_kundenkarte/100*$preis;

echo"Preis: $preis EUR<br>";
echo"mit Kinokarte: $preis_kinokarte EUR";
?>
</body>
</html>
