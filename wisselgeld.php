<?php
$waarde = $argv[1];
define("CONSTANT", array(
    50 ,20 ,10 ,5 ,2 ,1 ,0.50 ,0.20 ,0.10 ,0.05, 0.02, 0.01
));
function weergave_waarde($keer1, $value1) {
    if ($keer1 > 0) {
        if ($value1 < 1) {
            $cent = $value1 * 100;
            echo $keer1 . " x " . $cent . " cent" . PHP_EOL;
        } else {
            echo $keer1 . " x " . $value1 . " euro" . PHP_EOL;
        }
    }
}
foreach(CONSTANT as $value) {
    $waarde = round($waarde, 2);
    $keer = floor($waarde / $value);
    $waarde = $waarde - ($keer * $value);
    weergave_waarde($keer, $value);
}