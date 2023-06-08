<?php /** @noinspection PhpExpressionResultUnusedInspection */

namespace Tests;

use App\Pizza;
use PHPUnit\Framework\TestCase;
use App\Ingredients\Cheese;
use App\Ingredients\Clams;
use App\Ingredients\Dough;
use App\Ingredients\Pepperoni;
use App\Ingredients\Sauce;
use App\PizzaSliceType;
use App\PizzaSize;
use ReflectionClass;
use ReflectionMethod;

/**
 * Class PizzaTest
 *
 * Test case for the Pizza class.
 */
class PizzaTest extends TestCase
{
    /**
     * Test that Pizza class is abstract.
     *
     * @return void
     */
    public function testPizzaIsAbstract(): void
    {
        $reflectionClass = new ReflectionClass(Pizza::class);

        // Assert that the Pizza class is abstract
        $this->assertTrue($reflectionClass->isAbstract());
    }

    /**
     * Test the correct types of Pizza class properties.
     *
     * @return void
     */
    public function testPizzaPropertiesHaveCorrectTypes(): void
    {
        // Use reflection to get the Pizza class properties
        $reflectionClass = new ReflectionClass(Pizza::class);
        $properties = $reflectionClass->getProperties();

        foreach ($properties as $property) {
            $propertyName = $property->getName();
            $propertyType = $property->getType()->getName();

            switch ($propertyName) {
                case 'name':
                case 'boxType':
                    $this->assertSame('string', $propertyType);
                    break;
                case 'sliceCount':
                    $this->assertSame('int', $propertyType);
                    break;
                case 'veggies':
                    $this->assertSame('array', $propertyType);
                    break;
                case 'size':
                    $this->assertSame(PizzaSize::class, $propertyType);
                    break;
                case 'dough':
                    $this->assertSame(Dough::class, $propertyType);
                    break;
                case 'sauce':
                    $this->assertSame(Sauce::class, $propertyType);
                    break;
                case 'cheese':
                    $this->assertSame(Cheese::class, $propertyType);
                    break;
                case 'pepperoni':
                    $this->assertSame(Pepperoni::class, $propertyType);
                    break;
                case 'clams':
                    $this->assertSame(Clams::class, $propertyType);
                    break;
                case 'sliceType':
                    $this->assertSame(PizzaSliceType::class, $propertyType);
                    break;
                default:
                    $this->fail("Property '$propertyName' wasn't tested.");
            }
        }
    }

    /**
     * Test the setSliceType() method of the Pizza class.
     *
     * @return void
     */
    public function testSetSliceType(): void
    {
        $pizza = $this->getMockForAbstractClass(Pizza::class);
        $sliceType = PizzaSliceType::DIAGONAL;

        // Set the slice type using the setSliceType() method
        $pizza->setSliceType($sliceType);

        // Use reflection to get the sliceType property value
        $reflectionClass = new ReflectionClass(Pizza::class);
        $reflectionProperty = $reflectionClass->getProperty('sliceType');
        $reflectionProperty->setAccessible(true);
        $propertyValue = $reflectionProperty->getValue($pizza);

        // Assert that the sliceType property is set correctly
        $this->assertSame($sliceType, $propertyValue);
    }

    /**
     * Test that prepare() method is abstract.
     *
     * @return void
     */
    public function testPrepareIsAbstract(): void
    {
        $reflectionMethod = new ReflectionMethod(Pizza::class, 'prepare');

        // Assert that the brew() method is abstract
        $this->assertTrue($reflectionMethod->isAbstract());
    }

    public function testBake(): void
    {
        $pizza = $this->getMockForAbstractClass(Pizza::class);

        // Capture the output of the bake() method
        ob_start();
        $pizza->bake();
        $output = ob_get_clean();

        // Assert that the output contains the expected bake message
        $this->assertStringContainsString('<h3 class="text-red-600">Bake for 25 minutes at 350</h3>', $output);
    }

