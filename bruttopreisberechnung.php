<html>
<head><title>Bruttopreisberechnung</title></head>
<body>
<?php
$brutto=19/100;

$bruttopreis=$_POST['nettopreis']+$_POST['nettopreis']*$brutto;

echo"Bruttopreis: $bruttopreis EUR";
?>
</body>
</html>
