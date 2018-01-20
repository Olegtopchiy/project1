<?php
function Fib ($sequence) {
    if $sequence < 3 {
        return $sequence;
    }
    else {
        return Fib($sequence - 1) + Fib($sequence - 2);
    }
}

for (i=1, i <=20; i++) {
    echo fib($i);
}
