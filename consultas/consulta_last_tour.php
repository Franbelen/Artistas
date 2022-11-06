<?php include('../templates/header.html');   ?>

<body>

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

	$nombre = $_POST["nombre"];

	$query = "SELECT e.*
	FROM tour as t, eventos as e
	WHERE t.nombre = e.nombre
	AND LOWER(t.nombre_artista) LIKE LOWER ('%$nombre%')
	ORDER BY e.fecha_inicio DESC
	LIMIT 1;";

	$result = $db -> prepare($query);
	$result -> execute();
	$artistas = $result -> fetchAll();
  ?>

	<table>
    <tr>
	  <th>Nombre</th>
	  <th>Recinto</th>
	  <th>Artista</th>
      <th>Paises por visitar</th>
	  <th> Ciudad </th>
	  <th> Fecha </th>
	  <th>Productora</th>
    </tr>
  <?php
	echo "Nombre artista: $nombre";
	foreach ($artistas as $artista) {
  		echo "<tr> <td>$artista[0]</td> <td>$artista[1]</td> <td>$artista[2]</td><td>$artista[3]</td><td>$artista[4]</td><td>$artista[5]</td></tr>";
	}
  ?>
	</table>

<?php include('../templates/footer.html'); ?>
