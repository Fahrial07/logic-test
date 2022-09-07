<?php

function countProfit($hoppers)
{
    var_dump($hoppers[0]);
}

countProfit([
        (object) [
                [
                    'name'      => 'Windi',
                    'product'   => 'Sepatu Stacattu',
                    'amount'    => 2
                ],
                [
                    'name'      => 'Vanessa',
                    'product'   => 'Sepatu Stacattu',
                    'amount'    => 3
                ],
                [
                    'name'      => 'Rani',
                    'product'   => 'Sweater Uniklooh',
                    'amount'    => 2
                ]
            ]
    ]);

?>