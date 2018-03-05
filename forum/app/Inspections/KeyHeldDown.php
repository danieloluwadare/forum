<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 8/4/2017
 * Time: 1:32 AM
 */

namespace App\Inspections;

use Exception;
class KeyHeldDown
{

    public function detect($body)
    {
        if(preg_match('/(.)\\1{4,}/', $body)){
            throw new Exception('Your Reply Contains Spam');
        };
    }
}