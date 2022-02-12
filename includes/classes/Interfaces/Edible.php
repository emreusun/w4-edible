<?php

interface Edible
{
    /**
     * an edible item can be eaten
     * @return string
     */
    public function eat(): string;
}