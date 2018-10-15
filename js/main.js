$(document).ready(function(){

	/*para que vallan apareciento los circulos */
	var imgitems = $('.slider li').length;
	var imgPos = 1;
	

	//	console.log(imgitems);
	/*Ciclo para reproducir circulos*/
	for(i = 1; i <= imgitems; i++){
		$('.paginacion').append('<li><span  class = "fa fa-circle"></span></li>');
	}

	$('.slider li').hide();//oculta los slider
	$('.slider li:first').show();//muestra el primer slide
	$('.paginacion li:first').css({'color': '#CD6E2E'});//damos estilo al primer item
	//funciones para hacer cambio o transision en imagenes para el slider
	//para cambiar los imagenes para los circulos

	//llamado de funciones
	$('.paginacion li').click(paginacion);
	$('.right1 span').click(nextSlider);
	$('.left1 span').click(prevslider);

	setInterval(function(){
		nextSlider();
	},4000);

	//creacion de funciones

	function  paginacion(){
		var numero_circulo = $(this).index() + 2;

		$('.slider li').hide();
		$('.slider li:nth-child('+ numero_circulo +')').fadeIn();

		$('.paginacion li').css({'color':'white'});
		$(this).css({'color':'#CD6E2E'});

		imgPos = numero_circulo;
	} 
	function nextSlider(){
		if( imgPos >= imgitems+1){imgPos = 2;} 
		else {imgPos++;}

		$('.paginacion li').css({'color': 'white'});
		$('.paginacion li:nth-child(' + imgPos +')').css({'color': 'white'});
		$('.slider li').hide(); // Ocultamos todos los slides
		$('.slider li:nth-child('+ imgPos +')').fadeIn(); // Mostramos el Slide seleccionado

	}

	function prevSlider(){
		if(imgPos <= 4){imgPos = imgItems;}
		else{imgPos--;}

		$('.paginacion li').css({'color':'white'})
		$('.paginacion li:nth-childchild('+ imgPos +')').css({'color':'#CD6E2E'}); 
		$('.slider li').hide();//esconder las imagenes del slider
		$('.slider li:nth-child('+ imgPos +')').fadeIn();//mostrar el slider seleccionado
	}


});