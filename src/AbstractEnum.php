<?php

/*
 * This file is part of the "PHP Enum" package.
 *
 * (c) Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Greeflas\Enum;

use Greeflas\Enum\Util\StringUtil;

/**
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 */
abstract class AbstractEnum implements \IteratorAggregate
{
    /**
     * Cache for class constants.
     *
     * @var array
     */
    private static $cache = [];

    /**
     * Gets label for needed value.
     *
     * @param int|string $neededValue
     *
     * @return string
     */
    public static function getLabel($neededValue): string
    {
        foreach (self::getConstants() as $name => $value) {
            if ($neededValue == $value) {
                return StringUtil::humanize($name);
            }
        }

        throw new \RuntimeException(
            \sprintf('Not found value "%d" in "%s" enumerator', $neededValue, static::class)
        );
    }

    /**
     * Gets iterator for enum values and labels.
     *
     * @return iterable
     */
    public function getIterator(): iterable
    {
        foreach (self::getConstants() as $name => $value) {
            yield StringUtil::humanize($name) => $value;
        }
    }

    /**
     * Gets all constants from class.
     *
     * @return array
     */
    private static function getConstants(): array
    {
        if (!isset(self::$cache[static::class])) {
            self::$cache[static::class] = new \ReflectionClass(static::class);
        }

        return self::$cache[static::class]->getConstants();
    }
}
