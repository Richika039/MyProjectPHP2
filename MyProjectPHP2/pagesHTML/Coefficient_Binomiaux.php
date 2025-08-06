<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coefficient Binomial</title>
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
        <h1 class="neon-title">Coefficient Binomiaux</h1>
    </div>

    <article class="article">
     <div class="Projet">
          <H1>C'est quoi un coefficient binominaux ?</H1>
          <p style="text-decoration: underline;">Introduction :</p>
          <p>Un coefficient binomial est essentiellement un outil mathématique qui permet d'indiqué combien de combinaisons uniques on peut former en choisissant un certain nombre d'éléments parmi un ensemble plus grand d'éléments. Ils apparaissent dans le développement du binôme de Newton ou dans le calcul des coefficients du polynôme développé.</p>
          <p style="text-decoration: underline;">n :</p>
          <p>représente le nombre total d'éléments ou d'objets dans l'ensemble.</p>
          <p style="text-decoration: underline;">K :</p>
          <p>représente le nombre d'éléments que vous choisissez ou que vous souhaitez sélectionner parmi cet ensemble.</p>
          <p style="text-decoration: underline;">n! :</p>
          <p> est le factoriel de n qui représente le produit de tous les entiers de 1 à n </p>
          
           <h1>Projets Coefficient Binomiaux</h1>
           <p style="text-decoration: underline;">Mise en situation :</p>
           <p>Le but est de calculer la factorielle d'un coefficiaent pour voir si celui-ci est binomiaux et de déterminer sont coéfficient</p>
           <p style="text-decoration: underline;">Mais avant on réalise un pseudo code :</p>
           <ol>
            <li>Lire le nombre introduit (N)</li>
            <li>Ensuite calculer la factorielle de se nombre N -> (n?=)</li>
            <li>Comme il comprend pas avec un module auxiliaire on présicera pour (n?=)</li>
            <li>En "Entrer" X sera la valeur récupérer de N </li>
            <li>Elle passera dans une boucle tant que qui ira pas de indice (i) = 0 mais i=1 et de 1 à X. Se qui veut dire on commance pas à zéro mais 1 et les nombres sont compris de 1 jusqu'à X (nôtre nombre de départ qu'étais N) et on incrémentera l'indice de + 1 donc on décalera chaque fois de 1 </li>
            <li>Enduite on fait une opération de F qu'est la factorielle (F=F*I). On change la valeur de F en fesant F qui vaut 1 multiplié par l'indice (position dans la boucle)</li>
            <li>Une fois que nôtre Factorielle est aux bout des tours dans la boucle et arrive à X il sort pour après retourner la valeur de F aux module principal.</li>
            <li>Le module principal comprend la factorielle et execute "n?=" et l'écrit</li>
          </ol>
     
          <div style="text-align: center;">
            <p>L'ordinogramme (Ordi)</p>
          <img   src="../image/CBORDI.png" alt="Ordi"style="max-width: 100%; width: 30%;height: 5%;">
          <br>
        <img   src="../image/CBORDI2.png" alt="Ordi"style="max-width: 100%; width: 30%;height: 5%;">
        <br>
        <br>
        <p>Le pseudo code (Lda)</p>
        <img   src="../Image/CBLDA.png" alt="Lda"style="max-width: 100%; width: 30%;height: 5%;">
        <br>
        <img   src="../image/CBLDA1.png" alt="Lda"style="max-width: 100%; width: 30%;height: 5%;">
        
            <h1>Les scripts en JS :</h1>
             <img src="../image/CBJS.png" id="Shéma" style="max-width: 100%; width: 30%; height: 5%;">
             <br>
             

            <h1>Les scripts en PHP :</h1>
              <img src="../image/CBPHP.png" id="Shéma" style="max-width: 100%; width: 30%; height: 5%;">
       
            
            <hr>
            <h2>Calcul du coefficient binomial</h2>
            <hr>
            <form method="post">
                <label>N :</label> <input type="text" name="txtN" size="10"> 
                <label>K :</label> <input type="text" name="txtK" size="10"> 
                <input type="submit" value="Calculer" name=""> 
            </form> 
                    <?php 
            function Fact($X){
                $F = 1;
                if ($X != 0){
                    for ($i = 1; $i <= $X; $i++){
                        $F = $F * $i; // Utiliser $i au lieu de $X ici
                    }
                }
                return $F;
            }
            //Script principal
            if (isset($_POST["txtN"]) && isset($_POST["txtK"])){
                $N = $_POST["txtN"]; // Utiliser txtN pour récupérer la valeur de N
                $K = $_POST["txtK"]; // Utiliser txtK pour récupérer la valeur de K
                if ($N >= $K){
                    $CB = Fact($N) / (Fact($K) * Fact($N - $K));
                    echo "Le coefficient binomial est $CB";
                } else {
                    echo "Le coefficient binomial est impossible";
                }
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