$(document).ready(function() {
    listarA();
} );

var listarA = function(){
    var table = $("#example").DataTable({
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
        "columns":[{"data":"NomCarrera"}
            ,{"data":"Grupo"}
            ,{"data":"Matricula"}
            ,{"data":"Alumno"}
            ,{"data":"Delegacion"}
            ,{"data":"Edad"}
			,{"data":"EscuelaProcedencia"}
			,{"data":"Ciclo"}
			,{"data":"Tipo"}
			,{"data":"Materia"}
			,{"data":"CalFinal"},
        ]
	    });
	} 