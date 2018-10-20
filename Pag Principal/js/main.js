$(document).ready(function(){
	/* 1)Para tranformar el icon en una x y viceversa y 2)mostrar el contenido dentro de las pestañas */
	$(".boton-menu span").click(function(e){
		e.preventDefault();
		//parte 1
		if($(".boton-menu span").attr('class') == 'icon icon-align-left'){
			$(".boton-menu span").removeClass('icon icon-align-left').addClass('icon icon-cancel-circle');
			//parte 2
			$(".navegacion nav").animate({left:'0'});
		}else {
			$(".boton-menu span").removeClass('icon icon-cancel-circle').addClass('icon icon-align-left');
			//parte 2
			$(".navegacion nav").animate({left:'-100%'});

		}
	});
	//agregando y eliminando clase "nav responsive"
	var wd = $(window).width();
	if(wd <= 1000){
		$(".navegacion na").addClass('nav-responsive')
	}else{
		$(".navegacion na").removeClass('nav-responsive')
	}

	$(window).resize(function(){
		var wdi = $(window).width();
		if(wdi <= 1000){
			$(".navegacion nav").addClass('nav-responsive')
		}else{
			$(".navegacion nav").removeClass('nav-responsive')
			$(".navegacion nav").css({'position':''})
		}
	});

	/*Menu fixed: que permanezca fijo*/
	var navTop = $('.navegacion').offset().top;
	var navHeight = $('.navegacion').height();

	$(window).scroll(function(){
		if($(window).scrollTop() > navTop){
			$('.navegacion').css({'position':'fixed','top':'0'})
			$('body').css({'padding-top':navHeight})
			$('.nav-responsive').css({'position':'fixed'})
		}else{
			$('.navegacion').css({'position':'','top':''})
			$('body').css({'padding-top':'0'})
			//$('.navegacion nav').css({'position':'fixed'})
			$('.nav-responsive').css({'position':'absolute'})
		}
	});   
});