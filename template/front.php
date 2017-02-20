<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>DEV: BMXS Alpha_ <?= $this->title ?> </title>
<!-- Meta donnee de la page
  =============================================== -->
  <meta name="description" content="<?= $this->description ?>">
  <meta name="keywords" content="">
  <meta name="author" content="">

<!-- CSS
  =============================================== -->
  <link rel="stylesheet" href="./css/bootstrap.css">
  <link rel="stylesheet" href="./css/font-awesome.css">
  <link rel="stylesheet" href="./css/styles.css">
<!-- Favicon
  =============================================== -->
  <link rel="icon" type="image/png" href="images/favicon.png">
</head>
<body>

<!--Top Menus -->
  <div class="toprow">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <nav class="top-menus">
            <ul>
              <li>
                <a href="#"><i class="fa fa-facebook-square"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-twitter-square"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-instagram"></i></a>
              </li>
            </ul>
          </nav>
        </div>
        <div class="col-md-6">
          <nav class="top-menus pull-right">
            <ul>
              <li><a href="#">Calendrier</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="#">e-Shop</a></li>
              <li><?= $this->menuAdmin() ?></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
<!--Fin Top Menu-->

<!--Site Header-->
  <header class="site-header">
    <!--Logo & Recherche-->
    <div class="topbar">
      <div class="container">
        <div class="row">
            <div class="col-md-4">
              <!--logo-->
              <h1 class="logo"><a href="index.php"><img src="images/logo.png" alt="Logo" style="height: 100px"></a></h1>
            </div>
            <div class="col-md-8">
              <!--recherche-->
              <div class="top-search">
                <form action="#">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    <input type="text" class="form-control" placeholder="Recherche...">
                  </div>
                </form>
              </div>
            </div>
        </div>
      </div>
    </div>
    <!--Menu principale-->
    <div class="main-menu">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <nav>
              <ul class="nav nav-tabs nav-justified">
                  <?= $this->getMenu() ?>
              </ul>
            </nav>
          </div>
        </div>
      </div>      
    </div>    
  </header>
<!--Fin Site Header-->

<!--Content-->
  <div class="container">
      <?= $this->content ?>
  </div>
<!-- Fin Content-->

<!--Featured Gallery-->
<!--...-->

<!--Footer-->
  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h4>A Propos</h4>
          <img src="images/logo.png" alt="Logo" style="width: 60%">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat accusamus obcaecati eveniet dolore veritatis autem reiciendis, debitis, molestiae ut nemo nulla! Pariatur quis dignissimos nemo, nostrum facere nam rerum nulla.</p>
        </div>
        <div class="col-md-4">
          <h4>Plan</h4>
          <ul>
            <li><a href="">Accueil</a></li>
            <li><a href="">A Propos</a></li>
            <li><a href="">Evénements</a></li>
            <li><a href="">Ventes</a></li>
            <li><a href="">Blog</a></li>
          </ul>
        </div>
        <div class="col-md-4">
         <h4>Le Club sur twitter</h4>
         <span>Loading...</span> 
        </div>
      </div>
    </div>
  </footer>
  <footer class="site-footer-bottom">
    <div class="container">
      <div class="row">
        <div class="copyrights-col-left col-md-6">
          <p>© 2016 BMXSoumagne. Tous droits réservés.</p>
        </div>
        <div class="copyrights-col-right col-md-6">
            <div class="social-icons">
              <a href="https://www.facebook.com/" target="_blank">
              <i class="fa fa-facebook"></i></a>
              <a href="https://twitter.com/" target="_blank">
              <i class="fa fa-twitter"></i></a>
              <a href="http://www.pinterest.com/" target="_blank">
              <i class="fa fa-pinterest"></i></a>
              <a href="https://plus.google.com/" target="_blank">
              <i class="fa fa-google-plus"></i></a>
              <a href="http://www.pinterest.com/" target="_blank">
              <i class="fa fa-youtube"></i></a>
              <a href="#"><i class="fa fa-rss"></i></a> 
            </div>
          </div>
      </div>
    </div>
  </footer>
<!--Fin Footer [à styler]-->
</body>
</html>