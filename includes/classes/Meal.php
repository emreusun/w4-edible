<?php

use Appetizers\Appetizer;
use MainDishes\MainDish;
use Desserts\Dessert;


class Meal 
{
   /**
    * @var appetizer
    */
    protected $appetizer;

    /**
     * @var mainDish
     */
    protected $mainDish;

    /**
     * @var dessert
     */
    protected $dessert;

    /**
     * @param Appetizer $appetizer
     * @param MainDish $mainDish
     * @param Dessert $dessert
     */
    public function __construct(Appetizer $appetizer, MainDish $mainDish, Dessert $dessert)
    {
        $this->appetizer = $appetizer;
        $this->mainDish = $mainDish;
        $this->dessert = $dessert;
    }

}