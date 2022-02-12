<?php

namespace MainDishes;


class Soup extends MainDish
{
    /**
     * @var string
     */
    protected $name = 'soup';

    /**
     * A short message about eating this soup.
     *
     * @return string
     */
    public function eat(): string
    {
        $parentResult = parent::eat();
        return $parentResult . " It was very tasty.";
    }
}