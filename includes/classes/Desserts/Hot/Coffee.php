<?php

namespace Desserts\Hot;

use Desserts\Dessert;

class Coffee extends Dessert
{
    /**
     * @var string
     */
    protected $name = 'coffee';

    /**
     * we know this is alread defined on dessert,
     * but because it's a private property there,
     * we don't have to care.
     * we might even know that it's defined there, 
     * but because it's private(on dessert) we don't need to worry about it.
     *
     * @var string
     */
    private $temparature = 'hot';

    /**
     * A short message about eating this coffee.
     *
     * @return string
     */
    public function eat(): string
    {
        return "You drank a cup of " . $this->name . ". It was very " . $this->temparature . ".";
    }
}