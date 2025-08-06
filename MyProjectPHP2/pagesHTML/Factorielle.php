<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorielle</title>
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
        <h1 class="neon-title">Factorielle</h1>
    </div>
        <article class="article">
        <div class="Projet">
            <h1>C'est quoi une factorielle ?</h1>

            <p style="text-decoration: underline;">Introduction</p>
            <p>
            En mathématiques, la <strong>factorielle</strong> d’un nombre entier naturel <strong>n</strong> est le produit de tous les entiers positifs inférieurs ou égaux à <strong>n</strong>. Elle est notée <strong>n!</strong>.
            </p>
            <p>
            Par exemple : <strong>5! = 5 × 4 × 3 × 2 × 1 = 120</strong>
            </p>

            <p style="text-decoration: underline;">Utilité :</p>
            <p>
            La factorielle est très utilisée en mathématiques, en particulier dans :
            </p>
            <ul>
            <li>Les probabilités (ex : les arrangements et les combinaisons)</li>
            <li>Le calcul des coefficients binomiaux</li>
            <li>Les algorithmes et la programmation récursive</li>
            </ul>

            <p style="text-decoration: underline;">Cas particuliers :</p>
            <p>
            Par définition, <strong>0! = 1</strong>. Ce cas particulier est important pour de nombreuses formules mathématiques.
            </p>

            <h1>Projet Factorielle</h1>

            <p style="text-decoration: underline;">Mise en situation :</p>
            <p>
            On demande de calculer la factorielle d’un nombre entier positif qu’on encodera.
            </p>

            <p style="text-decoration: underline;">Avant on réalise l'ordinogramme / le pseudo code :</p>
            <ol>
            <li>Lire et écrire un entier n grâce à une requête</li>
            <li>Vérifier si n est un entier ≥ 0</li>
            <li>Initialiser une variable résultat à 1</li>
            <li>Utiliser une boucle pour multiplier tous les entiers de 1 à n</li>
            <li>Afficher le résultat</li>
            </ol>

            <p>! = notation de la factorielle</p>
            <p>Exemple : 4! = 4 × 3 × 2 × 1 = 24</p>

            <div style="text-align: center;">
            <p>L'ordinogramme (Ordi)</p>
            <p>Dans les algorithmes on vérifie cette fois avec une boucle FOR</p>
            <img src="../image/Ordifactorielle.png" id="Shéma" style="max-width: 100%; width: 30%; height: 5%;">
            <br>
            <p>Le pseudo Code (Lda)</p>
            <img src="../image/FactorielleLDA.png" id="Shéma" style="max-width: 100%; width: 30%; height: 5%;">

            <h1>Les scripts en JS :</h1>
             <img src="../image/FactorielleJS.png" id="Shéma" style="max-width: 100%; width: 30%; height: 5%;">
             <br>
              <img src="../image/FactorielleJS1.png" id="Shéma" style="max-width: 100%; width: 30%; height: 5%;">

            <h1>Les scripts en PHP :</h1>
             <img src="../image/FactoriellePHP.png" id="Shéma" style="max-width: 100%; width: 30%; height: 5%;">
       
            </div>

          

        <hr>
        <h1>Projet-Factorielle</h1>
        <hr>
        <form action="" method="post">
            Introduire un nombre :
            <input type="text" name="txtN">
            <input type="submit" value="=">
        </form>

        <?php
        if (isset($_POST['txtN'])) {
            $n = $_POST['txtN'];
            $f = 1;
            if ($n < 0) {
                echo "La factorielle n'est pas définie pour les nombres négatifs.";
            } else {
                for ($i = 1; $i <= $n; $i++) {
                    $f *= $i;
                }
                echo "Factorielle de $n : $f";
            }
        }
        ?>
          <p>© 2025 Conçu par Laurence Barthélémy Tous droits réservés.</p>
        </div>
        </div>
         </div>
        </article>
</body>

</html>