<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second Degrés</title>
    <link rel="stylesheet" href="../CSS/mainStyle.css">
    <script>
        function solutions()
        {
            let x1, x2, delta;
            let a=parseFloat(document.frmEquationSecondDegre.txtA.value);
            let b=parseFloat(document.frmEquationSecondDegre.txtB.value);
            let c=parseFloat(document.frmEquationSecondDegre.txtC.value);
            if (a==0) {
                delta="/";
                x2="/";
                if (b==0) {
                    if (c==0) {
                        x1="Solution indéterminée";
                    }
                    else{
                        x1="Solution impossible";
                    }  
                }
                else{
                    x1=-c/b;
                }  
            }
            else{
                delta=(b**2)-4*a*c;
                if (delta>=0) {
                    x1=(-b+Math.sqrt(delta))/(2*a);
                    x2=(-b-Math.sqrt(delta))/(2*a);
                }
                else{
                    x1="Pas de solution réelle";
                    x2=" ";
                }
            }
            document.frmEquationSecondDegre.txtX1.value=x1;
            document.frmEquationSecondDegre.txtX2.value=x2;
            document.frmEquationSecondDegre.txtDelta.value=delta;                     
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
        <h1 class="neon-title">Second Degrés</h1>
    </div>
     <article class="article">
  <div class="Projet">
    <h1>C'est quoi une équation du second degré ?</h1>
    
    <p style="text-decoration: underline;">Introduction</p>
    <p>
      Une équation du second degré est une équation polynomiale de la forme <strong>ax² + bx + c = 0</strong>,
      où <strong>a</strong>, <strong>b</strong> et <strong>c</strong> sont des nombres réels (avec a ≠ 0). Cette forme est aussi appelée équation quadratique. 
    </p>

    <p style="text-decoration: underline;">Le discriminant :</p>
    <p>
      Pour résoudre une équation du second degré, on utilise le <strong>discriminant</strong>, noté <strong>Δ</strong> (delta).
      Il se calcule avec la formule : <strong>Δ = b² - 4ac</strong>.
    </p>
    <p>
      Le discriminant permet de déterminer le nombre et la nature des solutions de l’équation :
    </p>
    <ul>
      <li>Si Δ > 0 → deux solutions réelles distinctes.</li>
      <li>Si Δ = 0 → une seule solution réelle (double racine).</li>
      <li>Si Δ < 0 → aucune solution réelle (les solutions sont complexes).</li>
    </ul>

    <p style="text-decoration: underline;">Les formules des solutions :</p>
    <p>
      Si Δ ≥ 0, les solutions sont données par les formules :
      <br><strong>x₁ = (-b - √Δ) / (2a)</strong><br>
      <strong>x₂ = (-b + √Δ) / (2a)</strong>
    </p>
    <p>
      Si Δ = 0, alors x₁ = x₂ = <strong>-b / (2a)</strong>
    </p>


    <h1>Projet Second Degré</h1>

    <p style="text-decoration: underline;">Mise en situation :</p>
    <p>On demande de déterminer les solutions d'une équation du second degré à l'aide des coefficients a, b et c que l'on encodera.</p>

    <p style="text-decoration: underline;">Avant on réalise l'ordinogramme / le pseudo code :</p>
    <ol>
      <li>Lire et écrire les valeurs de a, b et c grâce à une requête</li>
      <li>Vérifier si a ≠ 0 (condition obligatoire pour une équation du second degré)</li>
      <li>Calculer le discriminant : Δ = b² - 4ac</li>
      <li>Si Δ > 0, calculer deux solutions réelles : x₁ et x₂</li>
      <li>Si Δ = 0, calculer une seule solution réelle</li>
      <li>Si Δ < 0, afficher qu'il n'y a pas de solution réelle</li>
    </ol>

    <p>^ -> exposant</p>
    <p>√ -> racine carrée</p>
    <p>Δ = discriminant</p>

    <div style="text-align: center;">
       

    <h1>Les scripts en JS :</h1>
      <video controls width="60%" height="80%">
              <source src="../Video/SecondDegre.mp4" type="video/mp4">
            </video>

   
    </div>


           <h1 style="text-align: center;">Projet Second Degré</h1>
       <div class="form-container">
          <form name="frmEquationSecondDegre"class="styled-form">
            <p>Résolution Calcul :</p>
            <input type="text" name="txtA" id="a" size="5">
            <Label for="a">x^2 +</Label>
            <input type="text" name="txtB" id="b" size="5">
            <Label for="a"> x +</Label>
            <input type="text" name="txtC" id="c" size="5">
            <Label for="a"> = 0</Label>
            <br>
            <input type="button" name="btnResoudre" value="Résoudre" onclick="solutions()" id="btn" class="styled-button">
            <hr>
            <Label for="x1">Solution(s) :</Label>
            <input type="text" name="txtX1" id="x1" size="15"> , <input type="text" name="txtX2" id="x2" size="8"> <br>
            <Label for="delta">Delta :</Label>
            <input type="text" name="txtDelta" id="delta" size="8">            
        </form>
           <p class="footer-text">© 2025 Conçu par Laurence Barthélémy - Tous droits réservés.</p>
        </div>
     
          </div>
        </div>
         </article>
        
</body>

</html>