<!DOCTYPE html>
<html>
<head>

	<title>REPORTES</title>
	<link  rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
	<script>
	

	function Imprimir() {
    	window.print();
	}

	</script>
</head>
<style>
	.h3{
		background-color: blue;
	}
</style>
<body onload=Imprimir()>



<div class="container">
	<div class="row">
		
		
		
        <img src="images/logo.png" width="80" height="80">
		<center><h2>Empresa de Transporte de Buse
			<br>(Salinas)</h2></center>
			<br><center><h3>REPORTES DE BUS</h3></center>
		
        <?php
		include("conexion.php");
		
		$consulta=mysqli_query($conexion,"SELECT bus.placa,bus.marca,bus.modelo,bus.capacidad,conductor.nom,conductor.ape_pater,conductor.ape_mater,bus.fecha FROM bus INNER JOIN conductor ON bus.idConductor=conductor.idConductor WHERE bus.Estado=1");
		$n=mysqli_num_rows($consulta);
	echo "<table class='table'>";
	echo "<thead class='thead-dark'>
	<tr class='info'><tr><th><center>PLACA</center></th><th><center>MARCA</center></th><th><center>MODELO</center></th><th><center>CAPACIDAD</center></th><th><center>PROPIETARIO</center></th></th><th><center></center>FECHA</th></tr></thead></tbody>";

		for ($i=1; $i<=$n ; $i++) 
	{ 
		$fila=mysqli_fetch_array($consulta);
		$placa=$fila["placa"];
		$marca=$fila["marca"];
		$modelo=$fila["modelo"];
		$capacidad=$fila["capacidad"];
        $nom=$fila["nom"];
        $apellido1=$fila["ape_pater"];
        $apellido2=$fila["ape_mater"];
        $fecha=$fila["fecha"];

		


	echo "<tr>
	<td><center>$placa</center></td>
	<td>$marca</td>
	<td><center>$modelo</center></td>
	<td><center>$capacidad</center></td>
    <td>$nom  $apellido1 $apellido2</td>
    <td>$fecha</td>
  
<td>";
		};
		echo "</tbody></table>";
		?>
	</div>
</div>
<script src="js/bootstrap.min.js"></script>
</body>
</html>