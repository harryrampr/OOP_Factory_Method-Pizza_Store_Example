<?php declare(strict_types=1);
require_once __DIR__ . '/../../vendor/autoload.php';

use App\CaliforniaPizzaStore;
use App\ChicagoPizzaStore;
use App\NYPizzaStore;
use App\PizzaSize;
use App\PizzaType;

/**
 * Simulation of a pizza store.
 */

echo '<h1>Pizza Store Simulation</h1>', PHP_EOL;

// Preparing Large New York Style Cheese Pizza
$storeNY = new NYPizzaStore();
$pizza = $storeNY->orderPizza(PizzaSize::LARGE, PizzaType::CHEESE);
echo sprintf('<h3 class="ordered">Ethan ordered a %s %s</h3>%s', $pizza->getSizeName(),
    $pizza->getName(), PHP_EOL);

// Preparing Medium Chicago Style Cheese Pizza
$storeChicago = new ChicagoPizzaStore();
$pizza = $storeChicago->orderPizza(PizzaSize::MEDIUM, PizzaType::CHEESE);
echo sprintf('<h3 class="ordered">Joel ordered a %s %s</h3>%s', $pizza->getSizeName(),
    $pizza->getName(), PHP_EOL);

// Preparing Personal California Style Veggie Pizza
$storeCalifornia = new CaliforniaPizzaStore();
$pizza = $storeCalifornia->orderPizza(PizzaSize::PERSONAL, PizzaType::VEGGIE);
echo sprintf('<h3 class="ordered">Lulu ordered a %s %s</h3>%s', $pizza->getSizeName(),
    $pizza->getName(), PHP_EOL);

// Preparing Small Chicago Style Pepperoni Pizza
$storeChicago = new ChicagoPizzaStore();
$pizza = $storeChicago->orderPizza(PizzaSize::SMALL, PizzaType::PEPPERONI);
echo sprintf('<h3 class="ordered">Raul ordered a %s %s</h3>%s', $pizza->getSizeName(),
    $pizza->getName(), PHP_EOL);

// Preparing X-large New York Style Clam Pizza
$storeNY = new NYPizzaStore();
$pizza = $storeNY->orderPizza(PizzaSize::XLARGE, PizzaType::CLAM);
echo sprintf('<h3 class="ordered">Tom ordered a %s %s</h3>%s', $pizza->getSizeName(),
    $pizza->getName(), PHP_EOL);