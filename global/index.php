// index.php
<?php

// Incluye el archivo que contiene las funciones
include 'funciones.php';

// Incrementa el contador de visitas cada vez que se carga esta página
incrementarContadorVisitas();

// Muestra el mensaje de bienvenida y el contador de visitas
echo "¡Bienvenido! Has visitado esta página $contador_visitas veces.";
