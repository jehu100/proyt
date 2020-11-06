$("#order-listing").on("click", "#btnBusEditar", function() {
    var Id = $(this).attr('idBuss');

    var datos = new FormData();
    datos.append('idBuss', Id);

    $.ajax({
        url: "ajax/bus.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(response) {
            console.log(response);
            var idBuss = response['idBus'];
            $("#idBuss").val(idBuss);
            var busplaca = response['placa'];
            $("#busplaca").val(busplaca);
            var busmarca = response['marca'];
            $("#busmarca").val(busmarca);
            var busmodelo = response['modelo'];
            $("#busmodelo").val(busmodelo);
            var buscapacidad = response['capacidad'];
            $("#buscapacidad").val(buscapacidad);
          
        }
    })

});