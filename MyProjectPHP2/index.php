<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
    <link rel="stylesheet" href="./CSS/mainStyle.css">
</head>
<body>
    <header>
    <div class="header">
    <img src="./Image/logo_condorcet.png" alt="Logo de l'école" class="logo" width="200" height="150">
    </div>

   <nav>
    <ul>
      <li><a href="./index.php">Unité Programmation</a></li>

      <li><a href="#">Travail Réalisé</a>
        <ul>
          <li><a href="#">Calculs et affectation</a>
            <ul>
              <li><a href="./pagesHTML/Cercle.php">Cercle</a></li>
              <li><a href="./pagesHTML/Rectangle.php">Rectangle</a></li>
              <li><a href="./pagesHTML/Conversion.php">Conversion</a></li>
            </ul>
          </li>
          <li><a href="#">Structures Conditionnelles</a>
            <ul>
              <li><a href="./pagesHTML/Calculette.php">Calculette</a></li>
              <li><a href="./pagesHTML/Civilité.php">Civilité</a></li>
              <li><a href="./pagesHTML/Date_longue.php">Date Longue</a></li>
              <li><a href="./pagesHTML/Second_Degres.php">Second Degré</a></li>
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
              <li><a href="./pagesHTML/Test_Achats.php">Test Achats</a></li>
              <li><a href="./pagesHTML/ExtremaN.php">Extrema N</a></li>
              <li><a href="./pagesHTML/IndiceExtremaN.php">Indice Extrema N</a></li>
            </ul>
          </li>
        </ul>
      </li>

      <li><a href="#">Mon Haute École Condorcet</a>
        <ul>
          <li><a href="./pagesHTML/SectionE-Business.php">Section E-Business</a></li>
          <li><a href="./pagesHTML/HephCondorcet.php">HephCondorcet</a></li>
        </ul>
      </li>
    </ul>
  </nav>
</header>
    

    <section>
    <div class="banniere-container">
      <div id="buttonbanière">
              <img  class="banniere" src="./Image/programming-background.jpg" alt="Imagebannière">
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
        <h1 class="neon-title">Unité programmation</h1>
    </div>

    <div class="Regroupe"> 
    <article class="article">
    <H1>C'est quoi la programmation ?</H1>
    <p>La programmation, de manière simple, consiste à donner des instructions à un ordinateur pour qu'il effectue certaines tâches. Ces instructions sont écrites dans un langage de programmation, qui peut être compris par l'ordinateur. En gros, tu dis à l'ordinateur quoi faire et comment le faire, en utilisant un ensemble de règles et de syntaxe spécifiques. Une fois que tu as écrit ton programme, tu peux le faire exécuter par l'ordinateur, qui suivra tes instructions à la lettre pour réaliser la tâche souhaitée. La programmation est utilisée pour créer des logiciels, des applications, des jeux vidéo et bien d'autres choses encore. C'est un outil puissant qui permet de donner vie à toutes sortes d'idées et de projets.</p>
    <H1>Comment on pense avant de coder un algorithme ?</H1>
    <p>On va structurer ses idées en plusieurs étapes de réflexion </p>
    <div style="text-align: center;">
     <img src="./Image/EtapeProg.jpg" alt="EtapeProg" width="70%">
    </div>
             <h1>Analyser le problème sa veux dire quoi ?</h1>
              <p>Sa veux dire que après avoir lu la consigne où le problème on doit avoir les lignes principales pas besoin d'aller trop loin on va déduire se qu'on demande.</p>
              <p>Comme en cours nôtre prof disait suivre une recette et deviné les ingrédients à mettre... Si on veut une crêpe on ira chercher les ingrédients dont des oeufs, de la farine,du lait !</p>
              <p>Si maintenant on demande additioner 2 chiffres entre eux ?</p>
              <ol>
                <li>On va lire les 2 nombres (Na,Nb)</li>
                <li>Faire une addition de 2 nombres</li>
                <li>Mais on devra avoir une boite contenant la somme des 2 nombres</li>
                <li>Grâce à cette boite afficher la solution</li>
              </ol>
          
             <h1>En déduire un algorithme ?</h1>
             <p>D'abord vous devez vous dire... C'est quoi un algorithme ?</p>
             <p>Un algorithme est une sorte de recette ou de plan étape par étape pour résoudre un problème ou faire une tâche. C'est comme suivre des instructions pour assembler un meuble ou cuisiner un plat. En informatique, les algorithmes sont utilisés pour résoudre des problèmes de programmation.</p>
             <p>Pour tester des algorithme avant le code on va aller sur Larp une application simplifier pour comprendre la notion de programmation !</p>
              <H1>Voici les représentations algorithmique de la somme de 2 nombres :</H1>
                <div style="text-align: center;">
                    En ordinogramme <br>
           <img src="./Image/Somme2Ordi.png" alt="Somme2Ordi" height="50%" width="30%">
                   <br><br> En Pseudo code <br>
           <img src="./Image/Somme2Lda.png" alt="Somme2lda" height="30%" width="30%">
            </div>
             <H1>JavaScript</H1>
            <p>JavaScript est un langage de programmation principalement utilisé pour rendre les pages web interactives. Il fonctionne directement dans le navigateur, ce qui permet d’ajouter des effets dynamiques comme des menus déroulants, des carrousels d’images ou encore des formulaires interactifs. Grâce à JavaScript, les développeurs peuvent créer des sites plus vivants et réactifs. C’est un langage essentiel dans le développement web front-end.
            </p>
            <H1>Exemple de script JS pour la somme de 2 nombres :</H1>
             <div style="text-align: center;">
              <img src="./Image/Somme2V1.png" alt="EtapeProg" width="70%">
             </div>

            <H1>PHP</H1>
            <p>PHP est un langage de programmation côté serveur, souvent utilisé pour créer des sites web dynamiques. Contrairement à JavaScript, PHP s’exécute sur le serveur et permet de gérer des bases de données, des sessions utilisateur, et d'afficher du contenu personnalisé. Par exemple, il est très utilisé pour créer des systèmes de connexion, des paniers d’achat, ou des blogs. PHP est l’un des piliers du web dynamique, souvent utilisé avec des bases de données comme MySQL.
            </p>
            <H1>Exemple de script PHP pour la somme de 2 nombres :</H1>
             <div style="text-align: center;">
            <img src="./Image/Somme2PHP.png" alt="EtapeProg" width="70%">
              </div>

             </article>
             </div>
    
            <aside class="sidebar">
            <div style="text-align: center;">
            <img src="./Image/moi.jpg" alt="EtapeProg" width="70%">
            </div>
            <h2>Qui suis-je ?</h2>
            <p>Je m'apelle Laurence Barthélémy, j'ai 23 ans et j'habite dans le brabant wallon.</p>

            <p>J'ai étudier précédement en économie et je voulais apprendre plus et m'intéresser aux nouvelle innovation tel que le développement de la VR et apprendre des notions d'informatique me passionne et développé ma créativité à travers différent projet notament !</p>
            
            </aside>
            </section>

            <footer class="footer">
            
            </footer>
</body>
</html>