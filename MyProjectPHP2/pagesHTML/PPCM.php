<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Achats</title>
    <link rel="stylesheet" href="../CSS/mainStyle.css">

    <script>
        function Pgcd(X,Y)
        {
            if(X<Y){
            let C=X;
            X=Y;
            Y=C;
            }
            if(Y==0){
            return X;
            }
            return Pgcd(Y, X%Y);
        }

        function TrouverPpcm()
        {
            let A=parseFloat(document.frmPpcm.txtA.value);
            let B=parseFloat(document.frmPpcm.txtB.value);

            let PPCM=(A*B)/Pgcd(A,B);

            document.frmPpcm.txtPpcm.value=PPCM;
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
        <h1 class="neon-title">PPCM</h1>
    </div>
    <article class="article">
      <div class="Projet">
      <H1>C'est quoi le PPCM ?</H1>
      <p style="text-decoration: underline;">Introduction :</p>
      <p>Le PPCM (Plus Petit Commun Multiple) est le plus petit nombre entier qui est divisible par deux nombres donnés sans laisser de reste. C'est le plus petit multiple commun des deux nombres.</p>

       <h1>Projets PPCM</h1>
       <p style="text-decoration: underline;">Mise en situation :</p>
       <p>On va déterminer le plus petit commun multiple à partir de 2 nombres qu'on aura encoder et se PPCM est calculer grâce aux PGCD on se base du plus grand commun diviseur pour trouver le plus petit des deux </p>
       <p style="text-decoration: underline;">Mais avant on réalise un ordinogramme :</p>
        <ol>
          <li>On va lire les 2 nombres (A et B)</li>
          <li>On calculera d'abord le PGCD entre A et B pour ensuite avoir le PPCM</li>
          <li>Cependant l'algorithme ne comprendra pas PPCM=(A*B)/PGCD(A,B) on devra lui faire comprendre avec un module auxiliaire</li>
          <li>Après le module auxiliaire l'opération qu'est dans le module principale poura être compris et alors seulement là il écrira le PPCM</li>
        </ol>
       <div style="text-align: center;">
        <p>l'ordinogramme (Ordi)</p>
       <img   src="../image/PPCMORDI.png" alt="Ordi"style="max-width: 100%; width: 30%;height: 5%;">
       <br>
        <img   src="../image/PPCMORDI1.png" alt="Ordi"style="max-width: 100%; width: 30%;height: 5%;">
        <br>
         <img   src="../image/PPCMORDI2.png" alt="Ordi"style="max-width: 100%; width: 30%;height: 5%;">
       </div>
       <P>Module principale contenant la requête avec nos nombres et le calcul du PPCM qui devra être expliquer avec le module auxiliaire</P>
        <p>Module Auxiliaire dans lequel on va attribuer X,Y pour A,B et reprendre la même logique que le projet PGCD</p>
       <p>On vérifie si le 1er nombre est inférieur aux 2e si c'est le cas on met X dans une nouvel variable (C) et on fait X=Y et Y=C on les échangent</p>
        <p>Après tout comme pour PGCD on a le reste avec modulo et on échange X=Y et Y=R</p>
        <p>Ensuite elle passe dans la boucle tant que pour vérifier que Y est supérieur à 0</p>
        <p>Si oui on retourne la valeur attribué à X pour effectuer le calcul du PPCM qu'il a pas su lire</p>
       <div style="text-align: center;">
        <p>Lda (Pseudo code)</p>
        <img   src="../image/PPCMLDA.png" alt="Ordi"style="max-width: 100%; width: 30%;height: 5%;">
       </div>
      
        <div style="text-align: center;">
      
         <H1>Les scripts en JS :</H1>
        <img   src="../image/PPCMJS.png" alt="Ordi"style="max-width: 100%; width: 30%;height: 5%;">
            
            <H1>Les scripts en PHP :</H1>
        <img   src="../image/PPCMPHP.png" alt="Ordi"style="max-width: 100%; width: 30%;height: 5%;">
                  <br>
                  <hr>
                  Projet PPCM
                  <hr>
           <form action="" method="post">
                A : <input type="number" name="A" required>
                B : <input type="number" name="B" required>
                <input type="submit" value="Calculer le PPCM">
            </form>

            <?php
                function pgcd($X,$Y){
                    if ($X<$Y){
                        $C=$X;
                        $Y=$C;
                    }
                    while ($Y!=0){
                        $Reste=$X%$Y;
                        $X=$Y;
                        $Y=$Reste;
                    }
                    return $X;
                }

                function TrouverPpcm($A, $B){
                    return ($A*$B)/pgcd($A,$B);
                }

                if (isset($_POST['A']) && isset($_POST['B'])) {
                $A = $_POST['A'];
                $B = $_POST['B'];
                $PPCM = TrouverPpcm($A, $B);
                echo "Le PPCM de $A et $B est : $PPCM";
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