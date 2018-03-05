<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 8/4/2017
 * Time: 1:22 AM
 */


namespace App\Inspections;


//use Exception;

class InvalidKeywords
{
    protected $keywords=[
        'Yahoo Customer Support',
    ];

    public function detect($body)
    {
        foreach ($this->keywords as $keyword){
            if(stripos($body, $keyword) !== false){
                throw new \Exception('Your Reply Contains Spam');
            }
        }
    }
}