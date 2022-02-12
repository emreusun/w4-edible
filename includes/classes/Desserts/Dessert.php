<?php 

namespace Desserts;

// import Food from the root namespace, 
// using the / denote root namespace even though the \ is a optioal

use \Food;

class Dessert extends Food
{
    /**
     * @var string
     */
    protected $name = 'dessert';

    /**
     * The temperature of the dessert.
     * 
     * @var string
     */
    private $temparature = 'cold';

    /**
     * A short message about eating this dessert.
     *
     * @return string
     */
    public function eat(): string
    {
        $parentResult = parent::eat();
        return $parentResult . " It was very " . $this->temparature . ".";
    }
}