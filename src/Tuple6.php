<?php

namespace Hamlet\Tuples;

/**
 * @template T0
 * @template T1
 * @template T2
 * @template T3
 * @template T4
 * @template T5
 * @extends Tuple5<T0,T1,T2,T3,T4>
 */
class Tuple6 extends Tuple5
{
    /**
     * @var mixed
     * @psalm-var T5
     */
    private $_5;

    /**
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @param mixed $d
     * @param mixed $e
     * @param mixed $f
     * @psalm-param T0 $a
     * @psalm-param T1 $b
     * @psalm-param T2 $c
     * @psalm-param T3 $d
     * @psalm-param T4 $e
     * @psalm-param T5 $f
     */
    public function __construct($a, $b, $c, $d, $e, $f)
    {
        parent::__construct($a, $b, $c, $d, $e);
        $this->_5 = $f;
    }

    /**
     * @return mixed
     * @psalm-return T5
     */
    public function at5()
    {
        return $this->_5;
    }
}
