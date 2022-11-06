<?php include('../templates/header.html');   ?>

<body>

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

	$nombre = $_POST["nombre"];

	$query = "SELECT e.nombre_artista, p.* 
	FROM eventos as e, productoras as p
	WHERE LOWER(e.nombre_artista) LIKE LOWER ('%$nombre%')
	AND e.nombre_productora = p.nombre
	ORDER BY e.nombre_artista;";
	
	$result = $db -> prepare($query);
	$result -> execute();
	$artistas = $result -> fetchAll();
  ?>
<h2> Productoras que han trabajado con un artista </h2>
	<table>
    <tr>
	  <th>  Artista  </th>
      <th>  Productora  </th>
	  <th>  País  </th>
	  <th>  Número  </th>
    </tr>
  <?php
	echo "Nombre artista: $nombre \n";

	foreach ($artistas as $artista) {
  		echo "<tr> <td>$artista[0]</td> <td>$artista[1]</td> <td>$artista[2]</td> <td>$artista[3]</td> </tr>";
	}
  ?>
	</table>

<?php include('../templates/footer.html'); ?>
