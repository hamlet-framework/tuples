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
 * @extends Tuple7<T0,T1,T2,T3,T4,T5,T6>
 */
class Tuple8 extends Tuple7
{
    /**
     * @var mixed
     * @psalm-var T7
     */
    private $_7;

    /**
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @param mixed $d
     * @param mixed $e
     * @param mixed $f
     * @param mixed $g
     * @param mixed $h
     * @psalm-param T0 $a
     * @psalm-param T1 $b
     * @psalm-param T2 $c
     * @psalm-param T3 $d
     * @psalm-param T4 $e
     * @psalm-param T5 $f
     * @psalm-param T6 $g
     * @psalm-param T7 $h
     */
    public function __construct($a, $b, $c, $d, $e, $f, $g, $h)
    {
        parent::__construct($a, $b, $c, $d, $e, $f, $g);
        $this->_7 = $h;
    }

    /**
     * @return mixed
     * @psalm-return T7
     */
    public function at7()
    {
        return $this->_7;
    }
}
