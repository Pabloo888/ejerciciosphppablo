<?php
$n1 = rand(0, 20);
$n2 = rand(0, 20);

echo "El valor del numero es: $n1<br/>";
echo "El valor del numero es: $n2<br/>";

if ($n1 > $n2) {
    echo "$n1 es mayor que $n2.";
} elseif ($n2 > $n1) {
    echo "$n2 es mayor que $n1.";
} else {
    echo "$n1 y $n2 son iguales.";
}
?>