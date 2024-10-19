<?php
    session_start();
    session_destroy();
    echo "<script> alert ('Saliendo del sistema'); </script>";
    echo "<script> window.location.href = ('index.php'); </script>";
?>