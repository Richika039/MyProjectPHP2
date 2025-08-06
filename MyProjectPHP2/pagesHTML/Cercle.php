<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cercle</title>
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
        <h1 class="neon-title">Cercle</h1>
    </div>

  
    <article class="article">
        <div class="Projet">
      <h1>C'est quoi un cercle ?</h1>
          <p style="text-decoration: underline;">Introduction </p>
          <p> Un cercle est une forme géométrique plane qui consiste en tous les points dans un plan qui sont à une distance fixe, appelée rayon, d'un point fixe donné, appelé le centre. En d'autres termes, c'est l'ensemble de tous les points équidistants* d'un point central.</p>
          <p> *équidistants veut dire les points à même distance par apport aux centre.</p>
          <p style="text-decoration: underline;">Le rayon :</p>
          <p> Le calcul du rayon d'un cercle est simple. Le rayon est la distance entre le centre du cercle et n'importe quel point sur le cercle. Si vous connaissez les coordonnées du centre du cercle et celles d'un point sur le cercle, vous pouvez utiliser la distance entre deux points dans un système de coordonnées pour calculer le rayon.</p>
          <p style="text-decoration: underline;"> La circonférence :</p>
          <p> La circonférence d'un cercle est la longueur de son bord externe. En Mathématique on emploira 2*π*r pour déterminer la circonférence d'un cercle.</p>
          <p style="text-decoration: underline;"> La surface :</p>
          <p> La surface d'un cercle est la zone plane située à l'intérieur de sa circonférence. On utilise la formule pi*r^2 pour la calculer.</p>
        
          <div style="text-align: center;">
          <img  class="cercle" src="../Image/cercleshéma.png" id="Shéma" width="30%" style="max-width: 100%;">
          </div>
          <br>

            <h1>Projet Cercle</h1>
            <p style="text-decoration: underline;">Mise en situation :</p>
            <p>On demande de déterminer la surface et la circonférence d'un cercle grâce aux rayon qu'on encodera.</p>
            <p style="text-decoration: underline;"> Avant on réalise l'ordinogramme/le pseudo code :</p>
            <ol>
              <li>Lire et écrire le rayon grâce à une requête</li>
              <li>Structure conditionnel si pour vérifier si le rayon est >=0 si oui calculer sinon message pour signaler la condition</li>
              <li>Calculer la surface </li>
              <li>Surface = PI*Rayon^2</li>
              <li>Calculer la circonférence </li>
              <li>Circonférence = 2*PI*Rayon</li>
            </ol>
             <p> ^ -> exposant</p>
             <p> PI = π </p>
          <div style="text-align: center;">
            <p> L'ordinogramme (Ordi)</p>
           <img  src="../image/CercleOrdiV1.png" id="Shéma" style="max-width: 100%; width: 30%;height: 5%;">
           <br>
           <p> Le pseudo Code (Lda)</p>
          <img  src="../image/CercleLdaV1.png " id="Shéma" style="max-width: 100%; width: 30%;height: 5%; ">

        
            <H1>Les scripts en JS :</H1>
            <p>version sans formulaire se reposant avec un prompt :</p>
              <img  src="../Image/CercleJS1.png" id="Shéma" style="max-width: 100%; width: 30%;height: 5%; ">
              <br>
            <p>version avec un formulaire sans utilisé de prompt :</p>
               <img  src="../image/CercleJS2.png " id="Shéma" style="max-width: 100%; width: 30%;height: 5%; ">
            <br>

            <H1>Les scripts en PHP :</H1>
            <p>Version avec formulaire :</p>
             <img  src="../image/CerclePHPV1.png " id="Shéma" style="max-width: 100%; width: 30%;height: 5%; ">
             <br>
              <img  src="../image/CerclePHPFormV1.png " id="Shéma" style="max-width: 100%; width: 30%;height: 5%; ">

            <p>2e version :</p>
            <p>Version JS avec une condition rayon inférieur à 0 et alerte</p>
               <img  src="../image/CercleV3JS.png " id="Shéma" style="max-width: 100%; width: 30%;height: 5%; ">
               <br>
             <p>Version PHP avec une condition rayon inférieur à 0 et alerte</p>
                <img  src="../image/CercleV3PHP.png " id="Shéma" style="max-width: 100%; width: 30%;height: 5%; ">
                <br>
                 <img  src="../image/CercleV3FORMPHP.png " id="Shéma" style="max-width: 100%; width: 30%;height: 5%; ">

        <hr>
            Projet Cercle
            <hr>
            <form action="scriptCercle.php" method="post">
            <label>Rayon :</label> <input type="text" name="txtR">
            <input type="submit" value="calculer" name="">
            </form>
        </div>
        <p class="footer-text">© 2025 Conçu par Laurence Barthélémy - Tous droits réservés.</p>
          </div>
        </div>
         </article>
    </section>
       
</body>

   
</html>