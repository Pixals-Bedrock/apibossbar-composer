<?php

namespace xenialdan\apibossbar;

use pocketmine\network\mcpe\protocol\types\BossBarColor;

class BarColor
{
    const PINK = BossBarColor::PINK;
    const BLUE = BossBarColor::BLUE;
    const RED = BossBarColor::RED;
    const GREEN = BossBarColor::GREEN;
    const YELLOW = BossBarColor::YELLOW;
    const PURPLE = BossBarColor::PURPLE;
    const REBECCA_PURPLE = BossBarColor::REBECCA_PURPLE;
    const WHITE = BossBarColor::WHITE;

    /** @var string[] */
    public static array $colorNames = [
        self::PINK => "pink",
        self::BLUE => "blue",
        self::RED => "red",
        self::GREEN => "green",
        self::YELLOW => "yellow",
        self::PURPLE => "purple",
        self::REBECCA_PURPLE => "rebecca_purple",
        self::WHITE => "white",
    ];

    /**
     * Get all available boss bar colors.
     *
     * @return int[]
     */
    public static function getColors(): array
    {
        return array_keys(self::$colorNames);
    }

    /**
     * Get color constant by color name.
     *
     * @param string $colorName
     * @return int
     * @throws \InvalidArgumentException
     */
    public static function getColorByName(string $colorName): int
    {
        $colorNameLower = strtolower($colorName);
        foreach (self::$colorNames as $color => $name) {
            if ($colorNameLower === strtolower($name)) {
                return $color;
            }
        }
        throw new \InvalidArgumentException("Invalid color name specified: " . $colorName);
    }
}
