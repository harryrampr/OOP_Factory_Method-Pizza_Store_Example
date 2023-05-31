<?php
declare(strict_types=1);

namespace App;

use App\Ingredients\Cheese;
use App\Ingredients\Clams;
use App\Ingredients\Dough;
use App\Ingredients\Pepperoni;
use App\Ingredients\Sauce;
use App\Ingredients\Veggies;

abstract class Pizza
{
    protected string $name = '';
    protected PizzaSize $size;
    protected Dough $dough;
    protected Sauce $sauce;
    /** @var Veggies[] */
    protected array $veggies = [];
    protected Cheese $cheese;
    protected Pepperoni $pepperoni;
    protected Clams $clams;
    protected int $sliceCount;
    protected PizzaSliceType $sliceType = PizzaSliceType::DIAGONAL;
    protected string $boxType;


    public function setSliceType(PizzaSliceType $sliceType): void
    {
        $this->sliceType = $sliceType;
    }

    abstract public function prepare(): void;

    public function bake(): void
    {
        echo '</ul>'. PHP_EOL.'<h2  class="text-red-600">Bake for 25 minutes at 350</h2 >', PHP_EOL;
    }

    public function cut(): void
    {
        echo sprintf('<h2 >Cut the pizza into %s %s slices</h2 >%s',
            $this->sliceCount,
            $this->sliceType->toString(), PHP_EOL);
    }

    public function box(): void
    {
        echo sprintf('<h2 >Place pizza in %s box</h2 >%s',
            $this->boxType, PHP_EOL);
    }

    public function getSizeName(): string
    {
        return $this->size->toString();
    }

    public function setSize(PizzaSize $size): void
    {
        $this->boxType = 'official PizzaStore ' . $size->toString();
        $this->sliceCount = $size->value;
        $this->size = $size;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

}