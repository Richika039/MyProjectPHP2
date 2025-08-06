<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Multiplication</title>
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
        <h1 class="neon-title">Table Multiplication</h1>
    </div>
   <article class="article">
  <div class="Projet">

    <h1>C'est quoi une table de multiplication ?</h1>

    <p style="text-decoration: underline;">Introduction :</p>
    <p>
      Une table de multiplication est un outil mathématique qui permet de connaître rapidement les résultats de la multiplication d’un nombre par d’autres entiers. C’est une manière simple d’apprendre et de visualiser les produits.
    </p>
    <p>
      Par exemple, la table de 5 contient les produits de 5 avec les nombres de 1 à 10 :
      <br>5 × 1 = 5<br>5 × 2 = 10<br>...<br>5 × 10 = 50
    </p>

    <h1>Projet Table de multiplication</h1>

    <p style="text-decoration: underline;">Mise en situation :</p>
    <p>
      On veut créer un programme qui permet de saisir un nombre entier (par exemple 7), et il génère automatiquement la table de multiplication de ce nombre de 1 à 10.
    </p>
    <p>
      L’utilisateur pourra saisir n’importe quel nombre, et grâce à une boucle et à un indice (le multiplicateur), le script calculera tous les résultats et les affichera à l’écran.
    </p>

    <p style="text-decoration: underline;">Avant on réalise un ordinogramme / pseudo code :</p>
    <ol>
      <li>Lire et écrire un nombre (appelé "nombre")</li>
      <li>Initialiser une boucle allant de 1 à 10</li>
      <li>À chaque passage, multiplier le nombre saisi par l’indice de la boucle</li>
      <li>Afficher le résultat sous la forme : nombre × indice = résultat</li>
    </ol>

    <p>Indice = nombre utilisé dans la boucle pour multiplier le nombre de départ (ex : 1, 2, 3, … jusqu’à 10)</p>

    <div style="text-align: center;">
      <h1>Les scripts en JS :</h1>
         <img src="../image/MultipleJS.png" alt="Lda" style="max-width: 100%; width: 30%; height: 5%;">
         <br>
        <img src="../image/MultipleJS1.png" alt="Lda" style="max-width: 100%; width: 30%; height: 5%;">

    <h1>Les scripts en PHP :</h1>
       <img src="../image/MultiplePHP.png" alt="Lda" style="max-width: 100%; width: 30%; height: 5%;">
       <br>
          <img src="../image/MultiplePHP1.png" alt="Lda" style="max-width: 100%; width: 30%; height: 5%;">

    </div>
    <hr>
    <h1>Les 10 multiples</h1>
    <hr>
        <form action="" method="post">
          <label for="N">Entrer un nombre :</label>
          <input type="text" name="txtN" id="N" size="5">
      </form>

      <?php
      echo("<table>");
      echo("<tr>");
      echo("<th style='border: 2px solid black'>i</th>");
      echo("<th style='border: 2px solid black'>Multiple</th>");
      echo("</tr>");

      if (isset($_POST["txtN"])) { 
          $N = $_POST["txtN"];
          for ($i = 1; $i <= 10; $i++) { 
              echo("<tr>");
              echo("<td style='border: 2px solid black'>" . $i . "</td>");
              echo("<td style='border: 2px solid black'>" . ($i * $N) . "</td>");
              echo("</tr>");
          }
      }

      echo("</table>");
      ?>

        <p>© 2025 Conçu par Laurence Barthélémy Tous droits réservés.</p>
        </div>
        </div>
    
  </div>
</article>

     
        
</body>

</html>