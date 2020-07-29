<?php

namespace Hamlet\Tuples;

/**
 * @template T0
 * @template T1
 * @template T2
 * @extends Tuple2<T0,T1>
 */
class Tuple3 extends Tuple2
{
    /**
     * @var mixed
     * @psalm-var T2
     */
    private $_2;

    /**
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @psalm-param T0 $a
     * @psalm-param T1 $b
     * @psalm-param T2 $c
     */
    public function __construct($a, $b, $c)
    {
        parent::__construct($a, $b);
        $this->_2 = $c;
    }

    /**
     * @return mixed
     * @psalm-return T2
     */
    public function at2()
    {
        return $this->_2;
    }
}
