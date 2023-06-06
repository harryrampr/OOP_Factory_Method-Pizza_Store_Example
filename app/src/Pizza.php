<?php
declare(strict_types=1);

namespace App;

use App\Ingredients\Cheese;
use App\Ingredients\Clams;
use App\Ingredients\Dough;
use App\Ingredients\Pepperoni;
use App\Ingredients\Sauce;
use App\Ingredients\Veggies;

/**
 * Abstract class representing a pizza.
 */
abstract class Pizza
{
    /**
     * The name of the pizza.
     *
     * @var string
     */
    protected string $name = '';

    /**
     * The size of the pizza.
     *
     * @var PizzaSize
     */
    protected PizzaSize $size;

    /**
     * The dough of the pizza.
     *
     * @var Dough
     */
    protected Dough $dough;

    /**
     * The sauce of the pizza.
     *
     * @var Sauce
     */
    protected Sauce $sauce;

    /**
     * The veggies on the pizza.
     *
     * @var Veggies[]
     */
    protected array $veggies = [];

    /**
     * The cheese on the pizza.
     *
     * @var Cheese
     */
    protected Cheese $cheese;

    /**
     * The pepperoni on the pizza.
     *
     * @var Pepperoni
     */
    protected Pepperoni $pepperoni;

    /**
     * The clams on the pizza.
     *
     * @var Clams
     */
    protected Clams $clams;

    /**
     * The number of pizza slices.
     *
     * @var int
     */
    protected int $sliceCount;

    /**
     * The type of pizza slices.
     *
     * @var PizzaSliceType
     */
    protected PizzaSliceType $sliceType = PizzaSliceType::DIAGONAL;

    /**
     * The type of box for the pizza.
     *
     * @var string
     */
    protected string $boxType;

    /**
     * Sets the type of pizza slices.
     *
     * @param PizzaSliceType $sliceType The type of pizza slices.
     */
    public function setSliceType(PizzaSliceType $sliceType): void
    {
        $this->sliceType = $sliceType;
    }

    /**
     * Prepares the pizza.
     * This method is abstract and must be implemented by concrete pizza classes.
     */
    abstract public function prepare(): void;

    /**
     * Bakes the pizza.
     */
    public function bake(): void
    {
        echo '</ul>' . PHP_EOL . '<h3 class="text-red-600">Bake for 25 minutes at 350</h3>', PHP_EOL;
    }

    /**
     * Cuts the pizza into slices.
     */
    public function cut(): void
    {
        echo sprintf('<h3>Cut the pizza into %s %s slices</h3>%s',
            $this->sliceCount,
            $this->sliceType->toString(), PHP_EOL);
    }

    /**
     * Boxes the pizza.
     */
    public function box(): void
    {
        echo sprintf('<h3>Place pizza in %s box</h3>%s',
            $this->boxType, PHP_EOL);
    }

    /**
     * Gets the name of the pizza size.
     *
     * @return string The name of the pizza size.
     */
    public function getSizeName(): string
    {
        return $this->size->toString();
    }

    /**
     * Sets the size of the pizza.
     *
     * @param PizzaSize $size The size of the pizza.
     */
    public function setSize(PizzaSize $size): void
    {
        $this->boxType = 'official PizzaStore ' . $size->toString();
        $this->sliceCount = $size->value;
        $this->size = $size;
    }

    /**
     * Gets the name of the pizza.
     *
     * @return string The name of the pizza.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Sets the name of the pizza.
     *
     * @param string $name The name of the pizza.
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

}