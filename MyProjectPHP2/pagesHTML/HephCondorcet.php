<!doctype HTML>
<html lang="fr">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heph Condorcet</title>
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
        <h1 class="neon-title">Heph Condorcet</h1>
    </div>

    <section>
  <div class="Regroupe">
    <h1>La Haute École Provinciale de Hainaut Condorcet</h1>

    <p>
      L’HEPH-Condorcet est une institution publique d’enseignement supérieur de la Fédération Wallonie-Bruxelles, répartie sur plusieurs implantations en Wallonie picarde et dans le Hainaut. Elle offre un large éventail de formations professionnalisantes dans des domaines variés tels que la santé, la technologie, les sciences humaines, l’agronomie, l’économie, l’enseignement, ou encore les arts.
    </p>

    <h2>Implantations principales :</h2>
    <ul>
      <li><strong>Tournai (Froyennes)</strong> : sciences, technologies, gestion, arts, social, communication</li>
      <li><strong>Ath</strong> : social, pédagogique</li>
      <li><strong>Mons</strong> : informatique, droit, communication, sciences humaines</li>
      <li><strong>Charleroi</strong> : santé, paramédical, sciences sociales</li>
      <li><strong>Marcinelle</strong> : soins infirmiers</li>
      <li><strong>La Louvière</strong> : agronomie, environnement</li>
      <li><strong>Saint-Ghislain</strong> : techniques industrielles</li>
      <li><strong>Morlanwelz</strong> : éducation physique, sciences de la motricité</li>
    </ul>

    <h2>Quelques domaines d’étude proposés :</h2>
    <ul>
      <li>Sciences de la santé : soins infirmiers, kiné, diététique</li>
      <li>Économie et gestion : comptabilité, e-business, marketing</li>
      <li>Sciences humaines : travail social, psychologie, sociologie</li>
      <li>Éducation : régentats, instituteurs, pédagogie spécialisée</li>
      <li>Sciences et technologies : informatique, électromécanique, chimie</li>
      <li>Agronomie : environnement, production végétale et animale</li>
      <li>Arts appliqués et communication : design, journalisme, audiovisuel</li>
    </ul>
  </div>

  <aside style="flex: 1; min-width: 300px;">
 <h2>Localisation</h2>
<div class="map-container">
  <div class="map-item">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2531.4811088397196!2d3.339250276248832!3d50.618178775273144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2df9dace28313%3A0x88656905cfb304ef!2sHEPH-Condorcet%20-%20Site%20de%20Froyennes!5e0!3m2!1sfr!2sbe!4v1748200402751!5m2!1sfr!2sbe" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <div class="map-caption">📍 Tournai (Froyennes)</div>
  </div>

  <div class="map-item">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2531.236477633533!2d3.772152276249127!3d50.62272367494527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3000159ce8b8d%3A0x7bfe3b23e6994020!2sHEPH-Condorcet%20%2F%2F%20D%C3%A9partement%20Agrobiosciences%20et%20Chimie%20-%20Ath!5e0!3m2!1sfr!2sbe!4v1748200456958!5m2!1sfr!2sbe" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <div class="map-caption">📍 Ath</div>
  </div>

  <div class="map-item">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2539.775460129074!2d3.9505270262397056!3d50.463905836395284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2501e686ddc07%3A0x1a9b1af43f1902b3!2sHEPH-Condorcet%20%2F%2F%20Mons!5e0!3m2!1sfr!2sbe!4v1748200498005!5m2!1sfr!2sbe" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <div class="map-caption">📍 Mons</div>
  </div>

  <div class="map-item">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d40675.60567726931!2d4.414870379101559!3d50.41827279999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2260f971fb9a1%3A0xcb967976890ea24e!2sHEPH-Condorcet%20%2F%2F%20D%C3%A9partement%20des%20sciences%20%C3%A9conomiques%2C%20juridiques%20et%20de%20gestion%20(Charleroi)!5e0!3m2!1sfr!2sbe!4v1748200541401!5m2!1sfr!2sbe" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <div class="map-caption">📍 Charleroi</div>
  </div>

  <div class="map-item">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2544.499878697124!2d4.4313497000000055!3d50.3758794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c224265b0c4bbb%3A0x3254020be8cd7024!2sHEPH-Condorcet%20%2F%2F%20Sciences%20de%20l&#39;Enseignement%20%2F%20Communication%2C%20de%20l&#39;%C3%A9ducation%20et%20des%20sciences%20sociales!5e0!3m2!1sfr!2sbe!4v1748200598114!5m2!1sfr!2sbe" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <div class="map-caption">📍 Marcinelle</div>
  </div>

  <div class="map-item">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d162549.41824704406!2d4.100872400000004!3d50.46280350000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c23734cb743393%3A0xaa952977744fa6af!2sHEPH-Condorcet%20%2F%2F%20D%C3%A9partement%20des%20sciences%20de%20l&#39;enseignement%20(Morlanwelz)!5e0!3m2!1sfr!2sbe!4v1748200651548!5m2!1sfr!2sbe" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <div class="map-caption">📍 La Louvière</div>
  </div>

  <div class="map-item">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2540.8682801930186!2d3.8195299999999905!3d50.44355410000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c259da5eaed9a9%3A0xe2b03bfb863a6c0c!2sHEPH-Condorcet%20%2F%2F%20Saint-Ghislain!5e0!3m2!1sfr!2sbe!4v1748200679735!5m2!1sfr!2sbe" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <div class="map-caption">📍 Saint-Ghislain</div>
  </div>
</div>
  </aside>
</section>

<footer>
</footer>

    </body>
</html>