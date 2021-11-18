<?php

function fact($n)
{
    # code...
    if ($n<2) {
        # code...
        return 1;
    }

    return $n * fact($n-1);

}


echo fact(3);
