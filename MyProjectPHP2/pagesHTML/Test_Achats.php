<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Achats</title>
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
        <h1 class="neon-title">Test Achats</h1>
    </div>
    <article class="article">
          <div class="Projet">
            <H1>C'est quoi Test Achat ?</H1>
            <p style="text-decoration: underline;">Introduction :</p>
            <p>Test Achats effectue des tests comparatifs sur une large gamme de produits et de services, tels que les appareils électroménagers, les produits alimentaires, les produits de soins personnels, les assurances, les services bancaires, etc. Les résultats de ces tests sont publiés dans leur magazine et sur leur site web pour aider les consommateurs à prendre des décisions éclairées lors de leurs achats. Mais dans cette exercice, on veut centrer la comparaison d'un article parmis différents magasin celon son prix.</p>
            <h1>Projets Test Achat Tableau</h1>
            <p style="text-decoration: underline;">Mise en situation :</p>
            <p>Le but est de pouvoir encoder le nombre de magasin et en fonction mettre les prix des articles celon les magasins et de les classer par ordre dans lequel on a encoder les prix d'article. De mettre toutes ses données dans un tableaux pour faciliter la compréhension de l'utilisateur.</p>
            <p style="text-decoration: underline;">Mais avant on réalise un algorithme :</p>
           <div style="text-align: center;">
              <p>Ordinogramme (Ordi)</p>
              <p>Le pseudo code ici présent est l'algorithme d'une version précédente</p>
              <img   src="../image/TAORDI1.png" alt="Lda">
              <br>
              <img   src="../image/TAORDI2.png" alt="Lda">
              <br>
              <img   src="../image/TAORDI3.png" alt="Lda">
              </div>
            <div style="text-align: center;">
              <p>le pseudo code (Lda)</p>
            
              <img   src="../image/TALDA.png" alt="Lda">
              <br>
                 <h1>Les scripts en JS :</h1>
                 <p>Version 1:</p>
             <img src="../image/TAJS.png" id="Shéma" style="max-width: 100%; width: 30%; height: 5%;">
             <br>
             <p>Version 2:</p>
             <img src="../image/TAJS2.png" id="Shéma" style="max-width: 100%; width: 30%; height: 10%;">

            <h1>Les scripts en PHP :</h1>
            <p>Version 1:</p>
              <img src="../image/TAPHP.png" id="Shéma" style="max-width: 100%; width: 30%; height: 5%;">
              <br>
              <p>Version 2 :</p>
              <img src="../image/TAPHP2.png" id="Shéma" style="max-width: 100%; width: 30%; height: 5%;">
       
              </div>
            <p style="text-decoration: underline;">Comment lire se shéma:</p>
           <ol>
            <li>Lire et écrire les magasins encoder (N)</li>
            <li>on mettra la valeur initial Somme=0 (car sa sera la somme des magasin)</li>
            <li>Ensuite une boucle "Pour" avec un indice de 1 (i=1) jusqu'à N (nombre introduit de magasins) </li>
            <li>Il lira Prix[i] donc la position et le prix encoder</li>
            <li>On fera une opération pour attribuer le prix à nôtre somme de départ Somme=0 deviendra Somme=Somme+Prix[i]</li>
            <li>Après la boucle on trouvera le prix moyen à l'aide de l'opération Prixmoyen=Somme/N</li>
            <li>On demandera d'écrire le prix moyen obtenu</li>
            <li>Une 2e boucle pour permettra cette fois-ci de calculer le pourcentage en divisant Prix[i]/PrixMoyen</li>
          </ol>

          <div style="text-align: center;">
            
            
          </div>
            <p>A partir d'ici je vais parler de fonction car on séparera les opérations en différentes sous étapes</p>
            <p>Les fonctions c'est pareil que les modules principal et auxiliaire vu dans les projets PPCM où Coefficient Binomiaux dans l'algorithme de l'ordinogramme sauf que quand on code en JS où PHP c'est "des funcitons"</p>
            <p>Bon go expliquer les étapes !</p>
            <ol>
              <p style="text-decoration: underline;">Function Somme :</p>
              <li>Permet d'additionner les nombres et renvoyer le résultat à la fonction qui permettra d'afficher le rapport !</li>
             <p style="text-decoration: underline;">Function EcrireRapport :</p>
              <li>Calculera la somme total des prix encoder, son prix moyen et le pourcentage et d'afficher un tableau</li>
             <p style="text-decoration: underline;">Function TA</p>
              <li>Il permettra d'écrire la liste des prix se trouvant dans le formulaire</li>
            </ol>
            <hr>
            <H1>Test Achats</H1>
            <hr>
             <form action="" method="post">
        <label>Liste des prix (séparé par une virgule)</label>
        <input type="text" name="txtListePrix">
        <input type="submit" value="="> 
    </form>

        <?php
        function Somme($X){
            $S=0;
            $n=count($X);
            for($i = 0; $i <= $n-1; $i++){
                $S += $X[$i];
            }
            return $S;
        }

        function EcrireRapport($X){
            $n=count($X);
            $moyenne=Somme($X)/$n;
            echo("<table>");
            echo("<caption>Rapport Test-Achats</caption>");
            echo("<tr>");
            echo("<th>Magasin</th>");
            echo("<th>Prix</th>");
            echo("<th>Pourcentage</th>");
            echo("</tr>");

            for($i=0; $i <= $n -1; $i++){
                $prct=$X[$i]/$moyenne;
                echo("<tr>");
                echo("<td>Magasin ". $i ."</td>");
                echo("<td>" . $X[$i] . "</td>");
                echo("<td>".$prct . "</td>");
                echo("</tr>");
            }
            echo("<tr>");
            echo("<td>Moyenne</td>");
            echo("<td>" . $moyenne . "</td>");
            echo("</tr>");
            echo("</table>");
    
        }
      
        //script principal
        if(isset($_POST['txtListePrix'])){
            $listePrix=$_POST['txtListePrix'];
            $prix=explode(",",$listePrix);
            EcrireRapport($prix);
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