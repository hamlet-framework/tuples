<?php

namespace Hamlet\Tuples;

/**
 * @template T0
 * @template T1
 * @template T2
 * @template T3
 * @template T4
 * @template T5
 * @template T6
 * @template T7
 * @template T8
 * @extends Tuple8<T0,T1,T2,T3,T4,T5,T6,T7>
 */
class Tuple9 extends Tuple8
{
    /**
     * @var mixed
     * @psalm-var T8
     */
    private $_8;

    /**
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @param mixed $d
     * @param mixed $e
     * @param mixed $f
     * @param mixed $g
     * @param mixed $h
     * @param mixed $i
     * @psalm-param T0 $a
     * @psalm-param T1 $b
     * @psalm-param T2 $c
     * @psalm-param T3 $d
     * @psalm-param T4 $e
     * @psalm-param T5 $f
     * @psalm-param T6 $g
     * @psalm-param T7 $h
     * @psalm-param T8 $i
     */
    public function __construct($a, $b, $c, $d, $e, $f, $g, $h, $i)
    {
        parent::__construct($a, $b, $c, $d, $e, $f, $g, $h);
        $this->_8 = $i;
    }

    /**
     * @return mixed
     * @psalm-return T8
     */
    public function at8()
    {
        return $this->_8;
    }
}
