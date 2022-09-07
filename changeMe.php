<?php
function changeMe($arr)
{

    $n = 1;
    foreach($arr as $a){

        $date = date('Y');
        $age = intval($date) - intval($a[3]);
        $data = [
            (object) [
                        'fistName'      => $a[0],
                        'lastName'      => $a[1],
                        'gender'        => $a[2],
                        'age'           => $a[3] == null || $a[3] > $date ? 'Invalid Birth Year' : $age,
                    ]

        ];

        echo ' ' . $n.'. ' . $a[0] .' '. $a[1] . ':' .' '. json_encode( $data[0]) . '<br>';

        $n++;
    }

}

changeMe([
    ['Crist', 'Evans', 'Male', 1982],
    ['Robert', 'Downey', 'Male', '']
]);



?>