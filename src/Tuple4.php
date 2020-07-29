<?php

namespace Hamlet\Tuples;

/**
 * @template T0
 * @template T1
 * @template T2
 * @template T3
 * @extends Tuple3<T0,T1,T2>
 */
class Tuple4 extends Tuple3
{
    /**
     * @var mixed
     * @psalm-var T3
     */
    private $_3;

    /**
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @param mixed $d
     * @psalm-param T0 $a
     * @psalm-param T1 $b
     * @psalm-param T2 $c
     * @psalm-param T3 $d
     */
    public function __construct($a, $b, $c, $d)
    {
        parent::__construct($a, $b, $c);
        $this->_3 = $d;
    }

    /**
     * @return mixed
     * @psalm-return T3
     */
    public function at3()
    {
        return $this->_3;
    }
}
