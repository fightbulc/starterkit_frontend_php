<?php

namespace App\Managers\Say;

use Simplon\Helper\SingletonTrait;

class SayManager
{
    use SingletonTrait;

    /**
     * @return array
     */
    public function getHello()
    {
        return [
            'items' => [
                [
                    'name'        => 'BOX #1',
                    'hasProducts' => true,
                    'products'    => [
                        [
                            'id' => 1,
                        ],
                        [
                            'id' => 2,
                        ],
                    ]
                ],
                [
                    'name' => 'BOX #2',
                ],
            ]
        ];
    }
} 