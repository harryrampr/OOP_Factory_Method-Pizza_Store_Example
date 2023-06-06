<?php
declare(strict_types=1);

namespace App\Ingredients;

/**
 * Represents frozen clam as a type of clam topping.
 */
class FrozenClam extends Clams
{
    /**
     * Constructs a new instance of FrozenClam.
     *
     * Sets the description of the clam topping to 'Frozen Clam' and calls the parent constructor.
     */
    public function __construct()
    {
        $this->description = 'Frozen Clam';
        parent::__construct();
    }
}