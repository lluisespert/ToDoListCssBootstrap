<?php

    include 'conexiondb.php';

    $sql = "SELECT * FROM tareas";

    $resultado = $conn->prepare($sql);

    $resultado->execute();

    while($fila = $resultado->fetch(PDO::FETCH_ASSOC)){

        echo "<div class='container'>";

        echo "<div class='d-flex justify-content-center centrar_al_medio'>";

        echo "<div class='card'>";

        echo "<div class='card-body'>";

        echo "Nombre de la tarea : ".$fila['nombretarea'];

        echo "</div>";

        echo "</div>";

        echo "</div>";

        echo "</div>";

    }

?>