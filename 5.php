<?php
$lluvia = rand(0,1);
$temperatura = rand(-12, 44);

if ($temperatura >= -10 && $temperatura <= 40 && $lluvia ==1) {
    echo "Hoy llueve y debes quedarte en casa.";
} elseif ($temperatura > 20) {
    echo "La temperatura es $temperatura y no llueve. ¡A la playa!";
} elseif ($temperatura >= -10 && $temperatura <= 5) {
    echo "La temperatura es $temperatura y no llueve. ¡A esquiar!";
} elseif ($temperatura > 5 && $temperatura <= 20) {
    echo "La temperatura es $temperatura y no llueve. De paseo.";
} else {
    echo "La temperatura es $temperatura y es una temperatura extrema. No se puede realizar actividad.";
}
?>
