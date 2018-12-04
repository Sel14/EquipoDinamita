<!DOCTYPE html>
<html>

<head></head>

<body>
	<h1>Create a new project</h1>

	<form method="POST" action="/project">
		{{ csrf_field() }}
		
		<div>
			<input type="string" name="Name" placeholder="Nombre">
		</div>
		<div>
			<input type="integer" name="Phone" placeholder="Telefono">
		</div>
		<div>
			<input type="text" name="User" placeholder="Usuario">
		</div>
		<div>
			<input type="Password" name="Password" placeholder="Contraseña">
		</div>
		<div>
			
			<button type="submit">Guardar datos</button>
		</div>
	
		
	</form>


</body>

</html>
