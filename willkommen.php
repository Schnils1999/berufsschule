<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Kinocenter</title>
</head>
<body>
<center><b>Willkommen in ihrem Kinocenter</b><br><br>
    <p>Sehen Sie die neuesten Filme in ihrem Kinocenter!</p>
    <p>Datum: <?php echo date("d.m.Y"); ?> Uhrzeit: <?php echo date("G:i:s")?></p>
    <img src="kino.jpg" height="200" width="auto" alt="Leider ist ein Fehler aufgetreten."></center>

<center>
    <style>
        table{
            border: solid 1px black;
            text-align: center;
            border-collapse: collapse;
        }

        td, th{
            border: solid 1px black;
            padding: 5px;
        }

        th{
            background-color: blueviolet;
        }


    </style>
    <table>
        <colgroup>
            <col width="100">
            <col width="200">
            <col width="200">
            <col width="200">
        </colgroup>
        <tr>
            <th><b></b></th>
            <th><b>Freitag</b></th>
            <th><b>Samstag</b></th>
            <th><b>Sonntag</b></th>
        </tr>
        <tr>
            <td style="background-color: #ff50aa">15:00 Uhr</td>
            <td>Vor langer Zeit</td>
            <td>Vor langer Zeit</td>
            <td>Vor langer Zeit</td>
        </tr>
        <tr>
            <td style="background-color: #ff50aa">18:00 Uhr</td>
            <td>Geheimnis des Äquators</td>
            <td>Geheimnis des Äquators</td>
            <td>Geheimnis des Äquators</td>
        </tr>
        <tr>
            <td style="background-color: #ff50aa">20:00 Uhr</td>
            <td>Yellowstone River</td>
            <td>Yellowstone River</td>
            <td>Yellowstone River</td>
        </tr>
    </table>
</center>
</body>
</html>