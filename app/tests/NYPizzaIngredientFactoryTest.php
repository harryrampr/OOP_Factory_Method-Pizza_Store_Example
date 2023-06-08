<?php

namespace Tests;

use App\NYPizzaIngredientFactory;
use App\PizzaIngredientFactory;
use App\Ingredients\FreshClams;
use App\Ingredients\MarinaraSauce;
use App\Ingredients\ReggianoCheese;
use App\Ingredients\SlicedPepperoni;
use App\Ingredients\ThinCrustDough;
use App\Ingredients\Veggies;
use PHPUnit\Framework\TestCase;

/**
 * Class NYPizzaIngredientFactoryTest
 *
 * Test case for the NYPizzaIngredientFactory class.
 */
class NYPizzaIngredientFactoryTest extends TestCase
{
    /**
     * Test that the NYPizzaIngredientFactory implements the PizzaIngredientFactory interface.
     */
    public function testImplementsPizzaIngredientFactoryInterface(): void
    {
        $factory = new NYPizzaIngredientFactory();
        $this->assertInstanceOf(PizzaIngredientFactory::class, $factory);
    }

    /**
     * Test that the createDough method returns an instance of ThinCrustDough.
     */
    public function testCreateDoughReturnsThinCrustDough(): void
    {
        $factory = new NYPizzaIngredientFactory();
        $dough = $factory->createDough();
        $this->assertInstanceOf(ThinCrustDough::class, $dough);
    }

    /**
     * Test that the createSauce method returns an instance of MarinaraSauce.
     */
    public function testCreateSauceReturnsMarinaraSauce(): void
    {
        $factory = new NYPizzaIngredientFactory();
        $sauce = $factory->createSauce();
        $this->assertInstanceOf(MarinaraSauce::class, $sauce);
    }

    /**
     * Test that the createCheese method returns an instance of ReggianoCheese.
     */
    public function testCreateCheeseReturnsReggianoCheese(): void
    {
        $factory = new NYPizzaIngredientFactory();
        $cheese = $factory->createCheese();
        $this->assertInstanceOf(ReggianoCheese::class, $cheese);
    }

    /**
     * Test that the createVeggies method returns an array of Veggie objects.
     */
    public function testCreateVeggiesReturnsArrayOfVeggies(): void
    {
        $factory = new NYPizzaIngredientFactory();
        $veggies = $factory->createVeggies();
        $this->assertIsArray($veggies);
        $this->assertContainsOnlyInstancesOf(Veggies::class, $veggies);
    }

    /**
     * Test that the createPepperoni method returns an instance of SlicedPepperoni.
     */
    public function testCreatePepperoniReturnsSlicedPepperoni(): void
    {
        $factory = new NYPizzaIngredientFactory();
        $pepperoni = $factory->createPepperoni();
        $this->assertInstanceOf(SlicedPepperoni::class, $pepperoni);
    }

    /**
     * Test that the createClams method returns an instance of FreshClams.
     */
    public function testCreateClamsReturnsFreshClams(): void
    {
        $factory = new NYPizzaIngredientFactory();
        $clams = $factory->createClams();
        $this->assertInstanceOf(FreshClams::class, $clams);
    }
}