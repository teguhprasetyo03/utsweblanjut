<?php
$a = 3;
$b = 0;
$c = $a + $b; // 3 + 0 = 3
$d = $a + $b * $c; // 3 + 0 * 3 = 3
$e = $a - $b / $c; // 3 - 0 / 3 = 3
$f = $d / $a + $b - $c; // 3 / 3 + 0 - 3 = -2
$g = $e / $b - $a + $c; // 3 / 0 - 3 + 3 = error karena tidak dapat di bagi 0
echo "$d<br>";
echo "$e<br>";
echo "$f<br>";
echo "$g<br>";
