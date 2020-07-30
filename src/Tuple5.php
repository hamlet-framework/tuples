<?php

namespace Hamlet\Tuples;

/**
 * @psalm-immutable
 * @template T0
 * @template T1
 * @template T2
 * @template T3
 * @template T4
 * @extends Tuple4<T0,T1,T2,T3>
 */
class Tuple5 extends Tuple4
{
    /**
     * @var mixed
     * @psalm-var T4
     */
    private $_4;

    /**
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @param mixed $d
     * @param mixed $e
     * @psalm-param T0 $a
     * @psalm-param T1 $b
     * @psalm-param T2 $c
     * @psalm-param T3 $d
     * @psalm-param T4 $e
     */
    public function __construct($a, $b, $c, $d, $e)
    {
        parent::__construct($a, $b, $c, $d);
        $this->_4 = $e;
    }

    /**
     * @return mixed
     * @psalm-return T4
     */
    public function at4()
    {
        return $this->_4;
    }
}
