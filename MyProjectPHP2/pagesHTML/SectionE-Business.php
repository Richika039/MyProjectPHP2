<!doctype HTML>
<html lang="fr">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Section E-Business</title>
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
        <h1 class="neon-title">Section E-Business</h1>
    </div>

  <div class="Projet" style="display: flex; flex-wrap: wrap; gap: 20px;">
 
  <section style="flex: 2; min-width: 400px;">
    <h1>Option E-Business à la HEPH-Condorcet</h1>
    <p>
      L’option e-business vise à former des professionnels capables d’évoluer dans les environnements numériques et commerciaux. 
      Elle combine l’économie, le marketing digital, la gestion de projet, et le développement web.
    </p>

    <h2>Débouchés possibles :</h2>
    <ul>
      <li>Responsable e-commerce</li>
      <li>Webmarketer</li>
      <li>Consultant digital</li>
      <li>Développeur web junior</li>
      <li>Chef de projet numérique</li>
      <li>Spécialiste SEO / SEA</li>
      <li>Entrepreneur digital</li>
    </ul>

    <h2>Découvre le programme par année :</h2>
    <div style="display: flex; gap: 10px; margin-bottom: 20px;">
      <button onclick="afficheBloc(1)">Bloc 1</button>
      <button onclick="afficheBloc(2)">Bloc 2</button>
      <button onclick="afficheBloc(3)">Bloc 3</button>
    </div>

    <div id="contenuBloc" style="background-color: #f5f5f5; padding: 15px; border-radius: 10px;"></div>

    <h2 style="margin-top: 40px;">Quels métiers après cette formation ?</h2>
    <p>
      L’e-business vous prépare à des fonctions très recherchées dans le monde numérique. Vous pourrez travailler dans 
      des entreprises, agences de communication, start-ups ou lancer votre propre activité en ligne. L’approche polyvalente 
      vous permet d’être à l’aise aussi bien dans la gestion que dans les aspects techniques du web.
    </p>
  </section>

  <!-- Partie droite : Pourquoi ce choix -->
  <aside style="flex: 1; min-width: 300px;">
    <h2>Pourquoi avoir choisi cette option ?</h2>
    <p>
    J’ai choisi cette option parce qu’elle me permettait de combiner des notions solides en économie avec l’apprentissage approfondi de l’informatique, ce qui me semblait être un équilibre parfait entre deux domaines complémentaires. Cette formation offre une base polyvalente, essentielle pour comprendre à la fois les mécanismes économiques et les outils technologiques actuels. Par ailleurs, ma curiosité naturelle pour les univers virtuels, la réalité augmentée et la 3D m’a motivée à m’investir pleinement dans cette voie. Je souhaite ainsi acquérir des compétences innovantes qui me permettront de participer activement à la transformation numérique et d’apporter une touche créative et technique dans le développement du web de demain. Cette option représente donc pour moi bien plus qu’un simple cursus : c’est une opportunité d’explorer des technologies d’avenir tout en renforçant mes connaissances économiques, afin d’être prête à relever les défis du monde digital.
    </p>
  </aside>
</div>

