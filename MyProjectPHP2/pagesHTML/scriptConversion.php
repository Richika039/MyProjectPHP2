<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8" />
    <title>Cercle</title>
    <style>
       body{
            background-color: rgb(174, 214, 215);
            text-align: center;
        }
        h1{
            color:slateblue;
        }
        p{
            color:blue;
        }
    </style>
</head>
<body>
    <?php
        echo('<hr><h1> Projet Conversion </h1><hr>');
        $nSec=$_POST['txtSec'];
        if ($nSec > 0) {
            if ($nSec % 2 == 0) {
                $h = intval($nSec / 3600);
                $r = $nSec % 3600;
                $m = intval($r / 60);
                $s = $r % 60;

                echo ("<p> Heure : $h </p>");
                echo ("<p> Minute : $m </p>");
                echo ("<p> Secondes : $s </p>");
            } else {
                echo("Le nombre doit être pair.</p>");
            }
        } else {
            echo("entrer un nombre positif.</p>");
        }
?>
</body>
</html>