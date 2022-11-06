<?php include('../templates/header.html');   ?>

<body>

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

	$nombre = $_POST["nombre_artista"];

	$query = "SELECT ec.nombre_artista as artista, COUNT(ec.asiento) as cantidad_entradas_cortesia
	FROM entradascortesia as ec
	WHERE LOWER(ec.nombre_artista) LIKE LOWER('%$nombre%')
	GROUP BY ec.nombre_nombre;";

	$result = $db -> prepare($query);
	$result -> execute();
	$artistas = $result -> fetchAll();
  ?>

	<table>
    <tr>
      <th>Nombre</th>
      <th>Cantidad entradas</th>
    </tr>
  <?php
	echo "Artista: $nombre";
	foreach ($artistas as $artista) {
  		echo "<tr> <td>$artista[0]</td> <td>$artista[1]</td> </tr>";
	}
  ?>
	</table>

<?php include('../templates/footer.html'); ?>
