
<html>
<head>

	<title>REPORTE</title>
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
		<center><h2>Empresa de Transporte de Buses
			<br>(Salinas)</h2></center>
			<br><center><h3>REPORTES DE CONDUCTORES</h3></center>
		
        <?php
		include("conexion.php");
		
		$consulta1=mysqli_query($conexion,"SELECT conductor.ci,lugar.Departamento,conductor.nom,conductor.ape_pater,conductor.ape_mater,conductor.dir,conductor.tel,tiposangre.Tipo,niveldepropiedad.nivel,conductor.fingreso,conductor.CFoto FROM conductor INNER JOIN lugar ON lugar.idlugar=conductor.idlugar INNER JOIN tiposangre ON tiposangre.idSangre=conductor.idSangre INNER JOIN niveldepropiedad ON niveldepropiedad.idpropiedad=conductor.idpropiedad");
		$n=mysqli_num_rows($consulta1);
	echo "<table class='table'>";
	echo "<thead class='thead-dark'>
	<tr class='info'><tr><th><center>CI</center></th><th><center>EX</center></th><th><center>NOMBRE</center></th><th><center>DIRECCION</center></th><th><center>TELEFONO</center></th></th><th>SANGRE</th><th><center>FECHA</center></th></tr></thead></tbody>";

		for ($i=1; $i<=$n ; $i++) 
	{ 
		$fila=mysqli_fetch_array($consulta1);
		$ci=$fila["ci"];
		$Departamento=$fila["Departamento"];
		$nom=$fila["nom"];
        $apellido1=$fila["ape_pater"];
        $apellido2=$fila["ape_mater"];
        $direccion=$fila["dir"];
        $Telefono=$fila["tel"];
        $Sangre=$fila["Tipo"];
        $fecha=$fila["fingreso"];


		


	echo "<tr>
	<td><center>$ci</center></td>
	<td>$Departamento</td>
    <td>$nom  $apellido1 $apellido2</td>
    <td><center>$direccion</center></td>
	<td><center>$Telefono</center></td>
    <td>$Sangre</td>
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