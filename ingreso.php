<?php
    include_once "./modulos/conexion.php";
    if((isset($_POST['ingresar']))){
        $correo = $_POST['correo'];
        $clave = $_POST['clave'];

        $qry = "SELECT * FROM usuarios WHERE correo = '$correo'";
        $res = mysqli_query($conn, $qry);
        $fila = mysqli_fetch_array($res);
        $claveCorrecta = false;
        if(isset($fila['clave'] )){
            $claveCorrecta = password_verify($clave,$fila['clave']);
            //$claveCorrecta = true;
        }

        if ($res && $claveCorrecta){
            session_start();
            $_SESSION = $fila;
            echo "<script> alert ('Bienvenido al sistema');</script>";
            echo "<script> window.location.href = 'index.php';</script>";
        }else{
            echo "<script> alert ('usuario y/o contraseña incorrecta');</script>";
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
            <h1>  <center>INGRESO AL SISTEMA</center></h1>
            <div class="p-5 mb-4 bg-light rounded-3">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold">ingreso de datos</h1>
                    
                    <form action="" method="post">
                        

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

                        
                    
                    <button 
                        type="submit"
                        class="btn btn-primary"
                        name="ingresar">

                        ingresar 
                    </button>
                    </form>
                </div>
            </div>
            
        
        
        
        </main>
<?php        
    include_once ("modulos/footer.php")
?>   