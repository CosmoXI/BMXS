<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>DEV: BMXS Alpha _ Login </title>
<!-- Meta donnee de la page
  =============================================== -->
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">

<!-- CSS
  =============================================== -->
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/font-awesome.css">

<!-- Favicon
  =============================================== -->
  <link rel="icon" type="image/png" href="images/favicon.png">
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="../index.php">BMXS - Connexion</a>
        </div>
    </div>
</nav>

<div class="container">

    <div class="starter-template" style="padding-top: 100px;">
        
        <?php if ($erreur == true) :?>
            <p>Erreur</p>
        <?php endif ?>
        
        <form method="post">
            <div class="form-group">
                <label>Pseudo</label>
                <input type="text" name="username" value="" class="form-control">
            </div>
            <div class="form-group">
                <label>Mot de passe</label>
                <input type="password" name="password" value="" class="form-control">
            </div>    
            <button class="btn btn-primary">Envoyer</button>
        </form>    

    </div>

</div><!-- /.container -->


</body>
</html>
