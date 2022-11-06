<?php include('../templates/header.html');   ?>

<body>

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");


	$query = "SELECT a.nombre, count(*) maximum 
	FROM artistas as a, entradascortesia as ec
	WHERE a.nombre = ec.nombre_artista
	GROUP BY a.nombre
	ORDER BY maximum DESC 
	LIMIT 1;}";
	
	$result = $db -> prepare($query);
	$result -> execute();
	$artistas = $result -> fetchAll();
  ?>
<h2> Artista con mas entradas regaladas </h2>
	<table>
    <tr>
	  <th>  Artista  </th>
      <th>  Cantidad de entradas  </th>
	  
    </tr>
  <?php
	
	foreach ($artistas as $artista) {
  		echo "<tr> <td>$artista[0]</td> <td>$artista[1]</td> </tr>";
	}
  ?>
	</table>

<?php include('../templates/footer.html'); ?>
