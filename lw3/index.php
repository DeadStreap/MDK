<?php
require 'MyPizzaStore.php';

$pizzaStore = new MyPizzaStore();

$pizzaStore->orderPizza('cheese');
$pizzaStore->orderPizza('veggie');
$pizzaStore->orderPizza('pepperoni');
$pizzaStore->orderPizza('mexican');

$pizzaStore->orderPizza('seafood');
