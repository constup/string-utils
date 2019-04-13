<?php

declare(strict_types=1);

namespace Constup\StringUtils;

/**
 * Class GeneralStringUtil
 *
 * @package Constup\StringUtils
 */
class GeneralStringUtil
{
    /**
     * @param string $source_string
     * @param bool $capitalize_first_character
     * @return string
     */
    public static function snakeToCamel(string $source_string, bool $capitalize_first_character =  false): string
    {
        $result = str_replace('_', '', ucwords($source_string, '_'));

        return $capitalize_first_character
            ? $result
            : lcfirst($result);
    }
}
