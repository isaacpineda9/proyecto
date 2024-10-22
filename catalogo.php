<?php
    include_once"./modulos/conexion.php";
    include_once"./modulos/header.php";
    ?>
<body>
    <header>
        <?php include_once"./modulos/navbar.php"?>
    </header>
    
    <div class="container-md">
        <div class="mt-3 offset">
            <h1 class="text-center">Productos</h1>
            <div class="row">
                <?php
                    $sql = "SELECT id, nombre, precio, descripcion, existencia FROM inventario";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                        // Mostrar cada producto
                        while($row = $result->fetch_assoc()) {
                            echo "<div class='col'>";
                            echo "<div class='card m-5 p-3' style='width: 20em;'>";
                            echo "<h2 class='card-title'>" . $row["nombre"] . "</h2>";
                            echo "<p class='card-body'>" . $row["descripcion"] . "</p>";
                            echo "<p>Precio: $" . $row["precio"] . "</p>";
                            echo "<p class='' >Existencias: " . $row["existencia"] . "</p>";
                            echo "</div>";
                            echo "</div>";
                        }
                    } else {
                        echo "No se encontraron productos.";
                    }
                    
                    // Cerrar la conexión
                    $conn->close();
                    ?>
            </div>
        </div>
    </div>


</body>