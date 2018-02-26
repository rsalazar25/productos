function Login() 


{

 
    if ( $('#usuario').val() == "" && $('#password').val() == ""){
    	 var timeSlide = 500;
	//posicionamos el puntero en el campo de usuario
	    $('#usuario').focus();
	//posicionamos el tiempo de ajax en cero
	    $('#timer').hide(0);
	//por el momento no mostramos el ajax
	    $('#timer').css('display','none');
	    $('#alertBoxes2').css('display','none');
	    $('.palabra').css('display','none');

	    $('#alertBoxes').html('<div class="box-error"></div>');
	    $('.box-error').hide(0).html('Ingrese su Usuario y Contraseña');
	    $('.box-error').slideDown(timeSlide);
	    $('.palabra2').slideDown(timeSlide);

	    $('.box-caduca').css('display','none');

	    $('#timer').fadeOut(300);
		document.FormLogin.Usuario.focus();       
	 	return false;
	}

	if ($('#usuario').val() != "" && $('#password').val() == "" ){
       	 var timeSlide = 500;
	//posicionamos el puntero en el campo de usuario
	    $('#usuario').focus();
	//posicionamos el tiempo de ajax en cero
	    $('#timer').hide(0);
	//por el momento no mostramos el ajax
	    $('#timer').css('display','none');
	    $('#alertBoxes2').css('display','none');
	    $('.palabra').css('display','none');
	    $('#alertBoxes').html('<div class="box-error"></div>');
	    $('.box-error').hide(0).html('Ingrese su Contraseña');
	    $('.box-error').slideDown(timeSlide);
	     $('.palabra2').slideDown(timeSlide);
	    $('#timer').fadeOut(300);
		document.FormLogin.Password.focus();       
	 	return false;
	}

	if ($('#usuario').val() == "" && $('#password').val() != "" ){
       	 var timeSlide = 500;
	//posicionamos el puntero en el campo de usuario
	    $('#usuario').focus();
	//posicionamos el tiempo de ajax en cero
	    $('#timer').hide(0);
	//por el momento no mostramos el ajax
	    $('#timer').css('display','none');
	    $('#alertBoxes2').css('display','none');
	    $('.palabra').css('display','none');
	    $('#alertBoxes').html('<div class="box-error"></div>');
	    $('.box-error').hide(0).html('Ingrese su Usuario');
	    $('.box-error').slideDown(timeSlide);
	     $('.palabra2').slideDown(timeSlide);
	    $('#timer').fadeOut(300);
		document.FormLogin.Password.focus();       
	 	return false;
	}
   

}

function Recupera() 
{

 
    if (document.form1.Usuario.value == ""){
       	alert("Indique su Usuario.");
		document.form1.Usuario.focus();       
	 	return false;
	}
  
	
}


function ValidaArchivos() 
{

 
    if (document.form1.Titulo.value == ""){
       	alert("Indique el título del archivo.");
		document.form1.Titulo.focus();       
	 	return false;
	}
	
	if (document.form1.Archivo.value == ""){
       	alert("Seleccione un archivo desde su computadora.");
		document.form1.Archivo.focus();       
	 	return false;
	}
   
	
}

function ValidaArchivoDepartamento() 
{
    if (document.form3.IdDepartamento.value == ""){
       	alert("Seleccione el departamento.");
		document.form3.IdDepartamento.focus();       
	 	return false;
	}	
}



function ValidaCarpeta() 
{

 
    if (document.form1.Carpeta.value == ""){
       	alert("Indique el nombre de la carpeta.");
		document.form1.Carpeta.focus();       
	 	return false;
	}
	
}

function EmpleadoAlta() 
{

 
    if (document.form1.Nombre.value == ""){
       	alert("El campo nombre esta vacio.");
		document.form1.Nombre.focus();       
	 	return false;
	}
	
	if (document.form1.Apellidos.value == ""){
       	alert("El campo apellidos esta vacio.");
		document.form1.Apellidos.focus();       
	 	return false;
	}
	
	if (document.form1.Email.value == ""){
       	alert("Por favor indique el Email.");
		document.form1.Email.focus();       
	 	return false;
	}

	if (document.form1.Nacimiento.value == ""){
       	alert("Por favor indique la fecha de nacimiento.");
		document.form1.Nacimiento.focus();       
	 	return false;
	}
	
	if (document.form1.IdLocalidad.value == ""){
       	alert("Por favor indique la unidad de trabajo.");
		document.form1.IdLocalidad.focus();       
	 	return false;
	}
	

	
}

function TiendaAlta() 
{

 
    if (document.form1.IdRegion.value == ""){
       	alert("Seleccione la región.");
		document.form1.IdRegion.focus();       
	 	return false;
	}
	
	if (document.form1.Codigo.value == ""){
       	alert("El campo Código esta vacio.");
		document.form1.Codigo.focus();       
	 	return false;
	}
	
	if (document.form1.Tienda.value == ""){
       	alert("El campo Tienda esta vacio.");
		document.form1.Tienda.focus();       
	 	return false;
	}
	
	if (document.form1.IdEstado.value == ""){
       	alert("Seleccione el estado.");
		document.form1.IdEstado.focus();       
	 	return false;
	}
	
	if (document.form1.IdTipoTienda.value == ""){
       	alert("Seleccione el tipo de tienda.");
		document.form1.IdTipoTienda.focus();       
	 	return false;
	}
}

