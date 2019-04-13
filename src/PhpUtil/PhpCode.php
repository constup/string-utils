<?php

declare(strict_types=1);

namespace Constup\StringUtils\PhpUtil;

use Constup\StringUtils\General;

/**
 * Class PhpCode
 *
 * @package Constup\StringUtils\PhpUtil
 */
class PhpCode
{
    /**
     * @param string $source_string
     * @return string
     */
    public static function extractNamespaceFromFQN(string $source_string): string
    {
        return preg_replace('#\\\\[^\\\\]*$#', '', $source_string);
    }

    /**
     * @param string $source_string
     * @return string
     */
    public static function extractNameFromFQN(string $source_string): string
    {
        return end(explode('\\', $source_string));
    }

    /**
     * @param string $source_string
     * @return string
     */
    public static function generateGetterNameFromPropertyName(string $source_string): string
    {
        return  'get' . General::snakeToCamel($source_string, true);
    }

    /**
     * @param string $source_string
     * @return string
     */
    public static function generateSetterNameFromPropertyName(string $source_string): string
    {
        return 'set' . General::snakeToCamel($source_string, true);
    }
}
