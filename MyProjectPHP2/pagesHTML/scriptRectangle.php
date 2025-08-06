<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8" />
    <title>Rectangle</title>
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
        echo('<hr><h1> Projet Rectangle </h1><hr>');
        $long=$_POST['txtLong'];
        $larg=$_POST['txtLarg'];
        if($long>0){
            if($larg>0){
                if($long>=$larg){
                    $s=$long*$larg;
                    $p=($long+$larg)*2;
                    echo ("<p> surface : $s </p>");
                    echo ("<p> périmètre : $p </p>");
                }
                else {
                    echo("La longeur doit être supérieur où égal");
                }
            }
            else{
                echo("La largueur doit être positive");
            }
        }
        else{
            echo("la longueur doit être positive");
        }
       
    ?>
</body>
</html>