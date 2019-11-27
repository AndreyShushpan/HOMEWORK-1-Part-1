<?php
    // Оператор case в задаче выбора. Вывести название цифры
    $a = rand(0,5);
    switch($a):
        case 0:
            echo "Цифра $a называется ноль"; break;
        case 1:
            echo "Цифра $a называется один"; break;
        case 2:
            echo "Цифра $a называется два"; break;
        case 3:
            echo "Цифра $a называется три"; break;
        case 4:
            echo "Цифра $a называется четыре"; break;
        default:
            echo "Цифра $a называется пять"; break;
    endswitch;
?>