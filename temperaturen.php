<?php
$temperaturen=["Montag"=>31,"Dienstag"=>31,"Mittwoch"=>24,"Donnerstag"=>22,"Freitag"=>26,"Samstag"=>28,"Sonntag"=>30];
$big=0;
$low=200;
$durchschnitt=0;
foreach($temperaturen as $temperatur){
    if($temperatur>$big){
        $big = $temperatur;
    }
    elseif ($temperatur<$low){
        $low=$temperatur;
    }
    $durchschnitt=$durchschnitt + $temperatur;
}
$durchschnitt = $durchschnitt / count($temperaturen);
$durchschnitt = number_format($durchschnitt,2,",",".");
echo "Der größte Wert war: $big °C<br>";
echo "Der kleinste Wert war: $low °C<br>";
echo "Die Durschnittstemperatur war: $durchschnitt °C";