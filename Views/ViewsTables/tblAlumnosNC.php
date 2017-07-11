 <?php
 include '../../web.config/conection.php';
 
 
 <script type="text/javascript" >
    $(document).ready(function() {
    listarB();
} );

var listarB = function(){
    var table = $("#tblAlumnosNC").DataTable({
    	"bDeferRender": true,
		"oLanguage": {
		"sLoadingRecords": "Por favor espera Cargando...",
		"sEmptyTable":"No se encontraron registros",
		"sInfo": "Mostrando registros del _START_  al _TOTAL_ <br> Total de registros: _END_",
		"sSearch": "Filtro:",
		"sLengthMenu": "Mostrar _MENU_",
		"oPaginate": {
			"sLast": "Última página",
			"sFirst": "Primera",
			"sNext": "<b>></b>",
			"sPrevious": "<b><</b>"
			}
		},
        "ajax":{
            "method":"POST",
            "url":"../web.config/consulta.php"
        },
        "columns":[
                            {"data":"MATRICULA"},
                            {"data":"ALUMNO"},
                            {"data":"GRUPO"},
                            {"data":"EDAD"},
                            {"data":"DELEGACION"},
                            {"data":"ESCPROC"},
                            {"data":"CICLO"},
                            {"data":"MATERIA"},
                            {"data":"CALFINAL"}
                        ]
                });
            }
  </script>


<div class="box box-primary">
        <div class="box-header ">
            <i class="ion ion-clipboard"></i>
            <h3 class="box-title">Alumnos <small>Materias no cursadas.</small></h3>
            <table id="tblAlumnosNC" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Metricula</th>
                          <th>Alumno</th>
                          <th>GRUPO</th>
                          <th>Edad</th>
                           <th>Delegacion</th>
                          <th>Escuela de Procedencia</th>
                          <th>Cliclo</th>
                          <th>Materia</th>
                          <th>Calificación</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>