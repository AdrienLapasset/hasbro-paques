<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>Mamie Nova</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
  <header class="<?php echo $nav ?>">
    <div class="container">
      <div class="menu-container">
        <img class="logo-ope" src="assets/imgs/logo-ope.png" alt="">
        <div class="menu-nav">
          <button class="close-menu-btn">
            <img src="assets/icons/menu-close-btn.svg" alt="">
          </button>
          <div class="d-flex flex-column flex-lg-row align-items-lg-end">
            <ul class="order-2 order-lg-0">
              <li>
                <a href="">Déclarer mes achats</a>
              </li>
              <li>
                <a href="">Mes grilles <span class="grid-count">2/2</span></a>
              </li>
              <li>
                <a href="">mon compte</a>
              </li>
              <li>
                <a href="">comment jouer ?</a>
              </li>
            </ul>
            <aside class="connexion">
              Bonjour <span>Florian</span> !
              <a href="">Déconnexion</a>
            </aside>
          </div>
        </div>
        <button class="open-menu-btn">
          <img src="assets/icons/menu-open-btn.svg" alt="">
        </button>
      </div>
    </div>
  </header>
