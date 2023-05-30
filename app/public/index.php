<?php declare(strict_types=1);
require_once __DIR__ . '/../../vendor/autoload.php';

use App\CaliforniaPizzaStore;
use App\ChicagoPizzaStore;
use App\NYPizzaStore;
use App\PizzaSize;
use App\PizzaType;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>OPP Factory Method - Pizza Store Example</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
            href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap"
            rel="stylesheet" />
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <script src="https://cdn.tailwindcss.com/3.3.0"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                fontFamily: {
                    sans: ["Roboto", "sans-serif"],
                    body: ["Roboto", "sans-serif"],
                    mono: ["ui-monospace", "monospace"],
                },
            },
            corePlugins: {
                preflight: false,
            },
        };
    </script>
</head>
<body>
<div class="container m-6">
<?php
$storeNY = new NYPizzaStore();
$pizza = $storeNY->orderPizza(PizzaSize::LARGE, PizzaType::CHEESE);
echo sprintf('<h3 class="mt-2 mb-7 text-blue-800">Ethan ordered a %s %s</h3>%s', $pizza->getSizeName(),
    $pizza->getName(), PHP_EOL);


$storeChicago = new ChicagoPizzaStore();
$pizza = $storeChicago->orderPizza(PizzaSize::MEDIUM, PizzaType::CHEESE);
echo sprintf('<h3 class="mt-2 mb-7 text-blue-800">Joel ordered a %s %s</h3>%s', $pizza->getSizeName(),
    $pizza->getName(), PHP_EOL);


$storeCalifornia = new CaliforniaPizzaStore();
$pizza = $storeCalifornia->orderPizza(PizzaSize::PERSONAL, PizzaType::VEGGIE);
echo sprintf('<h3 class="mt-2 mb-7 text-blue-800">Lulu ordered a %s %s</h3>%s', $pizza->getSizeName(),
    $pizza->getName(), PHP_EOL);


$storeChicago = new ChicagoPizzaStore();
$pizza = $storeChicago->orderPizza(PizzaSize::SMALL, PizzaType::PEPPERONI);
echo sprintf('<h3 class="mt-2 mb-7 text-blue-800">Raul ordered a %s %s</h3>%s', $pizza->getSizeName(),
    $pizza->getName(), PHP_EOL);


$storeNY = new NYPizzaStore();
$pizza = $storeNY->orderPizza(PizzaSize::XLARGE, PizzaType::CLAM);
echo sprintf('<h3 class="mt-2 mb-7 text-blue-800">Tom ordered a %s %s</h3>%s', $pizza->getSizeName(),
    $pizza->getName(), PHP_EOL);?>
</div>
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
</body>
</html>