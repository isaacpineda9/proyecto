<?php
    include_once "modulos/conexion.php";
    
    if (isset($_POST['editar'])){
        $id = $_GET['id'];
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        $existencia = $_POST['existencia'];

        $sql = "UPDATE inventario SET nombre = '$nombre', descripcion = '$descripcion', precio = '$precio', existencia = '$existencia' WHERE id='$id'";
        $resultado = mysqli_query($conn,$sql);
        if ($resultado){
            header ("Location: productos.php");
        }else{
            echo "No se pudo Modificar el producto";
        }
    }
    
    if (isset($_GET)){
        $id = $_GET['id'];

        $qry = "SELECT * FROM inventario WHERE id='$id'";
        $res = mysqli_query($conn,$qry);
        $fila = mysqli_fetch_array($res);

        
    }

    include_once "modulos/header.php";
?>
<h1>Edición de productos</h1>
            <div class="row align-items-md-stretch">
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
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
                                    value = "<?php echo $fila['Nombre']; ?>"/>
                            
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
                                    value = "<?php echo $fila['Descripcion']; ?>" />
                            
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
                                    value = "<?php echo $fila['Precio']; ?>"/>
                            
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
                                    value = "<?php echo $fila['Existencia']; ?>"/>
                            
                            </div>

                            <button
                                type="submit"
                                class="btn btn-success"
                                name ="editar"
                            >
                                Modificar
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

                <?php
                    include_once "modulos/footer.php";
                ?>