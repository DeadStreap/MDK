<?php
abstract class Pizza
{
    protected string $name;
    protected string $sauce;
    protected $toppings = [];

    abstract public function prepare();

    public function cut()
    {
        echo "Данную пиццу нарезают по диагонали <br> _________ <br><br>";
    }
}
