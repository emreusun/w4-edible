<?php

namespace Appetizers;

use Food;

class Appetizer extends Food
{
    /**
     * @var string
     */
    protected $name = 'appetizer';

    /**
     * A short message about eating this appetizer.
     *
     * @return string
     */
    public function eat(): string
    {
        // one way to use get utensils
        $parentResult = parent::eat();
        $utensils = $this->getUtensils();
        return $parentResult . " You ate with " . $utensils . ".";
        
        // // another  way to use get utensils
        // $parentResult = parent::eat();
        // return $parentResult . " You ate with" . $this->getUtensils();
    }
    /**
     * returns whatever are used to eat this appetizer.
     * 
     * @return string
     */
    public function getUtensils(): string
    {
        return "knife and fork";
    }
}