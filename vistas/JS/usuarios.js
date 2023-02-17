/*SUBIENDO FOTO DEL USUARIO*/

$(".nuevaFoto").change(function(){
  var imagen = this.files[0];

  /*VALIDACION DE IMAGEN DE JPG O PNG*/

  if (imagen["type"] != "image/jpeg" && imagen["type"] != "image/png") {
    
    $(".nuevaFoto").val("");
    swal({
        title : "Error de subir imagen",
        text: "¡La imagen debe ser formato JPG O PNG",
        type: "error",
        confirmButtonText: "Cerrar"
    });
  }else if (imagen["size"] > 2000000) {
    $(".nuevaFoto").val("");
    swal({
        title : "Error de subir imagen",
        text: "¡La imagen no debe pesar mas de 2 MB",
        type: "error",
        confirmButtonText: "Cerrar"
    });
  }else{
    var datosImagen = new FileReader;
    datosImagen.readAsDataURL(imagen);

    $(datosImagen).on("load", function(event) {
        var rutaImagen = event.target.result;
        $(".previsualizar").attr("src", rutaImagen);      
    });
  }

});

/*==========================
EDITAR USUARIO
==============================*/


$(".bntEditarUsuario").click(function(){debugger
 var idUsuario = $(this).attr("idUsuario");
 console.log("idUsuario es:", idUsuario);
})