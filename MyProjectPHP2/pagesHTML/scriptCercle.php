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
        echo('<hr><h1> Projet Cercle </h1><hr>');
        $r=$_POST['txtR'];
        if($r>0){
            $s=number_format(M_PI*$r**2,2);
            $c=number_format(2*M_PI*$r);
            echo ("<p> surface : $s </p>");
            echo ("<p> circonférence : $c </p>");
        } 
        else{
            echo('Calcul impossible rayon négatif');
        }
    ?>
</body>
</html>