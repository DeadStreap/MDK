<?php
require_once 'Pizza.php';

class CheesePizza extends Pizza {
    public function __construct() {
        $this->name = 'Cheese Pizza';
        $this->sauce = 'Tomato Sauce';
        $this->toppings = ['Cheese'];
    }

    public function prepare() {
        echo "Началась готовка пиццы {$this->name} <br>";
        echo "Добавлен соус {$this->sauce} <br>";
        echo "Добавлены топинги: " . implode(', ', $this->toppings) . "<br> _________ <br>";
    }
}