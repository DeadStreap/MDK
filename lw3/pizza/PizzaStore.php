<?php
namespace PizzaStore;
abstract class PizzaStore
{
  abstract public function createPizza($type);

  public function orderPizza($type)
  {
    $pizza = $this->createPizza($type);
    if ($pizza !== null) {
      $pizza->prepare();
      $pizza->cut();
    } else {
      echo "Извините, данный тип пиццы недоступен. <br>";
    }
  }
}
