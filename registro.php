<?php
    include_once "./modulos/conexion.php";
   
    if(isset($_POST['registrarse'])){
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $clave = $_POST['clave'];
        $rol = $_POST['rol'];

        $claveEncrip = password_hash($clave, PASSWORD_DEFAULT);
        
        
        $qry = "INSERT INTO usuarios(nombre, correo, clave, rol) VALUES ('$nombre', '$correo', '$claveEncrip', '$rol')";

        $res = mysqli_query($conn, $qry);

        if ($res){
            echo "<script> alert ('El usuario ha sido registrado');</script>";
            echo "<script> window.location.href = 'index.php';</script>";
        }else{
            echo "<script> alert ('Fallo el registro');</script>";
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
            <h1>  <center>Registro Usuarios</center></h1>
            <div class="p-5 mb-4 bg-light rounded-3">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold">ingreso de datos</h1>
                    
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="" class="form-label">Nombre:</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="nombre"
                                    id=""
                                    aria-describedby="helpId"
                                    placeholder="ingrese nombre completo"
                                />
                        
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Correo:</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="correo"
                                    id=""
                                    aria-describedby="helpId"
                                    placeholder="ingrese el correo"
                                />
                        
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">clave:</label>
                                <input
                                    type="password"
                                    class="form-control"
                                    name="clave"
                                    id=""
                                    aria-describedby="helpId"
                                    placeholder="ingrese su contraseña"
                                />
                        
                        </div>

                        <div class="mb-3">
                            
                                <input
                                    type="hidden"
                                    class="form-control"
                                    name="rol"
                                    id=""
                                    aria-describedby="helpId"
                                    placeholder="ingrese nombre completo"
                                    visible = "false"
                                    value = "1"
                                />
                        
                        </div>
                    
                    <button 
                        type="submit"
                        class="btn btn-primary"
                        name="registrarse">

                        Registrarse
                    </button>
                    </form>
                </div>
            </div>
            
        
        
        
        </main>
<?php        
    include_once ("modulos/footer.php")
?>   