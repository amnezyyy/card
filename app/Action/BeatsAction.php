<?php

namespace App\Action;

use App\Models\Beats;

class BeatsAction
{
    public function __construct()
    {
    }

    function heandle(): string
    {
        Beats::updated([
            'name' => '1'
        ]);
    }

//        try {
//            if (!array_key_exists($file, $a)){
//                throw new \Exception('Key dosnt exist!');
//            }
//        } catch (\Exception $exception) {
//            echo $exception->getMessage();
//        }
}
