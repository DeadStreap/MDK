<?php
require 'PizzaStore.php';
require 'CheesePizza.php';
require 'VeggiePizza.php';

class MyPizzaStore extends PizzaStore {
    public function createPizza($type) {
        if ($type === 'cheese') {
            return new CheesePizza();
        } else if ($type === 'veggie') {
            return new VeggiePizza();
        } else {
            return null;
        }
    }
}   