    /**
     * Test the cut() method of the Pizza class.
     *
     * @return void
     */
    public function testCut(): void
    {
        $pizza = $this->getMockForAbstractClass(Pizza::class);

        // Set up test data
        $sliceCount = 8;
        $sliceType = PizzaSliceType::DIAGONAL;
        $expectedOutput = sprintf(
            '<h3>Cut the pizza into %s %s slices</h3>%s',
            $sliceCount,
            $sliceType->toString(),
            PHP_EOL
        );

        // Set the sliceCount and sliceType properties using reflection
        $reflectionClass = new ReflectionClass(Pizza::class);
        $sliceCountProperty = $reflectionClass->getProperty('sliceCount');
        $sliceCountProperty->setAccessible(true);
        $sliceCountProperty->setValue($pizza, $sliceCount);
        $sliceTypeProperty = $reflectionClass->getProperty('sliceType');
        $sliceTypeProperty->setAccessible(true);
        $sliceTypeProperty->setValue($pizza, $sliceType);

        // Capture the output of the cut() method
        ob_start();
        $pizza->cut();
        $output = ob_get_clean();

        // Assert that the output matches the expected output
        $this->assertSame($expectedOutput, $output);
    }

    /**
     * Test the box() method of the Pizza class.
     *
     * @return void
     */
    public function testBox(): void
    {
        $pizza = $this->getMockForAbstractClass(Pizza::class);

        // Set up test data
        $boxType = 'Test Box';
        $expectedOutput = sprintf(
            '<h3>Place pizza in %s box</h3>%s',
            $boxType,
            PHP_EOL
        );

        // Set the boxType property using reflection
        $reflectionClass = new ReflectionClass(Pizza::class);
        $boxTypeProperty = $reflectionClass->getProperty('boxType');
        $boxTypeProperty->setAccessible(true);
        $boxTypeProperty->setValue($pizza, $boxType);

        // Capture the output of the box() method
        ob_start();
        $pizza->box();
        $output = ob_get_clean();

        // Assert that the output matches the expected output
        $this->assertSame($expectedOutput, $output);
    }

    /**
     * Test the setSize method of the Pizza class.
     *
     * @return void
     */
    public function testSetSize(): void
    {
        $pizza = $this->getMockForAbstractClass(Pizza::class);
        $pizzaSize = PizzaSize::LARGE;

        // Use reflection to access the protected properties
        $reflectionClass = new ReflectionClass(Pizza::class);
        $boxTypeProperty = $reflectionClass->getProperty('boxType');
        $sliceCountProperty = $reflectionClass->getProperty('sliceCount');
        $sizeProperty = $reflectionClass->getProperty('size');

        // Make the protected properties accessible
        $boxTypeProperty->setAccessible(true);
        $sliceCountProperty->setAccessible(true);
        $sizeProperty->setAccessible(true);

        // Invoke the setSize method
        $setSizeMethod = $reflectionClass->getMethod('setSize');
        $setSizeMethod->invoke($pizza, $pizzaSize);

        // Assert the values of the protected properties
        $this->assertSame('official PizzaStore large', $boxTypeProperty->getValue($pizza));
        $this->assertSame(10, $sliceCountProperty->getValue($pizza));
        $this->assertSame($pizzaSize, $sizeProperty->getValue($pizza));
    }

    /**
     * Test the getSizeName() method of the Pizza class.
     *
     * @return void
     */
    public function testGetSizeName(): void
    {
        $pizza = $this->getMockForAbstractClass(Pizza::class);

        // Set up test data
        $size = PizzaSize::LARGE;
        $expectedSizeName = $size->toString();

        // Set the size property using reflection
        $reflectionClass = new ReflectionClass(Pizza::class);
        $sizeProperty = $reflectionClass->getProperty('size');
        $sizeProperty->setAccessible(true);
        $sizeProperty->setValue($pizza, $size);

        // Invoke the getSizeName() method using reflection
        $getSizeNameMethod = $reflectionClass->getMethod('getSizeName');
        $getSizeNameMethod->setAccessible(true);
        $sizeName = $getSizeNameMethod->invoke($pizza);

        // Assert that the returned size name matches the expected size name
        $this->assertSame($expectedSizeName, $sizeName);
    }

    /**
     * Test the setName() and getName() methods of the Pizza class.
     *
     * @return void
     */
    public function testSetNameAndGetName(): void
    {
        $pizza = $this->getMockForAbstractClass(Pizza::class);

        // Set up test data
        $name = 'Test Pizza';

        // Set the name property using reflection
        $reflectionClass = new ReflectionClass(Pizza::class);
        $nameProperty = $reflectionClass->getProperty('name');
        $nameProperty->setAccessible(true);

        // Set the name using the setName() method
        $pizza->setName($name);

        // Get the name using the getName() method
        $getNameMethod = $reflectionClass->getMethod('getName');
        $getNameMethod->setAccessible(true);
        $returnedName = $getNameMethod->invoke($pizza);

        // Assert that the returned name matches the expected name
        $this->assertSame($name, $returnedName);
    }
}