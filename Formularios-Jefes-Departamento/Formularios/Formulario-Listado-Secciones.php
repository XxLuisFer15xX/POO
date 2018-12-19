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
<?php 
    session_start();  
    if (!isset($_SESSION["No_Cuenta"]))
        header("Location: no-autorizado.html");//Redireccion con PHP
        $valor=$_SESSION["No_Cuenta"];
     
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario de Secciones</title>
	
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=K2D:200,400,700" rel="stylesheet" >
	<link rel="stylesheet" href="../css/modificaciones.css">
	<link rel="icon" href="../img/logo.ico">
	<link rel="stylesheet" href="../css/modificaciones.css">


	
</head>
<body style="background-image: url(../img/fondo2.jpg);">
	<div id="incluir-header">

	</div>
	<main role="main">

		<section class="content-form">
			<h1 style="text-align: center;">Listado Asignaturas UNAH</h1>
			<h2 class="sub-title">Datos Generales</h2>

			<form>
			
				<div class="form-group width-12">
						<h3 class="sub-form" style="text-align: center;">Secciones en las que imparte clases:</h3>
					<div class="width-12">
						<select name="codigo" id="codigo" style="background: #fff; border: none; font-size: 14px; height: 38px; padding: 5px; width:760px; left:3px;">
							<option value="">Seleccione</option>
							<?php
								$archivo = fopen("../data/registro-seccion.json","r");
								while(($linea = fgets($archivo))){
									$registro = json_decode($linea,true);
									if($valor==$registro['docente']){
										echo    '
											<option value='.$registro['codigo'].'>'.$registro['asignatura'].'</option>
											';
											
									}
									$valor_2 = $registro['codigo'];
								}
								
									
							?>
						</select>
					</div>  
				</div>
				<div class="form-group width-12">
						<h3 class="sub-form" style="text-align: center;">Secciones en las que imparte clases:</h3>
					<div class="width-12">
						<table>
							<thead>
								<th style="background-color:white; color:black; width:370px; heigth:30px;">No_Cuenta</th>
								<th style="background-color:white; color:black; width:370px; heigth:30px;">Codigo Asignatura</th>
							</thead>
							<tbody id="No_Cuenta">
							<?php
								$a =  fopen("../data/registro-seccion.json","r");
								$archivo = fopen("../../Formularios-Alumnos/data/registro_matricula.json","r");
								while(($linea = fgets($archivo))){
									$registro = json_decode($linea,true);
									if($valor_2==$registro['codigo']){
											echo    '
												<tr><td style="background-color:white; color:black; width:370px; heigth:30px;">'.$registro['No_Cuenta'].'</td></tr>
											'; 
									}			
											
								}
									
							?>
							</tbody>
						</table>
						</select>
					</div>  
				</div>
				<div class="form-group width-12">
					<h3 class="sub-form" style="text-align: center;">Codigo Asignatura:</h3>
					<div class="width-12">
						<input type="text" placeholder="Digite la Asignatura A Impartir" class="form-control" name="codigo" id="codigo" />
					</div>
				</div>

				<div class="form-group width-12">
					<h3 class="sub-form" style="text-align: center;">Asignatura a asignar Impartir:</h3>
					<div class="width-12">
						<!--select name="Asignatura" id="Asignatura" style="background: #fff; border: none; font-size: 14px; height: 38px; padding: 5px; width:760px; left:3px;">
						<option value="">Seleccione</option>
							<!?php	
								$archivo = fopen("Archivos-json-carrera/$valor.json","r");
								while(($linea = fgets($archivo))){
									$registro = json_decode($linea,true);
									echo    '
												<option>'.$registro['asignatura'].'</option>
											';  
									
								}
								fclose($archivo);
							?>
						</select-->
						<input type="text" placeholder="Codigo-de-asignatura" class="form-control" name="hora-inicial" id="asignatura" />
					</div>		
				</div>
				<div class="form-group width-12">
					<div class="width-6">
							<h3 class="sub-form" style="text-align: center;">Hora Inicial:</h3>
						<input type="text" placeholder="Hora Inicial" class="form-control" name="hora-inicial" id="horainicial" />
					</div>
					<div class="width-6">
							<h3 class="sub-form" style="text-align: center;">Hora Final:</h3>
							<input type="text" placeholder="Hora Final" class="form-control" name="hora-final" id="horafinal" /> 
					</div>   
				</div>
				<div class="form-group width-12">
						<h3 class="sub-form" style="text-align: center;">Seccion a impartir:</h3>
						<input type="text" placeholder="Numero Seccion" class="form-control" name="hora-final" id="seccion" /> 
				</div> 
				<div class="form-group width-12">
						<h3 class="sub-form" style="text-align: center;">Periodo Academico:</h3>
						<input type="text" placeholder="Digite el periodo" class="form-control" name="hora-final" id="periodo" /> 
				</div>
				<div class="form-group width-12">
						<h3 class="sub-form" style="text-align: center;">AÑO:</h3>
						<input type="text" placeholder="Digite el año" class="form-control" name="anio" id="anio" /> 
				</div> 
				<div class="form-group width-12">
						<h3 class="sub-form" style="text-align: center;">Unidades Valorativas:</h3>
						<input type="text" placeholder="uv" class="form-control" name="hora-final" id="uv" /> 
				</div> 
				<div class="form-group width-12">
						<h3 class="sub-form" style="text-align: center;">Observaciones:</h3>
						<input type="text" placeholder="Digite Observacion" class="form-control" name="hora-final" id="obs" /> 
				</div> 
					
				</div>
				<div class="form-group width-12">
				<h3 class="sub-form" style="text-align: center;">Docente a Impartir la Clase:</h3>
					<select name="docente" id="docente" style="background: #fff; border: none; font-size: 14px; height: 38px; padding: 5px; width:760px; left:3px;">
							<option value="">Seleccione</option>
							<?php
								$archivo = fopen("../../Formularios-Administracion/data/registro_docente.json","r");
								while(($linea = fgets($archivo))){
									$registro = json_decode($linea,true);
									if($keys==$registro['docente'])
									
									echo    '
											<option value='.$registro['codigo'].'>'.$registro['seccion'].'</option>
											'; 			
								}
									
							?>
						</select>
					</div>
				</div>
				<div class="form-group width-12">
				<h3 class="sub-form" style="text-align: center;">Edificio a Impartir la Clase:</h3>
					<select name="edificio" id="edificio" style="background: #fff; border: none; font-size: 14px; height: 38px; padding: 5px; width:760px; left:3px;">
							<option value="">Seleccione</option>
							<?php
								$archivo = fopen("../../Formularios-Administracion/data/registro_edificio.json","r");
								while(($linea = fgets($archivo))){
									$registro = json_decode($linea,true);
									
									echo    '
											<option value='.$registro['nombreEdificio'].'>'.$registro['nombreEdificio']." ".$registro['centroRegional'] .'</option>
											'; 					
								}
									
							?>
						</select>
					</div>
				</div>
				<div class="form-group width-12">
				<h3 class="sub-form" style="text-align: center;">Aula a Impartir la Clase:</h3>
					<select name="aula" id="aula" style="background: #fff; border: none; font-size: 14px; height: 38px; padding: 5px; width:760px; left:3px;">
							<option value="">Seleccione</option>
							<?php
								$archivo = fopen("../../Formularios-Administracion/data/registro_aula.json","r");
								while(($linea = fgets($archivo))){
									$registro = json_decode($linea,true);
									
									echo    '
											<option value='.$registro['numeroAula'].'>'.$registro['numeroAula'].'</option>
											'; 					
								}
									
							?>
						</select>
					</div>
				</div>
				<h3 class="sub-form" style="text-align: center;">Dias a Impartir la Clase:</h3>
						<select name="dias" id="dias" style="background: #fff; border: none; font-size: 14px; height: 38px; padding: 5px; width:760px; left:3px;">
								<option value="Lu Ma Mi Ju Vi">Lunes a Viernes</option>
								<option value="Lu Ma Mi Ju">Lunes a Jueves</option>
								<option value="Lu Ma Mi">Lunes a Miercoles</option>
								<option value="Ma  Ju">Martes y Jueves</option>
								<option value="Lu Mi">Lunes y Miercoles</option>
								<option value="Mi Vi">Miercoles y Viernes</option>
								<option value="Vi Sa">Viernes y Sabados</option>
								<option value="Lu">Viernes y Sabados</option>
								<option value="Ma">Viernes y Sabados</option>
								<option value="Mi">Viernes y Sabados</option>
								<option value="Ju">Viernes y Sabados</option>
								<option value="Vi">Viernes y Sabados</option>
								<option value="Sa">Viernes y Sabados</option>
					
					</select>
				</div>

				<div class="form-group width-12">
					<div class="width-6" style="margin-left:200px;" style="margin-top:10px;">
						<input type="button" value="Registrar" class="form-control btn btn-principal" id="btn-registrar"/>	
					</div>
					<div class="width-6" style="margin-left:200px;" style="margin-top:10px;">
						<input type="button" onclick="location.href='../Pag-Jefe-Depto.php'" value="Regresar" class="form-control btn btn-principal" id="btn-regresar"/>
					</div>
				</div>
				
			</form>
		</section>
	</main>	
	<script src="../js/controlador.js"></script>
	<script src="../js/jquery-3.3.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script>
		$("#btn-registrar").click(function(){
			var parametros =  `carrera=${$("#carrera").val()}&codigo=${$("#codigo").val()}&seccion=${$("#seccion").val()}&asignatura=${$("#asignatura").val()}&horainicial=${$("#horainicial").val()}&horafinal=${$("#horafinal").val()}&docente=${$("#docente").val()}&edificio=${$("#edificio").val()}&aula=${$("#aula").val()}&dias=${$("#dias").val()}&periodo=${$("#periodo").val()}&anio=${$("#anio").val()}&uv=${$("#uv").val()}&obs=${$("#obs").val()}`;
			
			console.log("El cliente envia estos parametros: "+parametros);
			$.ajax({
				url:"../ajax/proceso-impartir-clases.php",
				method:"GET",
				data:parametros,
				dataType:"json",
				success:function(respuesta){
					console.log("El servidor dice: "+respuesta.carrera);
				},
				error:function(error){
					console.error(error);
					$("#error").append(error.responseText);
				}
			});
			var errores;
			if( $('#carrera').val() != null ){
				
				$('#carrera').css('border-bottom-color', '#F14B4B')
			}
			if( errores == '' == false){
			var mensajeModal = '<div class="modal_wrap">'+
									'<div class="mensaje_modal">'+
										'<h2 style="text-align:center;">Seccion Creada Satisfactoriamente</h2>'+
										'<p><b>Asignatura:</b></p>'+$('#asignatura').val()+
										'<p><b>Edificio:</b></p>'+$('#edificio').val()+
										'<p><b>Aula:</b></p>'+$('#aula').val()+
										'<h2 style="text-align:center;">Bienvenido A La Universidad Nacional Autonoma de Honduras</h2>'+
										'<span id="btnClose">Finalizar</span>'+
									'</div>'+
								'</div>'

			$('body').append(mensajeModal);
			}
			// CERRANDO MODAL ==============================
			$('#btnClose').click(function(){
				window.location.href = "Formulario-Creacion-Secciones.php";
			});	
		});
	</script>


</body>
</html>