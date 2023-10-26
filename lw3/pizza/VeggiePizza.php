<?php
require_once 'Pizza.php';

class VeggiePizza extends Pizza
{
    public function __construct(string $sauce, $toppings)
    {
        $this->name = 'Veggie Pizza';
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
