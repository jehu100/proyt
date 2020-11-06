
<html>
<head>

	<title>REPORTE DE AYUDANTES</title>
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
			<br><center><h3>REPORTES DE AYUDANTES</h3></center>
		
        <?php
		include("conexion.php");
		
		$consulta1=mysqli_query($conexion,"SELECT ayudante.Aci,lugar.Departamento,ayudante.Anombre,ayudante.Aape_pater,ayudante.Aape_mater,ayudante.Aedad,ayudante.Adireccion,ayudante.Acelular,tiposangre.Tipo,ayudante.fecha FROM ayudante INNER JOIN lugar ON lugar.idlugar=ayudante.idlugar INNER JOIN tiposangre ON tiposangre.idSangre=ayudante.idSangre WHERE ayudante.Estado=1");
		$n=mysqli_num_rows($consulta1);
	echo "<table class='table'>";
	echo "<thead class='thead-dark'>
	<tr class='info'><tr><th><center>CI</center></th><th><center>EX</center></th><th><center>NOMBRE-APELLIDOS</center></th><th><center>EDAD</center></th><th><center>DIRECCION</center></th></th><th>TELEFONO</th><th><center>SANGRE</center></th><th>FECHA</th></tr></thead></tbody>";

		for ($i=1; $i<=$n ; $i++) 
	{ 
		$fila=mysqli_fetch_array($consulta1);
		$Aci=$fila["Aci"];
		$Departamento=$fila["Departamento"];
		$Anombre=$fila["Anombre"];
        $apellido1=$fila["Aape_pater"];
        $apellido2=$fila["Aape_mater"];
        $Aedad=$fila["Aedad"];
        $Adireccion=$fila["Adireccion"];
        $Acelular=$fila["Acelular"];
        $Sangre=$fila["Tipo"];
        $fecha=$fila["fecha"];


		


	echo "<tr>
	<td><center>$Aci</center></td>
	<td>$Departamento</td>
    <td>$Anombre  $apellido1 $apellido2</td>
    <td><center>$Aedad</center></td>
    <td>$Adireccion</td>
    <td><center>$Acelular</center></td>
    <td><center>$Sangre</center></td>
    <td><center>$fecha</center></td>
  
<td>";
		};
		echo "</tbody></table>";
		?>
	</div>
</div>
<script src="js/bootstrap.min.js"></script>
</body>
</html>