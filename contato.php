<html>
<head>
  <meta charset="UTF-8">
  <title>Página de Contato</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="contatostyle.css">
</head>
<body>
<header>
<?php
  include_once("templates/header.php");
?>
  </header>


  <h1> Contato </h1>


  <div class="contato">
    <form class="forms">

      <h2>Nome:</h2>
      <input type="text" placeholder="" size="30" class="forms1">

      <h2> E-mail:</h2>
      <input type="email" placeholder="" size="60" class="forms1">

      <h2>Mensagem:</h2>
      <textarea rows="4" cols="50" name="assunto" required="required" placeholder="" maxlength="500" class="forms1"> </textarea>

      <button type="submit" class="button"> Enviar </button>
    </form>
  </div>

  <img src="img/logo2.png" alt="Descrição da imagem" class="logo1">
  <br>
  <br>

  <footer>
  <p>I.A Space Blog &copy; 2023</p>
  </footer>

  <style>
    * .forms1{
    padding: 5px;
    margin-top: 10px;
    display: block;
    margin-bottom: 5px;
    background-color: #e8e8e8;
    border-radius: 8px;
    font-size: 16px;
    border: none;
    width: 400px;
    
  }
  
  h1{
    font-family:'font-family:' 'Montserrat', sans-serif;
    font-size: 37px;
    padding: 20px;
    margin-top: 10px;
    text-align: center;
  
  }
  
  h2 {
    font-family: 'Montserrat', sans-serif;
    font-size: 15px;
  }
  
  .button {
    padding: 10px;
    background-color: #3f65e2;
    color:aliceblue;
    /* font-family: 'Indie Flower', cursive; */
    font-family: 'Montserrat', sans-serif;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    width: 100px;
    position: relative;
    align-items: center;
    margin-top: 10px;
  }
  
  .button textarea {
    color: rgb(255, 255, 255);
    resize: vertical;
  
  }
  .logo1{
    position: absolute;
    left: 180px; 
    top: 150px; 
    width: 300px;
    border-radius: 30px;
  
  
  }
  .forms{
      
    position: absolute;
    left: 600px;
    top: 165px;
    width: 225px;
  }
  #navbar {
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: rgb(0, 145, 255);;
  padding: 30px;
  text-transform: uppercase;
  list-style: none;
  margin-top: -26px;
  font-family: 'Montserrat', sans-serif;
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
  top: 550px;
}
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

  </style>

</html>
</body>