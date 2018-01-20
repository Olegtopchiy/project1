<?php
    function Prime($number) {
        if ($number == 1) {
            return false;
        }
    for (i=2; i*i<=$number; $number++){
            if ($number % 2 == 0){
                return false;
                }
    else return true;
    };
    }

