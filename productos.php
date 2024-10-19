<?php
    include_once ("modulos/conexion.php");
?>
<?php
    /* aqui el codigo de guardar un nuevo producto */
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        $existencia = $_POST['existencia'];

        $sql = "INSERT INTO inventario (nombre, descripcion, precio, existencia) values('$nombre','$descripcion','$precio','$existencia')";

        $resultado = mysqli_query($conn,$sql);
        if ($resultado){
            echo "Producto Guardado con exito";
        }else{
            echo "No se pudo guardar el producto";
        }

    }
    if (isset($_GET['id'])){
        $id = $_GET['id'];
        $qry = "DELETE FROM inventario WHERE id=$id";
        $res = mysqli_query($conn,$qry);
        if ($res){
            echo "<script>
                alert('Registro eliminado con exito');
                window.location.href = 'productos.php';
                 </script>";
        }
    }
?>
<?php
    include_once ("modulos/header.php")
?>
    <body>
        <header>
            <?php
                include_once ("modulos/navbar.php")
            ?>
        </header>
        <main>
            
            <h1>Gestión de productos</h1>
            <div class="row align-items-md-stretch">
                <div class="col-md-3">
                    <div
                        class="h-100 p-5 text-dark bg-light border rounded-3"
                    >
                        <h4>ingresar producto</h4>
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="" class="form-label">Nombre del producto:</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="nombre"
                                    id=""
                                    aria-describedby="helpId"
                                    placeholder="Ingrese producto"
                                />
                            
                            </div>
                            

                            <div class="mb-3">
                                <label for="" class="form-label">descripción del producto:</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="descripcion"
                                    id=""
                                    aria-describedby="helpId"
                                    placeholder="Ingrese descripción"
                                />
                            
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">precio del producto:</label>
                                <input
                                    type="number"
                                    class="form-control"
                                    name="precio"
                                    id=""
                                    aria-describedby="helpId"
                                    placeholder="Ingrese precio"
                                />
                            
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">existencia del producto:</label>
                                <input
                                    type="number"
                                    class="form-control"
                                    name="existencia"
                                    id=""
                                    aria-describedby="helpId"
                                    placeholder="Ingrese existencia"
                                />
                            
                            </div>

                            <button
                                type="submit"
                                class="btn btn-success"
                            >
                                Guardar
                            </button>
                            
                            <button
                                type="reset"
                                class="btn btn-primary"
                            >
                                Limpiar
                            </button>
                        </form>
                        
                    </div>
                </div>
                
                
                <div class="col-md-9">
                    <div
                        class="h-100 p-5 text-dark bg-light border rounded-3"
                    >
                        <h4>listado de productos</h4>
                        
                        <?php
                            $qry ="SELECT * FROM inventario";
                            $res = mysqli_query($conn, $qry);
                        ?>
                        <div
                            class="table-responsive"
                        >
                            <table
                                class="table table-secondary"
                            >
                                <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Descripcion</th>
                                        <th scope="col">Precio</th>
                                        <th scope="col">Existencia</th>
                                        <th scope="col" colspan="2"> <center>Acciones</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        while ($fila = mysqli_fetch_assoc($res)) { 
                                    ?>
                                    <tr class="">
                                        <td scope="row"><?php echo $fila['id']?></td>
                                        <td><?php echo $fila['Nombre']?></td>
                                        <td><?php echo $fila['Descripcion']?></td>
                                        <td>$<?php echo $fila['Precio']?></td>
                                        <td><?php echo $fila['Existencia']?></td>
                                        <td> <a href="editar_prod.php?id=<?php echo $fila['id'] ?>" class="btn btn-primary">Actualizar</a></td>
                                        <td> <a href="?id=<?php echo $fila['id'] ?>" class="btn btn-danger">Borrar</a></td>
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                    
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
            </div>
            

        </main>
<?php        
    include_once ("modulos/footer.php")
?>        