<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 8/4/2017
 * Time: 12:36 AM
 */

namespace App\Inspections;


class Spam
{
    protected $inspections =[
            InvalidKeywords::class,
            KeyHeldDown::class
        ];

    public function detect($body)
    {
        foreach ($this->inspections as $inspection){
            app($inspection)->detect($body);
        }

        return false;
    }




}