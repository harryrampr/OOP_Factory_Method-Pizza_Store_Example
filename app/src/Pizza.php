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
        echo '</ul>'. PHP_EOL.'<h3 class="mt-2 mb-3 text-red-600">Bake for 25 minutes at 350</h3>', PHP_EOL;
    }

    public function cut(): void
    {
        echo sprintf('<h3 class="mt-2 mb-3">Cutting the pizza into %s %s slices</h3>%s',
            $this->sliceCount,
            $this->sliceType->toString(), PHP_EOL);
    }

    public function box(): void
    {
        echo sprintf('<h3 class="mt-2 mb-3">Place pizza in %s box</h3>%s',
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