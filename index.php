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
    <input type="text" name="nombre artista">
    <br/>
    
    <input type="submit" value="Buscar">
  </form>
  
  <br>
  <br>
  <br>

// Consulta 3
  <h3 align="center"> ¿Quieres saber sobre el ultimo tour de un artista?</h3>

  <form align="center" action="consultas/consulta_stats.php" method="post">
    Id:
    <input type="text" name="id_elegido">
    <br/><br/>
    <input type="submit" value="Buscar">
  </form>
  
  <br>
  <br>
  <br>
// Consulta 4
  <h3 align="center"> ¿Quieres saber paises por donde pasara un tour?</h3>

  <form align="center" action="consultas/consulta_altura.php" method="post">
    Altura Mínima:
    <input type="text" name="altura">
    <br/><br/>
    <input type="submit" value="Buscar">
  </form>
  <br>
  <br>
  <br>
// Consulta 5 
  <h3 align="center">¿Quienes han trabajado con un artista?</h3>

  <?php
  #Primero obtenemos todos los tipos de pokemones
  require("config/conexion.php");
  $result = $db -> prepare("SELECT DISTINCT tipo FROM pokemones;");
  $result -> execute();
  $dataCollected = $result -> fetchAll();
  ?>

  <form align="center" action="consultas/consulta_tipo.php" method="post">
    Seleccinar un tipo:
    <select name="tipo">
      <?php
      #Para cada tipo agregamos el tag <option value=value_of_param> visible_value </option>
      foreach ($dataCollected as $d) {
        echo "<option value=$d[0]>$d[0]</option>";
      }
      ?>
    </select>
    <br><br>
    <input type="submit" value="Buscar por tipo">
  </form>

  <br>
  <br>
// Consulta 6
<h3 align="center">¿Donde se ha hospedado el artista?</h3>
// Consulta 7
<h3 align="center">¿Quien es el artista con mayor cantidad de entradas regaladas?</h3>
  <br>
  <br>
</body>
</html>
