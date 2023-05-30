<?php declare(strict_types=1);
require_once __DIR__ . '/../../vendor/autoload.php';

use App\CaliforniaPizzaStore;
use App\ChicagoPizzaStore;
use App\NYPizzaStore;
use App\PizzaSize;
use App\PizzaType;


$storeNY = new NYPizzaStore();
$pizza = $storeNY->orderPizza(PizzaSize::LARGE, PizzaType::CHEESE);
echo sprintf('Ethan ordered a %s %s%s', $pizza->getSizeName(),
    $pizza->getName(), PHP_EOL);


$storeChicago = new ChicagoPizzaStore();
$pizza = $storeChicago->orderPizza(PizzaSize::MEDIUM, PizzaType::CHEESE);
echo sprintf('Joel ordered a %s %s%s', $pizza->getSizeName(),
    $pizza->getName(), PHP_EOL);


$storeCalifornia = new CaliforniaPizzaStore();
$pizza = $storeCalifornia->orderPizza(PizzaSize::PERSONAL, PizzaType::VEGGIE);
echo sprintf('Lulu ordered a %s %s%s', $pizza->getSizeName(),
    $pizza->getName(), PHP_EOL);


$storeChicago = new ChicagoPizzaStore();
$pizza = $storeChicago->orderPizza(PizzaSize::SMALL, PizzaType::PEPPERONI);
echo sprintf('Raul ordered a %s %s%s', $pizza->getSizeName(),
    $pizza->getName(), PHP_EOL);


$storeNY = new NYPizzaStore();
$pizza = $storeNY->orderPizza(PizzaSize::XLARGE, PizzaType::CLAM);
echo sprintf('Tom ordered a %s %s%s', $pizza->getSizeName(),
    $pizza->getName(), PHP_EOL);