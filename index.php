<?php
/**
 * Created by PhpStorm.
 * User: UITS-Student
 * Date: 04.01.2018
 * Time: 20:15
 */
$indexer = 5;
function customMultiply ($a, $b = 0, ...$params){
    global $indexer;
    static $counter = 0;
    $counter ++;
    var_dump($counter);
//    var_dump(func_get_args()); /**  перехват лишних чисел в коде  */
//    var_dump($params); /**  Способ перехвата в пхп версии 7+, выводит в переменную возможные числа  */
    return $a * $b;
}

echo customMultiply(3,5);
echo "\n";
echo customMultiply(2, 1, 6, 7 , 5 );
echo "\n";
echo customMultiply(3);

/** Факториал  */

function factorial($n) {
    static $step = 0;
    $step ++;
    var_dump($step);
    if($n > 2){
        return factorial($n - 1) * $n;

    }else{
        return $n;
    }
}
echo factorial(5);