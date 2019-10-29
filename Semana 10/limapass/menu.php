<div class="logo">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTDUDRvYK9xMdyyS02ibQWIxnrhsxZJ6kBEjaCi4f4Zw9wSTSzpiA&s" alt="">
</div>
<nav>
    <ul>
        <li><a href="index.php">Página principal</a></li>
        <li><a href="comunidad.php">Comunidad LimaPass</a></li>


        <?php if (!isset($_SESSION["nickname"])) { ?>
            <li><a href="crearusuario.php">Crear cuenta</a></li>
            <li><a href="login.php">Iniciar sesión</a></li>
        <?php } else { ?>
            <li><a href="perfil.php">Actualizar Perfil</a></li>
            <li><a href="logout.php">Cerrar sesión (<?php echo $_SESSION["nickname"] ?>)</a></li>
        <?php } ?>
    </ul>
</nav>