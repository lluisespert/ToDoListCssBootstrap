<?php

    include 'conexiondb.php';

    $nombre = $_POST['nombreTarea'];

    $tipo = $_POST['tipoTarea'];

    $contenido = $_POST['contenidoTarea'];

    $sql = "INSERT INTO tareas (nombretarea, tipotarea, contenidotarea) VALUES ('$nombre', '$tipo', '$contenido')";

    $conn->exec($sql);

    $conn = null;

?>


<script>
    window.open("../index.html", "_self");
</script>