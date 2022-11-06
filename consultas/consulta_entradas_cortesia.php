<?php include('../templates/header.html');   ?>

<body>

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

	$nombre = $_POST["nombre_artista"];

	$query = "SELECT COUNT(entradascortesia.asiento) 
	FROM entradascortesia 
	WHERE entradascortesia.nombre_artista = $nombre
	GROUP BY entradascortesia.nombre;";
	
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
	echo "Artista: $name";
	foreach ($artistas as $artista) {
  		echo "<tr> <td>$artista[0]</td> <td>$artista[1]</td> </tr>";
	}
  ?>
	</table>

<?php include('../templates/footer.html'); ?>
