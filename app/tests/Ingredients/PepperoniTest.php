<?php

namespace Tests\Ingredients;

use App\Ingredients\Pepperoni;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionProperty;

/**
 * Class PepperoniTest
 *
 * Test case for the Pepperoni class.
 */
class PepperoniTest extends TestCase
{
    /**
     * Test that the Pepperoni class is abstract.
     */
    public function testPepperoniIsAbstract(): void
    {
        $reflectionClass = new ReflectionClass(Pepperoni::class);
        $this->assertTrue($reflectionClass->isAbstract());
    }

    /**
     * Test that the $description property is protected.
     */
    public function testDescriptionPropertyIsProtected(): void
    {
        $reflectionClass = new ReflectionClass(Pepperoni::class);
        $descriptionProperty = $reflectionClass->getProperty('description');
        $this->assertTrue($descriptionProperty->isProtected());
    }

    /**
     * Test that the $description property type has not changed.
     */
    public function testDescriptionPropertyTypeHasNotChanged(): void
    {
        $reflectionClass = new ReflectionClass(Pepperoni::class);
        $descriptionProperty = $reflectionClass->getProperty('description');
        $expectedType = 'string';
        $actualType = $descriptionProperty->getType()->getName();
        $this->assertSame($expectedType, $actualType);
    }

    /**
     * Test the constructor of a concrete Pepperoni subclass.
     * Ensure that it displays the HTML list item element with the description of the pepperoni topping.
     */
    public function testPepperoniConstructorDisplaysDescription(): void
    {
        // Create a concrete subclass of Pepperoni
        $concretePepperoniClass = new class extends Pepperoni {
            /**
             * ConcretePepperoni constructor.
             */
            public function __construct()
            {
                $this->description = 'test pepperoni';
                parent::__construct();
            }
        };

        // Capture the output of the constructor
        ob_start();
        new $concretePepperoniClass();
        $output = ob_get_clean();

        // Assert that the output contains the expected description message
        $expectedOutput = sprintf('<li>Add the %s</li>%s', 'test pepperoni', PHP_EOL);
        $this->assertStringContainsString($expectedOutput, $output);
    }
}