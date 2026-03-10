<?php session_start(); ?>

<h1>Carrito de compras</h1>

<?php

if(isset($_SESSION['carrito'])){

foreach($_SESSION['carrito'] as $producto){

echo "<p>".$producto."</p>";

}

}else{

echo "El carrito está vacío";

}

?>