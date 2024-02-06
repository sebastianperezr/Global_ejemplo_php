// contador.php
<?php

// Define una variable global llamada $contador_visitas e inicialízala en 0
$contador_visitas = 0;

// Guarda el contador en un archivo de texto
function guardarContador() {
    global $contador_visitas;
    file_put_contents("contador.txt", $contador_visitas);
}

// Lee el contador desde el archivo de texto
function cargarContador() {
    global $contador_visitas;
    if (file_exists("contador.txt")) {
        $contador_visitas = (int)file_get_contents("contador.txt");
    }
}
