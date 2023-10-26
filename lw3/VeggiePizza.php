<?php
require_once 'Pizza.php';

class VeggiePizza extends Pizza {
    public function __construct() {
        $this->name = 'Veggie Pizza';
        $this->sauce = 'Marinara Sauce';
        $this->toppings = ['Peppers', 'Onions', 'Mushrooms'];
    }

    public function prepare() {
        echo "Началась готовка пиццы {$this->name} <br>";
        echo "Добавлен соус {$this->sauce} <br>";
        echo "Добавлены топинги: " . implode(', ', $this->toppings) . "<br> _________ <br>";
    }
}