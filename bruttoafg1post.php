<?php
$nettopreis=$_POST['nettopreis'];

$bruttopreis=$nettopreis + $nettopreis * 0.19;

echo "Bruttopreis: $bruttopreis";