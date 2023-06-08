<?php

namespace Tests;

use App\CaliforniaPizzaIngredientFactory;
use App\PizzaIngredientFactory;
use App\Ingredients\BruschettaSauce;
use App\Ingredients\FreshClams;
use App\Ingredients\GoatCheese;
use App\Ingredients\SlicedPepperoni;
use App\Ingredients\VeryThinCrustDough;
use App\Ingredients\Veggies;
use PHPUnit\Framework\TestCase;


/**
 * Class CaliforniaPizzaIngredientFactoryTest
 *
 * Test case for the CaliforniaPizzaIngredientFactory class.
 */
class CaliforniaPizzaIngredientFactoryTest extends TestCase
{
    /**
     * Test that the CaliforniaPizzaIngredientFactory implements the PizzaIngredientFactory interface.
     */
    public function testImplementsPizzaIngredientFactoryInterface(): void
    {
        $factory = new CaliforniaPizzaIngredientFactory();
        $this->assertInstanceOf(PizzaIngredientFactory::class, $factory);
    }

    /**
     * Test that the createDough method returns an instance of VeryThinCrustDough.
     */
    public function testCreateDoughReturnsVeryThinCrustDough(): void
    {
        $factory = new CaliforniaPizzaIngredientFactory();
        $dough = $factory->createDough();
        $this->assertInstanceOf(VeryThinCrustDough::class, $dough);
    }

    /**
     * Test that the createSauce method returns an instance of BruschettaSauce.
     */
    public function testCreateSauceReturnsBruschettaSauce(): void
    {
        $factory = new CaliforniaPizzaIngredientFactory();
        $sauce = $factory->createSauce();
        $this->assertInstanceOf(BruschettaSauce::class, $sauce);
    }

    /**
     * Test that the createCheese method returns an instance of GoatCheese.
     */
    public function testCreateCheeseReturnsGoatCheese(): void
    {
        $factory = new CaliforniaPizzaIngredientFactory();
        $cheese = $factory->createCheese();
        $this->assertInstanceOf(GoatCheese::class, $cheese);
    }

    /**
     * Test that the createVeggies method returns an array of Veggie objects.
     */
    public function testCreateVeggiesReturnsArrayOfVeggies(): void
    {
        $factory = new CaliforniaPizzaIngredientFactory();
        $veggies = $factory->createVeggies();
        $this->assertIsArray($veggies);
        $this->assertContainsOnlyInstancesOf(Veggies::class, $veggies);
    }

    /**
     * Test that the createPepperoni method returns an instance of SlicedPepperoni.
     */
    public function testCreatePepperoniReturnsSlicedPepperoni(): void
    {
        $factory = new CaliforniaPizzaIngredientFactory();
        $pepperoni = $factory->createPepperoni();
        $this->assertInstanceOf(SlicedPepperoni::class, $pepperoni);
    }

    /**
     * Test that the createClams method returns an instance of FreshClams.
     */
    public function testCreateClamsReturnsFreshClams(): void
    {
        $factory = new CaliforniaPizzaIngredientFactory();
        $clams = $factory->createClams();
        $this->assertInstanceOf(FreshClams::class, $clams);
    }
}