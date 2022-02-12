<?php

namespace MainDishes;

// look for the food class in the root namespace,
//  \ is not optinal here if we want to look in the root namespace instead of the current namespace

class MainDish extends \Food
{
    /**
     * @var string
     */
    protected $name = 'main dish';

    /**
     * A short message about eating this main dish.
     *
     * @return string
     */

    public function eat(): string
    {
        $parentResult = parent::eat();
        return $parentResult . " It was filling.";
    }
}