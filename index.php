<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.6/dist/css/uikit.min.css" />

</head>

<body>
        <header>
          <nav class="uk-navbar">
              <div class="uk-navbar-center">
                <ul class="uk-navbar-nav">
                    <li>
                      <a href="index.php">Accueil</a>
                    </li>
                    <li>
                      <a href="skills.php">Compétences</a>
                    </li>
                    <li>
                      <a href="bts.php">BTS SIO</a>
                    </li>
                    <li>
                      <a href="stage.php">Stage</a>
                    </li>
                    <li>
                      <a href="veille.php">Veille</a>
                    </li>
                    <li>
                      <a href="contact.php">Contact</a>
                    </li>
                </ul>
              </div>
        </nav>
    </header>

  <div class="home">
    <h1>Raphaël DUMAS - Présentation</h1>
    <div class="history">
      Je suis un étudiant, actuellement en BTS SIO à l'Institution des Chartreux, à Lyon, j'ai 18 ans et suis titulaire d'un baccalauréat
      scientifique du Lycée Général du Parc, dans le 6e arrondissement de Lyon.<br>
      Je dispose également du Cambridge Test Certificate, attestant de mon niveau B2 en Anglais.
      Actuellement en 2e année du BTS, Option SLAM (axée développement & base de données)<br>
      Après ce BTS, je compte continuer ma formation en allant jusqu'au Master/Bac + 5, dans une école d'ingénieur.
    </div>

    <div class="cursus">
      <ul> 
        <h3>Cursus Scolaire :</h3>
        <li>
          BTS SIO - Institution des Chartreux (2020-2022)
        </li>
        <li>
          Lycée Général du Parc - Baccalauréat Scientifique (2017-2020)
        </li>
      </ul>
      <ul>
        <h3>Diplômes :</h3>
        <li>
          Baccalauréat Scientifique, Option ISN (Informatique & Sciences du Numérique) - 2020
        </li>
        <li>
          Cambridge Test Certificate - Niveau B2 - 2020
        </li>
      </ul>
    </div>

    <a href="./assets/cv_raphael_dumas.pdf" target="_blank"><button class="btn btn-primary">Mon CV</button></a>
  </div>
<?php include './footer.html'; ?>