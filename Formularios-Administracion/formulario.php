<?php
	function generarCodigo($longitud){
		$acum = 1;
		$key = "UNAH-0000-";
		$keys= $key.$acum;
		$archivo = fopen("data/registro_persona.json","r");
		while(($linea=fgets($archivo))){
			$registro = json_decode($linea,true);
			if($registro["No_Cuenta"]==$keys){
				$acum = $acum + 1;
				$keys = $key . ($acum);
			}else{
				$keys = $key . $acum;
			}
		}
		fclose($archivo);
		return $keys;
	}
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario de Registro</title>
	
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=K2D:200,400,700" rel="stylesheet" >
	<link rel="stylesheet" href="css/modificaciones.css">
	<link rel="icon" href="img/logo.ico">


	
</head>
<body>
	<div id="incluir-header">

	</div>
	<main role="main">

		<section class="content-form">
			<h1 style="text-align: center;">Registro Docentes UNAH</h1>
			<h2 class="sub-title">Datos Generales</h2>

			<form>
			
				<div class="form-group width-12">
						<h3 class="sub-form" style="text-align: center;">Nombre Y Apellidos:</h3>
					<div class="width-6">
					<input type="text" placeholder="Nombres" class="form-control" name="nombre" id="nombre" /> 
					</div> 
					<div class="width-6">
					<input type="text" placeholder="Apellidos" class="form-control" name="apellido" id="apellido" /> 
					</div>  
				</div>

				<div class="form-group">
					<div class="width-6">
							<h3 class="sub-form" style="text-align: center;">Direccion:</h3>
						<input type="text" placeholder="Dirección" class="form-control" name="direccion" id="direccion" />
					</div>
					<div class="width-6">
							<h3 class="sub-form" style="text-align: center;">No Identidad:</h3>
						<input type="text" placeholder="xxxx-xxxx-xxxxx" class="form-control" name="ID" id="ID" />
					</div>
				</div>
				
				<div class="form-group width-12">
					<div class="width-6">
							<h3 class="sub-form" style="text-align: center;">Telefono:</h3>
						<input type="tel" placeholder="Teléfono" class="form-control" name="telefono" id="telefono" /> 
					</div> 
					<div class="width-6">
							<h3 class="sub-form" style="text-align: center;">Edad:</h3>
							<input type="text" placeholder="Edad" class="form-control" name="edad" id="edad" /> 
					</div>   
				</div>

				<div class="form-group width-12">
						<div class="width-6">
							<h3 class="sub-form" style="text-align: center;">Correo:</h3>
							<input type="email" placeholder="Correo Electronico" class="form-control" name="email" id="email" /> 
						</div> 
						<div class="width-6">
							<h3 class="sub-form" style="text-align: center;">Password:</h3>
							<input type="password" placeholder="Password" class="form-control" name="password" id="password" /> 
						</div>   
				</div>

				<div class="form-group width-12">
						<h3 class="sub-form" style="text-align: center;">Sexo:</h3>
						
						<div class="width-3">
							<label for="programador"><input type="radio"  id="masculino" name="genero" class="genero" value="masculino"/>Masculino</label>
						</div>
						<div class="width-3">
							<label for="disenador"><input type="radio" id="femenino" name="genero" class="genero" value="femenino"/>femenino</label>
						</div>
						<div class="width-3">
							<label for="disenador"><input type="radio" id="otro" name="genero" class="genero" value="otro"/>Otro</label>
						</div>
				</div>
					
				<div class="form-group width-12">
					<h3 class="sub-form" style="text-align: center;">Estado Civil</h3>
					<div class="width-3">
						<label for="soltero"><input type="radio" id="soltero" class="estado" name="estado" value="soltero" />Soltero</label>
						</div>
						<div class="width-3">
						<label for="casado"><input type="radio" id="casado" class="estado" name="estado" value="casado"/>Casado</label>
						</div>
						<div class="width-3">
						<label for="divorciado"><input type="radio" id="divorciado" class="estado" name="estado" value="divorciado"/>Divorciado</label>
					</div>
					<div class="width-3">
						<label for="viudo"><input type="radio" id="viudo" class="estado" name="estado" value="viudo" />Viudo</label>
					</div>
				</div>
				
				</div>
				<div class="form-group width-12">
					<div class="width-6">
						<h3 class="sub-form" style="text-align: center;">Fecha de ingreso</h3>
						<input type="date" nombre="fecha" class="form-control" id="fecha" placeholder="dd/mm/aa"/>
					</div> 
					<div class="width-6">
						<h3 class="sub-form" style="text-align: center;">Jerarquia Del Empleado</h3>
						<!--input type="jerarquia" nombre="jerarquia" class="form-control" id="jerarquia" placeholder="Catedratico,Coordinador o Jefe de Depto"/--> 
						<select name="jerarquia" id="jerarquia" style="background: #fff; border: none; font-size: 14px; height: 38px; padding: 5px; width: 379px; left:3px;">
							<option value="">Seleccione</option>
							<option value="Catedratico">Catedratico</option>
							<option value="Coordinador">Coordinador</option>
							<option value="Jefe-Depto">Jefe de Departamento</option>
						</select>
					</div>
				</div>
				<div class="width-12">
						<h3 class="sub-form" style="text-align: center;">Numero de Cuenta Generado</h3>
						<input type="text" nombre="No_Cuenta" class="form-control" id="No_Cuenta" value="<?php echo generarCodigo(1)?>"/> 
				</div>

				<div class="form-group width-12">
						<input type="button" value="Registrar" class="form-control btn btn-principal" id="btn-registrar"/>	 
				</div>
				
			</form>
		</section>
	</main>	
	<div id="error" style="witdh:100%; heigth:100px; background-color:red;"></div>
	<script src="../Libreria/js/bootstrap.min.js"></script>
	<script src="../Libreria/js/jquery-3.3.1.min.js"></script>
	<script>
		$("#btn-registrar").click(function(){
			var parametros =  `nombre=${$("#nombre").val()}&apellido=${$("#apellido").val()}&direccion=${$("#direccion").val()}&ID=${$("#ID").val()}&telefono=${$("#telefono").val()}&edad=${$("#edad").val()}&email=${$("#email").val()}&password=${$("#password").val()}&genero=${$(".genero").val()}
			&estado=${$(".estado").val()}&fecha=${$("#fecha").val()}&jerarquia=${$("#jerarquia").val()}&No_Cuenta=${$("#No_Cuenta").val()}`;
			console.log("El cliente envia estos parametros: "+parametros);
			$.ajax({
				url:"ajax/proceso-ingreso.php",
				method:"GET",
				data:parametros,
				dataType:"json",
				success:function(respuesta){
					console.log("El servidor dice: "+respuesta.nombre);
				},
				error:function(error){
					console.error(error);
					$("#error").append(error.responseText);
				}
			});
			$.ajax({
				url:"ajax/proceso-ingreso-docentes.php",
				method:"GET",
				data:parametros,
				dataType:"json",
				success:function(respuesta){
					console.log("El servidor dice: "+respuesta.nombre);
				},
				error:function(error){
					console.error(error);
					$("#error").append(error.responseText);
				}
			});
			var errores;
			if( $('#nombre').val() != null ){
				
				$('#nombre').css('border-bottom-color', '#F14B4B')
			}
			if( errores == '' == false){
            var mensajeModal = '<div class="modal_wrap">'+
                                    '<div class="mensaje_modal">'+
										'<h2>Credenciales De Ingreso al Sistema</h3>'+
										'<p>Numero de Usuario: </p>'+$('#nombre').val()+
										'<p>Contraseña: : </p>'+$('#password').val()+
										'<h3>Bienvenido A La Universidad Nacional Autonoma de Honduras</h3>'+
                                        '<span id="btnClose">Cerrar</span>'+
                                    '</div>'+
                                '</div>'

            $('body').append(mensajeModal);
        	}
			// CERRANDO MODAL ==============================
			$('#btnClose').click(function(){
				$('.modal_wrap').remove();	
			});	
		});
		
	</script>


</body>
</html>