<script>
  function afficheBloc(numero) {
    const contenu = document.getElementById("contenuBloc");
    let html = "";

    if (numero === 1) {
      html = `
        <h3>BAC 1 : Enseignement obligatoire</h3>
        <table>
          <thead>
            <tr><th>Unité</th><th>Périodes</th><th>Crédits</th></tr>
          </thead>
          <tbody>
            <tr><td>GESTION DES DONNÉES NUMÉRIQUES 1.1</td><td>Q1</td><td>2</td></tr>
            <tr><td>ANGLAIS 1.1</td><td>Q1</td><td>4</td></tr>
            <tr><td>CRÉATION DE SITES WEB 1.1</td><td>Q1</td><td>6</td></tr>
            <tr><td>LOGICIEL INTÉGRÉ D'E-GESTION 1.1</td><td>Q1</td><td>4</td></tr>
            <tr><td>COMPTABILITÉ 1.1</td><td>Q1</td><td>3</td></tr>
            <tr><td>MARKETING 1.1</td><td>Q1</td><td>3</td></tr>
            <tr><td>E-LOGISTIQUE 1.1</td><td>Q1</td><td>3</td></tr>
            <tr><td>ÉCONOMIE 1.1</td><td>Q1</td><td>2</td></tr>
            <tr><td>STATISTIQUES 1.1</td><td>Q1</td><td>3</td></tr>
            <tr><td>PROGRAMMATION 1.2</td><td>Q2</td><td>6</td></tr>
            <tr><td>FONDEMENT DU DROIT 1.2</td><td>Q2</td><td>4</td></tr>
            <tr><td>ANGLAIS 1.2</td><td>Q2</td><td>4</td></tr>
            <tr><td>APPLICATIONS BUREAUTIQUES 1.2</td><td>Q2</td><td>2</td></tr>
            <tr><td>MATHÉMATIQUES 1.2</td><td>Q2</td><td>2</td></tr>
            <tr><td>COMMUNICATION NUMÉRIQUE 1.2</td><td>Q2</td><td>5</td></tr>
            <tr><td>SEARCH ENGINE MARKETING 1.2</td><td>Q2</td><td>3</td></tr>
            <tr><td>INFOGRAPHIE 1.2</td><td>Q2</td><td>4</td></tr>
          </tbody>
        </table>
        <p><strong>Total crédits :</strong> 60</p>`;
    } else if (numero === 2) {
      html = `
        <h3>BAC 2 : Enseignement obligatoire</h3>
        <table>
          <thead>
            <tr><th>Unité</th><th>Périodes</th><th>Crédits</th></tr>
          </thead>
          <tbody>
            <tr><td>ANGLAIS 2.1</td><td>Q1</td><td>2</td></tr>
            <tr><td>PROGRAMMATION 2.1</td><td>Q1</td><td>3</td></tr>
            <tr><td>E-LOGISTIQUE 2.1</td><td>Q1</td><td>3</td></tr>
            <tr><td>CRÉATION DE SITES WEB 2.1</td><td>Q1</td><td>3</td></tr>
            <tr><td>STATISTIQUES 2.1</td><td>Q1</td><td>2</td></tr>
            <tr><td>LOGICIEL INTÉGRÉ D'E-GESTION 2.1</td><td>Q1</td><td>4</td></tr>
            <tr><td>BUSINESS COACHING 2.1</td><td>Q1</td><td>2</td></tr>
            <tr><td>MARKETING NUMÉRIQUE ET GESTION DE COMMUNAUTÉ 2.1</td><td>Q1</td><td>8</td></tr>
            <tr><td>DROIT DES AFFAIRES 2.1</td><td>Q1</td><td>1</td></tr>
            <tr><td>DROIT FISCAL 2.1</td><td>Q1</td><td>1</td></tr>
            <tr><td>DROIT SOCIAL 2.1</td><td>Q1</td><td>1</td></tr>
            <tr><td>ANGLAIS 2.2</td><td>Q2</td><td>2</td></tr>
            <tr><td>SÉMINAIRES 2.2</td><td>Q2</td><td>3</td></tr>
            <tr><td>BASE DE DONNÉES 2.2</td><td>Q2</td><td>3</td></tr>
            <tr><td>SOFTWARE DEVELOPMENT 2.2</td><td>Q2</td><td>4</td></tr>
            <tr><td>AUDIT DES SITES WEB 2.2</td><td>Q2</td><td>3</td></tr>
            <tr><td>ARCHITECTURE WEB 2.2</td><td>Q2</td><td>3</td></tr>
            <tr><td>E-COMMERCE - ANALYSE DE LA STRATÉGIE 2.2</td><td>Q2</td><td>3</td></tr>
            <tr><td>E-COMMERCE - DÉVELOPPEMENT WEB 2.2</td><td>Q2</td><td>2</td></tr>
            <tr><td>E-DROIT 2.2</td><td>Q2</td><td>4</td></tr>
            <tr><td>E-LOGISTIQUE 2.2</td><td>Q2</td><td>2</td></tr>
            <tr><td>MÉTHODOLOGIE 2.2</td><td>Q2</td><td>1</td></tr>
          </tbody>
        </table>
        <p><strong>Total crédits :</strong> 60</p>`;
    } else if (numero === 3) {
      html = `
        <h3>BAC 3 : Enseignement obligatoire</h3>
        <table>
          <thead>
            <tr><th>Unité</th><th>Périodes</th><th>Crédits</th></tr>
          </thead>
          <tbody>
            <tr><td>E-MARKETING : ÉTUDE DE MARCHÉ 3.1</td><td>Q1</td><td>3</td></tr>
            <tr><td>ANGLAIS 3.1</td><td>Q1</td><td>2</td></tr>
            <tr><td>DROIT INTERNATIONAL DES AFFAIRES 3.1</td><td>Q1</td><td>2</td></tr>
            <tr><td>LOGICIEL INTÉGRÉ D'E-GESTION 3.1</td><td>Q1</td><td>4</td></tr>
            <tr><td>E-PROJECT MANAGEMENT 3.1</td><td>Q1</td><td>5</td></tr>
            <tr><td>E-FISCALITÉ 3.1</td><td>Q1</td><td>1</td></tr>
            <tr><td>E-LOGISTICS : SOFTWARE INTEGRATION 3.1</td><td>Q1</td><td>2</td></tr>
            <tr><td>UX DESIGN 3.1</td><td>Q1</td><td>2</td></tr>
            <tr><td>CRÉATION DE SITES WEB 3.1</td><td>Q1</td><td>5</td></tr>
            <tr><td>ASPECTS JURIDIQUES DE LA CRÉATION WEB 3.1</td><td>Q1</td><td>3</td></tr>
            <tr><td>E-LOGISTIQUE 3.1</td><td>Q1</td><td>1</td></tr>
            <tr><td>STAGE 3.2</td><td>A</td><td>15</td></tr>
            <tr><td>TRAVAIL DE FIN D'ÉTUDES 3.2</td><td>A</td><td>15</td></tr>
          </tbody>
        </table>
        <p><strong>Total crédits :</strong> 60</p>`;
    }
    contenu.innerHTML = html;
  }

  function setActiveTab(num) {
    // On met à jour les onglets
    for (let i = 1; i <= 3; i++) {
      const tab = document.getElementById(`tab${i}`);
      if (i === num) {
        tab.classList.add("active");
      } else {
        tab.classList.remove("active");
      }
    }
    // Affiche contenu lié
    afficheBloc(num);
  }

  // Affiche par défaut le BAC 1 au chargement
  afficheBloc(1);
</script>
   <footer> 
        
      </footer>
  
  </body>
</html>