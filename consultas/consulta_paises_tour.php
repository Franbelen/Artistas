<?php include('../templates/header.html');   ?>

<body>

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

	$nombre_tour = $_POST["nombre_tour"];

	$query = "SELECT e.país, e.fecha_inicio
	FROM tour as t, eventos as e
	WHERE t.nombre = e.nombre
	AND LOWER(t.nombre) LIKE LOWER ('%$nombre_tour%');";

	$result = $db -> prepare($query);
	$result -> execute();
	$artistas = $result -> fetchAll();
  ?>

	<table>
    <tr>
      <th>Paises por visitar</th>
	  <th> Fecha </th>
    </tr>
  <?php

	foreach ($artistas as $artista) {
  		echo "<tr> <td>$artista[0]</td> <td>$artista[1]</td> </tr>";
	}
  ?>
	</table>

<?php include('../templates/footer.html'); ?>
