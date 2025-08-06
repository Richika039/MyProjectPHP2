<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PGCD</title>
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
        <h1 class="neon-title">PGCD</h1>
    </div>
    <article class="article">
    <div class="Projet">
          <h1>C'est quoi un PGCD ?</h1>
          <p style="text-decoration: underline;">Introduction :</p>
          <p>Le PGCD (Plus Grand Commun Diviseur) est le plus grand nombre entier qui divise exactement deux nombres donnés sans laisser de reste. En d'autres termes, c'est le plus grand nombre par lequel les deux nombres peuvent être divisés sans qu'il reste de fraction ou de décimale. Le PGCD est utilisé dans divers contextes mathématiques, tels que la simplification de fractions, la résolution d'équations, ou la factorisation de nombres.</p>
         
          <h1>Projet PGCD</h1>
         <p style="text-decoration: underline;">Mise en situation :</p>
         <p>Il permettra de voir quel est le plus grand commun diviseur entre 2 nombre donner. </p>
          <p style="text-decoration: underline;">Mais avant on réalise un ordinogramme/pseudo code :</p>
          <ol>
            <li>Lire et écrire les 2 nombres (A et B)</li>
            <li>On va vérifier A par apport à B en calculant le modulo de A et B</li>
            <li>Le reste (R) sera le résultat de l'opération précédante</li>
            <li>On va attribuer le nombre de B à A</li>
            <li>Puis B sera utilisé pour contenir le reste (R)</li>
            <li>B passera la boucle tant que pour validé qu'il est pas égal à 0 donc supérieur à se nombre</li>
            <li>Ecrire la valeur de A qui contient le PGCD</li>
          </ol>
          <div style="text-align: center;">
            <p>L'ordinogramme (Ordi)</p>
          <img   src="../image/PGCDORDI1.png" alt="Ordi"style="max-width: 100%; width: 30%;height: 5%;">
          <br>
          <img   src="../image/PGCDORDI2.png" alt="Ordi"style="max-width: 100%; width: 30%;height: 5%;">
          <br>
          <img   src="../image/PGCDORDI3.png" alt="Ordi"style="max-width: 100%; width: 30%;height: 5%;">
          </div>
          <p>On utilise une nouvelle boucle qu'est la boucle tant que qui permet dans cette exercice de garder une seule donnée après la boucle car elle empêche de faire sortir les informations contenu dedans mais les données dans la boucle doivent être validé pour que nôtre écriture du PGCD détenu dans la variable A soit afficher.</p>
          <div style="text-align: center;">
            <br>
            <p>Le pseudo coda (Lda)</p>
          <img   src="../image/PGCDLDA.png" alt="Lda"style="max-width: 100%; width: 30%;height: 5%;">
          <br>
          <img   src="../image/PGCDLDA1.png" alt="Lda"style="max-width: 100%; width: 30%;height: 5%;">

          <H1>Les scripts en JS :</H1>
          <p>Version de base en cherchant dans le formulaire par le nom</p>
         <img   src="../image/PGCDJS.png" alt="Lda"style="max-width: 100%; width: 30%;height: 5%;">
         <br>
         <p>Version en cherchant avec l'ID avec GetElementByID</p>
           <img   src="../image/PGCDJS1.png" alt="Lda"style="max-width: 100%; width: 30%;height: 5%;">
            <H1>Les scripts en PHP :</H1>
            <img   src="../image/PGCDPHP.png" alt="Lda"style="max-width: 100%; width: 30%;height: 5%;">
          <hr>
        Projet - PGCD V2
        <hr>
        <form action="" method="post">
            <label>Le nombre A :</label>
            <input type="text" name="txtA"> <br><br>
            <label>Le nombre B :</label>
            <input type="text" name="txtB">
            <input type="submit" value="calculer" name="">
        </form>

        <?php
        if (isset($_POST['txtA'])){
            if(isset($_POST['txtB'])){
                echo "<hr><h1> Projet : PGCD </h1><hr>";
                $A=$_POST['txtA'];
                $B=$_POST['txtB'];
                while($B!=0){
                    $Reste=$A%$B;
                    $A=$B;
                    $B=$Reste;
                }
                $PGCD=$A;
                echo("PGCD=$PGCD <br>");
            }
        }
          
    ?>
         <p>© 2025 Conçu par Laurence Barthélémy Tous droits réservés.</p>
          </div>
    </div>
    </div>
    </article>

       
     
</body>
<footer class="footer">
   
</html>