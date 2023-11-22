<?php
$nettopreis=$_GET['nettopreis'];
$bruttopreis =  $nettopreis + $nettopreis * 0.19;

echo "Bruttopreis: $bruttopreis";