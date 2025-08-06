<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversion</title>
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
        <h1 class="neon-title">Conversion</h1>
    </div>
   <article class="article">
          <div class="Projet">
          <h2>Qu'est-ce qu'une Conversion ?</h2>
        <p style="text-decoration: underline;">Introduction :</p>
        <p>Le temps peut être exprimé de différentes façons : en heures, en minutes ou en secondes. Lorsqu’on dispose d’un nombre total de secondes, il est souvent utile de le convertir en une forme plus lisible, c’est-à-dire en heures, minutes et secondes. Cela permet de mieux comprendre et organiser une durée.</p>

        <p style="text-decoration: underline;">Le principe de conversion :</p>
        <p>Il faut savoir que :</p>
        <ul>
        <li>1 heure = 3600 secondes</li>
        <li>1 minute = 60 secondes</li>
        </ul>
        <p>Pour convertir un nombre de secondes donné :</p>
        <ul>
        <li>On commence par diviser le nombre de secondes par 3600 pour obtenir le nombre d’heures entières.</li>
        <li>On récupère ensuite le reste de cette division pour calculer les minutes : on le divise par 60.</li>
        <li>Le reste final représente les secondes restantes.</li>
        </ul>

        <p style="text-decoration: underline;">Exemple de calcul :</p>
        <p>Si on veut convertir 10 000 secondes :</p>
        <ul>
        <li>Heures = 10000 ÷ 3600 = 2 heures (reste : 2800)</li>
        <li>Minutes = 2800 ÷ 60 = 46 minutes (reste : 40)</li>
        <li>Secondes restantes = 40</li>
        </ul>
        <p>Donc, 10 000 secondes correspondent à 2 heures, 46 minutes et 40 secondes.</p>

        <h1>Projet-Conversion</h1>

        <p style="text-decoration: underline;">Mise en situation :</p>
        <p>On demande, à partir d’un nombre de secondes encodé, d’afficher le temps sous forme d’heures, minutes et secondes.</p>

        <p style="text-decoration: underline;">Avant, on réalise l'ordinogramme / le pseudocode :</p>
        <ol>
        <li>Lire et écrire un nombre entier (secondes)</li>
        <li>Calculer le nombre d’heures : secondes ÷ 3600</li>
        <li>Calculer le reste pour les minutes : (secondes % 3600) ÷ 60</li>
        <li>Calculer le reste final pour les secondes : secondes % 60</li>
        <li>Afficher les heures, les minutes et les secondes</li>
        </ol>

          <div style="text-align: center;">
            <p>L'ordinogramme (Ordi)</p>
            <p>condition qui vérifie qu'on rentre un nombre supérieur à zéro et qu'est entier</p>
          <img  class="Rectangle" src="../image/ordiconversion.png" alt="RectangleTableau">
          <br>
           <img  class="Rectangle" src="../image/ordiconversion2.png" alt="RectangleTableau">
           <br>
          <p> Le pseudo code (Lda)</p>
        <p>condition qui vérifie qu'on rentre un nombre supérieur à zéro et qu'est entier</p>

          <img  class="Rectangle" src="../image/ldaconversion.png" alt="RectangleTableau">
          <H1>Les scripts en JS :</H1>
            <img  class="Rectangle" src="../image/ConversionJS.png" alt="RectangleTableau">
            <H1>Les scripts en PHP :</H1>
         <img  class="Rectangle" src="../image/ConversionPHPScript.png" alt="RectangleTableau">
         <br>
          <img  class="Rectangle" src="../image/ConversionPHPFrm.png" alt="RectangleTableau">
        
         <hr>
     Projet Conversion
    <hr>
    <form action="scriptConversion.php" method="post">
    <label>Les secondes :</label> <input type="text" name="txtSec">
    <input type="submit" value="calculer" name="">
    </form>
        </div>
          <p>© 2025 Conçu par Laurence Barthélémy Tous droits réservés.</p>
         </div>
  
</html>