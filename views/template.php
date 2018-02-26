<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Template</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="images/m.ico" />
        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/estilos.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-select.css">
        <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.4.2/css/buttons.bootstrap.min.css">

        
        <link rel="stylesheet" href="css/fonts.css">
        <link rel="stylesheet" href="css/material.css">
        <link rel="stylesheet" href="css/jquery.lightbox-0.5.css">
</head>
<body>

<header>           
        <div id="logo">
            <a href="panel_control.php"><img src="views/images/logo.png" alt="Mobo"></a>
           <!-- <?php /* 
            $conexion = mysqli_connect($servidor, $usuario, $contrasena, $basededatos);
            mysqli_set_charset($conexion, "utf8");
            $consultaProductos = "SELECT * FROM in_productos WHERE Cantidad <= Min_Producto";
            $result = mysqli_query($conexion, $consultaProductos);
            while ($rowProductos = mysqli_fetch_assoc($result)) {
                $IdProducto = $rowProductos['IdProducto'];
                echo $IdProducto;
                $insertPedidos = "INSERT INTO in_notificaciones (IdProducto,Leido, Fecha) VALUES ('".$IdProducto."', 0 , NOW())";
                $resultado = mysqli_query($conexion, $insertPedidos);
            }
            */ ?>
            <div id="notificaciones">
                <span class="icon-notifications_active"></span>
            </div> -->
            <div id="header">
                <!-- <div class="logout"><a href="#" class="table-cell-td" data-toggle="modal" data-target=".modal-logout"><img style="width:35px; height:35px;" src="http://192.168.10.22/uploads/Empleados/<?php echo $_SESSION['IdEmpleado'];?>/<?php echo $_SESSION['Foto'];?>" alt=""> <?php echo $_SESSION['Nombre']; ?> - Cerrar Sesión<span class="icon-exit"></span></a></div> -->
            </div>
        </div>
    </header>

		<?php 
			include "modules/navegacion.php";
		?>
<div id="contenedor">
	<div id="contenedor_bienvenida">

		<?php

		$mvc = new Vistas();
		$mvc -> enlacesPaginasController();
		?>
	
</div>
    <footer>
        <div id="footer"><p>Copyright ©2017 Mobo México | Sistemas | Desarrollo WEB | INSUMOS V1.0</p></div>
    </footer>
        <script src="views/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script> <!-- Modernizr para igualar estilos en todos los navegadores -->
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="js/material.min.js"></script> <!-- Material Design -->
            <link href="http://code.jquery.com/ui/1.10.3/themes/blitzer/jquery-ui.css" rel="stylesheet" type="text/css"><!--CDN Estilos Css jqueryui-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script><!--CDN del jquery ui-->
        <script type="text/javascript" src="views/js/jquery.lightbox-0.5.js"></script>
        <script src="views/js/jquery.validate.js"></script>
        <script src="views/js/app.js"></script>
        <script src="views/js/menu.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script src="views/js/bootstrap-select.js"></script>

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="//cdn.datatables.net/buttons/1.4.2/js/buttons.html5.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.4.2/js/buttons.print.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.4.2/js/buttons.colVis.min.js"></script>

		<script>
 $(document).ready(function() {
    var table = $('#example').DataTable( {
        initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select><option value=""></option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        }, 

        

        buttons: [ 'copy', 'excel', 'pdf', 'colvis', 'print' ],
        "language": {
            "lengthMenu": "Display _MENU_ Registros por Página",
            "zeroRecords": "No se encontrarón resultados",
            "info": "Mostrando Página _PAGE_ of _PAGES_",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(filtrado de _MAX_ total registros)",
            "search": "Buscar:",
            "paginate": {
            "first":      "Primera",
            "last":       "Ultima",
            "next":       "Siguiente",
            "previous":   "Anterior"
    },
        }
    } );


 
    table.buttons().container()
        .appendTo( '#buttons' );
} );
</script>

    </body>
</html>

