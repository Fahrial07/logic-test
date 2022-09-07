<?php


function shoppingTime($memberId, $money){

    $barang =  [
        [
            'name'      =>  'Sepatu',
            'brand'     =>  'Stacattu',
            'price'     =>  1500000,
        ],
        [
            'name'      =>  'Baju',
            'brand'     =>  'Zoro',
            'price'     =>  100000,
        ],
        [
            'name'      =>  'Baju',
            'brand'     =>  'H&H',
            'price'     =>  250000,
        ],
        [
            'name'      =>  'Sweater',
            'brand'     =>  'Uniklooh',
            'price'     =>  175000,
        ]
    ];




    if($memberId == null){
        echo 'Mohon maaf toko X hanya berlaku untuk member saja';
    } else if($money < 50000){
        echo 'Mohon maaf uang tidak cukup';
    } else {

        $data = [
            (object) [
                        'memberId'      => $memberId,
                        'money'         => $money,
                        'listPurchased' => [],
                        'changeMoney'   => $money,
                    ]

        ];

        foreach($barang as $b){
            if($money >= $b['price']){
                $data[0]->listPurchased[] = $b['name'] . ' ' . $b['brand'];
                $data[0]->changeMoney = $money - $b['price'];
                $money = $data[0]->changeMoney;
            }
        }

        echo json_encode($data[0]);
    }
}


shoppingTime('82Ku8Ma742', 900000);



?>