<?php

namespace Tests;

use App\ChicagoPizzaIngredientFactory;
use App\PizzaIngredientFactory;
use App\Ingredients\FrozenClam;
use App\Ingredients\MozzarellaCheese;
use App\Ingredients\PlumTomatoSauce;
use App\Ingredients\SlicedPepperoni;
use App\Ingredients\ThickCrustDough;
use App\Ingredients\Veggies;
use PHPUnit\Framework\TestCase;

/**
 * Class ChicagoPizzaIngredientFactoryTest
 *
 * Test case for the ChicagoPizzaIngredientFactory class.
 */
class ChicagoPizzaIngredientFactoryTest extends TestCase
{
    /**
     * Test that the ChicagoPizzaIngredientFactory implements the PizzaIngredientFactory interface.
     */
    public function testImplementsPizzaIngredientFactoryInterface(): void
    {
        $factory = new ChicagoPizzaIngredientFactory();
        $this->assertInstanceOf(PizzaIngredientFactory::class, $factory);
    }

    /**
     * Test that the createDough method returns an instance of ThickCrustDough.
     */
    public function testCreateDoughReturnsThickCrustDough(): void
    {
        $factory = new ChicagoPizzaIngredientFactory();
        $dough = $factory->createDough();
        $this->assertInstanceOf(ThickCrustDough::class, $dough);
    }

    /**
     * Test that the createSauce method returns an instance of PlumTomatoSauce.
     */
    public function testCreateSauceReturnsPlumTomatoSauce(): void
    {
        $factory = new ChicagoPizzaIngredientFactory();
        $sauce = $factory->createSauce();
        $this->assertInstanceOf(PlumTomatoSauce::class, $sauce);
    }

    /**
     * Test that the createCheese method returns an instance of MozzarellaCheese.
     */
    public function testCreateCheeseReturnsMozzarellaCheese(): void
    {
        $factory = new ChicagoPizzaIngredientFactory();
        $cheese = $factory->createCheese();
        $this->assertInstanceOf(MozzarellaCheese::class, $cheese);
    }

    /**
     * Test that the createVeggies method returns an array of Veggie objects.
     */
    public function testCreateVeggiesReturnsArrayOfVeggies(): void
    {
        $factory = new ChicagoPizzaIngredientFactory();
        $veggies = $factory->createVeggies();
        $this->assertIsArray($veggies);
        $this->assertContainsOnlyInstancesOf(Veggies::class, $veggies);
    }

    /**
     * Test that the createPepperoni method returns an instance of SlicedPepperoni.
     */
    public function testCreatePepperoniReturnsSlicedPepperoni(): void
    {
        $factory = new ChicagoPizzaIngredientFactory();
        $pepperoni = $factory->createPepperoni();
        $this->assertInstanceOf(SlicedPepperoni::class, $pepperoni);
    }

    /**
     * Test that the createClams method returns an instance of FrozenClam.
     */
    public function testCreateClamsReturnsFrozenClam(): void
    {
        $factory = new ChicagoPizzaIngredientFactory();
        $clams = $factory->createClams();
        $this->assertInstanceOf(FrozenClam::class, $clams);
    }
}