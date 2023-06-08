<?php

namespace Tests\Ingredients;

use App\Ingredients\Cheese;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionProperty;

/**
 * Class CheeseTest
 *
 * Test case for the Cheese class.
 */
class CheeseTest extends TestCase
{
    /**
     * Test that the Cheese class is abstract.
     */
    public function testCheeseIsAbstract(): void
    {
        $reflectionClass = new ReflectionClass(Cheese::class);
        $this->assertTrue($reflectionClass->isAbstract());
    }

    /**
     * Test that the $description property is protected.
     */
    public function testDescriptionPropertyIsProtected(): void
    {
        $reflectionClass = new ReflectionClass(Cheese::class);
        $descriptionProperty = $reflectionClass->getProperty('description');
        $this->assertTrue($descriptionProperty->isProtected());
    }

    /**
     * Test that the $description property type has not changed.
     */
    public function testDescriptionPropertyTypeHasNotChanged(): void
    {
        $reflectionClass = new ReflectionClass(Cheese::class);
        $descriptionProperty = $reflectionClass->getProperty('description');
        $expectedType = 'string';
        $actualType = $descriptionProperty->getType()->getName();
        $this->assertSame($expectedType, $actualType);
    }

    /**
     * Test the constructor of a concrete Cheese subclass.
     * Ensure that it prints the step of adding the cheese to the pizza.
     */
    public function testCheeseConstructorPrintsStep(): void
    {
        // Create a concrete subclass of Cheese
        $concreteCheeseClass = new class extends Cheese {
            /**
             * ConcreteCheese constructor.
             */
            public function __construct()
            {
                $this->description = 'test cheese';
                parent::__construct();
            }
        };

        // Capture the output of the constructor
        ob_start();
        new $concreteCheeseClass();
        $output = ob_get_clean();

        // Assert that the output contains the expected step message
        $expectedOutput = sprintf('<li>Add the %s</li>%s', 'test cheese', PHP_EOL);
        $this->assertStringContainsString($expectedOutput, $output);
    }

}