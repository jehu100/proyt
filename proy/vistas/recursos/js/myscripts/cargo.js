$("#UICargoDescripcion").keyup(function() {

    $('.alert').remove();

    let Cargo = $(this).val();

    var DatosValidar = new FormData();
    DatosValidar.append('UICargoDescripcion', Cargo);


    $.ajax({
        url: "ajax/cargo.ajax.php",
        method: "POST",
        data: DatosValidar,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(response) {
            if (response) {
                console.log(response);

                $('#mensaje').append('<div class="alert alert-danger" role="alert">' +
                    'El cargo ya existe.' +
                    '</div>');
                $("#UICargoDescripcion").val("");
                // FIN LAURA
                //$('#PRApellidoPaterno').val(response['apellidoPaterno']);
                //$('#PRApellidoMaterno').val(response['apellidoMaterno']);
            }
        }
    })
});


$("#tCargo").on("click", "#btnCargoEliminar", function() {
    var Id = $(this).attr('IdCargo');

    var datos = new FormData();
    datos.append('IdCargo', Id);

    $.ajax({
        url: "ajax/cargo.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(response) {
            $("#CEliminar").html("NOMBRE : " + response['descripcionCargo']);
            $("#EIdCargo").val(response['codCargo']);
        }
    })

});


$("#tCargo").on("click", "#btnCargoEditar", function() {
    var Id = $(this).attr('IdCargo');

    var datos = new FormData();
    datos.append('IdCargo', Id);

    $.ajax({
        url: "ajax/cargo.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(response) {
            $("#IdCargo").val(response['codCargo']);
            $("#ECargoDescripcion").val(response['descripcionCargo']);
        }
    })

});

