<!doctype html>
<html lang="es">
<meta charset = "utf-8">

<head>
	<TITLE>REGISTRO</TITLE>
</head>
<style type="text/css">
label{
	display:inline-block;
	float:left;
	clear:left;
	width:250px;
	text-align:right;
}
input{
	border-radius:5px;
	margin:3px;
	display: inline-block;
	float:left;
	width:350px;
}
	.container {
	width: 960px;
	margin: 0 auto; 
}
	.Botones{
	vertical-align: right;
	width:auto;
}




</style>
<body>

	<fieldset class = "container">
		<legend><b>REGISTRO</b></legend>
		<form action = "#" autocomplete = "on">
			<label>NOMBRE: </label><input size= "100" type= "text" name="usuario" autofocus="on" ><br>
			<label>APELLIDO PATERNO: </label><input type="text" size= "100" name="Apellido Paterno"><br>
			<label>APELLIDO MATERNO: </label><input type = "text" size= "100" name = "Apellido Materno"><br>
			<label>CALLE: </label><input type = "text" size= "100" name = "Calle"><br>
			<label>No.Ext: </label><input type = "int" size= "100" name = "No.Ext"><br>
			<label>No.Int: </label><input type = "int" size= "100" name = "No.int"><br>
			<label>COLONIA: </label><input type = "text" size= "100" name = "Colonia"><br>
			<label>Del/Mpio: </label><input type = "text" size= "100" name = "Del/Mpio."><br>
			<label>PAIS: </label><input type = "text" size= "100" name = "Pais"><br>
			<label>ESTADO: </label><input type = "text" size= "100" name = "Estado"><br>
			<label>TELÉFONO: </label><input type = "text" size= "100" name = "Teléfono" maxlength="10"><br>
			<label>EMAIL: </label><input type = "text" size= "100" name = "Email"><br>
			<label>PASSWORD: </label><input type = "password" size= "100" name ="password"><br>
		</form>
		<br>
		<form class = "Botones" action = "index.html">
			<input class "Botones" type = "submit" value = "REGISTRAR"/>
		</form>
	</fieldset>
</body>