function ValidaCierreVenta() 
{

    if (document.form1.Efectivo.value == ""){
       	alert("Indique el monto del Efectivo.");
		document.form1.Efectivo.focus();       
	 	return false;
	}
	
	if (document.form1.FechaArchivo.value == ""){
       	alert("Indique La fecha del cierre de venta.");
		document.form1.FechaArchivo.focus();       
	 	return false;
	}
	
	if (document.form1.Archivo.value == ""){
       	alert("Seleccione un archivo.");
		document.form1.Archivo.focus();       
	 	return false;
	}
	
}

function VBusquedaArch() 
{

 
    if (document.FormBusArch.Busqueda.value == ""){
       	alert("No puedo generarle una búsqueda ya que el campo esta vacio.");
		document.FormBusArch.Busqueda.focus();       
	 	return false;
	}
	
}	


function ValidaNoticias() 
{

 
    if (document.form1.TitNoticia.value == ""){
       	alert("Ingrese el título de la noticia.");
		document.form1.TitNoticia.focus();       
	 	return false;
	}
	
	 if (document.form1.Noticia.value == ""){
       	alert("Ingrese la noticia.");
		document.form1.Noticia.focus();       
	 	return false;
	}
	
}

function ValidaNoticiasDep() 
{

 
    if (document.form1.TitNoticiaD.value == ""){
       	alert("Ingrese el título de la noticia.");
		document.form1.TitNoticiaD.focus();       
	 	return false;
	}
	
	 if (document.form1.NoticiaD.value == ""){
       	alert("Ingrese la noticia.");
		document.form1.NoticiaD.focus();       
	 	return false;
	}
	
}

function ValProyecto() 
{

 
    if (document.form1.Proyecto.value == ""){
       	alert("Ingrese el título del proyecto.");
		document.form1.Proyecto.focus();       
	 	return false;
	}
	
	 if (document.form1.Inicia.value == ""){
       	alert("Indique la fecha de inicio.");
		document.form1.Inicia.focus();       
	 	return false;
	}
	
	if (document.form1.FechaFin.value == ""){
       	alert("Indique la fecha de termino.");
		document.form1.FechaFin.focus();       
	 	return false;
	}
	
	if (document.form1.HoraFin.value == ""){
       	alert("Indique la hora de termino.");
		document.form1.FechaFin.focus();       
	 	return false;
	}
	
	if (document.form1.Descripcion.value == ""){
       	alert("Indique la descripcion.");
		document.form1.Descripcion.focus();       
	 	return false;
	}
		
	
}

function ValidaPreguntaFrecuente() 
{
 
    if (document.form1.Pregunta.value == ""){
       	alert("Ingrese la pregunta.");
		document.form1.Pregunta.focus();       
	 	return false;
	}
	
	 if (document.form1.Respuesta.value == ""){
       	alert("Ingrese la respuesta.");
		document.form1.Respuesta.focus();       
	 	return false;
	}
	
}


function ValidaFraseSemana() 
{
 
    if (document.form1.Frase.value == ""){
       	alert("Por favor indique una frase para la semana.");
		document.form1.Frase.focus();       
	 	return false;
	}
}

function VBusquedaArch() 
{
 
    if (document.FormBusArch.Busqueda.value == ""){
       	alert("Indicque el nombre del archivo a buscar.");
		document.FormBusArch.Busqueda.focus();       
	 	return false;
	}
}


function DirectorioBus() 
{
 
    if (document.FDirectorioBus.Busqueda.value == ""){
       	alert("Indicque el nombre del personal a buscar.");
		document.FDirectorioBus.Busqueda.focus();       
	 	return false;
	}
}


function DirectorioTieBus() 
{
 
    if (document.FDirectorioTieBus.Busqueda.value == ""){
       	alert("Indicque el nombre de la tienda a buscar.");
		document.FDirectorioTieBus.Busqueda.focus();       
	 	return false;
	}
}

function TotGasto() 
{
 
    if (document.FTotalGasto.TotalGasto.value == ""){
       	alert("Indicque el total del gasto de la tienda.");
		document.FTotalGasto.TotalGasto.focus();       
	 	return false;
	}
	
    if (document.FTotalGasto.Semana.value == ""){
       	alert("Indicque la semana.");
		document.FTotalGasto.Semana.focus();       
	 	return false;
	}	
}


function ValidaContrasena() 
{

 
    if (document.form1.Password.value == ""){
       	alert("Ingresa la contraseña.");
		document.form1.Password.focus();       
	 	return false;
	}

	
}

function Reconocimiento() 
{

 
    if (document.Positivo.Comentarios.value == ""){
       	alert("Por favor ingresa un comentario.");
		document.Positivo.Comentarios.focus();       
	 	return false;
	}
  
	
}

function DepartamentoAlta() 
{

 
    if (document.Form1.Departamento.value == ""){
       	alert("Por favor indica el nombre del departamento.");
		document.Form1.Departamento.focus();       
	 	return false;
	}
  
	
}

function DepartamentoAsignaPersonal() 
{

 
    if (document.Form1.IdEmpleado.value == ""){
       	alert("Por favor selecciona el personal.");
		document.Form1.IdEmpleado.focus();       
	 	return false;
	}
  
	
}

