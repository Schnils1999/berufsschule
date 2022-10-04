<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Nils Neumann</title>
</head>

<style>
    body{
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: Arial;
        background-color: #E20074;
    }
</style>
<body>
    <h1>Nils Neumann</h1>
    <h3>Hobbys</h3>

    <ul>
        <li>Feuerwehr</li>
        <li>IT</li>
        <li>Trompete</li>
    </ul>
    <img style="position: absolute; left: 0" src="FFN.PNG" height="400" width="auto" alt="Error 404">
    <img style="position: absolute; right: 0" src="HCK.jpg" height="290" width="auto" alt="Error 404">

    <p style="position: absolute; bottom: 0">Datum: <?php echo date("d.m.Y")?> Uhrzeit: <?php echo date("G:i:s")?></p>

    <p style="position: absolute; bottom: 0; right: 0">#E20074</p>
</body>
</html>