<?php

namespace Tests\Ingredients;

use App\Ingredients\Veggies;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

/**
 * Class VeggiesTest
 *
 * Test case for the Veggies class.
 */
class VeggiesTest extends TestCase
{
    /**
     * Test that Veggies is an abstract class.
     */
    public function testVeggiesIsAbstractClass(): void
    {
        $reflectionClass = new ReflectionClass(Veggies::class);

        $this->assertTrue($reflectionClass->isAbstract());
    }

    /**
     * Test the constructor of a concrete Veggies subclass.
     * Ensure that it displays the HTML list item element with the description of the veggies.
     */
    public function testVeggiesConstructorDisplaysDescription(): void
    {
        // Create a concrete subclass of Veggies
        $concreteVeggiesClass = new class() extends Veggies {
            /**
             * ConcreteVeggies constructor.
             */
            public function __construct()
            {
                $this->description = 'test veggies';
                parent::__construct();
            }
        };

        // Capture the output of the constructor
        ob_start();
        new $concreteVeggiesClass();
        $output = ob_get_clean();

        // Assert that the output contains the expected description message
        $expectedOutput = sprintf('<li>Add the %s</li>%s', 'test veggies', PHP_EOL);
        $this->assertStringContainsString($expectedOutput, $output);
    }


    /**
     * Test that the description property has not changed its type.
     */
    public function testDescriptionPropertyType(): void
    {
        $reflectionClass = new ReflectionClass(Veggies::class);
        $descriptionProperty = $reflectionClass->getProperty('description');

        $descriptionType = $descriptionProperty->getType()->getName();

        $this->assertEquals('string', $descriptionType);
    }

}