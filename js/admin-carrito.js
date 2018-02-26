$(document).ready(inicio)
function inicio(){
	$(".link2").click(anade)
	$('#carrito-compras-tienda').load("private/admin-carrito.php");
	$('.suma').load("private/admin-carrito-suma.php");

	$(".aparece-carrito").click(function(){
        $("#container-resumen-carrito").animate({height: 'toggle'},200);
    });
}
function anade(){
	var idnumero = $(this).val();
	var elId = $(this).attr("href");
	//alert(idnumero);
	//alert(elId);
	$('#carrito-compras-tienda').load("private/admin-carrito.php?prod="+$(this).val()+"&id="+elId);
	$('.suma').load("private/admin-carrito-suma.php?prod3="+$(this).val()+"&id="+elId);
	//$('.modal-carrito').modal('show');
	//alert("private/carrito.php?prod="+$(this).val()+"&id="+elId);

	
}

