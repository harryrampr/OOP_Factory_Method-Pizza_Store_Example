<?php

namespace Tests\Ingredients;

use App\Ingredients\Dough;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionProperty;

/**
 * Class DoughTest
 *
 * Test case for the Dough class.
 */
class DoughTest extends TestCase
{
    /**
     * Test that the Dough class is abstract.
     */
    public function testDoughIsAbstract(): void
    {
        $reflectionClass = new ReflectionClass(Dough::class);
        $this->assertTrue($reflectionClass->isAbstract());
    }

    /**
     * Test that the $description property is protected.
     */
    public function testDescriptionPropertyIsProtected(): void
    {
        $reflectionClass = new ReflectionClass(Dough::class);
        $descriptionProperty = $reflectionClass->getProperty('description');
        $this->assertTrue($descriptionProperty->isProtected());
    }

    /**
     * Test that the $description property type has not changed.
     */
    public function testDescriptionPropertyTypeHasNotChanged(): void
    {
        $reflectionClass = new ReflectionClass(Dough::class);
        $descriptionProperty = $reflectionClass->getProperty('description');
        $expectedType = 'string';
        $actualType = $descriptionProperty->getType()->getName();
        $this->assertSame($expectedType, $actualType);
    }

    /**
     * Test the constructor of a concrete Dough subclass.
     * Ensure that it displays the starting step of the pizza preparation.
     */
    public function testDoughConstructorDisplaysStartingStep(): void
    {
        // Create a concrete subclass of Dough
        $concreteDoughClass = new class extends Dough {
            /**
             * ConcreteDough constructor.
             */
            public function __construct()
            {
                $this->description = 'test dough';
                parent::__construct();
            }
        };

        // Capture the output of the constructor
        ob_start();
        new $concreteDoughClass();
        $output = ob_get_clean();

        // Assert that the output contains the expected starting step message
        $expectedOutput = sprintf('<h3 class="text-green-700">Start with the %s</h3>%s', 'test dough', PHP_EOL . '<ul class="ml-2">' . PHP_EOL);
        $this->assertSame($expectedOutput, $output);
    }
}