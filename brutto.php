<html>
<head>
    <title>Bruttopreis</title>
</head>
<body>
<?php
$nettopreis=249.00; //in EUR
$mehrwertsteuer=19.00; //in Prozent

$bruttopreis = $nettopreis + $nettopreis*$mehrwertsteuer/100; //in EUR

//Ausgabe
echo "Der Bruttopreis des Produkts entspricht: $bruttopreis";

?>
</body>
</html>
