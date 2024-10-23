<?php
    session_start();
    $r = 0;
    if(isset($_SESSION['rol'])){ /// determina el usuario actual
        $r = $_SESSION['rol'];
    }else{
        $r = 0;
    }

    if($r == 2){  /// muestra el navbar del administrador

        ?>
    
<nav class="navbar navbar-expand-sm navbar-light bg-" style="background-color: #aeb6bf;">


    <div class="container">
    <a class="navbar-brand" href="#">Inventario Maquinas Expendedoras</a>
        <button
            class="navbar-toggler d-lg-none"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavId"
            aria-controls="collapsibleNavId"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php" aria-current="page"
                        >inicio
                        <span class="visually-hidden">(current)</span></a
                    >
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="nosotros.php">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="reponer.php"> Reposición de Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="productos.php"> Gestion de Productos</a>
                </li>
            </ul>
            <form class="d-flex my-2 my-lg-0">
                        <?php 
                            ($_SESSION['nombre']);
                            if ($_SESSION['rol'] == 1);
                            if ($_SESSION['rol'] == 2);
                        ?>

                <ul class="nav-item dropdown">
            
            <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        id="dropdownId"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                        >Usuarios</a
                    >
                    <div
                        class="dropdown-menu"
                        aria-labelledby="dropdownId"
                    >
                        <a class="dropdown-item" href="salir.php"
                            >salir</a
                        >
                    </div>
                </ul>
            </form>
        </div>
    </div>
</nav>
<?php } ?>   <!--se termina el navbar del administrador-->


<?php
if($r == 1){  /// muestra el navbar del usuario

?>

<nav class="navbar navbar-expand-sm navbar-light " style="background-color: #abcdef;">


<div class="container">
<a class="navbar-brand" href="#">Inventario Maquinas Expendedoras</a>
<button
            class="navbar-toggler d-lg-none"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavId"
            aria-controls="collapsibleNavId"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
<div class="collapse navbar-collapse" id="collapsibleNavId">
    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
        <li class="nav-item">
            <a class="nav-link active" href="index.php" aria-current="page"
                >inicio
                <span class="visually-hidden">(current)</span></a
            >
        </li>
        <li class="nav-item">
            <a class="nav-link" href="nosotros.php">Nosotros</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="catalogo.php"> Catálogo de Productos</a>
        </li>
    </ul>
    <form class="d-flex my-2 my-lg-0">

                <ul class="nav-item dropdown">
            
                    <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        id="dropdownId"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                        >Usuarios
                    </a>
                    <div
                        class="dropdown-menu"
                        aria-labelledby="dropdownId"
                    >
                        <a class="dropdown-item" href="salir.php"
                            >salir</a
                        >
                    </div>
                </ul>
            </form>
</div>
</div>
</nav>
<?php } ?> <!-- se termina el navbar de usuario -->

<?php

if($r == 0){  /// muestra el navbar del visitante

?>

<nav class="navbar navbar-expand-sm navbar-light bg-" style="background-color: #5564eb;">


<div class="container">
<a class="navbar-brand" href="#">Inventario Maquinas Expendedoras</a>
<button
            class="navbar-toggler d-lg-none"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavId"
            aria-controls="collapsibleNavId"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
<div class="collapse navbar-collapse" id="collapsibleNavId">
    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
        <li class="nav-item">
            <a class="nav-link active" href="index.php" aria-current="page"
                >inicio
                <span class="visually-hidden">(current)</span></a
            >
        </li>
        <li class="nav-item">
            <a class="nav-link" href="nosotros.php">Nosotros</a>
        </li>
    </ul>
    <form class="d-flex my-2 my-lg-0">

        <ul class="nav-item dropdown">
    
    <a
                class="nav-link dropdown-toggle"
                href="#"
                id="dropdownId"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
                >Usuarios</a
            >
            <div
                class="dropdown-menu"
                aria-labelledby="dropdownId"
            >
                <a class="dropdown-item" href="ingreso.php"
                    >ingresar</a
                >
                <a class="dropdown-item" href="registro.php"
                    >registrarse</a
                >
            </div>
        </ul>
    </form>
</div>
</div>
</nav>
<?php } ?>