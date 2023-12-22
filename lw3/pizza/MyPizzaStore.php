<?php
namespace PizzaStore;

require '../vendor/autoload.php';

use Lw3\Library\PizzaStore;
use Lw3\Library\Pizza;

class MyPizzaStore extends PizzaStore
{
    public function createPizza($type): Pizza
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
