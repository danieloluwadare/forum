<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 6/28/2017
 * Time: 11:10 AM
 */

namespace App\Filters;


use Illuminate\Http\Request;

abstract class Filters
{
    protected $builder, $request;
    protected $filters=[];



    public function __construct(Request $request)
    {
        $this->request = $request;
    }


    public function apply($builder)
    {
        $this->builder = $builder;

        foreach ($this->getFilters() as $filter => $value){
            if(method_exists($this, $filter)){
                $this->$filter($value);
            }
        }

        return $this->builder;
    }

    /**
     * @return array
     */
    public function getFilters()
    {
        return $this->request->intersect($this->filters);
    }

}