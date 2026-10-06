<?php

declare(strict_types=1);

namespace App\Flyweight;

final class CharacterStyle
{
    public function __construct(public readonly string $font, public readonly int $size)
    {
    }
}

final class StyleFactory
{
    /** @var array<string, CharacterStyle> */
    private array $styles = [];

    public function style(string $font, int $size): CharacterStyle
    {
        $key = $font . ':' . $size;
        return $this->styles[$key] ??= new CharacterStyle($font, $size);
    }
}

final class TextCharacter
{
    public function __construct(
        public readonly string $value,
        public readonly CharacterStyle $style,
    ) {
    }
}
