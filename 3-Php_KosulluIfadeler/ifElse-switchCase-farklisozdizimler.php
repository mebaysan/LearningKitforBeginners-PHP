<?php

$a = 5;

switch ($a) {
    case 5:
        echo "1";
        break;

    default:
        echo "2";
        break;
}

switch ($a): // switch case için farklı bir dizim.
    case 'value':
        # code...
        break;

    default:
        # code...
        break;
endswitch;



if ($a == 5) {
    echo "1";
} elseif ($a == 6) {
    echo "2";
} else {
    echo "3";
}

if ($a == 5) : // if-else için farklı bir gösterim.
    echo "1";
elseif ($a == 6) :
    echo "2";
else :
    echo "3";
endif;
