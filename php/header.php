<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Adaptation mobile (viewport)  -->
  <meta name="author" content="Tony Dang">
  <meta name="description" content="Collection de carte Pokémon">
  <meta name="keywords" content="Pokémon, Collection, Carte">
  <meta data-n-head="true" data-hid="og:image" property="og:image" content="../images/background.gif">
  <link rel="icon" type="image/x-icon" href="../images/favicon.ico"> <!-- Favicon (icone titre)  -->

  <!-- Début importation librairie -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/header.css">
  <link rel="stylesheet" href="../css/responsive.css">
  <link rel="stylesheet" href="../css/footer.css">

  <!-- Fin importation librairie -->

  <title>Pokemon Cards Collection</title>

</head>
<body>

  <!-- Début section header  -->

  <header class ="header">

    <a class="logo"><img src="../images/logo.png" alt="logo"></a>

    <nav class="navbar">
      <a href="../#home">Accueil</a>
      <a href="../#about">A propos</a>
      <a href="../#cards">Cartes en vedette</a>
    </nav>

    <div class="icons">
      <div id="menu-btn" class="fas fa-bars"></div>
      <a id="dark-mode" onclick="darkMode()" title="darkMode" class="fas fa-moon"></a>
      <a id="music-btn" title="music" class="fas fa-music"></a>
      <audio loop autoplay="true" id="son1" src="../musics/music-navbar.mp3"></audio>
      <a id="login-btn" onclick="toggleLoginModal()" title="Login" class="fas fa-sign-in"></a>
    </div>

    <div id="loginModal" class="login-modal">
      <span onclick="toggleLoginModal()" class="close" title="Close Modal">&times;</span>
      <form class="login-modal-content animate" method="post">
        <div class="title">
          <p>Se connecter</p>
        </div>

        <div class="container">
          <label for="uname"><b>Pseudo</b></label>
          <input type="text" placeholder="Pseudo" name="username" required>
          <label for="psw"><b>Mot de passe</b></label>
          <input type="password" placeholder="Mot de passe" name="password" required>
          <button type="submit">Connexion</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Se souvenir de moi
          </label>
        </div>

        <div class="container">
          <a class= "psw" href="#">Mot de passe oublié?</a>
          <a class= "createaccount" href="#">Créer un compte</a>
        </div>
      </form>
    </div>

  </header>

  <!-- Fin section header -->
