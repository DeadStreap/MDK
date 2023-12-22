<?php

require '../vendor/autoload.php';

use PizzaStore\MyPizzaStore;

$pizzaStore = new MyPizzaStore();

$pizzaStore->orderPizza('cheese');
$pizzaStore->orderPizza('veggie');
$pizzaStore->orderPizza('pepperoni');
$pizzaStore->orderPizza('mexican');
$pizzaStore->orderPizza('seafood');
