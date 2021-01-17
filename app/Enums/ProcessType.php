<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static ORDER()
 * @method static static INVOICE()
 * @method static static DELIVERY()
 */
final class ProcessType extends Enum
{
    public const ORDER = 'ORDER';
    public const INVOICE = 'INVOICE';
    public const DELIVERY = 'DELIVERY';
}
