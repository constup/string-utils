<?php

declare(strict_types=1);

namespace Constup\StringUtils\PhpUtil;

use Constup\StringUtils\GeneralStringUtil;

/**
 * Class PhpCodeStringUtil
 *
 * @package Constup\StringUtils\PhpUtil
 */
class PhpCodeStringUtil
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
        return  'get' . GeneralStringUtil::snakeToCamel($source_string, true);
    }

    /**
     * @param string $source_string
     * @return string
     */
    public static function generateSetterNameFromPropertyName(string $source_string): string
    {
        return 'set' . GeneralStringUtil::snakeToCamel($source_string, true);
    }

    /**
     * @param string $source_string
     * @return string
     */
    public static function generateWitherNameFromPropertyName(string $source_string): string
    {
        return 'with' . GeneralStringUtil::snakeToCamel($source_string, true);
    }
}
