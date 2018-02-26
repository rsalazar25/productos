$(document).ready(inicio)
function inicio(){
	$(".link2").click(anade)
	$('#carrito-compras-compras').load("private/compras-carrito.php");
	// $('.suma').load("private/requisitor-carrito-suma.php");
    $("#container-resumen-carrito-compras").css("display", "none");

	$(".aparece-carrito2").click(function(){
    $("#container-resumen-carrito-compras").animate({height: 'toggle'},200);
    });
}
function anade(){
	var idnumero = $(this).val();
	var elId = $(this).attr("href");
	//alert(idnumero);
	//alert(elId);
	$('#carrito-compras-compras').load("private/compras-carrito.php?prod="+$(this).val()+"&id="+elId);
	// $('.suma').load("private/requisitor-carrito-suma.php?prod="+$(this).val()+"&id="+elId);
	$('.modal-carrito').modal('show');
	//alert("private/carrito.php?prod="+$(this).val()+"&id="+elId);

	
}

