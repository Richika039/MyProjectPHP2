<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extrema N</title>
    <link rel="stylesheet" href="../CSS/mainStyle.css">
      <script>           
                function Extrema() {
                    var Nombres=new Array();
                    let N=parseFloat(document.frmExtremaN.txtN.value);
                    for (let i = 0; i <= N-1; i++) {
                        Nombres[i]=parseFloat(prompt("Entrez un nombre :"));
                    }
                    let Mn=Nombres[0];
                    let Mx=Nombres[0];
                    for (let i = 1; i <= N-1; i++) {
                        if (Nombres[i]>Mx) {
                            Mx=Nombres[i];
                        }
                        else if (Nombres[i]<Mn) {
                            Mn=Nombres[i];
                        } 
                    }
                    document.write("Minimum : ",Mn,"<br>Maximum : ",Mx)  
                }
            </script>
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
        <h1 class="neon-title">Extrema N</h1>
    </div>
   <article class="article">
  <div class="Projet">

    <h1>C'est quoi un extrema ?</h1>

    <p style="text-decoration: underline;">Introduction :</p>
    <p>
      En mathématiques et en programmation, un <strong>extrema</strong> désigne une valeur extrême dans un ensemble de données. Il peut s’agir du plus petit (minimum) ou du plus grand (maximum) nombre dans une série.
    </p>
    <p>
      Par exemple, si on a les nombres : 7, 12, 4, 9 <br>
      Le <strong>minimum</strong> est 4 et le <strong>maximum</strong> est 12.
    </p>

    <h1>Projet Recherche d'extrema</h1>

    <p style="text-decoration: underline;">Mise en situation :</p>
    <p>
      On souhaite créer un programme qui permet de saisir plusieurs nombres (au moins 3), et d’identifier automatiquement le plus petit (min) et le plus grand (max) parmi eux.
    </p>
    <p>
      Le programme devra comparer chaque valeur avec les autres pour garder les extrêmes dans deux variables séparées : une pour le min, une pour le max.
    </p>

    <p style="text-decoration: underline;">Avant on réalise un ordinogramme / pseudo code :</p>
    <ol>
      <li>Lire et stocker X nombres dans une liste ou tableau</li>
      <li>Initialiser deux variables : min et max, avec le premier nombre</li>
      <li>Parcourir tous les nombres un par un avec une boucle</li>
      <li>À chaque passage :
        <ul>
          <li>Si le nombre courant est plus petit que min → min = ce nombre</li>
          <li>Si le nombre courant est plus grand que max → max = ce nombre</li>
        </ul>
      </li>
      <li>Afficher min et max à la fin</li>
    </ol>

    <p>
      Ce type d’algorithme est utile pour traiter des séries de données, pour visualiser les extrêmes, et pour automatiser des comparaisons sans devoir tout analyser à la main.
    </p>

    <div style="text-align: center;">
      <p>L'ordinogramme (Ordi)</p>
      <img src="../image/ENORDI1.png" alt="Ordi" style="max-width: 100%; width: 30%; height: 5%;">
      <br>
    <img src="../image/ENORDI2.png" alt="Ordi" style="max-width: 100%; width: 30%; height: 5%;">
    <br>
    <img src="../image/ENORDI3.png" alt="Ordi" style="max-width: 100%; width: 30%; height: 5%;">
        <br>
    <img src="../image/ENORDI4.png" alt="Ordi" style="max-width: 100%; width: 30%; height: 5%;">

    <h1>Les scripts en JS :</h1>
  <video controls width="60%" height="80%">
              <source src="../Video/ENJS.mp4" type="video/mp4">
            </video>

    <h1>Les scripts en PHP :</h1>
    <img src="../image/ENPHP.png" alt="Ordi" style="max-width: 100%; width: 30%; height: 5%;">
    <hr>
    <h1>Extrema N</h1>
    <hr>
         <form action="" method="post">
        <label for="ListeValeurs">Liste des valeurs (séparés par des virgules)</label>
        <input type="text" name="TxtListeValeurs" id="ListeValeurs">
        <button type="submit">Rechercher les extrema</button>
    </form>
         
    <?php
     function Maximum($X) {
        $N=count($X);
        $Mx=$X[0];
        for ($i = 1; $i <= $N-1; $i++) {
            if ($X[$i]>$Mx) {
                $Mx=$X[$i];
            }
        }
        return $Mx;
    }
    function Minimum($X) {
        $N=count($X);
        $Mn=$X[0];
        for ($i = 1; $i <= $N-1; $i++) {
            if ($X[$i]<$Mn) {
                $Mn=$X[$i];
            }
        }
        return $Mn;
    }
        
        if (isset ($_POST["TxtListeValeurs"])) {
            $ListeValeurs=$_POST["TxtListeValeurs"];
            $Valeurs=explode(",",$ListeValeurs);
            echo("Maximum :".Maximum($Valeurs)." Minimum :".Minimum($Valeurs));
        }        
      ?> 
        </div>

             <p>© 2025 Conçu par Laurence Barthélémy Tous droits réservés.</p>
    </div>
  </div>
</article>  
 
</body>
</html>