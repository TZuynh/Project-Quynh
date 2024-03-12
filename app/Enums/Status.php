<?php

namespace App\Enums;

enum Status: int
{
    case DISABLE = 0;
    case ENABLE = 1;

    /**
     * Get Label
     *
     * @return string
     */
    public function label(): string {
        return self::getLabel($this);
    }

    /**
     * Get static label value
     *
     * @param Status $value
     * @return string
     */
    public static function getLabel(self $value): string {
        return match ($value) {
            self::DISABLE => 'Disable',
            self::ENABLE => 'Enable',
        };
    }
}
