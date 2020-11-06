

$("#CategoriaDescripcion").keyup(function() {

    $('.alert').remove();

    let Categoria = $(this).val();

    var DatosValidar = new FormData();
    DatosValidar.append('CategoriaDescripcion', Categoria);


    $.ajax({
        url: "ajax/categoria.ajax.php",
        method: "POST",
        data: DatosValidar,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(response) {
            if (response) {
                console.log(response);

                $('#mensajeCategoria').append('<div class="alert alert-danger" role="alert">' +
                    'Ya existe la categoria ingresada.' +
                    '</div>');
                $("#CategoriaDescripcion").val("");
                // FIN LAURA
                //$('#PRApellidoPaterno').val(response['apellidoPaterno']);
                //$('#PRApellidoMaterno').val(response['apellidoMaterno']);
            }
        }
    })
});


$("#tCategoria").on("click", "#btnCategoriaEliminar", function() {
    var Id = $(this).attr('IdCategoria');

    var datos = new FormData();
    datos.append('IdCategoria', Id);

    $.ajax({
        url: "ajax/categoria.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(response) {
            $("#CEliminarCategoria").html("NOMBRE : " + response['descripcionCategoria']);
            $("#EIdCategoria").val(response['codCategoria']);
        }
    })

});


$("#tCategoria").on("click", "#btnCategoriaEditar", function() {
    var Id = $(this).attr('IdCategoria');

    var datos = new FormData();
    datos.append('IdCategoria', Id);

    $.ajax({
        url: "ajax/categoria.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(response) {
            $("#IdCategoria").val(response['codCategoria']);
            $("#ECategoriaDescripcion").val(response['descripcionCategoria']);
        }
    })

});