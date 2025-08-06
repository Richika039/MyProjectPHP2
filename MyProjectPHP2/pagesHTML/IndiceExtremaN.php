<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indice Extrema N</title>
    <link rel="stylesheet" href="../CSS/mainStyle.css">
    
</head>
<body>
     <header>
    <div class="header">
    <img src="../Image/logo_condorcet.png" alt="Logo de l'école" class="logo" width="200" height="150">
    </div>

     <nav>
    <ul>
      <li><a href="../index.php">Unité Programmation</a></li>

      <li><a href="#">Travail Réalisé</a>
        <ul>
          <li><a href="#">Calculs et affectation</a>
            <ul>
              <li><a href="../pagesHTML/Cercle.php">Cercle</a></li>
              <li><a href="../pagesHTML/Rectangle.php">Rectangle</a></li>
              <li><a href="../pagesHTML/Conversion.php">Conversion</a></li>
            </ul>
          </li>
          <li><a href="#">Structures Conditionnelles</a>
            <ul>
              <li><a href="../pagesHTML/Calculette.php">Calculette</a></li>
              <li><a href="../pagesHTML/Civilité.php">Civilité</a></li>
              <li><a href="../pagesHTML/Date_longue.php">Date Longue</a></li>
              <li><a href="../pagesHTML/Second_Degres.php">Second Degré</a></li>
            </ul>
          </li>
          <li><a href="#">Structures Répétitives</a>
            <ul>
              <li><a href="./pagesHTML/PGCD.php">PGCD</a></li>
              <li><a href="./pagesHTML/Factorielle.php">Factorielle</a></li>
              <li><a href="./pagesHTML/Table_Multiplication.php">Table de multiplication</a></li>
            </ul>
          </li>
          <li><a href="#">Les Fonctions</a>
            <ul>
              <li><a href="./pagesHTML/PPCM.php">PPCM</a></li>
              <li><a href="./pagesHTML/Coefficient_Binomiaux.php">Coefficient binomiaux</a></li>
            </ul>
          </li>
          <li><a href="#">Les Tableaux</a>
            <ul>
              <li><a href="../pagesHTML/Test_Achats.php">Test Achats</a></li>
              <li><a href="../pagesHTML/ExtremaN.php">Extrema N</a></li>
              <li><a href="../pagesHTML/IndiceExtremaN.php">Indice Extrema N</a></li>
            </ul>
          </li>
        </ul>
      </li>

      <li><a href="#">Mon Haute École Condorcet</a>
        <ul>
          <li><a href="../pagesHTML/SectionE-Business.php">Section E-Business</a></li>
          <li><a href="../pagesHTML/HephCondorcet.php">HephCondorcet</a></li>
        </ul>
      </li>
    </ul>
  </nav>
     </header>
    <section>
    <div class="banniere-container">
      <div id="buttonbanière">
              <img  class="banniere" src="../Image/programming-background.jpg" alt="Imagebannière">
              <button class="button">Pourquoi avoir créé ce site ? </button>
              </div>
             
                <div id="mymodal"class="Mymodal">
                  <span class="close">&times;</span>
                    <div class="modal-content">
                        <p>J'ai crée se formidable site pour permettre de montrer se qu'on a appris lors de nos cours de programmation</p>

                        <p>Vous parlez par se biais de nôtre école Condorcet et de nôtre option E-Business</p>

                        <p>En tant qu'étudiante en BAC 1 je veux montrer se qu'est la programmation grâce à qlq exemple </p>
                       
                    </div>
                </div>
                <script>
                  //* "lire" la boite modale"
                  var modal = document.getElementById ("mymodal");
                  //* "lire" le bouton pour ouvrir la boite modale
                  var btn = document.getElementsByClassName("button")[0];
                  //* "lire" l'élément <span> qui permettra de fermer la boite modale
                  var span = document.getElementsByClassName("close")[0];
                  //* lorsque l'utilisateur clique sur le boutton 
                  btn.onclick = function(){
                      modal.style.display = "block"
                  }
                  //*lorsque l'utilisateur clique sur le bouton fermer 
                  span.onclick = function() {
                      modal.style.display = "none"
                  }
                  //* lorsque l'utilisateur clique en dehors de la boite modale et pour permettre de la femrer
                  window.onclick = function(event) {
                      if(event.target == modal) {
                          modal.style.display = "none"
                      }
                  }
              
              </script>
        <h1 class="neon-title">Indice Extrema N</h1>
    </div>
    <article class="article">
    <div class="Projet">

        <h1>C'est quoi un indice d'extrema ?</h1>

        <p style="text-decoration: underline;">Introduction :</p>
        <p>
        Quand on cherche un <strong>extrema</strong> (minimum ou maximum) dans une liste de nombres, on peut aussi vouloir connaître sa <strong>position</strong> dans la liste. Cette position est appelée <strong>indice</strong>.
        </p>
        <p>
        L’indice représente le <strong>rang</strong> d’un nombre dans une série. On commence souvent à compter à partir de 0 en programmation. Exemple :
        </p>
        <p>
        Liste : [8, 3, 12, 5, 7]<br>
        - Le <strong>minimum</strong> est 3 → il se trouve à l’indice <strong>1</strong><br>
        - Le <strong>maximum</strong> est 12 → il est à l’indice <strong>2</strong>
        </p>

        <h1>Projet Indice Extrema</h1>

        <p style="text-decoration: underline;">Mise en situation :</p>
        <p>
        On souhaite réaliser un programme qui non seulement trouve le minimum et le maximum d'une liste de nombres, mais aussi indique <strong>à quelle position</strong> (indice) ils se trouvent.
        </p>

        <p style="text-decoration: underline;">Avant on réalise un ordinogramme / pseudo code :</p>
        <ol>
        <li>Lire et stocker X nombres dans une liste ou un tableau</li>
        <li>Initialiser deux variables : min et max avec la première valeur</li>
        <li>Initialiser deux variables : indiceMin = 0 et indiceMax = 0</li>
        <li>Parcourir la liste avec une boucle (avec un indice i)</li>
        <li>À chaque passage :
            <ul>
            <li>Si la valeur est plus petite que min → min = valeur et indiceMin = i</li>
            <li>Si la valeur est plus grande que max → max = valeur et indiceMax = i</li>
            </ul>
        </li>
        <li>Afficher min, max et leurs indices</li>
        </ol>

        <p>
        Cet algorithme est utile si on veut savoir non seulement <em>quelle</em> est la plus grande ou la plus petite valeur, mais aussi <em>où</em> elle se trouve dans une liste.
        </p>

        <div style="text-align: center;">
        <p>L'ordinogramme (Ordi)</p>
        <img src="../image/IENORDI1.png" alt="Ordi" style="max-width: 100%; width: 30%; height: 5%;">
        <br>

        <h1>Les scripts en JS :</h1>
         <video controls width="60%" height="80%">
              <source src="../Video/IENJS.mp4" type="video/mp4">
            </video>
        <h1>Les scripts en PHP :</h1>
          <video controls width="60%" height="80%">
              <source src="../Video/IENPHP.mp4" type="video/mp4">
            </video>
      <hr>
        <h1>Indice Extrema N</h1>
        <hr>
        <form method="post">
            <label>Introduire les nombres (séparés par une virgule) :</label>
            <input type="text" name="ListeNombre" size="50">
            <br>
            <input type="submit" value="=">
        </form>
        <br>
        <hr>
        <div id="tableau">
        <?php
                function LireNombres($Y){
                    $Mn = [$_POST['Mn']];
                    $Mx = [$_POST['Mx']];
                    $N = [$_POST['ListeNombre']];
                    $i = [$_POST['i']];
                    for ($i = 0; $i < $N; $i++) {
                        $Y[$i] = ("Introduire un nombre :");
                    }
                }

                function IndiceMx($Y){
                    $IndiceMx = 0;
                    $Mx = $Y[0];
                    $N = count($Y);
                    for ($i = 1; $i <= $N; $i++) {
                        if ($Y[$i] > $Y[$IndiceMx]) {
                            $IndiceMx = $i;
                        }
                    }
                    return $IndiceMx;
                }

                function IndiceMn($Y){
                    $IndiceMn = 0;
                    $Mn = $Y[0];
                    $N = count($Y);
                    for ($i = 1; $i <= $N; $i++) {
                        if ($Y[$i] > $Y[$IndiceMn]) {
                            $IndiceMn = $i;
                        }
                    }
                    return $IndiceMn;
                }

                function Extrema(){
                    $Nombres = array();
                    $ListeNombres = $_POST['ListeNombre'];
                    $Nombres = explode(",", $ListeNombres);
                    EcrireExtrema($Nombres);
                }

                function EcrireExtrema($Y){
                    $contentdiv = "<h1> Rapport Extrema N </h1>";
                    $contentdiv .= "<table>";
                    $contentdiv .= "<caption> Liste des nombres lus </caption>";
                    $contentdiv .= "<tr>";
                    for ($i = 0; $i < count($Y); $i++) {
                        $contentdiv .= "<th>" . $Y[$i] . "</th>";
                    }
                    $contentdiv .= "</tr>";
                    $contentdiv .= "<table>";
                    $iMax = IndiceMx($Y);
                    $iMin = IndiceMn($Y);
                    $contentdiv .= "<p> Le maximum est " . $Y[$iMax] . " à l'indice " . $iMax . "</p>";
                    $contentdiv .= "<p> Le minimum est " . $Y[$iMin] . " à l'indice " . $iMin . "</p>";
                    echo $contentdiv;
                }
        ?>

            </div>

             <p>© 2025 Conçu par Laurence Barthélémy Tous droits réservés.</p>
           
 </div>
    </div>
    </article>

       
    </body>
</body>

   
</html>