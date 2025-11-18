<?php

declare(strict_types=1);

namespace Axelstx\OtusComposer;

class StringProcessor
{
    /**
     * @param string $string
     * @return int
     */
    public function getLength(string $string): int
    {
        return mb_strlen($string);
    }

    /**
     * @param string $string
     * @return bool
     */
    public function isLower(string $string): bool
    {
        return mb_strtolower($string, mb_detect_encoding($string, 'auto')) === $string;

    }

    /**
     * @param string $string
     * @return bool
     */
    public function isUpper(string $string): bool
    {
        return mb_strtoupper($string, mb_detect_encoding($string, 'auto')) === $string;
    }
}