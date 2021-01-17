<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static PENDING()
 * @method static static WAITING()
 * @method static static CANCELED()
 * @method static static COMPLETED()
 */
final class Status extends Enum
{
    public const PENDING = 'PENDING';
    public const WAITING = 'WAITING';
    public const CANCELED = 'CANCELED';
    public const COMPLETED = 'COMPLETED';
}
