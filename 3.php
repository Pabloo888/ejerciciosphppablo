<?php
$n1 = rand(0, 100);
$n2 = rand(0, 100);
$n3 = rand(0, 100);

echo "Los valores originales son:<br>";
echo "n1 = $n1<br>";
echo "n2 = $n2<br>";
echo "n3 = $n3<br>";

echo "<br>Los valores ordenados de mayor a menor son:<br>";

if ($n1 >= $n2 && $n1 >= $n3) {
    echo $n1 . "<br>";
    if ($n2 >= $n3) {
        echo $n2 . "<br>" . $n3 . "<br>";
    } else {
        echo $n3 . "<br>" . $n2 . "<br>";
    }
} elseif ($n2 >= $n1 && $n2 >= $n3) {
    echo $n2 . "<br>";
    if ($n1 >= $n3) {
        echo $n1 . "<br>" . $n3 . "<br>";
    } else {
        echo $n3 . "<br>" . $n1 . "<br>";
    }
} else {
    echo $n3 . "<br>";
    if ($n1 >= $n2) {
        echo $n1 . "<br>" . $n2 . "<br>";
    } else {
        echo $n2 . "<br>" . $n1 . "<br>";
    }
}
?>
