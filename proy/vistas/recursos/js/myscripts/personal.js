$("#order-listing").on("click", "#btnPersonalEditar", function() {
    var Id = $(this).attr('IdPersonal');

    var datos = new FormData();
    datos.append('IdPersonal', Id);

    $.ajax({
        url: "ajax/personal.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(response) {
            console.log(response);
            var IdPersonal = response['codPersonal'];
            $("#IdPersonal").val(IdPersonal);
            var perCi = response['ci'];
            $("#perCi").val(perCi);
            var perPaterno = response['apellidoPaterno'];
            $("#perPaterno").val(perPaterno);
            var perMaterno = response['apellidoMaterno'];
            $("#perMaterno").val(perMaterno);
            var perNombre = response['nombre'];
            $("#perNombre").val(perNombre);
            var perDireccion = response['direccion'];
            $("#perDireccion").val(perDireccion);
            var perCelular = response['celular'];
            $("#perCelular").val(perCelular);
            var perTele = response['telefono'];
            $("#perTele").val(perTele);
            var perCargo = response['descripcionCargo'];
            $("#perCargo").val(perCargo);
            var IdCargo = response['codCargo'];
            $("#IdCargo").val(IdCargo);
        }
    })

});


$("#order-listing").on("click", "#btnPersonalEliminar", function() {
    var Id = $(this).attr('IdPersonal');

    var datos = new FormData();
    datos.append('IdPersonal', Id);

    $.ajax({
        url: "ajax/personal.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(response) {
            $("#PEliminar").html("NOMBRE : " + response['nombre'] +" "+ response['apellidoPaterno'] +" "+ response['apellidoMaterno']);
            $("#EIdPersonal").val(response['codPersonal']);
        }
    })

});

$("#ValidarCI").keyup(function() {

    $('.alert').remove();

    let CI = $(this).val();

    var DatosValidar = new FormData();
    DatosValidar.append('CIValidar', CI);


    $.ajax({
        url: "ajax/personal.ajax.php",
        method: "POST",
        data: DatosValidar,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(response) {
            if (response) {
                console.log(response);

                $('#MessageCI').append('<div class="alert alert-danger" role="alert">' +
                    'Cedula de identidad duplicada.' +
                    '</div>');
                $("#ValidarCI").val("");
              
            }
        }
    })
});