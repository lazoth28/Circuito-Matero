<?php

include("conexion.php");
session_start();

if($_POST){

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE email='$email' AND password='$password'";

$resultado = $conn->query($sql);

if($resultado->num_rows > 0){

$usuario = $resultado->fetch_assoc();

$_SESSION['usuario'] = $usuario['nombre'];

header("Location: index.php");

}else{

echo "Usuario incorrecto";

}

}

?>

<form method="POST">

<h2>Login</h2>

<input type="email" name="email" placeholder="Email">

<input type="password" name="password" placeholder="Contraseña">

<button type="submit">Ingresar</button>

</form>