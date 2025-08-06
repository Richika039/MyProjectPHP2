<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Civilité</title>
    <link rel="stylesheet" href="../CSS/mainStyle.css">
    <script>
        function envoyer(){
        var message;
        var vedette=sexe=="F"?"Madame":"Monsieur";
        var nom=document.frmCivilité.txtNom.value;
        var prénom=document.frmCivilité.txtPrénom.value;
        var adresse=document.frmCivilité.txtAdresse.value;
        var pays=document.frmCivilité.lstPays.value;
        var localité=document.frmCivilité.txtLocalité.value;
        var codepostal=document.frmCivilité.txtCodepostal.value;
        var sexe=document.frmCivilité.rdBtnSexe.value;
        message="Bonjour "+vedette+" "+prénom+" "+nom+" vous habitez au "+adresse+" "+codepostal+" "+localité+" en "+pays
        alert(message);
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
        <h1 class="neon-title">Civilité</h1>
    </div>

    <article class="article">
     <div class="Projet">
            
              
          <h1>C'est quoi la civilité ?</h1>
          <p style="text-decoration: underline;">L'État civil :</p>
          <p>L'état civil désigne l'ensemble des informations officielles relatives à l'identité et à la situation personnelle d'un individu. Cela inclut généralement le nom, le prénom, la date et le lieu de naissance, ainsi que d'autres informations telles que le sexe, la filiation, le mariage et le décès.</p>
          <p style="text-decoration: underline;">La civilité :</p>
          <p>La civilité dans l'état civil d'une personne se réfère généralement à son genre ou à son titre de civilité, comme "Monsieur", "Madame", "Mademoiselle", etc. C'est une composante de l'identité civile qui peut être utilisée dans les documents officiels, les formulaires administratifs, et les interactions sociales pour désigner le statut (Marier,Célibataire, Etudiant,..) ou le genre d'une personne(il/elle).</p>
          
          <h1>Projet Civilité</h1>
          <p style="text-decoration: underline;">Mise en situation :</p>
          <p>Le but de se projet est d'afficher avec un message les différentes information civil qu'une tierce personne encodera nom, prénom, lieux d'habitation, sexe, pays.</p>
          <p style="color: brown;">(Pour se projet on n'a pas eu besoin de l'analyse en Lda où ordi on est passer directement aux code.) </p>
          <p> Et pour se projet, j'ai trouver plus convenable d'expliquer se code.</p>
          <p style="text-decoration: underline;">Explication du code :</p>
          <ol>
            <li>On crée d'abord un formulaire HTML</li>
            <li>Dans ce formulaire des champs identifiés contenant Nom, Prénom, Addresse, ect</li>
            <li>Un script récupèrera la chaîne de caractère encoder par l'utilisateur</li>
            <li>Grâce aux script on affichera un message en récupérant les informations de chaque champs qu'on été encoder, récupérer par le script qui les executent.</li>
          </ol>
          <div style="text-align: center;">
            <p>Version JS</p>
          <img src="../image/CivilitéJS.png" width="50%">
          </div>
          <p>La fonction function envoyer() renvoie aux formulaire les information se trouvant dans le script</p>
          <p>Dans le script on a des variables "var" qui sont déclarer pour permettre à l'algorithme de comprendre par la suite à quoi ils font référence</p>
          <p>Ses variables on leurs dis pour chacune que une attribution se trouve dans le formulaire</p>
          <p>Précisément c'est comme plusieurs boite dans lequel on met une donnée mais pour faire simple on lit de droite à gauche</p>
          <p>Par exemple pour Nom on indique de trouver la valeur "value" identifier par txtNom dans le formulaire "frmCivilité" dans le document</p>
          <p>Il fera sa pour récupérer la valeur qu'on y aura encoder puis à la fin créera un message en liant toute les données grâce aux "+"</p>
          <br>
          <div style="text-align: center;">
            <p>Version PHP</p>
          <img src="../image/CivilitéPHP.png" width="50%">
          </div>
          <br>
    <hr>
         <h1>Projet - Civilité</h1>
    <hr>

   
    <form method="POST" action="">
        <label for="nom">Nom :</label>
        <input type="text" name="txtNom" id="nom"> <br><br>

        <label for="prénom">Prénom :</label>
        <input type="text" name="txtPrénom" id="prénom"> <br><br>

        <label for="localité">Localité :</label>
        <input type="text" name="txtLocalité" id="localité"> <br><br>

        <label for="codepostal">Code postal :</label>
        <input type="text" name="txtCodepostal" id="codepostal"> <br><br>

        <label for="adresse">Adresse :</label>
        <textarea name="txtAdresse" id="adresse"></textarea> <br><br>

        <label for="pays">Pays :</label> 
        <select name="lstPays" id="pays">
            <option value="France">France</option>
            <option value="Belgique">Belgique</option>
            <option value="Espagne">Espagne</option>
            <option value="Allemagne">Allemagne</option>
        </select><br><br>

        <label>Sexe :</label>
        <input type="radio" name="rdBtnSexe" value="H" id="homme" checked>
        <label for="homme">Homme</label>

        <input type="radio" name="rdBtnSexe" value="F" id="femme">
        <label for="femme">Femme</label> <br><br>

        <input type="submit" value="Envoyer">
        <hr>
    
    </form>
    <?php
        if (isset($_POST['txtNom']) && isset($_POST['txtPrénom']) && isset($_POST['txtLocalité']) && 
            isset($_POST['txtCodepostal']) && isset($_POST['txtAdresse']) && isset($_POST['lstPays']) && 
            isset($_POST['rdBtnSexe'])) {
                $nom = $_POST['txtNom'];
                $prénom = $_POST['txtPrénom'];
                $localité = $_POST['txtLocalité'];
                $codepostal = $_POST['txtCodepostal'];
                $adresse = $_POST['txtAdresse'];
                $pays = $_POST['lstPays'];
                $sexe = $_POST['rdBtnSexe'];
                $vedette = ($sexe == "F") ? "Madame" : "Monsieur";
            echo "<p>Bonjour " . $vedette . " " . $prénom . " " . $nom . "<br>";
            echo "Vous habitez au " . $adresse . ", " . $codepostal . " " . $localité . " en " . $pays . ".</p>";
        }
        ?>

         <p>© 2025 Conçu par Laurence Barthélémy Tous droits réservés.</p>
         </div>
        </div>
     </div>
     
        
    </article>

       
    
</body>

   
</html>