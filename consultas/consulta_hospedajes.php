<?php include('../templates/header.html');   ?>

<body>

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

	$nombre = $_POST["nombre"];

	$query = "SELECT v.nombre_artista,h.nombre, h.lugar, COUNT(*)
	FROM estadía as h, viaje as v
	WHERE v.código = h.código
	AND LOWER(v.nombre_artista) LIKE LOWER('%$nombre%')
	GROUP BY h.nombre;";
	
	$result = $db -> prepare($query);
	$result -> execute();
	$artistas = $result -> fetchAll();
  ?>
<h2> Información hospedaje </h2>
	<table>
    <tr>
	  <th>  - Artista -  </th>
      <th>  - Nombre estadia -  </th>
	  <th>  - Lugar -  </th>
    </tr>
  <?php
	echo "Nombre artista ingresado: $nombre \n";
	foreach ($artistas as $artista) {
  		echo "<tr> <td>$artista[0]</td> <td>$artista[1]</td> <td>$artista[2]</td> </tr>";
	}
  ?>
	</table>

<?php include('../templates/footer.html'); ?>
