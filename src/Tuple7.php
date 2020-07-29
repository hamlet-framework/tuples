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
 * @extends Tuple6<T0,T1,T2,T3,T4,T5>
 */
class Tuple7 extends Tuple6
{
    /**
     * @var mixed
     * @psalm-var T6
     */
    private $_6;

    /**
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @param mixed $d
     * @param mixed $e
     * @param mixed $f
     * @param mixed $g
     * @psalm-param T0 $a
     * @psalm-param T1 $b
     * @psalm-param T2 $c
     * @psalm-param T3 $d
     * @psalm-param T4 $e
     * @psalm-param T5 $f
     * @psalm-param T6 $g
     */
    public function __construct($a, $b, $c, $d, $e, $f, $g)
    {
        parent::__construct($a, $b, $c, $d, $e, $f);
        $this->_6 = $g;
    }

    /**
     * @return mixed
     * @psalm-return T6
     */
    public function at6()
    {
        return $this->_6;
    }
}
