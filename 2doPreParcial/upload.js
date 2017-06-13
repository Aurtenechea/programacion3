function GuardarCD()
{

	var inputFileImage = document.getElementById("foto");
	var file = inputFileImage.files[0];
	var datosDelForm = new FormData("formcd");
	//console.info(file);
    console.log( file );

	// var titulo=$("#titulo").val();
	// var id=$("#idCD").val();
	// var cantante=$("#cantante").val();
	// var anio=$("#anio").val();

	datosDelForm.append("foto", file);
    // datosDelForm.append("titulo",titulo);
	// datosDelForm.append("id",id);
	// datosDelForm.append("cantante",cantante);
	// datosDelForm.append("anio",anio);

	var funcionAjax=$.ajax({
		url:"http://localhost/utn/programacion3/2doPreParcial/cd/",
		type:"post",
		data:datosDelForm,
		cache: false,
    	contentType: false,
    	processData: false

	}).then(function(respuesta){
		// $("#informe").html("cantidad de agregados "+ respuesta);
		// console.log("guardar cd");

	},function(error){

			// $("#informe").html(error.responseText);
			// console.info("error", error);

	});

}
