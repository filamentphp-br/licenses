<?php

namespace App\Enums;

use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum PackageType: string implements HasIcon, HasLabel
{
    case Composer = 'composer';
    case Github = 'github';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Composer => 'Composer',
            self::Github => 'GitHub',
        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::Composer => 'heroicon-o-archive-box',
            self::Github => 'icon-github',
        };
    }

    public static function of(int|string|self $value): static
    {
        return self::tryFrom($value instanceof self ? $value->value : $value);
    }
}
