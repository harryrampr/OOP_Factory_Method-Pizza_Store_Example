<?php

namespace Tests\Ingredients;

use App\Ingredients\Clams;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionProperty;

/**
 * Class ClamsTest
 *
 * Test case for the Clams class.
 */
class ClamsTest extends TestCase
{
    /**
     * Test that the Clams class is abstract.
     */
    public function testClamsIsAbstract(): void
    {
        $reflectionClass = new ReflectionClass(Clams::class);
        $this->assertTrue($reflectionClass->isAbstract());
    }

    /**
     * Test that the $description property is protected.
     */
    public function testDescriptionPropertyIsProtected(): void
    {
        $reflectionClass = new ReflectionClass(Clams::class);
        $descriptionProperty = $reflectionClass->getProperty('description');
        $this->assertTrue($descriptionProperty->isProtected());
    }

    /**
     * Test that the $description property type has not changed.
     */
    public function testDescriptionPropertyTypeHasNotChanged(): void
    {
        $reflectionClass = new ReflectionClass(Clams::class);
        $descriptionProperty = $reflectionClass->getProperty('description');
        $expectedType = 'string';
        $actualType = $descriptionProperty->getType()->getName();
        $this->assertSame($expectedType, $actualType);
    }

    /**
     * Test the constructor of a concrete Clams subclass.
     * Ensure that it prints the step of adding the clams to the pizza.
     */
    public function testClamsConstructorPrintsStep(): void
    {
        // Create a concrete subclass of Clams
        $concreteClamsClass = new class extends Clams {
            /**
             * ConcreteClams constructor.
             */
            public function __construct()
            {
                $this->description = 'test clams';
                parent::__construct();
            }
        };

        // Capture the output of the constructor
        ob_start();
        new $concreteClamsClass();
        $output = ob_get_clean();

        // Assert that the output contains the expected step message
        $expectedOutput = sprintf('<li>Add the %s</li>%s', 'test clams', PHP_EOL);
        $this->assertStringContainsString($expectedOutput, $output);
    }
}