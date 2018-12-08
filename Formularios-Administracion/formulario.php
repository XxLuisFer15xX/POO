<?php
	function generarCodigo($longitud){
		$key = 'UNAH_';
		$numero = 0;
		$pattern = '10000';
		$max = strlen($pattern)-1;
		for($i=0;$i < $longitud;$i++){
			$key .= $pattern{mt_rand(0,$max)};
			/*mt_rand(0,$max)*/ 
			
		} 
		return $key;
	}
	echo generarCodigo(6);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario de Registro</title>
	<link rel="stylesheet" href="css/estilos.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
	<script src="../Libreria/js/jquery-3.3.1.min.js"></script>
	
	<link rel="icon" href="img/logo.ico">
</head>
<body>

 

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
				 <div class="width-12">
						<h3 class="sub-form" style="text-align: center;">Direccion:</h3>
				 	<input type="text" placeholder="Dirección" class="form-control" name="direccion" id="direccion" />
				 </div>
			</div>
			  
			 <div class="form-group width-12">
				 <div class="width-6">
						<h3 class="sub-form" style="text-align: center;">Telefono:</h3>
				  	<input type="text" placeholder="Teléfono" class="form-control" name="telefono" id="telefono" /> 
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
					
					<div class="width-4">
						<label for="programador"><input type="radio"  id="masculino" name="genero" class="genero" value="masculino"/>Masculino</label>
					</div>
					<div class="width-4">
						<label for="disenador"><input type="radio" id="femenino" name="genero" class="genero" value="femenino"/>femenino</label>
					</div>
					<div class="width-4">
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
				 	<input type="text" nombre="fecha" class="form-control" id="fecha" placeholder="dd/mm/aa"/>
				</div> 
				<div class="width-6">
					<h3 class="sub-form" style="text-align: center;">Jerarquia Del Empleado</h3>
					<input type="jerarquia" nombre="jerarquia" class="form-control" id="jerarquia" placeholder="Catedratico,Coordinador o Jefe de Depto"/> 
			   	</div>
			 </div>
			 <div class="width-12">
					<h3 class="sub-form" style="text-align: center;">Numero de Cuenta Generado</h3>
					<input type="jerarquia" nombre="jerarquia" class="form-control" id="No_Cuenta" value="<?php echo generarCodigo(6);?>; "/> 
			</div>

			 <div class="form-group width-12">
					<input type="button" value="Registrar" class="form-control btn btn-principal" id="btn-registrar"/>	 
			 </div>
			 
		</form>
	</section>
</main>	
<div id="error" style="witdh:100%; heigth:100px; background-color:red;"></div>
<script>
	$("#btn-registrar").click(function(){
		var parametros =  `nombre=${$("#nombre").val()}&apellido=${$("#apellido").val()}&direccion=${$("#direccion").val()}&telefono=${$("#telefono").val()}&edad=${$("#edad").val()}&email=${$("#email").val()}&password=${$("#password").val()}&genero=${$(".genero").val()}
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
	});
</script>
</body>
</html>