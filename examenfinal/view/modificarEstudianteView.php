<!DOCTYPE html>
<html>
		<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<title>Modificar</title>
	</head>
	<body>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
 	<font face="arial">
	<div class="container">
		<h1 style="margin-top: 3rem;" align="center">Modificar estudiante <?=$estudiantes->nombres; ?></h1>
		<form action="index.php?controller=estudiantes&action=modificar" method="post">
					<input type="hidden" name="id" value="<?=$estudiantes->id; ?>">
				    <label for="nombres">Nombres</label>
					<input type="text" id="nombres" name="nombres" value="<?=$estudiantes->nombres; ?> ">
				
					<label for="apellidos">Apellidos</label>
					<input type="text" id="apellidos" name="apellidos" value="<?=$estudiantes->apellidos; ?> ">
				
				    <label for="pagoMes">Pago Mensual</label>
					<input type="text" id="pagoMes" name="pagoMes" value="<?=$estudiantes->pago_mes; ?> ">
					<input type="hidden" id="id" name="id" value="<?=$estudiantes->id; ?>">
				
					<label for="carrera">Carreras</label>
					<select id="carrera" name="carrera" class="form-control">
						<!--Carreras-->
						<?php foreach ($carreras as $carrera) { ?>
							<option value="<?=$carrera->id; ?>"><?=$carrera->nombre;?></option>
						<?php } ?>
				  	</select>
		
					<button type="submit" class="btn btn-outline-primary">Modificar</button>
				
		</form>
	</div>
</body>
</html>