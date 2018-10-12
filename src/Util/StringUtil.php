<?php

/*
 * This file is part of the "PHP Enum" package.
 *
 * (c) Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Greeflas\Enum\Util;

/**
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 */
class StringUtil
{
    /**
     * This class should not be instantiated.
     */
    private function __construct()
    {
    }

    /**
     * Converts constant to human-readable value.
     *
     * @param string $value
     *
     * @return string
     */
    public static function humanize(string $value): string
    {
        return \ucfirst(\strtolower(\str_replace('_', ' ', $value)));
    }
}
