<?php
function Prime_numbers ($n, $d) {
    if ($d == 1) {
        return 1;
    }
    else {
        if ($n % $d == 0)
            return 0;
        return Prime_numbers($n, $d - 1);
    }
}

function prime($n) {
    return Prime_numbers($n, $n-1);
}

for ($c = 2; $c <= 100; $c++)
    if (prime($c))
        echo $c . "<br>";
?>