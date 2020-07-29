<?php

namespace Hamlet\Tuples;

/**
 * @template T0
 */
class Tuple1 extends Tuple
{
    /**
     * @var mixed
     * @psalm-var T0
     */
    private $_0;

    /**
     * @param mixed $a
     * @psalm-param T0 $a
     */
    public function __construct($a)
    {
        $this->_0 = $a;
    }

    /**
     * @return mixed
     * @psalm-return T0
     */
    public function at0()
    {
        return $this->_0;
    }
}
