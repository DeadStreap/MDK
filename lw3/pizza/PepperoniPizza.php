<?php
require_once 'Pizza.php';

class PepperoniPizza extends Pizza
{
    public function __construct(string $sauce, $toppings)
    {
        $this->name = 'Pepperoni Pizza';
        $this->sauce = $sauce;
        $this->toppings = $toppings;
    }

    public function prepare()
    {
        echo "Началась готовка пиццы: {$this->name} <br>";
        echo "Добавлен соус: {$this->sauce} <br>";
        echo "Добавлены топинги: " . implode(', ', $this->toppings) . "<br>";
    }
}
