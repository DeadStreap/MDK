<?php
require 'vendor/autoload.php';

use PizzaStore\PizzaStore;
require 'pizza/CheesePizza.php';
require 'pizza/VeggiePizza.php';
require 'pizza/PepperoniPizza.php';
require 'pizza/MexicanPizza.php';

class MyPizzaStore extends PizzaStore
{
    public function createPizza($type)
    {
        if ($type === 'cheese') {
            return new CheesePizza('Cheese Sauce', ['Extra cheese', 'Romano ', 'Ricotta ']);
        } else if ($type === 'veggie') {
            return new VeggiePizza('Tomato Sauce', ['Mozzarella', 'Cheddar', 'Blue Cheese', 'Parmesan']);
        } else if ($type === 'pepperoni') {
            return new PepperoniPizza('Buffalo Sauce', ['Extra pepperoni', 'Green pepper']);
        } else if ($type === 'mexican') {
            return new MexicanPizza('Spicy Red Sauce', ['Blue Cheese', 'Mushroom', 'Fresh garlic']);
        } else {
            return null;
        }
    }
}
