function agregaform(datos){

	d=datos.split('||'); 

	$('#idmen').val(d[0]);
	$('#numu').val(d[1]);
	$('#fechu').val(d[2]);
	$('#obsu').val(d[3]);
	$('#codu').val(d[4]);


	
}

function actualizaDatos(){

    id=$('#idmen').val();
	num_dep=$('#numu').val();
	fech_dep=$('#fechu').val();
	obs=$('#obsu').val();
	cod_ins=$('#codu').val();


	cadena= "id=" + id + 
			"&num_dep=" + num_dep +
			"&fech_dep=" + fech_dep +
			"&obs=" + obs +
			"&cod_ins=" + cod_ins;

    $.ajax({
		type:"POST",
		url:"php/agregarDatos.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla').load('componentes/tabla.php');
				alertify.success("actulizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}