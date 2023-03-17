<?php

declare(strict_types=1);

namespace App\Enum;

enum ReceiptStatus: string
{
    case ACTIVE = 'active';
    case CLOSED = 'closed';
    case BLOCKED = 'blocked';

    public static function all(): array
    {
        return [
            self::ACTIVE->value,
            self::CLOSED->value,
            self::BLOCKED->value,
        ];
    }
}
