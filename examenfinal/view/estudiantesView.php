<!DOCTYPE html>
<html>
<head>
		<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<title>Estudiantes</title>
	</head>
	<body>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
 	<font face="arial">

	<div class="container">
		<h2 style="margin-top: 3rem;" align="center">Ingreso de estudiantes</h2>
		<form action="index.php?controller=estudiantes&action=agregar" method="post">
			<br>
			<br>

			<div class="row">
				<div class="col">
				    <label for="nombres">Nombres</label>
				    <br>

					<input type="text" name="nombres" id="nombres" class="form-control" placeholder="Nombres" required autofocus><br>

				</div>
				<div class="col">
					<label for="apellidos">Apellidos</label>
					<br>

					<input type="text" name="apellidos" id="apellidos" class="form-control" placeholder="Apellidos" required><br>

				</div>
			</div>
			<div class="row">
				<div class="col">
				     <label for="pagoMes">Pago Mensual</label>
				     <br>

					<input type="text" name="pagoMes" id="pagoMes" class="form-control" placeholder="Pago Mes" required><br>

				</div>
				<div class="col">
					<label for="carrera">Carreras</label>
					<br>

					<select id="carrera" name="carrera" class="form-control" required>
						<!--Carreras-->
						<?php foreach ($carreras as $carrera) { ?>
							<option value="<?=$carrera->id ?>"><?=$carrera->nombre;?></option>
						<?php } ?>
				  	</select>
				</div>
			</div>
			<div class="row" style="margin-top: 1rem;">
				<div class="col">
					<center><button type="submit"  class="btn btn-warning">Agregar</button></center>
				</div>
			</div>
		</form>
		<h1 style="margin-top: 3rem;" align="center">Lista de estudiantes</h1>
		<table class="table table-hover">
			<thead>
				<tr>
					<th scope="col">Nombres</th>
					<th scope="col">Apellidos</th>
					<th scope="col">Carrera</th>
					<th scope="col">Pago de carrera</th>
					<th scope="col">Acciones</th>
				</tr>
			</thead>
			<tbody>
			<?php 
			$total = 0.0;
			$totalCarrera = 0;
			foreach ($estudiantes as $estudiante) {?>
				<tr>
					<td><?=$estudiante->nombres; ?></td>
					<td><?=$estudiante->apellidos; ?></td>
					<td><?=$estudiante->nombre; ?></td>
					<td>$ <?=$totalCarrera=(($estudiante->pago_mes * 8) * $estudiante->duracion); ?></td>
					<td>
						<button class="btn btn-outline-info" onclick="window.location.href='index.php?controller=estudiantes&action=modificar&id=<?=$estudiante->id; ?>'">Modificar</button>
						<button class="btn btn-outline-danger" onclick="window.location.href='index.php?controller=estudiantes&action=eliminar&id=<?=$estudiante->id; ?>'">Eliminar</button>

					</td>
				</tr>
			<?php 
				$total += $totalCarrera;
			} ?>
			</tbody>
		</table>
		<h2 style="margin-top: 3rem;" align="center">Totalidad de pagos de estudiantes: $<?=$total; ?></h2>
	</div>
</body>
</html>