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

class DeliveryStatus extends AbstractEnum
{
    public const IN_STOCK = 1;
    public const IN_THE_ROAD = 2;
    public const IN_DEPARTMENT = 3;
}
