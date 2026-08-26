<?php

namespace App\Exceptions;

use RuntimeException;

class EmptyBasketException extends RuntimeException
{
    public function __construct()
    {
        parent::__construct(
            message: 'Basket is empty'
        );
    }
}
