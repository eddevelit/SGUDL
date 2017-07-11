  <script type="text/javascript" class="init">

        $(document).ready(function() {
            listar();
        } );

            var listar = function(){
                var table = $("#alumnos").DataTable({
                        "ajax":{
                            "method":"POST",
                            "url":"consulta.php"
                        },
                        "columns":[
                            {"data":"id"},
                            {"data":"nombre"},
                            {"data":"usuario"},
                            {"data":"email"},
                            {"data":"pass_word"},
                            {"data":"privilegio"}
                        ]
                });
            }
	</script>
     <script type="text/javascript" class="init">

        $(document).ready(function() {
            listar();
        } );

            var listar = function(){
                var table = $("#materiasC").DataTable({
                        "ajax":{
                            "method":"POST",
                            "url":"consulta.php"
                        },
                        "columns":[
                            {"data":"id"},
                            {"data":"nombre"},
                            {"data":"usuario"},
                            {"data":"email"},
                            {"data":"pass_word"},
                            {"data":"privilegio"}
                        ]
                });
            }
	</script>