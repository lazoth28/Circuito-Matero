<?php session_start(); ?>

<header class="header">

<div class="logo">
    <img src="logo.png" width="40">
    <h2>La Matera</h2>
</div>

<nav>

<div class="dropdown">
<button class="dropbtn">Categorías</button>

<div class="dropdown-content">
<a href="#">Mates</a>
<a href="#">Termos</a>
<a href="#">Bombillas</a>
<a href="#">Bolsos Materos</a>
<a href="#">Materos</a>
</div>

</div>

</nav>

<div class="acciones">

<a href="carrito.php">🛒 Carrito</a>

<?php
if(isset($_SESSION['usuario'])){
echo "<a href='#'>".$_SESSION['usuario']."</a>";
}else{
echo "<a href='login.php'>Login</a>";
}
?>

</div>

</header>