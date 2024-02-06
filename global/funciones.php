// funciones.php
<?php

// Incluye el archivo que contiene el contador y las funciones relacionadas
include 'contador.php';

// Incrementa el contador de visitas
function incrementarContadorVisitas() {
    global $contador_visitas;
    cargarContador(); // Carga el contador desde el archivo antes de incrementarlo
    $contador_visitas++; // Incrementa el contador de visitas
    guardarContador(); // Guarda el contador actualizado en el archivo
}
