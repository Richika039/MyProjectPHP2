<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Longue</title>
    <link rel="stylesheet" href="../CSS/mainStyle.css">
    <script>
        function Jour() {
            var jour = parseInt(document.frmJour.lstJour.value);
            var mois = document.frmJour.lstMois.value;
            var annee = parseInt(document.frmJour.txtAnnee.value);
            
            if (mois === "January") {
                if (jour > 31) {
                    alert("Janvier ne peut avoir que 31 jours!");
                    return;
                }
            }

            if (mois === "February") {
                if (jour > 29) {
                    alert("Février ne peut pas avoir plus de 29 jours!");
                    return;
                }
                if (jour === 29) {
                  
                    return;
                }
            }

            if (mois === "March") {
                if (jour > 31) {
                    alert("Mars ne peut avoir que 31 jours!");
                    return;
                }
            }

            if (mois === "April") {
                if (jour > 30) {
                    alert("Avril ne peut avoir que 30 jours!");
                    return;
                }
            }

            if (mois === "May") {
                if (jour > 31) {
                    alert("Mai ne peut avoir que 31 jours!");
                    return;
                }
            }

            if (mois === "June") {
                if (jour > 30) {
                    alert("Juin ne peut avoir que 30 jours!");
                    return;
                }
            }

            if (mois === "July") {
                if (jour > 31) {
                    alert("Juillet ne peut avoir que 31 jours!");
                    return;
                }
            }

            if (mois === "August") {
                if (jour > 31) {
                    alert("Août ne peut avoir que 31 jours!");
                    return;
                }
            }

            if (mois === "September") {
                if (jour > 30) {
                    alert("Septembre ne peut avoir que 30 jours!");
                    return;
                }
            }

            if (mois === "October") {
                if (jour > 31) {
                    alert("Octobre ne peut avoir que 31 jours!");
                    return;
                }
            }

            if (mois === "November") {
                if (jour > 30) {
                    alert("Novembre ne peut avoir que 30 jours!");
                    return;
                }
            }

            if (mois === "December") {
                if (jour > 31) {
                    alert("Décembre ne peut avoir que 31 jours!");
                    return;
                }
            }
            if (annee % 400 === 0) {
                alert("Cette année est bissextile et séculaire!");
            } else if (annee % 100 === 0) {
                alert("Cette année n'est pas bissextile mais est séculaire!");
            } else if (annee % 4 === 0) {
                alert("Cette année est bissextile!");
            } else {
                alert("Cette année n'est pas bissextile!");
            }

            var R = jour + " " + mois + " " + annee;
            document.frmJour.txtR.value = R;
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
        <h1 class="neon-title">Date Longue</h1>
    </div>
    <article class="article">
       <div class="Projet">
       <h1>C'est quoi une date longue ?</h1>
       <p style="text-decoration: underline;">Introduction :</p>
       <p>Une date longue est une manière de présenter une date qui inclut non seulement le jour, le mois et l'année, mais également le jour de la semaine et éventuellement le nom complet du mois. Par exemple, "Jeudi 10 Mai 2024" est une date longue, alors que "10/05/2024" est une date courte.Elle peut être utilisée dans des documents officiels, des annonces publiques, des invitations, etc. </p>
       <p style="text-decoration: underline;">Date :</p>
       <p>Une date est une représentation spécifique du temps qui indique un moment particulier dans le calendrier. Elle est généralement composée de trois éléments principaux : le jour, le mois et l'année. Les dates sont utilisées pour organiser les événements, planifier des activités, enregistrer des transactions .</p>
       <h1>Projets Date Longue</h1>
       <p style="text-decoration: underline;">Mise en Situation :</p>
       <p>Le but de se projet est d'afficher une date format court en date longue et verifié si c’est séculaire, bissextile où les deux</p>
      
       <p style="text-decoration: underline;">Mais avant on fait un ordinogramme/pseudo-code :</p>
       <ol>
        <li>Lire et écrire le Jour,Mois,Année</li>
        <li>Vérifier si les jour sont inférieur à 31 sinon rapeller "encoder un jour qui dépasse pas 31"</li>
        <li>Si le Jour est bien <=31 : est-elle bisextile ? (Année/4), est-elle Séculaire ? (Année/100) où les deux donc on fera Année/400</li>
        <li>Grâce à cette vérification il indiquera bisextile où non, séculaire où non voir les deux</li>
        <li>Vérifier l'encodage des mois avec une fonction switch "Mois" dans lequel une condition Si pour validé le chiffre appartenant à un mois</li>
        <li>Si le chiffre correspond pas un message s'affichera pour signaler la condition !</li>
        <li>Si toute les étapes sont validé alors chaque condition attribuera le texte appartenant aux chiffre du mois pour à la fin afficher en format longue la réponse</li>
      </ol>
      <div style="text-align: center;">
         <H1>Les scripts en JS :</H1>
          <video controls width="60%" height="80%">
              <source src="../Video/DateLongueJS.mp4" type="video/mp4">
            </video>
         

              <div class="form-container">
             <div class="cadre">
            <h1>Date Longue</h1>
            <form name="frmJour"class="styled-form">
           
            <label>Jour :</label>
            <select name="lstJour">
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
            </select>
            <label>Mois :</label>
            <select name="lstMois">
                <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
            </select>
            <label>Année :</label>
            <input type="text" name="txtAnnee"><br>
            <input type="button" value="Afficher" onclick="Jour()"class="styled-button">
            <label>Résultat :</label>
            <input type="text" name="txtR">
        </form>
        <p>© 2025 Conçu par Laurence Barthélémy Tous droits réservés.</p>
      </div>
       </div>
       
    </article>
     
        
</body>
    
</html>