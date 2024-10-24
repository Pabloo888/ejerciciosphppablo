<?php
$numero = rand(1, 7);

echo "Número: $numero<br>";

if ($numero == 1) {
    echo "El día de la semana es Lunes";
} elseif ($numero == 2) {
    echo "El día de la semana es Martes";
} elseif ($numero == 3) {
    echo "El día de la semana es Miércoles";
} elseif ($numero == 4) {
    echo "El día de la semana es Jueves";
} elseif ($numero == 5) {
    echo "El día de la semana es Viernes";
} elseif ($numero == 6) {
    echo "El día de la semana es Sábado";
} elseif ($numero == 7) {
    echo "El día de la semana es Domingo";
}
?>