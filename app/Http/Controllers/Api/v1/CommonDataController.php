<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Routing\ResponseFactory;
use Symfony\Component\HttpKernel\Exception\HttpException;
use App\Http\Controllers\Controller;

class CommonDataController extends Controller
{
    public function getStreets()
    {
        return response()->json([
            "streets" => [
                [
                    "id" => 1, 
                    "name" => "test1"
                ],
                [
                    "id" => 2, 
                    "name" => "test2"
                ],
                [
                    "id" => 3, 
                    "name" => "test3"
                ],
                [
                    "id" => 4, 
                    "name" => "test4"
                ],
                [
                    "id" => 5, 
                    "name" => "test5"
                ],
            ]
        ]);
    }
    public function getCategories()
    {
        return response()->json([
            [
                "id" => 1,
                "name" => "categ1", 
                "subCategories" => [
                    [
                        "id" => 10,
                        "name" => "subCateg1"
                    ],
                    [
                        "id" => 11,
                        "name" => "subCateg2"
                    ]
                ],
            ],
            [
                "id" => 2, 
                "name" => "categ2", 
                "subCategories" => [
                    [
                        "id" => 13,
                        "name" => "subCateg1"
                    ],
                    [
                        "id" => 15,
                        "name" => "subCateg2"
                    ]
                ],
            ],
            [
                "id" => 3, 
                "name" => "categ3", 
                "subCategories" => [
                    [
                        "id" => 16,
                        "name" => "subCateg1"
                    ],
                    [
                        "id" => 18,
                        "name" => "subCateg2"
                    ]
                ],
            ],
            [
                "id" => 4, 
                "name" => "categ4", 
                "subCategories" => [
                    [
                        "id" => 21,
                        "name" => "subCateg1"
                    ],
                    [
                        "id" => 22,
                        "name" => "subCateg2"
                    ]
                ],
            ],
            [
                "id" => 5, 
                "name" => "categ5", 
                "subCategories" => [
                    [
                        "id" => 24,
                        "name" => "subCateg1"
                    ],
                    [
                        "id" => 54,
                        "name" => "subCateg2"
                    ]
                ],
            ],
        ]);
    }
}
