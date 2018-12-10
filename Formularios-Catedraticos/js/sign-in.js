$("#btn-login").click(function(){
    $.ajax({
		url:"ajax/login-catedraticos.php",
		data:"No_Cuenta="+$("#No_Cuenta").val() + "&password="+$("#password").val(),
		dataType:"json",
		method:"POST",
		success:function(respuesta){
			console.log(respuesta);
			if(respuesta.estatus == 1){
				if(respuesta.jerarquia=="Catedratico");
					window.location.href = "Pag-Catedraticos.php";
            }else{
                if(respuesta.estatus == 0){
                $('#No_Cuenta').css('border-bottom-color', '#F14B4B')
				var mensajeModal = '<div class="modal_wrap">'+
                                    '<div class="mensaje_modal">'+
										'<h2 style="text-align:center;">Credenciales De Ingreso al Sistema Erroneas</h2>'+
										'<p><b>Numero de Usuario Incorrecto o</b></p>'+
										'<p><b>Contraseña Incorrecta</b></p>'+
										'<h2>Universidad Nacional Autonoma de Honduras</h2>'+
                                        '<span id="btnClose">Finalizar</span>'+
                                    '</div>'+
                                '</div>'
                $('body').append(mensajeModal);
                }
            }
                // CERRANDO MODAL ==============================
                $('#btnClose').click(function(){
                    $('.modal_wrap').remove();
                });
            },
            error:function(error){
                console.error(error);
                $("#notificacion").append(error.responseText);
            }

	});
});