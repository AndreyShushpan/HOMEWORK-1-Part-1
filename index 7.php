<?php
    /* Определить возможность существования треугольника по сторонам.
    Треугольник существует только тогда, когда сумма любых двух его сторон больше третьей. */
    $a = rand(1,15); echo "Длина первой стороны треугольника: $a\n<br/>";
    $b = rand(1,15); echo "Длина второй сторона треугольника: $b\n<br/>";
    $c = rand(1,15); echo "Длина третьей стороны треугольника: $c\n\n<br/><br/>";
    if($a < ($b + $c) and $b < ($a + $c) and $c < ($a + $b)):
        echo "Треугольник со сторонами a = $a, b = $b, c = $c может существовать";
    else:
        echo "Треугольник со сторонами a = $a, b = $b, c = $c не может существовать";
    endif;
?>