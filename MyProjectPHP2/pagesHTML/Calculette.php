<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculette</title>
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
        <h1 class="neon-title">Calculette</h1>
    </div>

    <article class="article">
    <div class="Projet">
            
              
            <h1>C'est quoi une calculatrice ?</h1>
            <p style="text-decoration: underline;">Introduction:</p>
            <p>Une calculatrice est un outil électronique ou informatique utilisé pour effectuer des calculs mathématiques des nombres.</p>
            <p style="text-decoration:underline;">Les nombres :</p>
            <p>Un nombre est une valeur utilisée pour quantifier ou mesurer des éléments. Mais plusieurs nombres permettent alors de les comparer entre eux et crée différentes opération simple où complexe.</p>
            <p style="text-decoration: underline;">les opérateurs :</p>
              <p>Les opérateurs sont des symboles qui permettent d'effectuer des calculs en combinant des valeurs entre eux.</p>
            <ul>
              <li>
                Addition "+"
              </li>
              <li>
                Mutiplication "*"
              </li>
              <li>
                Divition "/"
              </li>
              <li>
                Soustraction "-"
              </li>
            </ul>
            <h1>Projet Calculatrice</h1>
            <p style="text-decoration: underline;">Mise en situation :</p>
            <p>On veut crée un algorithme qui vas nous permettre de calculer deux nombres soit en multipliant, soustrayant, additionnant où divisant .</p>
            <p style="text-decoration: underline;">Mais avant on fait un ordinogramme/pseudo code :</p>
           <ol>
            <li>Lire les 2 nombres (A,B)</li>
            <li>Lire les opérateurs arithmétiques (OP)</li>
            <li>N sera la fonction de l'opérateur introduit (+,-,/,*)</li>
            <li>Ecrire le résultat de l'opération effectuer</li>
          </ol>
            <div style="text-align: center;">
              <p>L'ordinogramme (Ordi)</p>
              <p>On a un champs de sélection pour les différents opérateurs avec Select puis une condition pour vérifier chaque opérateur</p>
            <img class="1" src="../image/OrdiCalculatrice.png" id="Calculatrice"style="max-width: 50%;">
           <br>
            <img class="2"  src="../image/OrdiCalculatrice2.png"  id="Calculatrice"style="max-width: 50%;">
            </div>
            <br>
            <div style="text-align: center;">
            <br>
            <p>Le pseudo code (Lda)</p>
              <p>On a un champs de sélection pour les différents opérateurs avec Select puis une condition pour vérifier chaque opérateur</p>
       
            <img class="4"  src="../image/ldaCalculatrice.png"  id="Calculatrice"style="max-width: 50%; ">
           <H1>Les scripts en JS :</H1>
            <img class="4"  src="../image/CalculatriceJS.png"  id="Calculatrice"style="max-width: 50%; ">

            <H1>Les scripts en PHP :</H1>
            <img class="4"  src="../image/CalculatricePHP.png"  id="Calculatrice"style="max-width: 50%; ">

            </div>
            
       
        <hr>
     Projet Calculette
    <hr>
    <form action="" method="post">
    <label>1er nombre :</label> 
    <input type="text" name="txtA">
    <input type="text" name="txtOP">
    <label>2eme nombre :</label> 
    <input type="text" name="txtB">
    <input type="submit" value="calculer" name="">
    </form>

    <?php
             if (isset($_POST['txtA']) && isset($_POST['txtB']) && isset($_POST['txtOP'])) {
                $op = $_POST['txtOP'];
                $a = $_POST['txtA'];
                $b = $_POST['txtB'];
                switch($op){
                    case "+" : $r=$a+$b; 
                                  break;
                    case "-" : $r=$a-$b; 
                                  break;
                    case "*" : $r=$a*$b; 
                                  break;
                    case "/" :
                        if($b==0){
                            $r="Division par 0";
                        }
                        else{
                            $r=$a/$b;
                        }
                            break;
                    case "%":
                        if($b==0){
                            $r="Division par 0";
                        }
                        else{
                            $r=$a%$b;
                        }
                            break;
                        default: $r="l'opérateur n'est pas prévue";
                }     
                          echo("Le résultat $r");
            }
    ?>
         <p>© 2025 Conçu par Laurence Barthélémy Tous droits réservés.</p>
         </div>
         </div>
          </div>
        </div>
        </article>
</body>
</html>