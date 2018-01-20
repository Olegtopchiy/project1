<?php
function Fib ($sequence){
    if ($sequence < 3) {
        return $sequence;
    }
    else {
        return Fib($sequence - 1) + Fib($sequence - 2);
    }
}

for ($sequence = 1; $sequence <=20; $sequence++){
    echo (Fib($sequence) ", ");
}