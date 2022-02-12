<?php

namespace Appetizers;

class Bruschetta extends Appetizer
{
    /**
     * @var string
     */
    protected $name = 'bruschetta';

    /**
     * what utensils do you need to eat bruschetta
     * 
     * @return string
     */
    public function getUtensils(): string
    {
        return "your hands";
    }
}