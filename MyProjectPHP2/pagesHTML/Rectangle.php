<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rectangle</title>
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
        <h1 class="neon-title">Rectangle</h1>
    </div>
    <article class="article">
          <div class="Projet">
          <h2>Qu'est-ce qu'un Rectangle ?</h2>
          <p style="text-decoration: underline;">Introduction :</p>
          <p> Un rectangle est une forme géométrique plane qui possède quatre côtés. Ces côtés sont organisés en deux paires de côtés parallèles de longueurs égales, et les angles entre ces côtés sont tous droits (90 degrés). En d'autres termes, un rectangle ressemble à un carré allongé où les côtés opposés sont de longueurs égales et les angles sont droits.</p>
          <p style="text-decoration: underline;">Le périmètre :</p>
          <p>Le périmètre d'un rectangle est la longueur totale de ses côtés. Pour un rectangle avec une longueur L et une largeur l, son périmètre P peut être calculé comme suit : <br>
          P = 2 × (L + l).</p>
          
          <p style="text-decoration: underline;"> L'aire :</p>
          <p>L'aire d'un rectangle est la mesure de la surface contenue à l'intérieur de ses quatre côtés. Pour un rectangle avec une longueur L et une largeur l, son aire A peut être calculée comme suit : <br>
          A = L × l.</p>
          
          <p>En résumé, le périmètre d'un rectangle est la longueur totale de ses côtés, tandis que l'aire est la mesure de la surface à l'intérieur de ses côtés.</p>
          <div style="text-align: center;">
          <img  class="Rectangle" src="../Image/Rectangle.png" alt="RectangleTableau">
          </div>

          <h1>Projet-Rectangle</h1>
          <p style="text-decoration: underline;">Mise en situation :</p>
          <p>On demande grâce à la longueur et la largueur qu'on encodera de déterminer l'aire et le périmètre d'un rectangle </p>
          <p style="text-decoration: underline;"> Avant on réalise l'ordinogramme/le pseudo code :</p>
          <ol>
            <li>Lire et écrire 2 nombres (longueur et largeur)</li>
            <li>Calculer l'aire et le périmètre </li>
            <li>Aire : long*larg</li>
            <li>Périmètre : (long+larg)*2</li>
            <li>Ecrire l'Aire et le Périmètre</li>
          </ol>
          <div style="text-align: center;">
            <p>L'ordinogramme (Ordi)</p>
            <p>Dans cette ordinogramme on a des conditions qui vérifie la langueur qui dois minimum être 1 où plus et que la longueur soit supérieur à la largeur</p>
          <img  class="Rectangle" src="../image/OrdiRectangle1.png" alt="RectangleTableau">
          <br>
          <img  class="Rectangle" src="../image/Ordirectangle2.png" alt="RectangleTableau">
          <br>
          <img  class="Rectangle" src="../image/ordirectangle3.png" alt="RectangleTableau">
          <br>
          <p> Le pseudo code (Lda)</p>
          <p>Dans cette ordinogramme on a des conditions qui vérifie la langueur qui dois minimum être 1 où plus et que la longueur soit supérieur à la largeur</p>

          <img  class="Rectangle" src="../image/ldarectangle.png" alt="RectangleTableau">
          <H1>Les scripts en JS :</H1>

          <img  class="Rectangle" src="../image/rectangleJS.png" alt="RectangleTableau">

            <H1>Les scripts en PHP :</H1>

            <img  class="Rectangle" src="../image/rectanglescriptphp.png" alt="RectangleTableau">
            <br>
            <img  class="Rectangle" src="../image/rectanglefrmphp.png" alt="RectangleTableau">
          <h1 style="text-align: center;">Projet Rectangle</h1>

        <hr>
    Rectangle
    <hr>
    <form action="scriptRectangle.php" method="post">
    <label>La longueur :</label> <input type="text" name="txtLong">
    <label >La largeur :</label> <input type="text" name="txtLarg">
    <input type="submit" value="calculer" name="">
    </form>
         <p>© 2025 Conçu par Laurence Barthélémy Tous droits réservés.</p>
        </article>
</body>
   
</html>