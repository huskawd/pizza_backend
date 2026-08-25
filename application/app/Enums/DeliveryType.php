<?php

namespace App\Enums;

enum DeliveryType: string
{
    case COURIER = 'courier';
    case PICKUP = 'pickup';
}
