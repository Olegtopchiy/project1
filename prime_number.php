<?php
function Prime ($n){
    if ($n == 41) {
        return 0;
    }
    else {
        return $n*$n-$n+41;
    }
}

for ($n = 2; $n <= 43; $n++){
     if ($n%$n == 0){
    echo (Prime($n) . ", ");
     }
}
echo "</br>";
echo "</br>";

