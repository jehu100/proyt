/* --------------------------
    Subir la foto del usuario
 -------------------------- */
$("#InputImage").change(function() {
    var imagen = this.files[0];
    /* --------------------------
        Validar formato de imagen JPG / PNG
    -------------------------- */
    if (imagen["type"] != "image/jpeg" && imagen["type"] != "image/png") {
        $("#InputImage").val("");

        // Alerta de error
        swal({
            title: "Error al subir la imagen",
            text: "¡La imagen debe estar en formato JPG o PNG!",
            type: "error",
            confirmButtonText: "Cerrar"
        })

    } else if (imagen["size"] > 1000000) {

        swal({
            title: "Error al subir la imagen",
            text: "¡La imagen no debe pesar mas de 1MB!",
            type: "error",
            confirmButtonText: "Cerrar"
        })


    } else {
        var datosImagen = new FileReader;
        datosImagen.readAsDataURL(imagen);

        $(datosImagen).on("load", function(event) {
            var rutaImagen = event.target.result;
            $("#previsualizarUsuario").attr("src", rutaImagen);
        })
    }


})