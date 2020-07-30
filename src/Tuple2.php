<?php

namespace Hamlet\Tuples;

/**
 * @psalm-immutable
 * @template T0
 * @template T1
 * @extends Tuple1<T0>
 */
class Tuple2 extends Tuple1
{
    /**
     * @var mixed
     * @psalm-var T1
     */
    private $_1;

    /**
     * @param mixed $a
     * @param mixed $b
     * @psalm-param T0 $a
     * @psalm-param T1 $b
     */
    public function __construct($a, $b)
    {
        parent::__construct($a);
        $this->_1 = $b;
    }

    /**
     * @return mixed
     * @psalm-return T1
     */
    public function at1()
    {
        return $this->_1;
    }
}
