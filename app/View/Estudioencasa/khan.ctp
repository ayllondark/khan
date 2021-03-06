<!DOCTYPE html>
<html>
<head>
    <title>Pamer-Khan</title>
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
	<link href="khan_estilos.css" rel="stylesheet">
</head>
<body>
	<div class="recon">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<img class="logo" src="img/logo.png" align="logo">
				<div class="text-center"><h2 class="titleCursos">Cursos</h2></div>
			</div>
			<div id="contenido_cursos"></div>
		</div>

		<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modal_instrucciones">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-contentstepV">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		        <h4 class="modal-title" id="exampleModalLabel">Instrucciones</h4>
		      </div>
		      <div class="modal-body">
		        <embed src="manual.pdf" type="application/pdf" width="100%" height="400px" />
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-primary" data-dismiss="modal">Salir</button>
		      </div>
		    </div>
		  </div>
		</div>
	</div>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap.min.css" />
	<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.bootstrap.min.css"/>

	<script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
	<script src="//cdn.datatables.net/1.10.21/js/dataTables.bootstrap.min.js"></script>
	<script src="//cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.js"></script>
	<script type="text/javascript">
		cargar_cursos();

		function cargar_cursos() {
		  try {
		    var formData = new FormData();
		    formData.append("acc", "cargar_cursos");
		    $.ajax({
		      type: "POST",
		      processData: false, 
		      contentType: false,
		      url: "/khan/data.php",
		      data: formData,
		      success: function (data) {
		      	var html="";
		      	if( data.length > 0 ) {
		      		var html= "";
		      		var j= 0;
		      		var x=0;
			      	var valores = JSON.parse(data);
			      	console.log(valores);
			      	var primero= valores[0].curso;
			      	var seg= "";
			      	var content2= "";
			      	$.each(valores, function(i, item) {
			      		j++;

							html= html + '<div class="col-md-6 col-sm-6 col-xs-12 card_cursos">'+
								'<h1>'+item.curso+'</h1>'+
								'<div id="card_cursos">'+
									'<div class="conttemas">'+
										'<div class="stepV completed">'+
												'<div class="v-stepper">'+
													'<div class="circle"></div>'+
													'<div class="lineV"></div>'+
												'</div>'+
												'<div class="contentstepV">'+
													'<a href="#" onClick="cargar_archivo(\''+item.archivo+'\')">'+item.practica+'</a>'+
												'</div>'+
										'</div>' +
									'</div>'+
								'</div>'+
							'</div>'
		            });
		            $('#contenido_cursos').html(html);
				}
		      },
		      error: function (xhr, ajaxOptions, thrownError) {
		        $("#info").show();
		        $("#info").html("<div class='alert alert-danger'><strong>Error: </strong>Ha Ocurrido un error</div>");
		      }
		    });
		  }catch (e) {
		    $("#info").show();
		    $("#info").html("<div class='alert alert-danger'><strong>Error: </strong>Ha Ocurrido un error</div>");
		    return false;
		  }
		}

		function cargar_archivo(archivo) {
		  try {
		    var formData = new FormData();
		    formData.append("acc", "cargar_archivo");
		    formData.append("archivo", archivo);
		    $.ajax({
		      type: "POST",
		      processData: false, 
		      contentType: false,
		      url: "/khan/data.php",
		      data: formData,
		      success: function (data) {
		      	console.log(data);
		      	if( data.length > 0 ) {
					window.location.assign("inicio.html");
				}
		      },
		      error: function (xhr, ajaxOptions, thrownError) {
		        return false;
		      }
		    });
		  }catch (e) {
		    return false;
		  }
		}
		function cargar_temas(){

		}
	</script>
</body>
</html>