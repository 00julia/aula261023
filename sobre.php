<?php
//   include_once("helpers/url.php");
//   include_once("data/posts.php");
//   include_once("data/categories.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Codar</title>
  <!-- ESTILOS DO PROJETO -->
  <link rel="stylesheet" href="<?= $BASE_URL ?>/css/styles.css">
  <!-- GOOGLE FONTS -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital@1&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,900&display=swap" rel="stylesheet">
</head>
<body>
  <header>
   <a href="<?= $BASE_URL ?>" id="logo">
      <img src="<?= $BASE_URL ?>/img/logo.jpg" alt=" Blog">
    </a>
    <nav>
      <ul id="navbar">
        <li><a href="index.php" class="nav-link">Home</a></li>
        <li><a href="categorias.php" class="nav-link">Categorias</a></li>
        <li><a href="sobre.php" class="nav-link">Sobre</a></li>
        <li><a href="contato.php" class="nav-link">Contato</a></li>
      </ul>
    </nav>
  </header>

<p class=t0>Sobre a IA SPACE BLOG!</p>

<p class=t1>Somos um blog que leva informação sobre IA para as pessoas! Nosso foco principal é facilitar o conhecimento e o entendimento da inteligência artificial.</p>

<p class=t1>A inteligência artificial (IA) é um dos campos da tecnologia mais interessantes e promissores da atualidade. Permite que máquinas e dispositivos eletrônicos executem tarefas anteriormente reservadas aos humanos. E não apenas tarefas mecânicas, mas também tarefas que exigem o trabalho de profissionais especializados.<p>
    <style>
        * {
  font-family: 'Montserrat', sans-serif;
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

html {
  min-height: 100vh;
  position: relative;
}

main {
  margin-bottom: 250px;
}

.t0{
    font-family: 'Merriweather', serif;
    font-size: 30px;
    margin-left: 450px;
    margin-top: 45px;
}

.t1{
            color: black;
            width: 800px;
            margin-left: 240px;
            margin-top: 50px;
            font-family: 'Merriweather', serif;
            font-size: 20px;
        }
        #logo {
  position: absolute;
  top: 10px;
  left: 9.5%;
}

#logo img {
  width: 50px;
}
        #navbar {
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: rgb(0, 145, 255);;
  padding: 20px;
  text-transform: uppercase;
  list-style: none;
}

#navbar li {
  margin: 0 10px;
  padding: 5px;
}

#navbar .nav-link {
  color: white;
  text-decoration: none;
  transition: .5s;
  font-size: 14px;
}
#navbar .nav-link:hover {
  color: #000000;
}

footer {
  width: 100%;
  position: absolute;
  bottom: 0;
  text-align: center;
  background-color: rgb(0, 145, 255);;
  color: #FFF;
  padding: 50px 0;
}

/* MOBILE */
@media(max-width: 480px) {

  /* HOME */
  header {
    width: 100%;
  }

  #logo {
    display: block;
    position: relative;
    margin: 0 auto;
    left: 0;
    width: 50px;
  }

  #navbar {
    display: none;
  }

}


    </style>
    <footer>
  <p>I.A Sapace Blog &copy; 2023</p>
</footer>
</body>
</html>