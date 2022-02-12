<?php

use Appetizers\Appetizer;
use Appetizers\Bruschetta;
use MainDishes\MainDish;
use MainDishes\Soup;
use Desserts\Dessert;
use Desserts\Hot\Coffee;



spl_autoload_register(function ($class) {
    $replaced = str_replace("\\", "/", $class);

    require_once '../includes/classes/' . $replaced . '.php';
    
});
echo '<pre>';

$food = new Food();
var_dump($food);
var_dump($food->eat());

// echo $coffee->eat(); this the other way to call the method classes
// appetizers
$appetizer = new Appetizer();
$bruschetta = new Bruschetta();
var_dump($appetizer);
var_dump($appetizer->eat());
var_dump($bruschetta);
var_dump($bruschetta->eat());

// main dish
$mainDish = new MainDish();
$soup = new Soup();
var_dump($mainDish);
var_dump($mainDish->eat());
var_dump($soup);
var_dump($soup->eat());

// dessert
$dessert = new Dessert();
$coffee = new Coffee();
var_dump($dessert);
var_dump($dessert->eat());
var_dump($coffee);
var_dump($coffee->eat());

// passing in geneeric parents
$meal = new Meal($appetizer, $mainDish, $dessert);
var_dump($meal);

$secondMeal = new Meal($bruschetta, $soup, $coffee);
var_dump($secondMeal);
//wrong example 
// $thirdMeal = new Meal($coffee, $soup, $bruschetta);
$thirdMeal = new Meal($bruschetta, $soup, $coffee);
echo '</pre>';
die();
