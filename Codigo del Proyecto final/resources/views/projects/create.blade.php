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
<<<<<<< HEAD
			<input type="integer" name="Phone" placeholder="Telefono">
=======
			<input type="text" name="Phone" placeholder="Telefono">
>>>>>>> c4d76ba052da6259a8351785e07523df689c7a4b
		</div>
		<div>
			<input type="text" name="User" placeholder="Usuario">
		</div>
		<div>
<<<<<<< HEAD
			<input type="Password" name="Password" placeholder="Contraseña">
=======
			<input type="text" name="Password" placeholder="Contraseña">
>>>>>>> c4d76ba052da6259a8351785e07523df689c7a4b
		</div>
		<div>
			
			<button type="submit">Guardar datos</button>
		</div>
	
		
	</form>


</body>

</html>
