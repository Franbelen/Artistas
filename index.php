<?php include('templates/header.html');   ?>

<body>
  <h1 align="center">DCC Artistas</h1>
  <p style="text-align:center;">Aquí podrás encontrar información sobre artistas, tours y eventos.</p>

  <br>
// Consulta 1
  <h3 align="center"> ¿Quieres saber los nombres y telefonos de todos nuestros artistas?</h3>

  <form align="center" action="consultas/consulta_all.php" method="post">
  <input type="submit" value="Mostrar lista">
  </form>
  
  <br>
  <br>
// Consulta 2

  <h3 align="center"> ¿Quieres saber a quien le ha entregado entradas de cortesia un artista?</h3>
  <form align="center" action="consultas/consulta_entradas_cortesia.php" method="post">
    Nombre
    <input type="text" name="nombre_artista">
    <br/>
    
    <input type="submit" value="Buscar">
  </form>
  
  <br>
  <br>
  <br>

// Consulta 3
  <h3 align="center"> ¿Quieres saber sobre el ultimo tour de un artista?</h3>

  <form align="center" action="consultas/consulta_last_tour.php" method="post">
    Nombre Artista:
    <input type="text" name="nombre">
    <br/><br/>
    <input type="submit" value="Buscar">
  </form>
  
  <br>
  <br>
  <br>
// Consulta 4
  <h3 align="center"> ¿Quieres saber paises por donde pasara un tour?</h3>

  <form align="center" action="consultas/consulta_paises_tour.php" method="post">
    Nombre tour:
    <input type="text" name="nombre_tour">
    <br/><br/>
    <input type="submit" value="Buscar">
  </form>
  <br>
  <br>
  <br>
// Consulta 5 
  <h3 align="center">¿Quienes han trabajado con un artista?</h3>
  <form align="center" action="consultas/consulta_productoras.php" method="post">
    Nombre artista:
    <input type="text" name="nombre">
    <br/><br/>
    <input type="submit" value="Buscar">
  </form>
  <br>
  <br>
  <br>

// Consulta 6
<h3 align="center">¿Donde se ha hospedado el artista?</h3>
<form align="center" action="consultas/consulta_hospedajes.php" method="post">
    Nombre artista:
    <input type="text" name="nombre">
    <br/><br/>
    <input type="submit" value="Buscar">
  </form>
  <br>
  <br>
  <br>
// Consulta 7
<h3 align="center">¿Quien es el artista con mayor cantidad de entradas regaladas?</h3>
<form align="center" action="consultas/consulta_mas_entradas.php" method="post">
    <input type="submit" value="Buscar">
  </form>
  <br>
  <br>
  <br>
</body>
</html>
