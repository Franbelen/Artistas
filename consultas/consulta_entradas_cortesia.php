<?php include('../templates/header.html');   ?>

<body>

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

	$nombre = $_POST["nombre_artista"];

	$query = "SELECT artistas.nombre, COUNT(entradascortesia.asiento) 
	FROM artistas , entradascortesia 
	WHERE artistas.nombre = entradascortesia.nombre_artista
	AND artistas.nombre = $nombre
	GROUP BY artistas.nombre;";
	
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
	foreach ($artistas as $artista) {
  		echo "<tr> <td>$artista[0]</td> <td>$artista[1]</td> </tr>";
	}
  ?>
	</table>

<?php include('../templates/footer.html'); ?>
