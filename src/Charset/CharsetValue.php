<?php
/**
 *
 * This file is part of Aura for PHP.
 *
 * @package Aura.Accept
 *
 * @license http://opensource.org/licenses/bsd-license.php BSD
 *
 */
namespace Aura\Accept\Charset;

use Aura\Accept\AbstractValue;

/**
 *
 * Represents an acceptable charset value.
 *
 * @package Aura.Accept
 *
 */
class CharsetValue extends AbstractValue
{
    /**
     *
     * Checks if an available charset value matches this acceptable value.
     *
     * @param Charset $avail An available charset value.
     *
     * @return True on a match, false if not.
     *
     */
    public function match(CharsetValue $avail)
    {
        return strtolower($this->value) == strtolower($avail->getValue())
            && $this->matchParameters($avail);
    }
}
