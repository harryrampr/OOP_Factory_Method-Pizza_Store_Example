<?php

namespace Tests\Ingredients;

use App\Ingredients\EggPlant;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionProperty;

/**
 * Class EggPlantTest
 *
 * @covers \EggPlant
 */
class EggPlantTest extends TestCase
{
    /**
     * @covers \EggPlant
     */
    public function testClassIsNotChanged(): void
    {
        $reflectionClass = new ReflectionClass(EggPlant::class);

        $this->assertFalse($reflectionClass->isAbstract());
        $this->assertEmpty($reflectionClass->getTraits());
        $this->assertEmpty($reflectionClass->getInterfaces());
        $this->assertSame('Veggies', basename($reflectionClass->getParentClass()->getName()));
    }

    /**
     * @covers \EggPlant::__construct
     * @covers \Veggies::__construct
     */
    public function testEggPlantConstructor(): void
    {
        $eggPlant = new EggPlant();

        $reflectionClass = new ReflectionClass(EggPlant::class);
        $descriptionProperty = $reflectionClass->getProperty('description');
        $descriptionProperty->setAccessible(true);

        $this->assertSame('Egg Plant', $descriptionProperty->getValue($eggPlant));
    }

    /**
     * @covers \EggPlant::$description
     */
    public function testDescriptionPropertyType(): void
    {
        $reflectionProperty = new ReflectionProperty(EggPlant::class, 'description');
        $type = $reflectionProperty->getType();

        $this->assertInstanceOf(\ReflectionNamedType::class, $type);
        $this->assertSame('string', $type->getName());
        $this->assertFalse($type->allowsNull());
    }
}